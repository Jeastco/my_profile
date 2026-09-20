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
    'title'       => 'Expertise',
    'description' => 'Cybersecurity, software development, Data & AI, IT infrastructure, GRC and security research — the core technical capabilities Emmanuel Asituha works across.',
    'slug'        => 'expertise',
    'body_class'  => 'expertise-page',
    'css'         => ['assets/css/expertise.css'],
];

/* =====================================================================
   Content
   ===================================================================== */

$firstName = explode(' ', trim($config['name']))[0];
$lastName  = explode(' ', trim($config['name']))[1] ?? '';


/* -------- Capability strip -------- */

$capabilityStrip = [
    ['icon' => 'fa-shield-halved', 'title' => 'Cybersecurity',   'sub' => 'Protect'],
    ['icon' => 'fa-code',          'title' => 'Development',     'sub' => 'Build'],
    ['icon' => 'fa-brain',         'title' => 'Data & AI',       'sub' => 'Analyse'],
    ['icon' => 'fa-server',        'title' => 'Infrastructure',  'sub' => 'Operate'],
    ['icon' => 'fa-microscope',    'title' => 'Research',        'sub' => 'Innovate'],
];


/* -------- Six expertise domains -------- */

$domains = [
    [
        'id'       => 'cybersecurity',
        'number'   => '01',
        'category' => 'SECURITY',
        'icon'     => 'fa-shield-halved',
        'title'    => 'Cybersecurity',
        'lead'     => 'Protecting systems, networks and digital assets.',
        'text'     => 'Preventive, detective and responsive security controls applied across people, processes and technology.',
        'items'    => [
            'Information Security',
            'Vulnerability Assessment',
            'Network Security',
            'Threat Analysis',
            'Incident Response',
            'Security Hardening',
        ],
        'tags'     => ['NIST CSF', 'ISO 27001', 'CIS Controls', 'OWASP'],
    ],
    [
        'id'       => 'development',
        'number'   => '02',
        'category' => 'ENGINEERING',
        'icon'     => 'fa-code',
        'title'    => 'Software Development',
        'lead'     => 'Building applications that solve real problems.',
        'text'     => 'Designing and developing web applications, backend systems, databases and automation.',
        'items'    => [
            'Web Application Development',
            'Backend Development',
            'Database Design',
            'REST / API Concepts',
            'Automation',
            'Secure Development',
        ],
        'tags'     => ['Python', 'Django', 'PHP', 'JavaScript', 'SQL'],
    ],
    [
        'id'       => 'data-ai',
        'number'   => '03',
        'category' => 'EMERGING TECHNOLOGY',
        'icon'     => 'fa-brain',
        'title'    => 'Data & Artificial Intelligence',
        'lead'     => 'Turning data into useful intelligence.',
        'text'     => 'Data analysis and AI capabilities applied to software, analytics and decision-support systems.',
        'items'    => [
            'Data Analysis',
            'Data Processing',
            'Data Visualization',
            'Artificial Intelligence',
            'Predictive Concepts',
            'AI Integration',
        ],
        'tags'     => ['Data', 'AI', 'Python', 'Analytics'],
    ],
    [
        'id'       => 'infrastructure',
        'number'   => '04',
        'category' => 'INFRASTRUCTURE',
        'icon'     => 'fa-server',
        'title'    => 'Systems & Network Infrastructure',
        'lead'     => 'Supporting the infrastructure behind modern organizations.',
        'text'     => 'Administering and securing the systems, networks and services that keep technology environments operating.',
        'items'    => [
            'Linux Administration',
            'Windows Environments',
            'Network Administration',
            'Server Management',
            'Microsoft 365',
            'Virtualization',
        ],
        'tags'     => ['Ubuntu', 'Windows', 'Microsoft 365', 'Networking'],
    ],
    [
        'id'       => 'grc',
        'number'   => '05',
        'category' => 'GOVERNANCE',
        'icon'     => 'fa-scale-balanced',
        'title'    => 'Governance, Risk & Compliance',
        'lead'     => 'Connecting security with organizational risk.',
        'text'     => 'Aligning technical controls with policy, governance and compliance requirements.',
        'items'    => [
            'Security Risk Assessment',
            'Information Security Policies',
            'Security Controls',
            'Compliance Documentation',
            'Security Governance',
            'Data Protection Principles',
        ],
        'tags'     => ['ISO/IEC 27001', 'NIST CSF', 'CIS', 'Risk'],
    ],
    [
        'id'       => 'research',
        'number'   => '06',
        'category' => 'RESEARCH',
        'icon'     => 'fa-microscope',
        'title'    => 'Cybersecurity Research',
        'lead'     => 'Investigating security beyond conventional networks.',
        'text'     => 'Research covering authentication, cryptography, network security and emerging communication environments.',
        'items'    => [
            'FANET Security',
            'VANET Security',
            'Authentication Protocols',
            'Cryptographic Protocols',
            'Network Simulation',
            'Security Evaluation',
        ],
        'tags'     => ['FANET', 'NS-3', 'Cryptography', 'UAV Security'],
    ],
];


