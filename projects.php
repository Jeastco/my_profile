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
    'title'       => 'Projects',
    'description' => 'Explore projects by Emmanuel Asituha across software development, cybersecurity, Data & AI, security research, infrastructure and digital transformation.',
    'slug'        => 'projects',
    'body_class'  => 'projects-page',
    'css'         => ['assets/css/projects.css'],
];

/* =====================================================================
   Content
   ===================================================================== */

$firstName = explode(' ', trim($config['name']))[0];
$lastName  = explode(' ', trim($config['name']))[1] ?? '';


/* -------- Filter categories -------- */

$filters = [
    ['key' => 'all',            'label' => 'All Projects',    'icon' => 'fa-layer-group'],
    ['key' => 'development',    'label' => 'Development',     'icon' => 'fa-code'],
    ['key' => 'cybersecurity',  'label' => 'Cybersecurity',   'icon' => 'fa-shield-halved'],
    ['key' => 'ai',             'label' => 'Data & AI',       'icon' => 'fa-brain'],
    ['key' => 'research',       'label' => 'Research',        'icon' => 'fa-microscope'],
    ['key' => 'infrastructure', 'label' => 'Infrastructure',  'icon' => 'fa-server'],
];


/* -------- Flagship projects -------- */

$flagshipProjects = [
    [
        'id'             => 'pigmaster',
        'categories'     => ['development', 'ai'],
        'name'           => 'PigMaster',
        'icon'           => 'fa-piggy-bank',
        'status'         => 'In Development',
        'status_class'   => 'status--building',
        'subtitle'       => 'Intelligent Pig Farm Management Platform',
        'summary'        => 'PigMaster is a digital farm-management application I am developing to help organize and manage pig-farming operations from a centralized platform.',
        'body'           => 'The platform is being designed to support animal records, breeding, health management, feeding, inventory, financial information, reporting and operational analytics.',
        'future'         => 'The longer-term direction includes Data & AI capabilities that transform farm records into useful insights and support better operational decision-making.',
        'capabilities'   => [
            ['icon' => 'fa-paw',           'label' => 'Pig Records'],
            ['icon' => 'fa-dna',           'label' => 'Breeding'],
            ['icon' => 'fa-heart-pulse',   'label' => 'Health'],
            ['icon' => 'fa-wheat-awn',     'label' => 'Feeding'],
            ['icon' => 'fa-boxes-stacked', 'label' => 'Inventory'],
            ['icon' => 'fa-chart-line',    'label' => 'Analytics'],
            ['icon' => 'fa-coins',         'label' => 'Finance'],
            ['icon' => 'fa-brain',         'label' => 'AI Integration'],
        ],
        'tags'           => ['Python', 'Django', 'PostgreSQL', 'SaaS', 'Data', 'AI Integration'],
        'cta_label'      => 'Follow build journal',
        'cta_link'       => 'blog.php',
        'visual'         => 'pigmaster-dashboard',
    ],
    [
        'id'             => 'sar-sec',
        'categories'     => ['cybersecurity', 'research'],
        'name'           => 'SAR-Sec',
        'icon'           => 'fa-shield-halved',
        'status'         => 'Postgraduate Research',
        'status_class'   => 'status--research',
        'subtitle'       => 'Security Protocol for Search & Rescue FANETs',
        'summary'        => 'SAR-Sec is the security protocol being developed through my postgraduate research on securing Search and Rescue Flying Ad Hoc Networks.',
        'body'           => 'The protocol addresses authentication, secure session establishment, ticket-based authorization, key management, secure data communication and node revocation in highly dynamic UAV environments.',
        'future'         => 'Its security design combines modern cryptographic mechanisms with network-level attack evaluation and NS-3 simulation.',
        'capabilities'   => [
            ['icon' => 'fa-id-card',      'label' => 'Registration'],
            ['icon' => 'fa-user-shield',  'label' => 'Authentication'],
            ['icon' => 'fa-ticket',       'label' => 'Ticketing'],
            ['icon' => 'fa-key',          'label' => 'Key Management'],
            ['icon' => 'fa-lock',         'label' => 'Encryption'],
            ['icon' => 'fa-ban',          'label' => 'Revocation'],
        ],
        'tags'           => ['FANET', 'ECDSA', 'ECDH', 'AES-GCM', 'HKDF', 'NS-3'],
        'cta_label'      => 'Explore SAR-Sec',
        'cta_link'       => 'research.php',
        'visual'         => 'sar-sec-network',
    ],
];


