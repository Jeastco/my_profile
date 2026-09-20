<?php
declare(strict_types=1);

/* =====================================================================
   Bootstrap
   ===================================================================== */

$config = require __DIR__ . '/config.php';

/* =====================================================================
   Page config
   ===================================================================== */

$page = [
    'title'       => '',      // blank → shows site name alone
    'description' => 'Emmanuel Asituha — Cybersecurity professional, software developer, IT specialist and technology researcher. Open to opportunities across cybersecurity, software engineering and Data & AI.',
    'slug'        => 'home',
    'body_class'  => 'home-page',
    'css'         => ['assets/css/home.css'],
];

/* =====================================================================
   Content
   ===================================================================== */

$firstName = explode(' ', trim($config['name']))[0];
$lastName  = explode(' ', trim($config['name']))[1] ?? '';


/* -------- Availability banner -------- */

$availability = [
    'status' => 'Open to opportunities',
    'note'   => 'Cybersecurity · Software Engineering · Data & AI',
];


/* -------- Hero trust channels (6 quick contact cards) -------- */

$trustChannels = [
    [
        'icon'  => 'fa-envelope',
        'brand' => 'fa-solid',
        'label' => 'Email',
        'value' => $config['channels']['email']['value'] ?? '',
        'href'  => $config['channels']['email']['href']  ?? '#',
    ],
    [
        'icon'  => 'fa-whatsapp',
        'brand' => 'fa-brands',
        'label' => 'WhatsApp',
        'value' => 'Quick chat',
        'href'  => $config['channels']['whatsapp']['href'] ?? '#',
        'external' => true,
    ],
    [
        'icon'  => 'fa-phone',
        'brand' => 'fa-solid',
        'label' => 'Phone',
        'value' => $config['channels']['phone']['value'] ?? '',
        'href'  => $config['channels']['phone']['href']  ?? '#',
    ],
    [
        'icon'  => 'fa-linkedin-in',
        'brand' => 'fa-brands',
        'label' => 'LinkedIn',
        'value' => 'Professional',
        'href'  => $config['channels']['linkedin']['href'] ?? '#',
        'external' => true,
    ],
    [
        'icon'  => 'fa-github',
        'brand' => 'fa-brands',
        'label' => 'GitHub',
        'value' => 'Code',
        'href'  => $config['channels']['github']['href'] ?? '#',
        'external' => true,
    ],
    [
        'icon'  => 'fa-certificate',
        'brand' => 'fa-solid',
        'label' => 'Credly',
        'value' => 'Badges',
        'href'  => $config['channels']['credly']['href'] ?? '#',
        'external' => true,
    ],
];


/* -------- Achievement highlights (4 punchy cards) -------- */

$highlights = [
    [
        'value' => '3',
        'label' => 'Published Research Papers',
        'sub'   => 'FANET · VANET · TCP/IP Security',
        'icon'  => 'fa-book-open',
        'link'  => 'research.php#publications',
    ],
    [
        'value' => '7+',
        'label' => 'Professional Roles',
        'sub'   => 'ICT · Security · Development',
        'icon'  => 'fa-briefcase',
        'link'  => 'experience.php',
    ],
    [
        'value' => '5',
        'label' => 'Technology Domains',
        'sub'   => 'Security · Dev · AI · Infra · GRC',
        'icon'  => 'fa-layer-group',
        'link'  => 'expertise.php',
    ],
    [
        'value' => '2',
        'label' => 'Active Projects',
        'sub'   => 'PigMaster · SAR-Sec',
        'icon'  => 'fa-rocket',
        'link'  => 'projects.php',
    ],
];


/* -------- Trusted-by organisations -------- */

$organisations = [
    'Anglican Development Services Nyanza',
    'Rakewa Otieno & Co. Advocates',
    'African Institute of Strategic Purchasing',
    'Kisumu Law Court',
    'JOOUST',
    'Internet Society',
];


/* -------- What I do (3 pillars as premium cards) -------- */