/* -------- Deep dive sections -------- */

$deepDives = [
    [
        'id'         => 'cybersecurity-deep',
        'label'      => 'Cybersecurity',
        'icon'       => 'fa-shield-halved',
        'title'      => 'Protecting systems from risk to response.',
        'lead'       => 'Cybersecurity forms the foundation of my professional background.',
        'paragraphs' => [
            'My security work covers both technical and organizational security — identifying vulnerabilities, assessing risk, securing networks and systems, applying security controls and supporting incident response processes.',
            'I also approach software and infrastructure with security-by-design principles rather than treating cybersecurity as a separate layer added after implementation.',
        ],
        'tags'       => ['Defensive Security', 'Risk Assessment', 'Hardening', 'Incident Response'],
        'cycle'      => [
            ['step' => '01', 'title' => 'Identify', 'text' => 'Assets, vulnerabilities & risks'],
            ['step' => '02', 'title' => 'Protect',  'text' => 'Controls, hardening & access security'],
            ['step' => '03', 'title' => 'Detect',   'text' => 'Monitoring & threat identification'],
            ['step' => '04', 'title' => 'Respond',  'text' => 'Incident management & containment'],
            ['step' => '05', 'title' => 'Recover',  'text' => 'Restoration & continuous improvement'],
        ],
    ],
    [
        'id'         => 'development-deep',
        'label'      => 'Software Development',
        'icon'       => 'fa-code',
        'title'      => 'From identifying problems to building solutions.',
        'lead'       => 'Development complements my cybersecurity background by allowing me to implement the systems I secure.',
        'paragraphs' => [
            'My development interests include Python, Django, PHP, databases, web technologies, automation and secure application design.',
            'PigMaster is one example of this direction — combining software development, database architecture, business processes and future AI integration into a practical farm management platform.',
        ],
        'tags'       => ['Python', 'Django', 'PHP', 'Databases', 'Secure Design'],
        'cta'        => [
            'label' => 'View development projects',
            'link'  => 'projects.php',
        ],
    ],
    [
        'id'         => 'data-ai-deep',
        'label'      => 'Data & AI',
        'icon'       => 'fa-brain',
        'title'      => 'Turning data into useful intelligence.',
        'lead'       => 'Data & AI represents an expanding part of my technical development.',
        'paragraphs' => [
            'I am building skills around data analysis, analytics and artificial intelligence, with a particular interest in applying these capabilities to real applications rather than treating AI as an isolated technology.',
            'Areas of interest include intelligent application features, operational analytics, decision-support systems and the intersection between AI and cybersecurity.',
        ],
        'tags'       => ['Data Analysis', 'AI', 'Python', 'Analytics', 'AI Integration'],
        'flow'       => [
            ['icon' => 'fa-database',     'label' => 'Data'],
            ['icon' => 'fa-chart-column', 'label' => 'Analysis'],
            ['icon' => 'fa-gears',        'label' => 'Intelligence'],
            ['icon' => 'fa-lightbulb',    'label' => 'Decisions'],
        ],
    ],
    [
        'id'         => 'infrastructure-deep',
        'label'      => 'Infrastructure',
        'icon'       => 'fa-server',
        'title'      => 'The systems behind the applications.',
        'lead'       => 'Applications depend on reliable infrastructure.',
        'paragraphs' => [
            'My experience includes the systems, networks and services that keep technology environments operating — from Linux and Windows systems through to Microsoft 365 and virtualization.',
            'I approach infrastructure with the same security-first mindset I apply to software: harden what runs, monitor what matters and plan for continuity.',
        ],
        'tags'       => ['Linux', 'Windows', 'Microsoft 365', 'Networking', 'Virtualization'],
        'cards'      => [
            ['icon' => 'fa-brands fa-linux',      'title' => 'Linux Systems',       'text' => 'Server administration, configuration, services and security hardening.'],
            ['icon' => 'fa-network-wired',        'title' => 'Networking',          'text' => 'TCP/IP, routing, troubleshooting, wireless networks and secure connectivity.'],
            ['icon' => 'fa-brands fa-microsoft',  'title' => 'Microsoft Ecosystem', 'text' => 'Microsoft 365 administration, Windows environments and endpoint management.'],
            ['icon' => 'fa-cloud',                'title' => 'Virtualization & Cloud', 'text' => 'Virtual environments, containers concepts and modern deployment approaches.'],
        ],
    ],
    [
        'id'         => 'grc-deep',
        'label'      => 'Governance, Risk & Compliance',
        'icon'       => 'fa-scale-balanced',
        'title'      => 'Connecting security with organizational risk.',
        'lead'       => 'Effective cybersecurity requires more than technical controls.',
        'paragraphs' => [
            'Organizations also need governance, policies, risk-management processes, documentation and appropriate controls to manage information-security risk consistently.',
            'My GRC interests include ISO/IEC 27001, NIST CSF, CIS Controls, risk assessment, security policies, compliance documentation and data-protection principles.',
        ],
        'frameworks' => [
            ['code' => 'ISO',    'name' => 'ISO/IEC 27001', 'sub' => 'Information Security Management'],
            ['code' => 'NIST',   'name' => 'NIST CSF',      'sub' => 'Cybersecurity Risk Management'],
            ['code' => 'CIS',    'name' => 'CIS Controls',  'sub' => 'Security Best Practices'],
            ['code' => 'OWASP',  'name' => 'OWASP',         'sub' => 'Application Security'],
        ],
    ],
    [
        'id'         => 'research-deep',
        'label'      => 'Cybersecurity Research',
        'icon'       => 'fa-microscope',
        'title'      => 'Investigating security beyond conventional networks.',
        'lead'       => 'My research focuses on securing dynamic and emerging communication environments.',
        'paragraphs' => [
            'My current postgraduate work focuses on Search and Rescue Flying Ad Hoc Networks and the design of an efficient authentication and secure communication protocol.',
            'This work combines authentication, cryptography, key management, threat modelling, network simulation and security-performance evaluation.',
        ],
        'tags'       => ['ECDSA', 'ECDH', 'AES-GCM', 'HKDF', 'NS-3'],
        'cta'        => [
            'label' => 'Explore research',
            'link'  => 'research.php',
        ],
    ],
];