/* -------- Portfolio projects -------- */

$portfolioProjects = [
    [
        'categories'    => ['cybersecurity', 'research'],
        'icon'          => 'fa-signature',
        'type'          => 'CYBERSECURITY',
        'title'         => 'Packet Authentication Using Digital Signatures & Traffic Analysis',
        'text'          => 'My undergraduate final-year project explored packet authentication using digital signatures together with network traffic analysis to strengthen communication security.',
        'info'          => [
            ['label' => 'Focus',   'value' => 'Network Security'],
            ['label' => 'Area',    'value' => 'Digital Signatures'],
            ['label' => 'Analysis','value' => 'Network Traffic'],
        ],
        'tags'          => ['Cryptography', 'Packet Analysis', 'Network Security'],
    ],
    [
        'categories'    => ['infrastructure', 'cybersecurity'],
        'icon'          => 'fa-server',
        'type'          => 'INFRASTRUCTURE',
        'title'         => 'MERL Server Infrastructure',
        'text'          => 'Practical server infrastructure work involving Ubuntu Server, networking, secure remote access, web services, SSL/TLS and support for organizational information systems.',
        'info'          => [
            ['label' => 'Platform', 'value' => 'Ubuntu Server'],
            ['label' => 'Web',      'value' => 'Apache'],
            ['label' => 'Security', 'value' => 'SSL/TLS'],
        ],
        'tags'          => ['Ubuntu', 'Apache', 'Networking', 'TLS'],
    ],
    [
        'categories'    => ['infrastructure'],
        'icon'          => 'fa-brands fa-microsoft',
        'type'          => 'DIGITAL WORKPLACE',
        'title'         => 'Microsoft 365 Rollout & Support',
        'text'          => 'Supported organizational adoption of Microsoft 365 technologies as part of broader ICT modernization and digital workplace improvements.',
        'info'          => [
            ['label' => 'Area',        'value' => 'Productivity'],
            ['label' => 'Environment', 'value' => 'Microsoft 365'],
            ['label' => 'Focus',       'value' => 'ICT Modernization'],
        ],
        'tags'          => ['Microsoft 365', 'Administration', 'Support'],
    ],
    [
        'categories'    => ['development', 'infrastructure'],
        'icon'          => 'fa-globe',
        'type'          => 'WEB DEVELOPMENT',
        'title'         => 'Organizational Website Development',
        'text'          => 'Website development and improvement work focused on content structure, responsive interfaces, maintainability and production deployment.',
        'info'          => [
            ['label' => 'Frontend',   'value' => 'HTML / CSS / JS'],
            ['label' => 'Backend',    'value' => 'PHP'],
            ['label' => 'Deployment', 'value' => 'cPanel'],
        ],
        'tags'          => ['HTML', 'CSS', 'JavaScript', 'PHP'],
    ],
    [
        'categories'    => ['cybersecurity'],
        'icon'          => 'fa-scale-balanced',
        'type'          => 'GRC',
        'title'         => 'Security Risk & Control Assessment',
        'text'          => 'Security assessment work applying structured risk-management approaches and established cybersecurity frameworks to identify threats, vulnerabilities and appropriate controls.',
        'info'          => [
            ['label' => 'Framework', 'value' => 'ISO/IEC 27001'],
            ['label' => 'Framework', 'value' => 'NIST CSF'],
            ['label' => 'Focus',     'value' => 'Risk & Controls'],
        ],
        'tags'          => ['GRC', 'Risk', 'ISO 27001', 'NIST'],
    ],
    [
        'categories'    => ['research', 'cybersecurity'],
        'icon'          => 'fa-network-wired',
        'type'          => 'SIMULATION',
        'title'         => 'FANET Security Simulation Environment',
        'text'          => 'An NS-3 based simulation environment used to evaluate secure communication in dynamic UAV networks under different mobility, network and attack conditions.',
        'info'          => [
            ['label' => 'Simulator',  'value' => 'NS-3'],
            ['label' => 'Network',    'value' => 'FANET'],
            ['label' => 'Evaluation', 'value' => 'Security & Performance'],
        ],
        'tags'          => ['NS-3', 'UAV', 'OLSR', 'AODV'],
    ],
];


/* -------- Process steps -------- */

