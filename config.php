<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Site Configuration — Emmanuel Asituha Portfolio
|--------------------------------------------------------------------------
*/

/* ---------------------------------------------------------------------
   Auto-detect the base URL (works on XAMPP and production)
--------------------------------------------------------------------- */

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    ? 'https'
    : 'http';

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

/*
| Script directory auto-detection.
|
| If the site lives at:
|   http://localhost/portfolio/index.php
| the base path should be: /portfolio
|
| If it lives at:
|   https://example.com/index.php
| the base path should be: (empty)
*/
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));

// Normalize: remove trailing slash unless it's the root
$scriptDir = rtrim($scriptDir, '/');

// Root installs should resolve to '' rather than '/'
if ($scriptDir === '/' || $scriptDir === '.') {
    $scriptDir = '';
}

$baseUrl = $scheme . '://' . $host . $scriptDir;


/* ---------------------------------------------------------------------
   Site config
--------------------------------------------------------------------- */

return [

    /* -----------------------------------------------------------------
       Base URL — used by url() and asset() helpers
    ----------------------------------------------------------------- */
    'base_url' => $baseUrl,


    /* -----------------------------------------------------------------
       Personal
    ----------------------------------------------------------------- */
    'name'      => 'Emmanuel Asituha',
    'initials'  => 'EA',
    'role'      => 'Cybersecurity • Development • IT • Research',
    'location'  => 'Kenya',
    'available' => 'Available for professional conversations',


    /* -----------------------------------------------------------------
       Contact channels
    ----------------------------------------------------------------- */
    'channels' => [

        'email' => [
            'label'    => 'Email',
            'value'    => 'emmanuelasituha@gmail.com',
            'href'     => 'emmanuelasituha@gmail.com',
            'icon'     => 'fa-envelope',
            'brand'    => 'fa-solid',
            'note'     => 'Best for detailed enquiries',
        ],

        'phone' => [
            'label'    => 'Phone',
            'value'    => '+254 701 119 9139',
            'href'     => 'tel:+254701197139',
            'icon'     => 'fa-phone',
            'brand'    => 'fa-solid',
            'note'     => 'Mon–Fri, 9:00–17:00 EAT',
        ],

        'whatsapp' => [
            'label'    => 'WhatsApp',
            'value'    => 'Chat on WhatsApp',
            'href'     => 'https://wa.me/254701197139',
            'icon'     => 'fa-whatsapp',
            'brand'    => 'fa-brands',
            'note'     => 'Quick questions welcome',
            'external' => true,
        ],

        'linkedin' => [
            'label'    => 'LinkedIn',
            'value'    => 'in/emmanuel-asituha',
            'href'     => 'https://linkedin.com/in/emmanuel-asituha',
            'icon'     => 'fa-linkedin-in',
            'brand'    => 'fa-brands',
            'note'     => 'Professional network',
            'external' => true,
        ],

        'github' => [
            'label'    => 'GitHub',
            'value'    => '@jeastco',
            'href'     => 'https://github.com/Jeastco',
            'icon'     => 'fa-github',
            'brand'    => 'fa-brands',
            'note'     => 'Code & projects',
            'external' => true,
        ],

        'credly' => [
            'label'    => 'Credly',
            'value'    => 'Verified credentials',
            'href'     => 'https://www.credly.com/users/emmanuel-asituha1/badges/credly',
            'icon'     => 'fa-certificate',
            'brand'    => 'fa-solid',
            'note'     => 'Badges & certifications',
            'external' => true,
        ],

    ],


    /* -----------------------------------------------------------------
       Enquiry subjects
    ----------------------------------------------------------------- */
    'enquiry_subjects' => [
        'professional-opportunity' => 'Professional Opportunity',
        'cybersecurity'            => 'Cybersecurity',
        'software-development'     => 'Software Development',
        'data-ai'                  => 'Data & AI',
        'research'                 => 'Research Collaboration',
        'infrastructure'           => 'IT Infrastructure',
        'pigmaster'                => 'PigMaster',
        'sar-sec'                  => 'SAR-Sec Research',
        'other'                    => 'General Enquiry',
    ],


    /* -----------------------------------------------------------------
       FAQ
    ----------------------------------------------------------------- */
    'faqs' => [
        [
            'q' => 'What kinds of opportunities can I contact you about?',
            'a' => 'Professional opportunities, cybersecurity, software development, IT infrastructure, Data & AI, research collaboration and technology projects.',
        ],
        [
            'q' => 'Can I contact you about research collaboration?',
            'a' => 'Yes — especially cybersecurity, FANETs, network security, authentication, cryptography and simulation.',
        ],
        [
            'q' => 'Can I discuss software-development projects with you?',
            'a' => 'Yes. Web applications, Python, Django, PHP, databases, automation, secure design and AI integration.',
        ],
        [
            'q' => 'Can I send confidential information through this form?',
            'a' => 'No. Never submit passwords, private keys, credentials or confidential records through this form.',
        ],
    ],


    /* -----------------------------------------------------------------
       Email delivery
    ----------------------------------------------------------------- */
    'mail' => [
        'recipient' => 'emmanuelasituha@gmail.com',
        'from'      => 'emmanuelsecureict@gmail.com',
        'from_name' => 'Emmanuel Asituha Portfolio',
    ],

];