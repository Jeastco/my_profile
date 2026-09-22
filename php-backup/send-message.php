<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Secure Contact Form Handler
|--------------------------------------------------------------------------
*/

ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL);

$config = require __DIR__ . '/config.php';

header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: camera=(), microphone=(), geolocation=()');


/* Session */
$isHttps = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';

session_set_cookie_params([
    'lifetime' => 0,
    'path'     => '/',
    'secure'   => $isHttps,
    'httponly' => true,
    'samesite' => 'Strict',
]);

session_start();


/* Helper */
function respond(int $code, bool $ok, string $msg): never
{
    http_response_code($code);
    echo json_encode(
        ['success' => $ok, 'message' => $msg],
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
    );
    exit;
}


/* Method */
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    respond(405, false, 'Method not allowed.');
}


/* Size */
$length = isset($_SERVER['CONTENT_LENGTH']) ? (int) $_SERVER['CONTENT_LENGTH'] : 0;
if ($length > 20000) {
    respond(413, false, 'The submitted request is too large.');
}


/* CSRF */
$submitted = (string) ($_POST['csrf_token'] ?? '');
$expected  = (string) ($_SESSION['csrf_token'] ?? '');

if (
    $submitted === '' ||
    $expected === '' ||
    !hash_equals($expected, $submitted)
) {
    respond(403, false, 'Your session has expired. Refresh the page and try again.');
}


/* Honeypot */
if (trim((string) ($_POST['website'] ?? '')) !== '') {
    respond(200, true, 'Thank you. Your message has been received.');
}


/* Rate limit — 5 per 15 min per IP */
$ip     = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$dir    = __DIR__ . '/storage/rate_limits';
$now    = time();
$window = 900;
$max    = 5;

if (!is_dir($dir) && !mkdir($dir, 0750, true) && !is_dir($dir)) {
    error_log('Contact: cannot create rate-limit directory.');
    respond(500, false, 'Unable to process your message at this time.');
}

$file     = $dir . '/' . hash('sha256', $ip) . '.json';
$attempts = [];

if (is_file($file)) {
    $raw = file_get_contents($file);
    if ($raw !== false) {
        $decoded = json_decode($raw, true);
        if (is_array($decoded)) {
            $attempts = array_filter(
                $decoded,
                fn($ts) => is_int($ts) && ($now - $ts) < $window
            );
        }
    }
}

if (count($attempts) >= $max) {
    respond(429, false, 'Too many messages submitted. Please try again later.');
}

$attempts[] = $now;
file_put_contents($file, json_encode(array_values($attempts)), LOCK_EX);


/* Cleaners */
function cleanText(mixed $v, int $max): string
{
    if (!is_string($v)) return '';
    $v = str_replace("\0", '', trim($v));
    $v = preg_replace('/[ \t]+/u', ' ', $v) ?? '';
    return mb_substr($v, 0, $max, 'UTF-8');
}

function cleanMultiline(mixed $v, int $max): string
{
    if (!is_string($v)) return '';
    $v = str_replace("\0", '', trim($v));
    $v = str_replace(["\r\n", "\r"], "\n", $v);
    return mb_substr($v, 0, $max, 'UTF-8');
}


/* Collect */
$name         = cleanText($_POST['name'] ?? '', 100);
$email        = cleanText($_POST['email'] ?? '', 150);
$organization = cleanText($_POST['organization'] ?? '', 150);
$subject      = cleanText($_POST['subject'] ?? '', 60);
$message      = cleanMultiline($_POST['message'] ?? '', 1500);


/* Validate */
if (mb_strlen($name, 'UTF-8') < 2 || preg_match('/[\r\n]/', $name)) {
    respond(422, false, 'Please enter your full name.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || preg_match('/[\r\n]/', $email)) {
    respond(422, false, 'Please enter a valid email address.');
}

if (!array_key_exists($subject, $config['enquiry_subjects'])) {
    respond(422, false, 'Please select a valid enquiry type.');
}

$subjectLabel = $config['enquiry_subjects'][$subject];
$msgLength    = mb_strlen($message, 'UTF-8');

if ($msgLength < 10) {
    respond(422, false, 'Please provide a little more detail in your message.');
}

if ($msgLength > 1500) {
    respond(422, false, 'Your message is too long.');
}

$urlCount = preg_match_all('~https?://|www\.~i', $message);
if (is_int($urlCount) && $urlCount > 4) {
    respond(422, false, 'Your message contains too many links.');
}


/* Mail */
$recipient = $config['mail']['recipient'];
$fromEmail = $config['mail']['from'];
$fromName  = $config['mail']['from_name'];

if ($recipient === '' || $fromEmail === '') {
    error_log('Contact: mail config missing.');
    respond(500, false, 'The contact service is not configured yet.');
}

$emailSubject = '[Portfolio] ' . $subjectLabel;

$body =
    "New portfolio enquiry\n" .
    "============================\n\n" .
    "Name: {$name}\n" .
    "Email: {$email}\n" .
    "Organization: " . ($organization !== '' ? $organization : 'Not provided') . "\n" .
    "Enquiry Type: {$subjectLabel}\n\n" .
    "Message\n----------------------------\n{$message}\n\n" .
    "----------------------------\n" .
    "Submitted: " . gmdate('Y-m-d H:i:s') . " UTC\n";

$headers = [
    "From: {$fromName} <{$fromEmail}>",
    "Reply-To: {$email}",
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion(),
];

$sent = mail(
    $recipient,
    $emailSubject,
    $body,
    implode("\r\n", $headers)
);

if (!$sent) {
    error_log('Contact: mail() failed.');
    respond(500, false, 'Your message could not be sent. Please try again later.');
}


/* Rotate CSRF */
unset($_SESSION['csrf_token']);


/* Success */
respond(200, true, 'Thank you. Your message has been sent successfully.');