$process = [
    ['number' => '01', 'icon' => 'fa-magnifying-glass',    'title' => 'Understand', 'text' => 'Identify the real problem, users, requirements and constraints.'],
    ['number' => '02', 'icon' => 'fa-compass-drafting',    'title' => 'Design',     'text' => 'Define architecture, workflows, data structures and security requirements.'],
    ['number' => '03', 'icon' => 'fa-code',                'title' => 'Build',      'text' => 'Develop the system using appropriate technologies and maintainable structures.'],
    ['number' => '04', 'icon' => 'fa-shield-halved',       'title' => 'Secure',     'text' => 'Validate controls, access, data protection and security assumptions.'],
    ['number' => '05', 'icon' => 'fa-vial-circle-check',   'title' => 'Test',       'text' => 'Evaluate functionality, reliability, security and performance.'],
    ['number' => '06', 'icon' => 'fa-arrow-trend-up',      'title' => 'Improve',    'text' => 'Use results and feedback to refine the solution continuously.'],
];


/* -------- Tech stack -------- */

$techStack = [
    ['icon' => 'fa-code',          'title' => 'Development',     'items' => ['Python', 'Django', 'PHP', 'HTML', 'CSS', 'JavaScript']],
    ['icon' => 'fa-database',      'title' => 'Data',            'items' => ['PostgreSQL', 'MySQL', 'Data Analysis', 'Analytics']],
    ['icon' => 'fa-shield-halved', 'title' => 'Security',        'items' => ['ECDSA', 'ECDH', 'AES-GCM', 'HMAC', 'HKDF']],
    ['icon' => 'fa-server',        'title' => 'Infrastructure',  'items' => ['Ubuntu', 'Apache', 'Microsoft 365', 'Docker', 'Virtualization']],
    ['icon' => 'fa-network-wired', 'title' => 'Research',        'items' => ['NS-3', 'FANET', 'OLSR', 'AODV', 'Wireshark']],
    ['icon' => 'fa-brain',         'title' => 'Emerging',        'items' => ['Data & AI', 'AI Integration', 'Intelligent Analytics', 'Automation']],
];


/* -------- Next projects -------- */

$nextProjects = [
    ['icon' => 'fa-piggy-bank',     'title' => 'PigMaster',      'detail' => 'Application development & AI integration'],
    ['icon' => 'fa-shield-halved',  'title' => 'SAR-Sec',        'detail' => 'Simulation, attacks & evaluation'],
    ['icon' => 'fa-brain',          'title' => 'Data & AI',      'detail' => 'Intelligent application capabilities'],
    ['icon' => 'fa-lock',           'title' => 'Security Tools', 'detail' => 'Defensive tooling & automation'],
];


/* =====================================================================
   Render
   ===================================================================== */

require __DIR__ . '/partials/header.php';
?>


<!-- =========================================================
     HERO
========================================================= -->

<section class="projects-hero" aria-labelledby="projects-hero-heading">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="badge-soft">
                    <span class="badge-dot" aria-hidden="true"></span>
                    Projects &amp; Solutions
                </span>


                <h1 id="projects-hero-heading" class="projects-hero__title">
                    Turning ideas into
                    <span class="text-accent">working systems.</span>
                </h1>


                <p class="projects-hero__lead">
                    A selection of projects spanning software development,
                    cybersecurity, Data &amp; AI, security research, network
                    simulation, infrastructure and digital transformation.
                </p>


                <p class="projects-hero__text">
                    My projects reflect how I approach technology:
                    understand the problem, design the architecture,
                    build the solution, secure it and continuously
                    improve it.
                </p>


                <div class="projects-hero__actions">

                    <a href="#featured" class="btn btn-primary btn-lg">
                        Explore projects
                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    </a>

                    <a href="<?= e(url('research.php')) ?>" class="btn btn-outline-primary btn-lg">
                        View research
                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="project-terminal" aria-hidden="true">

                    <div class="project-terminal__head">

                        <div class="window-dots">
                            <span></span><span></span><span></span>
                        </div>

                        <span>emmanuel/projects</span>

                    </div>


                    <div class="project-terminal__body">

                        <div class="terminal-line">
                            <span class="terminal-prompt">$</span>
                            <span>list --projects</span>
                        </div>


                        <div class="terminal-project">
                            <i class="fa-solid fa-piggy-bank"></i>
                            <span>PigMaster</span>
                            <small>Building</small>
                        </div>

                        <div class="terminal-project">
                            <i class="fa-solid fa-shield-halved"></i>
                            <span>SAR-Sec</span>
                            <small>Research</small>
                        </div>

                        <div class="terminal-project">
                            <i class="fa-solid fa-signature"></i>
                            <span>Packet Authentication</span>
                            <small>Security</small>
                        </div>

                        <div class="terminal-project">
                            <i class="fa-solid fa-server"></i>
                            <span>ICT Infrastructure</span>
                            <small>Operations</small>
                        </div>

                        <div class="terminal-line terminal-success">
                            <span class="terminal-prompt">✓</span>
                            <span>Systems ready.</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FILTER TABS
