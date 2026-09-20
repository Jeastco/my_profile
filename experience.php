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
    'title'       => 'Experience',
    'description' => 'Professional experience across cybersecurity, ICT operations, Microsoft 365, software development, data management, networking, research and technical support.',
    'slug'        => 'experience',
    'body_class'  => 'experience-page',
    'css'         => ['assets/css/experience.css'],
];

/* =====================================================================
   Content
   ===================================================================== */

$firstName = explode(' ', trim($config['name']))[0];
$lastName  = explode(' ', trim($config['name']))[1] ?? '';


/* -------- Summary strip -------- */

$summaryStrip = [
    ['icon' => 'fa-shield-halved', 'title' => 'Security',      'sub' => 'Risk & Protection'],
    ['icon' => 'fa-server',        'title' => 'Infrastructure', 'sub' => 'Systems & Networks'],
    ['icon' => 'fa-database',      'title' => 'Data',           'sub' => 'Quality & Management'],
    ['icon' => 'fa-code',          'title' => 'Development',    'sub' => 'Web & Applications'],
    ['icon' => 'fa-headset',       'title' => 'ICT Operations', 'sub' => 'Support & Delivery'],
];


/* -------- Career timeline -------- */

$career = [
    [
        'featured'    => true,
        'period_from' => 'JUL 2025',
        'period_to'   => 'JUN 2026',
        'type'        => 'PROFESSIONAL EXPERIENCE',
        'highlight'   => 'ICT',
        'role'        => 'ICT Officer',
        'company'     => 'Anglican Development Services Nyanza',
        'icon'        => 'fa-building',
        'summary'     => 'Supporting organizational ICT operations, digital systems, security, Microsoft 365, application integration, web platforms and technical support.',
        'responsibilities' => [
            ['icon' => 'fa-cloud',           'text' => 'Microsoft 365 administration'],
            ['icon' => 'fa-laptop-code',     'text' => 'Application development & integration'],
            ['icon' => 'fa-shield-halved',   'text' => 'Security & compliance support'],
            ['icon' => 'fa-desktop',         'text' => 'Endpoint and technical support'],
            ['icon' => 'fa-globe',           'text' => 'Website development & management'],
            ['icon' => 'fa-network-wired',   'text' => 'ICT infrastructure support'],
        ],
        'tags' => ['Microsoft 365', 'ICT Operations', 'Security', 'Web Development', 'Technical Support'],
    ],
    [
        'period_from' => 'JUN 2024',
        'period_to'   => 'JUN 2025',
        'type'        => 'INTERNSHIP',
        'role'        => 'ICT Intern',
        'company'     => 'Anglican Development Services Nyanza',
        'icon'        => 'fa-laptop',
        'summary'     => 'Supported ICT modernization and daily technology operations through Microsoft 365, technical support and website management.',
        'responsibilities' => [
            ['icon' => 'fa-brands fa-microsoft', 'text' => 'Microsoft 365 integration'],
            ['icon' => 'fa-screwdriver-wrench',  'text' => 'User and technical support'],
            ['icon' => 'fa-globe',               'text' => 'Website development & management'],
            ['icon' => 'fa-computer',            'text' => 'ICT systems support'],
        ],
        'tags' => ['Microsoft 365', 'Web', 'IT Support', 'Systems'],
    ],
    [
        'period_from' => 'JAN 2024',
        'period_to'   => 'JUN 2024',
        'type'        => 'DATA OPERATIONS',
        'role'        => 'Data Assistant',
        'company'     => 'Anglican Development Services Nyanza',
        'icon'        => 'fa-database',
        'summary'     => 'Supported organizational data operations with an emphasis on accurate entry, validation and maintaining data integrity.',
        'responsibilities' => [
            ['icon' => 'fa-keyboard',      'text' => 'Data entry and processing'],
            ['icon' => 'fa-circle-check',  'text' => 'Data validation'],
            ['icon' => 'fa-shield',        'text' => 'Data integrity'],
            ['icon' => 'fa-table',         'text' => 'Structured information management'],
        ],
        'tags' => ['Data Management', 'Validation', 'Data Quality'],
    ],
    [
        'period_from' => 'AUG 2023',
        'period_to'   => 'NOV 2023',
        'type'        => 'LEGAL TECHNOLOGY',
        'role'        => 'ICT Assistant',
        'company'     => 'Rakewa Otieno & Co. Advocates',
        'icon'        => 'fa-scale-balanced',
        'summary'     => 'Provided technology support within a legal-services environment, including electronic filing, hardware, networking and user support.',
        'responsibilities' => [
            ['icon' => 'fa-file-circle-check', 'text' => 'Electronic filing of legal cases'],
            ['icon' => 'fa-headset',           'text' => 'IT user support'],
            ['icon' => 'fa-network-wired',     'text' => 'Network support'],
            ['icon' => 'fa-computer',          'text' => 'Hardware support'],
        ],
        'tags' => ['ICT Support', 'E-Filing', 'Networking', 'Hardware'],
    ],
    [
        'period_from' => 'SEP 2021',
        'period_to'   => 'DEC 2021',
        'type'        => 'CYBERSECURITY',
        'role'        => 'Cybersecurity Specialist & Researcher',
        'company'     => 'AISPAR — Nairobi',
        'icon'        => 'fa-shield-halved',
        'summary'     => 'Worked on cybersecurity risk assessment, incident management, security research and technology development.',
        'responsibilities' => [
            ['icon' => 'fa-triangle-exclamation', 'text' => 'Security risk assessments'],
            ['icon' => 'fa-shield-virus',         'text' => 'Incident management'],
            ['icon' => 'fa-microscope',           'text' => 'Security research'],
            ['icon' => 'fa-link',                 'text' => 'Supply-chain security research'],
            ['icon' => 'fa-code',                 'text' => 'CAPRITOSM web application'],
        ],
        'tags' => ['Cybersecurity', 'Risk Assessment', 'Incident Management', 'Research', 'Web Development'],
    ],
    [
        'period_from' => 'JAN 2021',
        'period_to'   => 'APR 2021',
        'type'        => 'INDUSTRIAL ATTACHMENT',
        'role'        => 'IT Attachee',
        'company'     => 'Kisumu Law Court',
        'icon'        => 'fa-landmark',
        'summary'     => 'Gained practical experience supporting technology operations within a public-sector judicial environment.',
        'responsibilities' => [
            ['icon' => 'fa-database',          'text' => 'File-archiving database development'],
            ['icon' => 'fa-download',          'text' => 'Software installation'],
            ['icon' => 'fa-screwdriver-wrench','text' => 'Hardware maintenance'],
            ['icon' => 'fa-headset',           'text' => 'IT support'],
            ['icon' => 'fa-lock',              'text' => 'OpenVPN connectivity'],
        ],
        'tags' => ['Database', 'IT Support', 'Hardware', 'OpenVPN'],
    ],
];


