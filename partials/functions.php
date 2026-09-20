<?php
declare(strict_types=1);

/**
 * Escape HTML output.
 */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}


/**
 * Build an absolute URL using the site's base URL.
 *
 *   url('about.php')      → http://localhost/portfolio/about.php
 *   url('blog/post.php')  → http://localhost/portfolio/blog/post.php
 *   url('#section')       → #section (passthrough)
 *   url('https://...')    → https://... (passthrough)
 */
function url(string $path = ''): string
{
    $path = trim($path);

    /* Pass through empty, anchors and absolute URLs */
    if (
        $path === '' ||
        $path[0] === '#' ||
        preg_match('~^(https?:)?//~i', $path)
    ) {
        return $path;
    }

    $base = $GLOBALS['__site_base_url'] ?? '';

    return rtrim($base, '/') . '/' . ltrim($path, '/');
}


/**
 * Asset URL with cache-busting query string.
 *
 *   asset('assets/css/home.css') → http://localhost/portfolio/assets/css/home.css?v=123456
 */
function asset(string $path): string
{
    $relative = ltrim($path, '/');
    $fullPath = dirname(__DIR__) . '/' . $relative;

    $version = is_file($fullPath)
        ? substr((string) filemtime($fullPath), -6)
        : null;

    return url($relative) . ($version ? '?v=' . $version : '');
}


/**
 * Return 'active' when the given slug matches the current page slug.
 */
function is_current(string $slug, string $current): string
{
    return $slug === $current ? 'active' : '';
}