/* -------- Tech stack -------- */

$techStack = [
    [
        'icon'  => 'fa-code',
        'title' => 'Development',
        'items' => ['Python', 'Django', 'PHP', 'HTML5', 'CSS3', 'JavaScript', 'MySQL', 'PostgreSQL'],
    ],
    [
        'icon'  => 'fa-shield-halved',
        'title' => 'Security',
        'items' => ['Wireshark', 'ISO/IEC 27001', 'NIST CSF', 'CIS Controls', 'OWASP', 'Cryptography', '2FA'],
    ],
    [
        'icon'  => 'fa-server',
        'title' => 'Systems',
        'items' => ['Linux', 'Ubuntu', 'Windows', 'Microsoft 365', 'Active Directory', 'Virtualization'],
    ],
    [
        'icon'  => 'fa-network-wired',
        'title' => 'Networking',
        'items' => ['TCP/IP', 'Routing', 'Switching', 'Wireless', 'Network Security', 'Packet Analysis'],
    ],
    [
        'icon'  => 'fa-microscope',
        'title' => 'Research',
        'items' => ['NS-3', 'FANET', 'VANET', 'ECDSA', 'ECDH', 'AES-GCM', 'HKDF-SHA256'],
    ],
    [
        'icon'  => 'fa-gears',
        'title' => 'Platforms & DevOps',
        'items' => ['Git', 'Docker', 'Kubernetes', 'Apache', 'cPanel', 'SSL/TLS'],
    ],
];


