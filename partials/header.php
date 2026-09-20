<?php
declare(strict_types=1);

/* =====================================================================
   Bootstrap
   ===================================================================== */

if (!isset($config) || !is_array($config)) {
    $config = require __DIR__ . '/../config.php';
}

require_once __DIR__ . '/functions.php';

/*
 * Expose the base URL to url() and asset() helpers.
 * This avoids the need for a global constant and works in any
 * directory structure (XAMPP subfolder, production root, subdomain).
 */
$GLOBALS['__site_base_url'] = $config['base_url'] ?? '';


/* =====================================================================
   Page defaults — pages may override by setting $page BEFORE require
   ===================================================================== */

$page = array_merge([
    'title'       => '',
    'description' => '',
    'slug'        => '',
    'body_class'  => '',
    'og_image'    => 'assets/images/og-default.jpg',
    'canonical'   => null,
    'robots'      => 'index, follow',
    'css'         => [],
    'scripts'     => [],
], $page ?? []);


/* =====================================================================
   Derived values
   ===================================================================== */

$siteName  = $config['name'] ?? 'Portfolio';
$siteUrl   = rtrim($config['base_url'] ?? '', '/');
$firstName = explode(' ', trim($siteName))[0];
$lastName  = explode(' ', trim($siteName))[1] ?? '';

$fullTitle = $page['title'] !== ''
    ? $page['title'] . ' | ' . $siteName
    : $siteName;

$canonical = $page['canonical']
    ?? $siteUrl . '/'
        . ($page['slug'] !== '' && $page['slug'] !== 'home'
            ? $page['slug'] . '.php'
            : ''
        );


/* =====================================================================
   Primary navigation
   ===================================================================== */

$navItems = [
    ['slug' => 'home',        'label' => 'Home',        'href' => 'index.php'],
    ['slug' => 'about',       'label' => 'About',       'href' => 'about.php'],
    ['slug' => 'expertise',   'label' => 'Expertise',   'href' => 'expertise.php'],
    ['slug' => 'experience',  'label' => 'Experience',  'href' => 'experience.php'],
    ['slug' => 'projects',    'label' => 'Projects',    'href' => 'projects.php'],
    ['slug' => 'research',    'label' => 'Research',    'href' => 'research.php'],
    ['slug' => 'blog',        'label' => 'Insights',    'href' => 'blog.php'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= e($fullTitle) ?></title>

    <meta name="description" content="<?= e($page['description']) ?>">

    <meta name="author" content="<?= e($siteName) ?>">

    <meta name="robots" content="<?= e($page['robots']) ?>">

    <meta name="theme-color" content="#ffffff">

    <link rel="canonical" href="<?= e($canonical) ?>">


    <!-- Open Graph -->
    <meta property="og:type" content="website">

    <meta property="og:url" content="<?= e($canonical) ?>">

    <meta property="og:site_name" content="<?= e($siteName) ?>">

    <meta property="og:title" content="<?= e($fullTitle) ?>">

    <meta property="og:description" content="<?= e($page['description']) ?>">

    <meta property="og:image" content="<?= e(url($page['og_image'])) ?>">

    <meta property="og:locale" content="en_US">


    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="<?= e($fullTitle) ?>">

    <meta name="twitter:description" content="<?= e($page['description']) ?>">

    <meta name="twitter:image" content="<?= e(url($page['og_image'])) ?>">


    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >


    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        referrerpolicy="no-referrer"
    >


    <!-- Base site styles -->
    <link rel="stylesheet" href="<?= e(asset('assets/css/style.css')) ?>">


    <!-- Page-specific styles -->
    <?php foreach ((array) $page['css'] as $cssFile): ?>

        <link rel="stylesheet" href="<?= e(asset($cssFile)) ?>">

    <?php endforeach; ?>


    <!-- Structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": <?= json_encode($siteName, JSON_UNESCAPED_SLASHES) ?>,
        "url": <?= json_encode($siteUrl, JSON_UNESCAPED_SLASHES) ?>,
        "jobTitle": "Cybersecurity Professional, Software Developer & Researcher",
        "sameAs": [
            <?= json_encode($config['channels']['linkedin']['href'] ?? '', JSON_UNESCAPED_SLASHES) ?>,
            <?= json_encode($config['channels']['github']['href']   ?? '', JSON_UNESCAPED_SLASHES) ?>
        ]
    }
    </script>

</head>


<body class="<?= e($page['body_class']) ?>">


<a class="skip-link" href="#main-content">Skip to main content</a>


<!-- =========================================================
     NAVIGATION
========================================================= -->

<header class="navbar" id="site-navbar">

    <div class="nav-container">

        <a
            href="<?= e(url('index.php')) ?>"
            class="logo"
            aria-label="<?= e($siteName) ?> — Homepage"
        >

            <span class="logo-mark" aria-hidden="true">
                <?= e($config['initials'] ?? 'EA') ?>
            </span>

            <span class="logo-name">
                <?= e($firstName) ?>
                <strong><?= e($lastName) ?></strong>
            </span>

        </a>


        <nav
            class="nav-links"
            id="main-navigation"
            aria-label="Main navigation"
        >

            <?php foreach ($navItems as $item): ?>

                <a
                    href="<?= e(url($item['href'])) ?>"
                    class="nav-link <?= e(is_current($item['slug'], $page['slug'])) ?>"
                    <?= $item['slug'] === $page['slug'] ? 'aria-current="page"' : '' ?>
                >
                    <?= e($item['label']) ?>
                </a>

            <?php endforeach; ?>


            <a href="<?= e(url('contact.php')) ?>" class="btn btn-primary">
                Let's Talk
            </a>

        </nav>


        <button
            class="menu-toggle"
            type="button"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="main-navigation"
        >
            <span></span><span></span><span></span>
        </button>

    </div>

</header>



<main id="main-content">