$services = [
    [
        'icon'   => 'fa-shield-halved',
        'title'  => 'Cybersecurity',
        'lead'   => 'Assess, protect and defend.',
        'text'   => 'Risk assessment, security controls, vulnerability analysis, incident response and compliance alignment.',
        'tags'   => ['ISO 27001', 'NIST CSF', 'CIS Controls'],
        'link'   => 'expertise.php#cybersecurity',
    ],
    [
        'icon'   => 'fa-code',
        'title'  => 'Software Development',
        'lead'   => 'Design, build and secure.',
        'text'   => 'Web applications, backend systems, databases, automation and secure application architecture.',
        'tags'   => ['Python', 'Django', 'PHP', 'SQL'],
        'link'   => 'expertise.php#development',
    ],
    [
        'icon'   => 'fa-brain',
        'title'  => 'Data & AI',
        'lead'   => 'Analyse, learn and improve.',
        'text'   => 'Data analysis, intelligent applications, AI integration and decision-support systems.',
        'tags'   => ['Data', 'AI', 'Analytics'],
        'link'   => 'expertise.php#data-ai',
    ],
];


/* -------- Featured project -------- */

$featuredProject = [
    'eyebrow'  => 'Featured Project',
    'name'     => 'PigMaster',
    'status'   => 'In Development',
    'lead'     => 'A farm management platform bringing pig farming operations into one centralized digital environment.',
    'body'     => 'PigMaster consolidates animal records, breeding, health, feeding, inventory, finance and reporting — with a longer-term Data & AI layer for operational insight.',
    'features' => [
        ['icon' => 'fa-paw',           'label' => 'Registry'],
        ['icon' => 'fa-dna',           'label' => 'Breeding'],
        ['icon' => 'fa-heart-pulse',   'label' => 'Health'],
        ['icon' => 'fa-wheat-awn',     'label' => 'Feeding'],
        ['icon' => 'fa-boxes-stacked', 'label' => 'Inventory'],
        ['icon' => 'fa-coins',         'label' => 'Finance'],
        ['icon' => 'fa-chart-column',  'label' => 'Analytics'],
        ['icon' => 'fa-brain',         'label' => 'AI Layer'],
    ],
    'tags' => ['Python', 'Django', 'PostgreSQL', 'SaaS', 'AI Integration'],
    'link' => 'projects.php',
];


/* -------- Publications (3 latest) -------- */

$publications = [
    [
        'year' => '2024',
        'type' => 'FANET Security',
        'title' => 'A Comprehensive Overview of Privacy, Security, and Performance Issues in Flying Ad Hoc Networks',
        'journal' => 'World Journal of Advanced Research and Reviews',
        'doi' => 'https://doi.org/10.30574/wjarr.2024.23.1.2166',
    ],
    [
        'year' => '2024',
        'type' => 'Network Security',
        'title' => 'A Comprehensive Survey of Performance, Security, and Privacy Issues in the Network Interface Layer of the TCP/IP Protocol Suite',
        'journal' => 'GSC Advanced Research and Reviews',
        'doi' => 'https://doi.org/10.30574/gscarr.2024.18.3.0112',
    ],
    [
        'year' => '2023',
        'type' => 'VANET Security',
        'title' => 'Privacy and Security Issues Surrounding Vehicular Ad-Hoc Networks',
        'journal' => 'World Journal of Advanced Research and Reviews',
        'doi' => 'https://doi.org/10.30574/wjarr.2023.20.3.2602',
    ],
];


/* -------- Latest insights -------- */