/* -------- Working principles -------- */

$principles = [
    [
        'number' => '01',
        'icon'   => 'fa-shield-halved',
        'title'  => 'Secure by Design',
        'text'   => 'Security requirements should be considered throughout architecture and development.',
    ],
    [
        'number' => '02',
        'icon'   => 'fa-bullseye',
        'title'  => 'Problem First',
        'text'   => 'Understand the actual problem before selecting the technology used to solve it.',
    ],
    [
        'number' => '03',
        'icon'   => 'fa-layer-group',
        'title'  => 'Think in Systems',
        'text'   => 'Applications, users, infrastructure, data and security are interconnected.',
    ],
    [
        'number' => '04',
        'icon'   => 'fa-arrow-trend-up',
        'title'  => 'Improve Continuously',
        'text'   => 'Build, measure, learn and improve as requirements and technologies evolve.',
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

<section class="expertise-hero" aria-labelledby="expertise-hero-heading">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="badge-soft">
                    <span class="badge-dot" aria-hidden="true"></span>
                    Technical Expertise
                </span>


                <h1 id="expertise-hero-heading" class="expertise-hero__title">
                    Technology expertise with
                    <span class="text-accent">security at the core.</span>
                </h1>


                <p class="expertise-hero__lead">
                    My expertise combines cybersecurity, software
                    development, Data &amp; AI, IT infrastructure,
                    governance and security research.
                </p>


                <p class="expertise-hero__text">
                    This multidisciplinary approach lets me understand
                    technology from several perspectives — how it is
                    built, how it operates, how it can fail, how it
                    should be protected and how it can be improved.
                </p>


                <div class="expertise-hero__actions">

                    <a href="#domains" class="btn btn-primary btn-lg">
                        Explore expertise
                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    </a>

                    <a href="<?= e(url('projects.php')) ?>" class="btn btn-outline-primary btn-lg">
                        View my work
                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="expertise-orbit" aria-hidden="true">

                    <div class="expertise-orbit__core">
                        <i class="fa-solid fa-layer-group"></i>
                        <strong>Technology</strong>
                        <span>Integrated Expertise</span>
                    </div>


                    <div class="expertise-orbit__item expertise-orbit__item--security">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Security</span>
                    </div>

                    <div class="expertise-orbit__item expertise-orbit__item--development">
                        <i class="fa-solid fa-code"></i>
                        <span>Development</span>
                    </div>

                    <div class="expertise-orbit__item expertise-orbit__item--ai">
                        <i class="fa-solid fa-brain"></i>
                        <span>Data &amp; AI</span>
                    </div>

                    <div class="expertise-orbit__item expertise-orbit__item--infrastructure">
                        <i class="fa-solid fa-server"></i>
                        <span>Infrastructure</span>
                    </div>

                    <div class="expertise-orbit__item expertise-orbit__item--research">
                        <i class="fa-solid fa-microscope"></i>
                        <span>Research</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     CAPABILITY STRIP
========================================================= -->

<section class="capability-strip" aria-label="Capability areas">

    <div class="container">

        <div class="row g-3">

            <?php foreach ($capabilityStrip as $item): ?>

                <div class="col-6 col-md-4 col-lg">

                    <div class="capability-item">

                        <span class="capability-item__icon" aria-hidden="true">
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
     DOMAINS GRID
========================================================= -->

<section class="section" id="domains" aria-labelledby="domains-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Core Expertise</span>

            <h2 id="domains-heading" class="section-title">
                Six interconnected areas
            </h2>

            <p class="section-desc">
                Each domain stands on its own — but they're strongest
                when applied together.
            </p>

        </header>


        <div class="row g-4">

            <?php foreach ($domains as $domain): ?>

                <div class="col-md-6 col-lg-4">

                    <a
                        href="#<?= e($domain['id']) ?>"
                        class="domain-card"
                    >

                        <div class="domain-card__top">

                            <span class="domain-card__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($domain['icon']) ?>"></i>
                            </span>

                            <span class="domain-card__number">
                                <?= e($domain['number']) ?>
                            </span>

                        </div>

                        <p class="domain-card__category">
                            <?= e($domain['category']) ?>
                        </p>

                        <h3><?= e($domain['title']) ?></h3>

                        <p class="domain-card__lead">
                            <?= e($domain['lead']) ?>
                        </p>

                        <p class="domain-card__text">
                            <?= e($domain['text']) ?>
                        </p>

                        <div class="domain-card__tags">

                            <?php foreach (array_slice($domain['tags'], 0, 3) as $tag): ?>

                                <span class="chip"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                        <span class="domain-card__cta">
                            Explore
                            <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                        </span>

                    </a>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     DEEP DIVES — one per domain
========================================================= -->

<?php foreach ($deepDives as $index => $dive): ?>

    <section
        class="section <?= $index % 2 === 0 ? 'section--muted' : '' ?>"
        id="<?= e($dive['id']) ?>"
        aria-labelledby="<?= e($dive['id']) ?>-heading"
    >

        <div class="container">

            <!-- =====================================================
                 Cybersecurity — cycle layout
            ====================================================== -->

            <?php if (!empty($dive['cycle'])): ?>

                <div class="row g-5 align-items-center">

                    <div class="col-lg-5">

                        <span class="section-label">
                            <i class="fa-solid <?= e($dive['icon']) ?>"></i>
                            <?= e($dive['label']) ?>
                        </span>

                        <h2 id="<?= e($dive['id']) ?>-heading" class="section-title">
                            <?= e($dive['title']) ?>
                        </h2>

                        <p class="lead-text"><?= e($dive['lead']) ?></p>

                        <?php foreach ($dive['paragraphs'] as $p): ?>

                            <p><?= e($p) ?></p>

                        <?php endforeach; ?>

                        <div class="tag-row mt-3">

                            <?php foreach ($dive['tags'] as $tag): ?>

                                <span class="chip chip--accent"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                    </div>


                    <div class="col-lg-7">

                        <div class="cycle-panel">

                            <div class="cycle-panel__header">

                                <div>
                                    <span class="cycle-panel__eyebrow">SECURITY LIFECYCLE</span>
                                    <strong>Defense in Depth</strong>
                                </div>

                                <i class="fa-solid fa-shield-halved" aria-hidden="true"></i>

                            </div>

                            <?php foreach ($dive['cycle'] as $step): ?>

                                <div class="cycle-step">

                                    <span class="cycle-step__num">
                                        <?= e($step['step']) ?>
                                    </span>

                                    <div>
                                        <strong><?= e($step['title']) ?></strong>
                                        <span><?= e($step['text']) ?></span>
                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>



            <!-- =====================================================
                 Development — code window
            ====================================================== -->

            <?php elseif (!empty($dive['cta']) && $dive['id'] === 'development-deep'): ?>

                <div class="row g-5 align-items-center">

                    <div class="col-lg-6 order-lg-2">

                        <span class="section-label">
                            <i class="fa-solid <?= e($dive['icon']) ?>"></i>
                            <?= e($dive['label']) ?>
                        </span>

                        <h2 id="<?= e($dive['id']) ?>-heading" class="section-title">
                            <?= e($dive['title']) ?>
                        </h2>

                        <p class="lead-text"><?= e($dive['lead']) ?></p>

                        <?php foreach ($dive['paragraphs'] as $p): ?>

                            <p><?= e($p) ?></p>

                        <?php endforeach; ?>

                        <div class="tag-row mt-3">

                            <?php foreach ($dive['tags'] as $tag): ?>

                                <span class="chip chip--accent"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                        <div class="mt-4">

                            <a href="<?= e(url($dive['cta']['link'])) ?>" class="btn btn-primary">
                                <?= e($dive['cta']['label']) ?>
                                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </a>

                        </div>

                    </div>


                    <div class="col-lg-6 order-lg-1">

                        <div class="code-window" aria-hidden="true">

                            <div class="code-window__head">

                                <div class="window-dots">
                                    <span></span><span></span><span></span>
                                </div>

                                <span>secure_application.py</span>

                            </div>

                            <div class="code-window__body">

                                <div class="code-line">
                                    <span class="code-num">01</span>
                                    <span>class <em>SecureApplication</em>:</span>
                                </div>

                                <div class="code-line">
                                    <span class="code-num">02</span>
                                    <span>&nbsp;&nbsp;def <em>build</em>(self):</span>
                                </div>

                                <div class="code-line">
                                    <span class="code-num">03</span>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;design()</span>
                                </div>

                                <div class="code-line">
                                    <span class="code-num">04</span>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;develop()</span>
                                </div>

                                <div class="code-line">
                                    <span class="code-num">05</span>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;secure()</span>
                                </div>

                                <div class="code-line">
                                    <span class="code-num">06</span>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;test()</span>
                                </div>

                                <div class="code-line">
                                    <span class="code-num">07</span>
                                    <span>&nbsp;&nbsp;&nbsp;&nbsp;improve()</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>



            <!-- =====================================================
                 Data & AI — flow
            ====================================================== -->

            <?php elseif (!empty($dive['flow'])): ?>

                <div class="row g-5 align-items-center">

                    <div class="col-lg-6">

                        <span class="section-label">
                            <i class="fa-solid <?= e($dive['icon']) ?>"></i>
                            <?= e($dive['label']) ?>
                        </span>

                        <h2 id="<?= e($dive['id']) ?>-heading" class="section-title">
                            <?= e($dive['title']) ?>
                        </h2>

                        <p class="lead-text"><?= e($dive['lead']) ?></p>

                        <?php foreach ($dive['paragraphs'] as $p): ?>

                            <p><?= e($p) ?></p>

                        <?php endforeach; ?>

                        <div class="tag-row mt-3">

                            <?php foreach ($dive['tags'] as $tag): ?>

                                <span class="chip chip--accent"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                    </div>


                    <div class="col-lg-6">

                        <div class="ai-flow">

                            <?php foreach ($dive['flow'] as $i => $step): ?>

                                <div class="ai-flow__step">

                                    <span class="ai-flow__icon">
                                        <i class="fa-solid <?= e($step['icon']) ?>"></i>
                                    </span>

                                    <strong><?= e($step['label']) ?></strong>

                                </div>

                                <?php if ($i < count($dive['flow']) - 1): ?>

                                    <div class="ai-flow__arrow" aria-hidden="true">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>

                                <?php endif; ?>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>



            <!-- =====================================================
                 Infrastructure — cards
            ====================================================== -->

            <?php elseif (!empty($dive['cards'])): ?>

                <header class="section-head">

                    <span class="section-label">
                        <i class="fa-solid <?= e($dive['icon']) ?>"></i>
                        <?= e($dive['label']) ?>
                    </span>

                    <h2 id="<?= e($dive['id']) ?>-heading" class="section-title">
                        <?= e($dive['title']) ?>
                    </h2>

                    <p class="section-desc"><?= e($dive['lead']) ?></p>

                </header>


                <div class="row g-4 mb-5">

                    <?php foreach ($dive['cards'] as $card): ?>

                        <div class="col-md-6 col-lg-3">

                            <div class="infra-card">

                                <span class="infra-card__icon" aria-hidden="true">
                                    <i class="<?= e($card['icon']) ?>"></i>
                                </span>

                                <h3><?= e($card['title']) ?></h3>

                                <p><?= e($card['text']) ?></p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>


                <div class="row">

                    <div class="col-lg-8">

                        <?php foreach ($dive['paragraphs'] as $p): ?>

                            <p><?= e($p) ?></p>

                        <?php endforeach; ?>

                        <div class="tag-row mt-3">

                            <?php foreach ($dive['tags'] as $tag): ?>

                                <span class="chip chip--accent"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>



            <!-- =====================================================
                 GRC — frameworks
            ====================================================== -->

            <?php elseif (!empty($dive['frameworks'])): ?>

                <div class="row g-5 align-items-center">

                    <div class="col-lg-6">

                        <span class="section-label">
                            <i class="fa-solid <?= e($dive['icon']) ?>"></i>
                            <?= e($dive['label']) ?>
                        </span>

                        <h2 id="<?= e($dive['id']) ?>-heading" class="section-title">
                            <?= e($dive['title']) ?>
                        </h2>

                        <p class="lead-text"><?= e($dive['lead']) ?></p>

                        <?php foreach ($dive['paragraphs'] as $p): ?>

                            <p><?= e($p) ?></p>

                        <?php endforeach; ?>

                    </div>


                    <div class="col-lg-6">

                        <div class="framework-grid">

                            <?php foreach ($dive['frameworks'] as $fw): ?>

                                <div class="framework-card">

                                    <span class="framework-card__code">
                                        <?= e($fw['code']) ?>
                                    </span>

                                    <strong><?= e($fw['name']) ?></strong>

                                    <small><?= e($fw['sub']) ?></small>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>



            <!-- =====================================================
                 Research — default layout
            ====================================================== -->

            <?php else: ?>

                <div class="row g-5 align-items-center">

                    <div class="col-lg-7">

                        <span class="section-label">
                            <i class="fa-solid <?= e($dive['icon']) ?>"></i>
                            <?= e($dive['label']) ?>
                        </span>

                        <h2 id="<?= e($dive['id']) ?>-heading" class="section-title">
                            <?= e($dive['title']) ?>
                        </h2>

                        <p class="lead-text"><?= e($dive['lead']) ?></p>

                        <?php foreach ($dive['paragraphs'] as $p): ?>

                            <p><?= e($p) ?></p>

                        <?php endforeach; ?>

                        <div class="tag-row mt-3">

                            <?php foreach ($dive['tags'] as $tag): ?>

                                <span class="chip chip--accent"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>

                        <?php if (!empty($dive['cta'])): ?>

                            <div class="mt-4">

                                <a href="<?= e(url($dive['cta']['link'])) ?>" class="btn btn-primary">
                                    <?= e($dive['cta']['label']) ?>
                                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                                </a>

                            </div>

                        <?php endif; ?>

                    </div>


                    <div class="col-lg-5">

                        <div class="research-preview">

                            <div class="research-preview__core">
                                <i class="fa-solid fa-shield-halved" aria-hidden="true"></i>
                                <strong>SAR-Sec</strong>
                                <span>Secure FANET Protocol</span>
                            </div>

                            <div class="research-preview__nodes">

                                <span>UAV</span>
                                <span>GCS</span>
                                <span>AS</span>
                                <span>TA</span>
                                <span>KMS</span>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endif; ?>

        </div>

    </section>

<?php endforeach; ?>



<!-- =========================================================
     TECH STACK
========================================================= -->

<section class="section section--muted" aria-labelledby="stack-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Technical Toolkit</span>

            <h2 id="stack-heading" class="section-title">
                Tools, technologies &amp; frameworks
            </h2>

            <p class="section-desc">
                The technologies I use, study and work with across
                development, cybersecurity, infrastructure and research.
            </p>

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

                                <span class="stack-chip">
                                    <?= e($item) ?>
                                </span>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     PRINCIPLES
========================================================= -->

<section class="section" aria-labelledby="principles-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">How I Work</span>

            <h2 id="principles-heading" class="section-title">
                Technical principles
            </h2>

            <p class="section-desc">
                The principles that guide how I approach systems,
                software, security and research.
            </p>

        </header>


        <div class="row g-4">

            <?php foreach ($principles as $principle): ?>

                <div class="col-md-6 col-lg-3">

                    <div class="principle-card">

                        <span class="principle-card__num">
                            <?= e($principle['number']) ?>
                        </span>

                        <span class="principle-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($principle['icon']) ?>"></i>
                        </span>

                        <h3><?= e($principle['title']) ?></h3>

                        <p><?= e($principle['text']) ?></p>

                    </div>

                </div>

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
                    Work with me
                </span>

                <h2>
                    Need expertise across technology and security?
                </h2>

                <p>
                    Explore my projects and research, or get in touch
                    to discuss cybersecurity, software development,
                    Data &amp; AI, infrastructure or a technology
                    opportunity.
                </p>

            </div>

            <div class="cta-card__actions">

                <a href="<?= e(url('projects.php')) ?>" class="btn btn-light btn-lg">
                    View projects
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>

                <a href="<?= e(url('contact.php')) ?>" class="btn btn-outline-light btn-lg">
                    Contact me
                </a>

            </div>

        </div>

    </div>

</section>


<?php require __DIR__ . '/partials/footer.php'; ?>