/* -------- Volunteer experience -------- */

$volunteer = [
    [
        'icon'  => 'fa-photo-film',
        'date'  => '2018 — 2021',
        'type'  => 'VOLUNTEER LEADERSHIP',
        'role'  => 'Media & ICT Lead',
        'org'   => 'JOOUST Christian Union',
        'text'  => 'Supported media and technology activities, including broadcasting, content production, recording and editing notices and developing promotional materials.',
        'tags'  => ['ICT', 'Media', 'Broadcasting', 'Leadership'],
    ],
    [
        'icon'  => 'fa-school',
        'date'  => '2017 — 2022',
        'type'  => 'VOLUNTEER ICT',
        'role'  => 'ICT Assistant',
        'org'   => 'Lunyito Secondary School',
        'text'  => 'Supported school ICT activities including student registration, digital forms and university-selection processes.',
        'tags'  => ['ICT Support', 'Data Entry', 'Education Technology'],
    ],
];


/* -------- Experience by domain -------- */

$domains = [
    [
        'icon'  => 'fa-shield-halved',
        'title' => 'Cybersecurity',
        'text'  => 'Risk assessment, security controls, incident management, infrastructure security and security research.',
        'tags'  => ['Security', 'Risk', 'GRC'],
    ],
    [
        'icon'  => 'fa-server',
        'title' => 'Infrastructure',
        'text'  => 'Servers, networking, hardware, endpoints, Microsoft environments and organizational ICT systems.',
        'tags'  => ['Linux', 'Networking', 'Microsoft 365'],
    ],
    [
        'icon'  => 'fa-code',
        'title' => 'Development',
        'text'  => 'Website development, databases, application integration and practical software solutions.',
        'tags'  => ['Web', 'Applications', 'Databases'],
    ],
    [
        'icon'  => 'fa-database',
        'title' => 'Data',
        'text'  => 'Data entry, validation, integrity, structured records and operational information management.',
        'tags'  => ['Data Quality', 'Validation', 'Records'],
    ],
    [
        'icon'  => 'fa-headset',
        'title' => 'Technical Support',
        'text'  => 'Supporting users, troubleshooting hardware and software and maintaining reliable technology operations.',
        'tags'  => ['Support', 'Troubleshooting'],
    ],
    [
        'icon'  => 'fa-microscope',
        'title' => 'Research',
        'text'  => 'Security research, technical analysis and investigation of emerging cybersecurity challenges.',
        'tags'  => ['Research', 'Cybersecurity'],
    ],
];