========================================================= -->

<section class="filter-section" aria-label="Project filters">

    <div class="container">

        <div class="filter-tabs" role="tablist">

            <?php foreach ($filters as $index => $filter): ?>

                <button
                    type="button"
                    class="filter-tab <?= $index === 0 ? 'active' : '' ?>"
                    data-filter="<?= e($filter['key']) ?>"
                    role="tab"
                    aria-selected="<?= $index === 0 ? 'true' : 'false' ?>"
                >
                    <i class="fa-solid <?= e($filter['icon']) ?>" aria-hidden="true"></i>
                    <span><?= e($filter['label']) ?></span>
                </button>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     FEATURED PROJECTS
========================================================= -->

<section
    class="section"
    id="featured"
    aria-labelledby="featured-heading"
>

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Featured Work</span>

            <h2 id="featured-heading" class="section-title">
                Projects I'm building &amp; researching
            </h2>

            <p class="section-desc">
                Two major projects currently represent the intersection
                of my software-development, cybersecurity, research
                and emerging-technology work.
            </p>

        </header>


        <?php foreach ($flagshipProjects as $index => $project): ?>

            <article
                class="flagship <?= $index % 2 === 1 ? 'flagship--reverse' : '' ?>"
                data-categories="<?= e(implode(' ', $project['categories'])) ?>"
            >

                <div class="row g-5 align-items-center">


                    <!-- =================================================
                         VISUAL
                    ================================================== -->

                    <?php if ($project['visual'] === 'pigmaster-dashboard'): ?>

                        <div class="col-lg-6 <?= $index % 2 === 1 ? 'order-lg-2' : '' ?>">

                            <div class="pigmaster-dashboard" aria-hidden="true">

                                <div class="pigmaster-dashboard__head">
                                    <div>
                                        <i class="fa-solid fa-piggy-bank"></i>
                                        <strong>PigMaster</strong>
                                    </div>
                                    <span>Farm Overview</span>
                                </div>


                                <div class="pigmaster-dashboard__stats">

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


                                <div class="pigmaster-dashboard__chart">

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


                                <div class="pigmaster-dashboard__ai">
                                    <i class="fa-solid fa-brain"></i>
                                    <div>
                                        <span>INTELLIGENCE LAYER</span>
                                        <strong>AI-Powered Insights</strong>
                                    </div>
                                </div>

                            </div>

                        </div>

                    <?php else: ?>

                        <div class="col-lg-6 <?= $index % 2 === 1 ? 'order-lg-2' : '' ?>">

                            <div class="sar-sec-visual" aria-hidden="true">

                                <div class="sar-sec-visual__core">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <strong>SAR-Sec</strong>
                                </div>

                                <div class="sar-sec-visual__node sar-sec-visual__node--1">
                                    <i class="fa-solid fa-plane"></i>
                                    <span>UAV</span>
                                </div>

                                <div class="sar-sec-visual__node sar-sec-visual__node--2">
                                    <i class="fa-solid fa-tower-broadcast"></i>
                                    <span>GCS</span>
                                </div>

                                <div class="sar-sec-visual__node sar-sec-visual__node--3">
                                    <i class="fa-solid fa-user-shield"></i>
                                    <span>AS</span>
                                </div>

                                <div class="sar-sec-visual__node sar-sec-visual__node--4">
                                    <i class="fa-solid fa-ticket"></i>
                                    <span>TA</span>
                                </div>

                                <div class="sar-sec-visual__node sar-sec-visual__node--5">
                                    <i class="fa-solid fa-key"></i>
                                    <span>KMS</span>
                                </div>

                            </div>

                        </div>

                    <?php endif; ?>



                    <!-- =================================================
                         CONTENT
                    ================================================== -->

                    <div class="col-lg-6 <?= $index % 2 === 1 ? 'order-lg-1' : '' ?>">

                        <div class="flagship__title">

                            <span class="flagship__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($project['icon']) ?>"></i>
                            </span>

                            <div>

                                <span class="status-pill <?= e($project['status_class']) ?>">
                                    <span class="status-dot" aria-hidden="true"></span>
                                    <?= e($project['status']) ?>
                                </span>

                                <h3><?= e($project['name']) ?></h3>

                                <p class="flagship__subtitle">
                                    <?= e($project['subtitle']) ?>
                                </p>

                            </div>

                        </div>


                        <p class="lead-text"><?= e($project['summary']) ?></p>

                        <p><?= e($project['body']) ?></p>

                        <p class="flagship__future"><?= e($project['future']) ?></p>


                        <div class="capability-grid">

                            <?php foreach ($project['capabilities'] as $cap): ?>

                                <div class="capability-item">

                                    <i class="fa-solid <?= e($cap['icon']) ?>" aria-hidden="true"></i>

                                    <span><?= e($cap['label']) ?></span>

                                </div>

                            <?php endforeach; ?>

                        </div>


                        <div class="tag-row mt-4">

                            <?php foreach ($project['tags'] as $tag): ?>

                                <span class="chip chip--accent"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>


                        <div class="mt-4">

                            <a
                                href="<?= e(url($project['cta_link'])) ?>"
                                class="btn btn-primary"
                            >
                                <?= e($project['cta_label']) ?>
                                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