$insights = [
    [
        'cover_class' => 'cover--cyber',
        'icon'        => 'fa-rotate-left',
        'eyebrow'     => 'CYBERSECURITY',
        'category'    => 'Security',
        'read_time'   => '6 min read',
        'title'       => 'Understanding Replay Attacks and How Secure Systems Prevent Them',
        'link'        => 'blog/replay-attacks.php',
    ],
    [
        'cover_class' => 'cover--dev',
        'icon'        => 'fa-code',
        'eyebrow'     => 'DEVELOPMENT',
        'category'    => 'Development',
        'read_time'   => '7 min read',
        'title'       => 'Building Secure Django Applications from the Beginning',
        'link'        => 'blog/secure-django.php',
    ],
    [
        'cover_class' => 'cover--research',
        'icon'        => 'fa-satellite-dish',
        'eyebrow'     => 'RESEARCH',
        'category'    => 'Research',
        'read_time'   => '8 min read',
        'title'       => 'Security Challenges in Search and Rescue UAV Networks',
        'link'        => 'blog/sar-fanet-security.php',
    ],
];


/* =====================================================================
   Render
   ===================================================================== */

require __DIR__ . '/partials/header.php';
?>


<!-- =========================================================
     AVAILABILITY BANNER
========================================================= -->

<div class="availability-bar" role="status">

    <div class="container availability-bar__inner">

        <span class="availability-bar__status">
            <span class="availability-dot" aria-hidden="true"></span>
            <?= e($availability['status']) ?>
        </span>

        <span class="availability-bar__divider" aria-hidden="true"></span>

        <span class="availability-bar__note">
            <?= e($availability['note']) ?>
        </span>

        <a href="<?= e(url('contact.php')) ?>" class="availability-bar__cta">
            Get in touch
            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
        </a>

    </div>

</div>



<!-- =========================================================
     HERO
========================================================= -->

<section class="hero-section" aria-labelledby="hero-heading">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="badge-soft">
                    <span class="badge-dot" aria-hidden="true"></span>
                    Cybersecurity • Development • Data &amp; AI
                </span>


                <h1 id="hero-heading" class="hero-title">
                    <?= e($firstName) ?>
                    <span class="text-accent"><?= e($lastName) ?></span>
                </h1>


                <p class="hero-role">
                    I design secure systems and build practical
                    digital solutions.
                </p>


                <p class="hero-description">
                    Cybersecurity professional, software developer and
                    technology researcher working across security,
                    engineering, infrastructure and Data &amp; AI.
                </p>


                <div class="hero-actions">

                    <a href="#featured-work" class="btn btn-primary btn-lg">
                        See my work
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>

                    <a
                        href="<?= e(url('assets/documents/cv.pdf')) ?>"
                        class="btn btn-outline-primary btn-lg"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <i class="fa-solid fa-file-arrow-down" aria-hidden="true"></i>
                        Download CV
                    </a>

                </div>


                <!-- Trust channels — 6 quick-contact icons -->
                <div class="hero-channels">

                    <?php foreach ($trustChannels as $channel): ?>

                        <a
                            href="<?= e($channel['href']) ?>"
                            class="hero-channel"
                            <?= !empty($channel['external']) ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
                            aria-label="<?= e($channel['label']) ?>"
                            title="<?= e($channel['label']) ?> — <?= e($channel['value']) ?>"
                        >
                            <i
                                class="<?= e($channel['brand'] . ' ' . $channel['icon']) ?>"
                                aria-hidden="true"
                            ></i>
                            <span class="hero-channel__label">
                                <?= e($channel['label']) ?>
                            </span>
                        </a>

                    <?php endforeach; ?>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="hero-visual">

                    <div class="hero-portrait">

                        <img
                            src="<?= e(asset('assets/images/manue.png')) ?>"
                            alt="Portrait of <?= e($config['name']) ?>"
                            width="520"
                            height="520"
                            loading="eager"
                            fetchpriority="high"
                            decoding="async"
                        >

                    </div>


                    <div class="hero-float hero-float--one">

                        <span class="hero-float__icon" aria-hidden="true">
                            <i class="fa-solid fa-shield-halved"></i>
                        </span>

                        <div>
                            <strong>Cybersecurity</strong>
                            <span>Secure • Assess • Defend</span>
                        </div>

                    </div>


                    <div class="hero-float hero-float--two">

                        <span class="hero-float__icon" aria-hidden="true">
                            <i class="fa-solid fa-code"></i>
                        </span>

                        <div>
                            <strong>Development</strong>
                            <span>Build • Automate • Innovate</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     TRUSTED BY STRIP