/* -------- Featured experience: Enterprise ICT -------- */

$enterpriseCapabilities = [
    ['icon' => 'fa-brands fa-microsoft', 'title' => 'Microsoft 365',     'text' => 'Administration & integration'],
    ['icon' => 'fa-server',              'title' => 'Infrastructure',    'text' => 'Systems, servers & networking'],
    ['icon' => 'fa-shield-halved',       'title' => 'Security',          'text' => 'Controls & compliance support'],
    ['icon' => 'fa-globe',               'title' => 'Digital Platforms', 'text' => 'Websites & applications'],
    ['icon' => 'fa-headset',             'title' => 'Technical Support', 'text' => 'Users, devices & systems'],
];


/* -------- Featured experience: Cybersecurity foundation -------- */

$securityFoundation = [
    ['step' => '01', 'title' => 'Assess'],
    ['step' => '02', 'title' => 'Protect'],
    ['step' => '03', 'title' => 'Respond'],
    ['step' => '04', 'title' => 'Research'],
];


/* -------- Professional strengths -------- */

$strengths = [
    [
        'number' => '01',
        'icon'   => 'fa-people-group',
        'title'  => 'Leadership & Teamwork',
        'text'   => 'Working collaboratively while taking responsibility for technology tasks, projects and outcomes.',
    ],
    [
        'number' => '02',
        'icon'   => 'fa-lightbulb',
        'title'  => 'Problem Solving',
        'text'   => 'Breaking technical challenges into manageable problems and identifying practical solutions.',
    ],
    [
        'number' => '03',
        'icon'   => 'fa-comments',
        'title'  => 'Communication',
        'text'   => 'Translating technical requirements, issues and solutions into information different users can understand.',
    ],
    [
        'number' => '04',
        'icon'   => 'fa-arrows-rotate',
        'title'  => 'Adaptability',
        'text'   => 'Learning new technologies and adapting to different environments, systems and organizational requirements.',
    ],
    [
        'number' => '05',
        'icon'   => 'fa-puzzle-piece',
        'title'  => 'Resourcefulness',
        'text'   => 'Working with available resources while identifying effective ways to solve operational and technical challenges.',
    ],
    [
        'number' => '06',
        'icon'   => 'fa-scale-balanced',
        'title'  => 'Risk Awareness',
        'text'   => 'Considering security, reliability, data integrity and operational risk when making technical decisions.',
    ],
];


/* -------- Career progression -------- */

$progression = [
    [
        'number' => '01',
        'icon'   => 'fa-computer',
        'period' => 'FOUNDATION',
        'title'  => 'ICT Support',
        'text'   => 'Hardware, users, systems, digital records and practical technology support.',
    ],
    [
        'number' => '02',
        'icon'   => 'fa-shield-halved',
        'period' => 'SPECIALIZATION',
        'title'  => 'Cybersecurity',
        'text'   => 'Risk assessment, incident management, network security and research.',
    ],
    [
        'number' => '03',
        'icon'   => 'fa-building',
        'period' => 'ENTERPRISE',
        'title'  => 'ICT Operations',
        'text'   => 'Microsoft 365, infrastructure, support, applications and organizational systems.',
    ],
    [
        'number' => '04',
        'icon'   => 'fa-layer-group',
        'period' => 'CURRENT DIRECTION',
        'title'  => 'Integrated Technology',
        'text'   => 'Cybersecurity, development, infrastructure, research, data and AI.',
    ],
];


/* =====================================================================
   Render
   ===================================================================== */

require __DIR__ . '/partials/header.php';
?>


<!-- =========================================================
     HERO
========================================================= -->