</section>



<!-- =========================================================
     PORTFOLIO GRID
========================================================= -->

<section class="section section--muted" aria-labelledby="portfolio-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Project Portfolio</span>

            <h2 id="portfolio-heading" class="section-title">
                More technical work
            </h2>

            <p class="section-desc">
                Additional work across cybersecurity, development,
                infrastructure and academic projects.
            </p>

        </header>


        <div class="row g-4" id="portfolioGrid">

            <?php foreach ($portfolioProjects as $project): ?>

                <div
                    class="col-md-6 col-lg-4 portfolio-item"
                    data-categories="<?= e(implode(' ', $project['categories'])) ?>"
                >

                    <article class="portfolio-card">

                        <header class="portfolio-card__head">

                            <span class="portfolio-card__icon" aria-hidden="true">
                                <i class="<?= str_contains($project['icon'], 'fa-brands') ? $project['icon'] : 'fa-solid ' . $project['icon'] ?>"></i>
                            </span>

                            <span class="portfolio-card__type">
                                <?= e($project['type']) ?>
                            </span>

                        </header>

                        <h3><?= e($project['title']) ?></h3>

                        <p><?= e($project['text']) ?></p>


                        <div class="portfolio-card__info">

                            <?php foreach ($project['info'] as $info): ?>

                                <div>
                                    <span><?= e($info['label']) ?></span>
                                    <strong><?= e($info['value']) ?></strong>
                                </div>

                            <?php endforeach; ?>

                        </div>


                        <div class="tag-row">

                            <?php foreach ($project['tags'] as $tag): ?>

                                <span class="chip"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>


        <!-- Empty state (hidden by default) -->

        <div class="empty-state" id="projectEmpty" hidden>

            <i class="fa-solid fa-folder-open" aria-hidden="true"></i>

            <h3>No projects found</h3>

            <p>Try a different category filter.</p>

        </div>

    </div>

</section>



<!-- =========================================================
     PROCESS
========================================================= -->

<section class="section" aria-labelledby="process-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Development Approach</span>

            <h2 id="process-heading" class="section-title">
                How I approach a project
            </h2>

            <p class="section-desc">
                A project is more than writing code. My approach
                connects requirements, architecture, implementation,
                security and continuous improvement.
            </p>

        </header>


        <div class="process-grid">

            <?php foreach ($process as $index => $step): ?>

                <div class="process-step">

                    <span class="process-step__num">
                        <?= e($step['number']) ?>
                    </span>

                    <span class="process-step__icon" aria-hidden="true">
                        <i class="fa-solid <?= e($step['icon']) ?>"></i>
                    </span>

                    <h3><?= e($step['title']) ?></h3>

                    <p><?= e($step['text']) ?></p>

                </div>

                <?php if ($index < count($process) - 1): ?>

                    <div class="process-connector" aria-hidden="true"></div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     TECH STACK