========================================================= -->

<section class="trusted-section" aria-label="Organisations worked with">

    <div class="container">

        <p class="trusted-section__label">
            Experience across
        </p>

        <div class="trusted-logos">

            <?php foreach ($organisations as $org): ?>

                <span class="trusted-logo">
                    <?= e($org) ?>
                </span>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     ACHIEVEMENT HIGHLIGHTS
========================================================= -->

<section class="highlights-section" aria-labelledby="highlights-heading">

    <div class="container">

        <h2 id="highlights-heading" class="visually-hidden">
            Achievement highlights
        </h2>

        <div class="row g-3">

            <?php foreach ($highlights as $item): ?>

                <div class="col-6 col-md-6 col-lg-3">

                    <a href="<?= e(url($item['link'])) ?>" class="highlight-card">

                        <span class="highlight-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($item['icon']) ?>"></i>
                        </span>

                        <strong class="highlight-card__value">
                            <?= e($item['value']) ?>
                        </strong>

                        <span class="highlight-card__label">
                            <?= e($item['label']) ?>
                        </span>

                        <span class="highlight-card__sub">
                            <?= e($item['sub']) ?>
                        </span>

                    </a>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     WHAT I DO — 3 premium service cards
========================================================= -->

<section class="section" aria-labelledby="services-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">What I Do</span>

            <h2 id="services-heading" class="section-title">
                Three disciplines, one integrated approach
            </h2>

            <p class="section-desc">
                Security thinking applied to building, and building
                discipline applied to securing.
            </p>

        </header>


        <div class="row g-4">

            <?php foreach ($services as $service): ?>

                <div class="col-md-6 col-lg-4">

                    <article class="service-card">

                        <span class="service-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($service['icon']) ?>"></i>
                        </span>

                        <h3><?= e($service['title']) ?></h3>

                        <p class="service-card__lead">
                            <?= e($service['lead']) ?>
                        </p>

                        <p class="service-card__text">
                            <?= e($service['text']) ?>
                        </p>

                        <div class="tag-row">

                            <?php foreach ($service['tags'] as $tag): ?>

                                <span class="chip"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                        <a
                            href="<?= e(url($service['link'])) ?>"
                            class="link-accent link-accent--sm service-card__link"
                        >
                            Explore
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>


        <div class="text-center mt-5">

            <a href="<?= e(url('expertise.php')) ?>" class="btn btn-outline-primary btn-lg">
                Full expertise breakdown
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>

        </div>

    </div>

</section>



<!-- =========================================================
     ABOUT SNAPSHOT
========================================================= -->

<section class="section section--muted" aria-labelledby="about-heading">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">

                <span class="section-label">About Me</span>

                <h2 id="about-heading" class="section-title">
                    Building technology with
                    <span class="text-accent">security at its core.</span>
                </h2>

            </div>


            <div class="col-lg-7">

                <p class="lead-text">
                    I am an Information Technology and Cybersecurity
                    professional with a strong interest in developing
                    secure, reliable and practical technology solutions.
                </p>

                <p>
                    My experience spans information security, risk
                    assessment, Microsoft 365, networking, systems
                    administration, web and application development,
                    technical support and security research.
                </p>

                <div class="about-mini-grid">

                    <div class="about-mini">
                        <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                        <div>
                            <strong>MSc &amp; BSc</strong>
                            <span>JOOUST — Security &amp; Forensics</span>
                        </div>
                    </div>

                    <div class="about-mini">
                        <i class="fa-solid fa-globe" aria-hidden="true"></i>
                        <div>
                            <strong>Internet Society</strong>
                            <span>Member</span>
                        </div>
                    </div>

                    <div class="about-mini">
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        <div>
                            <strong>Kenya</strong>
                            <span>Local &amp; remote</span>
                        </div>
                    </div>

                </div>

                <a href="<?= e(url('about.php')) ?>" class="link-accent">
                    Full profile
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FEATURED PROJECT
========================================================= -->