<section class="experience-hero" aria-labelledby="experience-hero-heading">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="badge-soft">
                    <span class="badge-dot" aria-hidden="true"></span>
                    Professional Journey
                </span>


                <h1 id="experience-hero-heading" class="experience-hero__title">
                    Experience built through
                    <span class="text-accent">technology in practice.</span>
                </h1>


                <p class="experience-hero__lead">
                    My professional journey spans ICT operations,
                    cybersecurity, data management, software and
                    web development, infrastructure, Microsoft 365,
                    technical support and security research.
                </p>


                <p class="experience-hero__text">
                    Each role has contributed a different part of my
                    technical foundation — from supporting users and
                    maintaining systems to assessing security risk,
                    managing digital platforms and developing
                    technology solutions.
                </p>


                <div class="experience-hero__actions">

                    <a href="#career" class="btn btn-primary btn-lg">
                        View experience
                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
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

            </div>


            <div class="col-lg-6">

                <div class="career-visual">

                    <div class="career-visual__head">

                        <div>
                            <span>CAREER PROFILE</span>
                            <strong>Technology Experience</strong>
                        </div>

                        <i class="fa-solid fa-briefcase" aria-hidden="true"></i>

                    </div>


                    <div class="career-visual__steps">

                        <?php
                        $steps = [
                            ['year' => '2017', 'title' => 'ICT Support',  'sub' => 'Technical Foundation'],
                            ['year' => '2021', 'title' => 'Security',     'sub' => 'Cybersecurity Focus'],
                            ['year' => '2023', 'title' => 'Enterprise ICT','sub' => 'Systems & Support'],
                            ['year' => '2024', 'title' => 'Data & Systems','sub' => 'Operations & Platforms'],
                            ['year' => '2025+','title' => 'Integrated ICT','sub' => 'Broader Technology Role'],
                        ];

                        foreach ($steps as $i => $step): ?>

                            <div class="career-visual__step">

                                <span class="career-visual__year">
                                    <?= e($step['year']) ?>
                                </span>

                                <div class="career-visual__line">
                                    <span></span>
                                </div>

                                <div>
                                    <strong><?= e($step['title']) ?></strong>
                                    <small><?= e($step['sub']) ?></small>
                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     SUMMARY STRIP
========================================================= -->

<section class="summary-strip" aria-label="Experience summary">

    <div class="container">

        <div class="row g-3">

            <?php foreach ($summaryStrip as $item): ?>

                <div class="col-6 col-md-4 col-lg">

                    <div class="summary-item">

                        <span class="summary-item__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($item['icon']) ?>"></i>
                        </span>

                        <div>
                            <strong><?= e($item['title']) ?></strong>
                            <span><?= e($item['sub']) ?></span>
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     INTRO
========================================================= -->

<section class="section" aria-labelledby="intro-heading">

    <div class="container">

        <div class="row g-5 align-items-start">

            <div class="col-lg-5">

                <span class="section-label">Career Development</span>

                <h2 id="intro-heading" class="section-title">
                    From ICT support to
                    <span class="text-accent">multidisciplinary technology.</span>
                </h2>

            </div>


            <div class="col-lg-7">

                <p class="lead-text">
                    My experience has developed progressively across
                    different areas of information technology.
                </p>

                <p>
                    Early ICT support roles gave me practical exposure
                    to users, hardware, systems and organizational
                    technology requirements. Later roles expanded this
                    foundation into networking, cybersecurity, research,
                    data management, Microsoft 365, infrastructure,
                    web development and application integration.
                </p>

                <p>
                    That progression continues to influence how I work
                    today: understanding technology not only from a
                    security perspective, but also from operational,
                    development, data and organizational perspectives.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     CAREER TIMELINE
========================================================= -->

<section
    class="section section--muted"
    id="career"
    aria-labelledby="career-heading"