========================================================= -->

<section class="section section--muted" aria-labelledby="stack-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Technology Stack</span>

            <h2 id="stack-heading" class="section-title">
                Technologies behind my projects
            </h2>

        </header>


        <div class="row g-4">

            <?php foreach ($techStack as $group): ?>

                <div class="col-md-6 col-lg-4">

                    <div class="stack-card">

                        <div class="stack-card__head">

                            <span class="stack-card__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($group['icon']) ?>"></i>
                            </span>

                            <h3><?= e($group['title']) ?></h3>

                        </div>

                        <div class="stack-card__items">

                            <?php foreach ($group['items'] as $item): ?>

                                <span class="stack-chip"><?= e($item) ?></span>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     PHILOSOPHY
========================================================= -->

<section class="section--dark">

    <div class="container">

        <div class="project-philosophy">

            <span class="project-philosophy__icon" aria-hidden="true">
                <i class="fa-solid fa-lightbulb"></i>
            </span>

            <div>

                <span class="section-label">Project Philosophy</span>

                <h2>Technology should solve something.</h2>

                <p>
                    I'm most interested in projects where technology moves
                    beyond experimentation and becomes a practical solution —
                    whether that means securing UAV communication, improving
                    farm management, strengthening infrastructure or
                    automating a process.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     WHAT'S NEXT
========================================================= -->

<section class="section" aria-labelledby="next-heading">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-6">

                <span class="section-label">What's Next</span>

                <h2 id="next-heading" class="section-title">
                    Continuing to build
                </h2>

                <p class="lead-text">
                    My project portfolio is continuously evolving.
                </p>

                <p>
                    Current priorities include advancing PigMaster,
                    completing SAR-Sec evaluation, expanding my Data &amp; AI
                    capabilities and developing more security-focused
                    applications and automation.
                </p>

                <div class="mt-4">

                    <a href="<?= e(url('blog.php')) ?>" class="btn btn-primary">
                        Follow my progress
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="next-grid">

                    <?php foreach ($nextProjects as $item): ?>

                        <div class="next-card">

                            <span class="next-card__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($item['icon']) ?>"></i>
                            </span>

                            <div>
                                <strong><?= e($item['title']) ?></strong>
                                <span><?= e($item['detail']) ?></span>
                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

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

                <span class="cta-eyebrow">Let's Build</span>

                <h2>Have an interesting technology problem?</h2>

                <p>
                    I'm interested in conversations around cybersecurity,
                    software development, infrastructure, research,
                    Data &amp; AI and practical digital solutions.
                </p>

            </div>

            <div class="cta-card__actions">

                <a href="<?= e(url('contact.php')) ?>" class="btn btn-light btn-lg">
                    Start a conversation
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>

                <a href="<?= e(url('research.php')) ?>" class="btn btn-outline-light btn-lg">
                    Explore research
                </a>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FILTER SCRIPT
========================================================= -->

<script>
document.addEventListener("DOMContentLoaded", () => {

    const tabs         = document.querySelectorAll(".filter-tab");
    const flagshipEls  = document.querySelectorAll(".flagship");
    const portfolioEls = document.querySelectorAll(".portfolio-item");
    const emptyState   = document.getElementById("projectEmpty");

    if (!tabs.length) return;

    const applyFilter = (filter) => {

        let visibleCount = 0;

        /* Flagship projects */
        flagshipEls.forEach((el) => {
            const cats = (el.dataset.categories || "").toLowerCase();
            const show = filter === "all" || cats.split(/\s+/).includes(filter);
            el.style.display = show ? "" : "none";
            if (show) visibleCount++;
        });

        /* Portfolio projects */
        portfolioEls.forEach((el) => {
            const cats = (el.dataset.categories || "").toLowerCase();
            const show = filter === "all" || cats.split(/\s+/).includes(filter);
            el.style.display = show ? "" : "none";
            if (show) visibleCount++;
        });

        /* Empty state */
        if (emptyState) {
            emptyState.hidden = visibleCount !== 0;
        }
    };

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {

            tabs.forEach((t) => {
                t.classList.remove("active");
                t.setAttribute("aria-selected", "false");
            });

            tab.classList.add("active");
            tab.setAttribute("aria-selected", "true");

            applyFilter(tab.dataset.filter || "all");
        });
    });
});
</script>


<?php require __DIR__ . '/partials/footer.php'; ?>