<section class="section" id="featured-work" aria-labelledby="featured-heading">

    <div class="container">

        <header class="section-head">

            <span class="section-label">
                <?= e($featuredProject['eyebrow']) ?>
            </span>

            <h2 id="featured-heading" class="section-title">
                <?= e($featuredProject['name']) ?>
            </h2>

            <p class="section-desc">
                <?= e($featuredProject['lead']) ?>
            </p>

        </header>


        <div class="featured-project row g-5 align-items-center">

            <div class="col-lg-6">

                <div class="featured-project__badge">

                    <span class="status-dot" aria-hidden="true"></span>

                    <?= e($featuredProject['status']) ?>

                </div>

                <p class="lead-text">
                    <?= e($featuredProject['body']) ?>
                </p>


                <div class="feature-grid">

                    <?php foreach ($featuredProject['features'] as $f): ?>

                        <div class="feature-item">

                            <i class="fa-solid <?= e($f['icon']) ?>" aria-hidden="true"></i>

                            <span><?= e($f['label']) ?></span>

                        </div>

                    <?php endforeach; ?>

                </div>


                <div class="tag-row mt-4">

                    <?php foreach ($featuredProject['tags'] as $tag): ?>

                        <span class="chip chip--accent"><?= e($tag) ?></span>

                    <?php endforeach; ?>

                </div>


                <div class="mt-4">

                    <a
                        href="<?= e(url($featuredProject['link'])) ?>"
                        class="btn btn-primary"
                    >
                        Explore project
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="dashboard-mock" aria-hidden="true">

                    <div class="dashboard-mock__head">

                        <div>
                            <i class="fa-solid fa-piggy-bank"></i>
                            <strong><?= e($featuredProject['name']) ?></strong>
                        </div>

                        <span>Farm Overview</span>

                    </div>


                    <div class="dashboard-mock__stats">

                        <div>
                            <i class="fa-solid fa-paw"></i>
                            <span>Livestock</span>
                            <strong>Records</strong>
                        </div>

                        <div>
                            <i class="fa-solid fa-heart-pulse"></i>
                            <span>Health</span>
                            <strong>Tracking</strong>
                        </div>

                        <div>
                            <i class="fa-solid fa-chart-column"></i>
                            <span>Farm</span>
                            <strong>Analytics</strong>
                        </div>

                    </div>


                    <div class="dashboard-mock__chart">

                        <div class="chart-head">
                            <span>Farm Performance</span>
                            <small>Analytics</small>
                        </div>

                        <div class="chart-bars">

                            <?php foreach ([35, 55, 45, 70, 62, 82, 74] as $h): ?>

                                <span style="height: <?= (int) $h ?>%;"></span>

                            <?php endforeach; ?>

                        </div>

                    </div>


                    <div class="dashboard-mock__ai">

                        <i class="fa-solid fa-brain"></i>

                        <div>
                            <span>INTELLIGENCE LAYER</span>
                            <strong>AI-Powered Insights</strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     PUBLICATIONS STRIP
========================================================= -->