>

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Career Journey</span>

            <h2 id="career-heading" class="section-title">
                Professional experience
            </h2>

            <p class="section-desc">
                A chronological view of the roles that have shaped
                my technical and professional experience.
            </p>

        </header>


        <div class="career-timeline">

            <?php foreach ($career as $index => $role): ?>

                <article class="career-entry <?= !empty($role['featured']) ? 'career-entry--featured' : '' ?>">

                    <div class="career-entry__date">

                        <span><?= e($role['period_from']) ?></span>

                        <strong><?= e($role['period_to']) ?></strong>

                    </div>


                    <div class="career-entry__marker" aria-hidden="true">

                        <span></span>

                    </div>


                    <div class="career-entry__card">

                        <header class="career-entry__head">

                            <span class="career-entry__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($role['icon']) ?>"></i>
                            </span>


                            <div class="career-entry__heading">

                                <div class="career-entry__labels">

                                    <span class="career-type">
                                        <?= e($role['type']) ?>
                                    </span>

                                    <?php if (!empty($role['highlight'])): ?>

                                        <span class="career-highlight">
                                            <?= e($role['highlight']) ?>
                                        </span>

                                    <?php endif; ?>

                                </div>

                                <h3><?= e($role['role']) ?></h3>

                                <p class="career-company">
                                    <?= e($role['company']) ?>
                                </p>

                            </div>

                        </header>


                        <p class="career-summary"><?= e($role['summary']) ?></p>


                        <div class="career-responsibilities">

                            <?php foreach ($role['responsibilities'] as $resp): ?>

                                <div>

                                    <i class="<?= str_contains($resp['icon'], 'fa-brands') ? 'fa-brands ' . str_replace('fa-brands ', '', $resp['icon']) : 'fa-solid ' . $resp['icon'] ?>" aria-hidden="true"></i>

                                    <span><?= e($resp['text']) ?></span>

                                </div>

                            <?php endforeach; ?>

                        </div>


                        <div class="tag-row">

                            <?php foreach ($role['tags'] as $tag): ?>

                                <span class="chip chip--accent"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     VOLUNTEER EXPERIENCE
========================================================= -->

<section class="section" aria-labelledby="volunteer-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Volunteer Experience</span>

            <h2 id="volunteer-heading" class="section-title">
                Leadership &amp; community technology
            </h2>

            <p class="section-desc">
                Volunteer roles also contributed to my technical,
                communication and leadership development.
            </p>

        </header>


        <div class="row g-4 justify-content-center">

            <?php foreach ($volunteer as $vol): ?>

                <div class="col-md-6 col-lg-5">

                    <article class="volunteer-card">

                        <div class="volunteer-card__top">

                            <span class="volunteer-card__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($vol['icon']) ?>"></i>
                            </span>

                            <span class="volunteer-card__date">
                                <?= e($vol['date']) ?>
                            </span>

                        </div>

                        <span class="career-type"><?= e($vol['type']) ?></span>

                        <h3><?= e($vol['role']) ?></h3>

                        <p class="volunteer-card__org"><?= e($vol['org']) ?></p>

                        <p class="volunteer-card__text"><?= e($vol['text']) ?></p>

                        <div class="tag-row">

                            <?php foreach ($vol['tags'] as $tag): ?>

                                <span class="chip"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     EXPERIENCE BY DOMAIN
========================================================= -->

<section class="section section--muted" aria-labelledby="domain-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Experience Profile</span>

            <h2 id="domain-heading" class="section-title">
                What my experience covers
            </h2>

            <p class="section-desc">
                My roles have exposed me to several interconnected
                areas of modern information technology.
            </p>

        </header>


        <div class="row g-4">

            <?php foreach ($domains as $domain): ?>

                <div class="col-md-6 col-lg-4">

                    <article class="domain-card">

                        <span class="domain-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($domain['icon']) ?>"></i>
                        </span>

                        <h3><?= e($domain['title']) ?></h3>

                        <p><?= e($domain['text']) ?></p>

                        <div class="tag-row">

                            <?php foreach ($domain['tags'] as $tag): ?>

                                <span class="chip chip--accent"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     FEATURED EXPERIENCE — Enterprise ICT
========================================================= -->

<section class="section" aria-labelledby="enterprise-heading">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-6">

                <span class="section-label">Enterprise ICT Experience</span>

                <h2 id="enterprise-heading" class="section-title">
                    Supporting digital transformation in practice.
                </h2>

                <p class="lead-text">
                    My work with Anglican Development Services Nyanza
                    expanded my experience beyond traditional technical
                    support.
                </p>

                <p>
                    The environment involved a combination of Microsoft 365,
                    infrastructure, user support, web systems, application
                    integration, security and organizational digital platforms.
                </p>

                <p>
                    Working across these areas strengthened my understanding
                    of how technology decisions affect users, operations,
                    security, information management and organizational
                    performance.
                </p>

                <div class="mt-4">

                    <a href="<?= e(url('projects.php')) ?>" class="btn btn-primary">
                        View related projects
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="enterprise-panel">

                    <div class="enterprise-panel__head">

                        <span>ENTERPRISE ICT</span>

                        <i class="fa-solid fa-building-shield" aria-hidden="true"></i>

                    </div>


                    <?php foreach ($enterpriseCapabilities as $cap): ?>

                        <div class="enterprise-capability">

                            <span class="enterprise-capability__icon" aria-hidden="true">
                                <i class="<?= str_contains($cap['icon'], 'fa-brands') ? $cap['icon'] : 'fa-solid ' . $cap['icon'] ?>"></i>
                            </span>

                            <div>
                                <strong><?= e($cap['title']) ?></strong>
                                <span><?= e($cap['text']) ?></span>
                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FEATURED EXPERIENCE — Cybersecurity
========================================================= -->

<section class="section section--dark" aria-labelledby="security-exp-heading">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-6">

                <div class="security-core" aria-hidden="true">

                    <div class="security-core__center">

                        <i class="fa-solid fa-shield-halved"></i>
                        <strong>Security</strong>
                        <span>Professional Foundation</span>

                    </div>


                    <div class="security-core__steps">

                        <?php foreach ($securityFoundation as $s): ?>

                            <div class="security-core__step">

                                <span><?= e($s['step']) ?></span>
                                <strong><?= e($s['title']) ?></strong>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <span class="section-label">Cybersecurity Experience</span>

                <h2 id="security-exp-heading" class="section-title">
                    Security as a professional foundation.
                </h2>

                <p class="lead-text">
                    Cybersecurity remains one of the central themes
                    connecting my education, professional work and
                    research.
                </p>

                <p>
                    My experience includes risk assessment, incident
                    management, security controls, network security,
                    research and the application of security principles
                    within broader ICT environments.
                </p>

                <p>
                    This security background also influences how I
                    approach software development, infrastructure and
                    digital transformation: security should be considered
                    from the beginning rather than added at the end.
                </p>

                <div class="mt-4">

                    <a href="<?= e(url('expertise.php#cybersecurity')) ?>" class="btn btn-primary">
                        Explore security expertise
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     PROFESSIONAL STRENGTHS
========================================================= -->

<section class="section" aria-labelledby="strengths-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Professional Strengths</span>

            <h2 id="strengths-heading" class="section-title">
                Beyond technical skills
            </h2>

            <p class="section-desc">
                Technology work also depends on communication,
                problem-solving, collaboration and the ability
                to adapt.
            </p>

        </header>


        <div class="row g-4">

            <?php foreach ($strengths as $strength): ?>

                <div class="col-md-6 col-lg-4">

                    <article class="strength-card">

                        <span class="strength-card__num">
                            <?= e($strength['number']) ?>
                        </span>

                        <span class="strength-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($strength['icon']) ?>"></i>
                        </span>

                        <h3><?= e($strength['title']) ?></h3>

                        <p><?= e($strength['text']) ?></p>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     CAREER PROGRESSION
========================================================= -->

<section class="section section--muted" aria-labelledby="progression-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Career Progression</span>

            <h2 id="progression-heading" class="section-title">
                Building a broader technology profile
            </h2>

        </header>


        <div class="progression-grid">

            <?php foreach ($progression as $index => $stage): ?>

                <div class="progression-step">

                    <span class="progression-step__num">
                        <?= e($stage['number']) ?>
                    </span>

                    <span class="progression-step__icon" aria-hidden="true">
                        <i class="fa-solid <?= e($stage['icon']) ?>"></i>
                    </span>

                    <span class="progression-step__period">
                        <?= e($stage['period']) ?>
                    </span>

                    <h3><?= e($stage['title']) ?></h3>

                    <p><?= e($stage['text']) ?></p>

                </div>

                <?php if ($index < count($progression) - 1): ?>

                    <div class="progression-arrow" aria-hidden="true">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     CTA
========================================================= -->

<section class="section section--cta">

    <div class="container">

        <div class="cta-card">

            <div class="cta-card__body">

                <span class="cta-eyebrow">
                    Next Opportunity
                </span>

                <h2>
                    Interested in working together?
                </h2>

                <p>
                    I'm interested in meaningful opportunities involving
                    cybersecurity, software development, IT infrastructure,
                    Data &amp; AI, research and technology innovation.
                </p>

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
                    Download CV
                </a>

            </div>

        </div>

    </div>

</section>


<?php require __DIR__ . '/partials/footer.php'; ?>