<section class="section section--muted" aria-labelledby="publications-heading">

    <div class="container">

        <div class="section-head-row">

            <header class="section-head">

                <span class="section-label">Research</span>

                <h2 id="publications-heading" class="section-title">
                    Published Research
                </h2>

                <p class="section-desc">
                    Peer-reviewed contributions to network and
                    information security.
                </p>

            </header>

            <a href="<?= e(url('research.php#publications')) ?>" class="btn btn-outline-primary">
                All publications
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>

        </div>


        <div class="row g-3">

            <?php foreach ($publications as $pub): ?>

                <div class="col-md-6 col-lg-4">

                    <article class="publication-mini">

                        <div class="publication-mini__top">

                            <span class="publication-mini__type">
                                <?= e($pub['type']) ?>
                            </span>

                            <time class="publication-mini__year">
                                <?= e($pub['year']) ?>
                            </time>

                        </div>

                        <h3 class="publication-mini__title">
                            <?= e($pub['title']) ?>
                        </h3>

                        <p class="publication-mini__journal">
                            <i class="fa-solid fa-book" aria-hidden="true"></i>
                            <?= e($pub['journal']) ?>
                        </p>

                        <a
                            href="<?= e($pub['doi']) ?>"
                            class="link-accent link-accent--sm"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            View publication
                            <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                        </a>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     TESTIMONIAL / PHILOSOPHY QUOTE
========================================================= -->

<section class="quote-section">

    <div class="container">

        <blockquote class="philosophy-quote">

            <i class="fa-solid fa-quote-left philosophy-quote__icon" aria-hidden="true"></i>

            <p>
                Effective technology should solve a real problem,
                security should be built into the solution, and
                continuous learning should guide how that solution
                evolves.
            </p>

            <footer class="philosophy-quote__author">
                <span class="philosophy-quote__line" aria-hidden="true"></span>
                <span><?= e($config['name']) ?></span>
            </footer>

        </blockquote>

    </div>

</section>



<!-- =========================================================
     LATEST INSIGHTS
========================================================= -->

<section class="section" aria-labelledby="insights-heading">

    <div class="container">

        <div class="section-head-row">

            <header class="section-head">

                <span class="section-label">Latest Insights</span>

                <h2 id="insights-heading" class="section-title">
                    From the Knowledge Hub
                </h2>

            </header>

            <a href="<?= e(url('blog.php')) ?>" class="btn btn-outline-primary">
                All insights
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>

        </div>


        <div class="row g-4">

            <?php foreach ($insights as $insight): ?>

                <div class="col-md-6 col-lg-4">

                    <article class="insight-card">

                        <div class="insight-card__cover <?= e($insight['cover_class']) ?>">

                            <span class="insight-card__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($insight['icon']) ?>"></i>
                            </span>

                            <span class="insight-card__eyebrow">
                                <?= e($insight['eyebrow']) ?>
                            </span>

                        </div>

                        <div class="insight-card__body">

                            <div class="insight-card__meta">
                                <span><?= e($insight['category']) ?></span>
                                <span><?= e($insight['read_time']) ?></span>
                            </div>

                            <h3><?= e($insight['title']) ?></h3>

                            <a
                                href="<?= e(url($insight['link'])) ?>"
                                class="link-accent link-accent--sm"
                            >
                                Read article
                                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </a>

                        </div>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     FINAL CTA
========================================================= -->

<section class="section section--cta">

    <div class="container">

        <div class="cta-card">

            <div class="cta-card__body">

                <span class="cta-eyebrow">
                    Let's work together
                </span>

                <h2>
                    Looking for a cybersecurity or software professional?
                </h2>

                <p>
                    I'm open to roles and collaborations in cybersecurity,
                    software engineering, IT infrastructure and Data &amp; AI.
                </p>

                <ul class="cta-points">

                    <li>
                        <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                        Available for permanent &amp; contract roles
                    </li>

                    <li>
                        <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                        Remote or on-site (Kenya &amp; international)
                    </li>

                    <li>
                        <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                        Response within 24–48 hours
                    </li>

                </ul>

            </div>

            <div class="cta-card__actions">

                <a href="<?= e(url('contact.php')) ?>" class="btn btn-light btn-lg">
                    Start a conversation
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>

                <a
                    href="<?= e(url('assets/documents/cv.pdf')) ?>"
                    class="btn btn-outline-light btn-lg"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <i class="fa-solid fa-file-arrow-down" aria-hidden="true"></i>
                    Download CV
                </a>

            </div>

        </div>

    </div>

</section>


<?php require __DIR__ . '/partials/footer.php'; ?>