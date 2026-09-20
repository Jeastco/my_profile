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
    'title'       => 'Research',
    'description' => 'Cybersecurity research by Emmanuel Asituha — FANET security, secure authentication, cryptography, network security, simulation and published research.',
    'slug'        => 'research',
    'body_class'  => 'research-page',
    'css'         => ['assets/css/research.css'],
];

/* =====================================================================
   Content
   ===================================================================== */

$firstName = explode(' ', trim($config['name']))[0];
$lastName  = explode(' ', trim($config['name']))[1] ?? '';


/* -------- Research areas strip -------- */

$researchAreas = [
    ['icon' => 'fa-plane',        'title' => 'FANETs',          'sub' => 'Flying Networks'],
    ['icon' => 'fa-key',          'title' => 'Cryptography',    'sub' => 'Secure Communication'],
    ['icon' => 'fa-user-shield',  'title' => 'Authentication',  'sub' => 'Identity & Trust'],
    ['icon' => 'fa-network-wired','title' => 'Network Security','sub' => 'Threats & Defense'],
    ['icon' => 'fa-chart-line',   'title' => 'Simulation',      'sub' => 'Evaluation & Analysis'],
];


/* -------- SAR-Sec research challenges -------- */

$challenges = [
    [
        'number' => '01',
        'icon'   => 'fa-plane',
        'title'  => 'High Mobility',
        'text'   => 'UAV movement causes frequent topology changes and short-lived network relationships.',
    ],
    [
        'number' => '02',
        'icon'   => 'fa-battery-half',
        'title'  => 'Limited Resources',
        'text'   => 'UAV platforms must balance security with available energy, processing capability and communication resources.',
    ],
    [
        'number' => '03',
        'icon'   => 'fa-tower-broadcast',
        'title'  => 'Wireless Exposure',
        'text'   => 'Open wireless communication increases exposure to interception, modification, replay and malicious traffic.',
    ],
    [
        'number' => '04',
        'icon'   => 'fa-user-lock',
        'title'  => 'Authentication',
        'text'   => 'Dynamic participation requires efficient methods for establishing and maintaining trust between network entities.',
    ],
];


/* -------- SAR-Sec architecture nodes -------- */

$architectureNodes = [
    ['icon' => 'fa-plane',        'type' => 'NETWORK ENTITY',  'title' => 'UAV Node',                'sub' => 'Mobile FANET participant'],
    ['icon' => 'fa-user-shield',  'type' => 'IDENTITY',        'title' => 'Authentication Server',   'sub' => 'Identity validation'],
    ['icon' => 'fa-ticket',       'type' => 'AUTHORIZATION',   'title' => 'Ticket Authority',        'sub' => 'Time-bound tickets'],
    ['icon' => 'fa-key',          'type' => 'KEY MANAGEMENT',  'title' => 'KMS',                     'sub' => 'Session key services'],
];


/* -------- Protocol lifecycle (5 phases) -------- */

$lifecycle = [
    [
        'number' => '01',
        'icon'   => 'fa-id-card',
        'phase'  => 'PHASE ONE',
        'title'  => 'Initialization & Registration',
        'text'   => 'Establishes the UAV identity and registration relationship with the authentication infrastructure.',
        'tags'   => ['Identity', 'Certificates', 'ECDSA'],
    ],
    [
        'number' => '02',
        'icon'   => 'fa-user-shield',
        'phase'  => 'PHASE TWO',
        'title'  => 'Mutual Authentication',
        'text'   => 'Validates communicating entities before protected network interaction is permitted.',
        'tags'   => ['ECDSA', 'ECDH', 'Nonces'],
    ],
    [
        'number' => '03',
        'icon'   => 'fa-ticket',
        'phase'  => 'PHASE THREE',
        'title'  => 'Ticket Issuance',
        'text'   => 'Issues time-bound authorization information for authenticated network participants.',
        'tags'   => ['Tickets', 'Session ID', 'Validity'],
    ],
    [
        'number' => '04',
        'icon'   => 'fa-lock',
        'phase'  => 'PHASE FOUR',
        'title'  => 'Secure Communication',
        'text'   => 'Protects operational FANET data through authenticated encryption and session security.',
        'tags'   => ['AES-GCM', 'HKDF', 'Session Keys'],
    ],
    [
        'number' => '05',
        'icon'   => 'fa-arrows-rotate',
        'phase'  => 'PHASE FIVE',
        'title'  => 'Renewal & Revocation',
        'text'   => 'Maintains security over time through credential renewal, ticket expiry and revocation mechanisms.',
        'tags'   => ['Renewal', 'Revocation', 'CRL'],
    ],
];


/* -------- Cryptographic design -------- */

$cryptoCards = [
    ['icon' => 'fa-signature',   'label' => 'DIGITAL SIGNATURES', 'name' => 'ECDSA',          'detail' => 'secp256r1'],
    ['icon' => 'fa-key',         'label' => 'KEY AGREEMENT',      'name' => 'ECDH',           'detail' => 'Shared secrets'],
    ['icon' => 'fa-lock',        'label' => 'ENCRYPTION',         'name' => 'AES-128-GCM',    'detail' => 'Authenticated encryption'],
    ['icon' => 'fa-fingerprint', 'label' => 'KEY DERIVATION',     'name' => 'HKDF-SHA256',    'detail' => 'Session key derivation'],
    ['icon' => 'fa-shield',      'label' => 'INTEGRITY',          'name' => 'HMAC-SHA256',    'detail' => 'Message authentication'],
    ['icon' => 'fa-clock',       'label' => 'FRESHNESS',          'name' => 'Nonces & Time',  'detail' => 'Replay protection'],
];


/* -------- Threat model -------- */

$threats = [
    [
        'icon'   => 'fa-tower-broadcast',
        'type'   => 'WIRELESS',
        'title'  => 'Jamming',
        'text'   => 'Interference targeting communication availability and network connectivity.',
        'focus'  => 'Detection & channel resilience',
    ],
    [
        'icon'   => 'fa-user-secret',
        'type'   => 'IDENTITY',
        'title'  => 'Spoofing',
        'text'   => 'Attempts to impersonate legitimate network participants or misuse identity information.',
        'focus'  => 'Authentication & certificates',
    ],
    [
        'icon'   => 'fa-rotate-left',
        'type'   => 'FRESHNESS',
        'title'  => 'Replay',
        'text'   => 'Previously captured legitimate messages are retransmitted in an attempt to deceive the protocol.',
        'focus'  => 'Nonces, timestamps & sequences',
    ],
    [
        'icon'   => 'fa-bolt',
        'type'   => 'AVAILABILITY',
        'title'  => 'Denial of Service',
        'text'   => 'Excessive or malicious traffic attempts to exhaust network or computational resources.',
        'focus'  => 'Monitoring & rate controls',
    ],
];


/* -------- Simulation tools -------- */

$simTools = [
    ['icon' => 'fa-diagram-project', 'label' => 'SIMULATOR', 'value' => 'NS-3'],
    ['icon' => 'fa-route',           'label' => 'MOBILITY',  'value' => 'Gauss-Markov / RWP'],
    ['icon' => 'fa-wifi',            'label' => 'NETWORK',   'value' => 'Wireless Mesh'],
    ['icon' => 'fa-chart-column',    'label' => 'ANALYSIS',  'value' => 'Performance Metrics'],
];


/* -------- Evaluation metrics -------- */

$metrics = [
    ['num' => '01', 'name' => 'Packet Delivery Ratio',  'code' => 'PDR'],
    ['num' => '02', 'name' => 'End-to-End Delay',       'code' => 'LATENCY'],
    ['num' => '03', 'name' => 'Throughput',             'code' => 'NETWORK'],
    ['num' => '04', 'name' => 'Energy Consumption',     'code' => 'ENERGY'],
    ['num' => '05', 'name' => 'Computational Cost',     'code' => 'COMPUTE'],
    ['num' => '06', 'name' => 'Protocol Overhead',      'code' => 'OVERHEAD'],
    ['num' => '07', 'name' => 'Detection Performance',  'code' => 'SECURITY'],
];


/* -------- Research process -------- */

$process = [
    ['number' => '01', 'icon' => 'fa-magnifying-glass',    'title' => 'Identify',    'text' => 'Understand the security problem and operational environment.'],
    ['number' => '02', 'icon' => 'fa-book-open',           'title' => 'Investigate', 'text' => 'Review existing approaches, limitations and research gaps.'],
    ['number' => '03', 'icon' => 'fa-diagram-project',     'title' => 'Design',      'text' => 'Develop protocol architecture and security mechanisms.'],
    ['number' => '04', 'icon' => 'fa-code',                'title' => 'Implement',   'text' => 'Translate the design into testable protocol components.'],
    ['number' => '05', 'icon' => 'fa-chart-line',          'title' => 'Evaluate',    'text' => 'Measure security and performance characteristics.'],
];


/* -------- Publications -------- */

$publications = [
    [
        'number' => '01',
        'year'   => '2024',
        'type'   => 'RESEARCH ARTICLE',
        'title'  => 'A Comprehensive Overview of Privacy, Security, and Performance Issues in Flying Ad Hoc Networks',
        'text'   => 'A broad examination of privacy, security and performance challenges affecting Flying Ad Hoc Networks.',
        'journal'=> 'World Journal of Advanced Research and Reviews',
        'volume' => 'Vol. 23(1)',
        'pages'  => 'pp. 01–16',
        'doi'    => 'https://doi.org/10.30574/wjarr.2024.23.1.2166',
        'doi_text'=> 'DOI: 10.30574/wjarr.2024.23.1.2166',
    ],
    [
        'number' => '02',
        'year'   => '2024',
        'type'   => 'RESEARCH ARTICLE',
        'title'  => 'A Comprehensive Survey of Performance, Security, and Privacy Issues in the Network Interface Layer of the TCP/IP Protocol Suite',
        'text'   => 'A survey examining performance, security and privacy considerations associated with the network interface layer of the TCP/IP architecture.',
        'journal'=> 'GSC Advanced Research and Reviews',
        'volume' => 'Vol. 18(3)',
        'pages'  => 'pp. 0112–0130',
        'doi'    => 'https://doi.org/10.30574/gscarr.2024.18.3.0112',
        'doi_text'=> 'DOI: 10.30574/gscarr.2024.18.3.0112',
    ],
    [
        'number' => '03',
        'year'   => '2023',
        'type'   => 'RESEARCH ARTICLE',
        'title'  => 'Privacy and Security Issues Surrounding Vehicular Ad-Hoc Networks',
        'text'   => 'An examination of privacy and cybersecurity challenges associated with Vehicular Ad Hoc Networks.',
        'journal'=> 'World Journal of Advanced Research and Reviews',
        'volume' => 'Vol. 20(3)',
        'pages'  => 'pp. 1449–1479',
        'doi'    => 'https://doi.org/10.30574/wjarr.2023.20.3.2602',
        'doi_text'=> 'DOI: 10.30574/wjarr.2023.20.3.2602',
    ],
];


/* -------- Research interests -------- */

$interests = [
    ['number' => '01', 'icon' => 'fa-plane',        'title' => 'FANET Security',       'text' => 'Secure communication and trust in highly mobile UAV networks.'],
    ['number' => '02', 'icon' => 'fa-user-shield',  'title' => 'Authentication',       'text' => 'Efficient identity verification and secure access mechanisms.'],
    ['number' => '03', 'icon' => 'fa-key',          'title' => 'Applied Cryptography', 'text' => 'Practical cryptographic mechanisms for secure networked systems.'],
    ['number' => '04', 'icon' => 'fa-network-wired','title' => 'Network Security',     'text' => 'Threats, defenses and resilient network architectures.'],
    ['number' => '05', 'icon' => 'fa-user-lock',    'title' => 'Privacy',              'text' => 'Privacy risks and protection across connected environments.'],
    ['number' => '06', 'icon' => 'fa-chart-line',   'title' => 'Security Evaluation',  'text' => 'Simulation and measurement of security and performance trade-offs.'],
];


/* -------- Research toolkit -------- */

$toolkit = [
    'Python', 'NS-3', 'Wireshark', 'Linux', 'ECDSA', 'ECDH',
    'AES-GCM', 'HKDF', 'HMAC', 'Network Simulation', 'Data Analysis', 'Cryptography',
];


/* -------- Research principles -------- */

$principles = [
    ['icon' => 'fa-circle-check', 'title' => 'Security by Design',  'text' => 'Build security into the architecture rather than treating it as an afterthought.'],
    ['icon' => 'fa-circle-check', 'title' => 'Threat Driven',       'text' => 'Design controls around clearly identified adversarial capabilities.'],
    ['icon' => 'fa-circle-check', 'title' => 'Performance Aware',   'text' => 'Consider the cost security introduces to constrained systems.'],
    ['icon' => 'fa-circle-check', 'title' => 'Evidence Based',      'text' => 'Evaluate proposed mechanisms using measurable security and performance metrics.'],
];


/* =====================================================================
   Render
   ===================================================================== */

require __DIR__ . '/partials/header.php';
?>


<!-- =========================================================
     HERO
========================================================= -->

<section class="research-hero" aria-labelledby="research-hero-heading">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="badge-soft">
                    <span class="badge-dot" aria-hidden="true"></span>
                    Cybersecurity Research
                </span>


                <h1 id="research-hero-heading" class="research-hero__title">
                    Researching security for
                    <span class="text-accent">connected systems.</span>
                </h1>


                <p class="research-hero__lead">
                    My research focuses on cybersecurity, network security,
                    secure authentication, cryptography and emerging
                    network environments.
                </p>


                <p class="research-hero__text">
                    A major focus of my postgraduate research is the
                    security of Flying Ad Hoc Networks used in Search
                    and Rescue operations, where mobility, constrained
                    resources and hostile communication environments
                    create unique security challenges.
                </p>


                <div class="research-hero__actions">

                    <a href="#sar-sec" class="btn btn-primary btn-lg">
                        Explore SAR-Sec
                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    </a>

                    <a href="#publications" class="btn btn-outline-primary btn-lg">
                        View publications
                        <i class="fa-solid fa-book-open" aria-hidden="true"></i>
                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="research-network" aria-hidden="true">

                    <div class="research-network__head">

                        <span>RESEARCH DOMAIN</span>
                        <strong>Secure FANETs</strong>

                    </div>


                    <div class="network-map">

                        <div class="network-map__node network-map__node--gcs">
                            <i class="fa-solid fa-tower-broadcast"></i>
                            <span>GCS</span>
                        </div>

                        <div class="network-map__node network-map__node--uav1">
                            <i class="fa-solid fa-plane"></i>
                            <span>UAV</span>
                        </div>

                        <div class="network-map__node network-map__node--uav2">
                            <i class="fa-solid fa-plane"></i>
                            <span>UAV</span>
                        </div>

                        <div class="network-map__node network-map__node--uav3">
                            <i class="fa-solid fa-plane"></i>
                            <span>UAV</span>
                        </div>

                        <div class="network-map__core">
                            <i class="fa-solid fa-shield-halved"></i>
                            <strong>SAR-Sec</strong>
                            <span>Secure Protocol</span>
                        </div>

                        <span class="network-map__line network-map__line--1"></span>
                        <span class="network-map__line network-map__line--2"></span>
                        <span class="network-map__line network-map__line--3"></span>
                        <span class="network-map__line network-map__line--4"></span>

                    </div>


                    <div class="research-network__footer">

                        <div><span></span>Authentication</div>
                        <div><span></span>Encryption</div>
                        <div><span></span>Simulation</div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     RESEARCH AREAS STRIP
========================================================= -->

<section class="area-strip" aria-label="Research areas">

    <div class="container">

        <div class="row g-3">

            <?php foreach ($researchAreas as $area): ?>

                <div class="col-6 col-md-4 col-lg">

                    <div class="area-item">

                        <span class="area-item__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($area['icon']) ?>"></i>
                        </span>

                        <div>
                            <strong><?= e($area['title']) ?></strong>
                            <span><?= e($area['sub']) ?></span>
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     RESEARCH PROFILE
========================================================= -->

<section class="section" aria-labelledby="profile-heading">

    <div class="container">

        <div class="row g-5 align-items-start">

            <div class="col-lg-5">

                <span class="section-label">Research Profile</span>

                <h2 id="profile-heading" class="section-title">
                    Security research with a
                    <span class="text-accent">practical systems perspective.</span>
                </h2>

            </div>


            <div class="col-lg-7">

                <p class="lead-text">
                    My research interests sit at the intersection of
                    cybersecurity, communication networks and secure
                    system design.
                </p>

                <p>
                    I am particularly interested in how security mechanisms
                    can protect highly dynamic networks without creating
                    excessive computational, communication or energy overhead.
                </p>

                <p>
                    This has led to work involving secure authentication,
                    cryptographic protocols, network threats, privacy,
                    performance, ad hoc networks and simulation-based
                    security evaluation.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     SAR-SEC MASTER'S RESEARCH
========================================================= -->

<section
    class="section section--muted"
    id="sar-sec"
    aria-labelledby="sar-sec-heading"
>

    <div class="container">

        <div class="research-project-head">

            <div>

                <span class="section-label">Master's Research</span>

                <span class="research-status-pill">
                    <span class="research-status-pill__dot"></span>
                    ACTIVE RESEARCH
                </span>

            </div>

            <span class="research-code">SAR-SEC</span>

        </div>


        <div class="research-title-block">

            <p class="research-title-block__eyebrow">
                INFORMATION TECHNOLOGY SECURITY &amp; AUDIT
            </p>

            <h2 id="sar-sec-heading">
                An Efficient Security Protocol for Search and Rescue
                Flying Ad Hoc Networks Applications
            </h2>

            <p>
                Designing and evaluating a lightweight security protocol
                for authentication, secure communication and lifecycle
                security within dynamic Search and Rescue Flying Ad Hoc
                Networks.
            </p>

        </div>


        <!-- Challenges grid -->

        <div class="row g-4 mt-5">

            <?php foreach ($challenges as $challenge): ?>

                <div class="col-md-6 col-lg-3">

                    <article class="challenge-card">

                        <span class="challenge-card__num">
                            <?= e($challenge['number']) ?>
                        </span>

                        <span class="challenge-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($challenge['icon']) ?>"></i>
                        </span>

                        <h3><?= e($challenge['title']) ?></h3>

                        <p><?= e($challenge['text']) ?></p>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     SAR-SEC ARCHITECTURE
========================================================= -->

<section class="section" aria-labelledby="architecture-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Protocol Architecture</span>

            <h2 id="architecture-heading" class="section-title">
                SAR-Sec security architecture
            </h2>

            <p class="section-desc">
                The protocol combines identity, authentication,
                ticketing, key management and secure communication
                components.
            </p>

        </header>


        <div class="architecture-flow">

            <?php foreach ($architectureNodes as $index => $node): ?>

                <div class="architecture-node">

                    <span class="architecture-node__icon" aria-hidden="true">
                        <i class="fa-solid <?= e($node['icon']) ?>"></i>
                    </span>

                    <span class="architecture-node__type">
                        <?= e($node['type']) ?>
                    </span>

                    <strong><?= e($node['title']) ?></strong>

                    <small><?= e($node['sub']) ?></small>

                </div>

                <?php if ($index < count($architectureNodes) - 1): ?>

                    <div class="architecture-arrow" aria-hidden="true">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>


        <div class="architecture-secondary">

            <div>
                <i class="fa-solid fa-tower-broadcast" aria-hidden="true"></i>
                <span>
                    <small>MONITORING &amp; CONTROL</small>
                    Ground Control Station
                </span>
            </div>

            <div>
                <i class="fa-solid fa-database" aria-hidden="true"></i>
                <span>
                    <small>TRUST DATA</small>
                    Certificate &amp; Key Database
                </span>
            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     PROTOCOL LIFECYCLE
========================================================= -->

<section class="section section--muted" aria-labelledby="lifecycle-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Security Workflow</span>

            <h2 id="lifecycle-heading" class="section-title">
                Protocol lifecycle
            </h2>

            <p class="section-desc">
                SAR-Sec organizes security into five connected
                operational phases.
            </p>

        </header>


        <div class="row g-4">

            <?php foreach ($lifecycle as $phase): ?>

                <div class="col-md-6 col-lg-4">

                    <article class="phase-card">

                        <div class="phase-card__top">

                            <span class="phase-card__num">
                                <?= e($phase['number']) ?>
                            </span>

                            <span class="phase-card__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($phase['icon']) ?>"></i>
                            </span>

                        </div>

                        <p class="phase-card__phase">
                            <?= e($phase['phase']) ?>
                        </p>

                        <h3><?= e($phase['title']) ?></h3>

                        <p><?= e($phase['text']) ?></p>

                        <div class="tag-row">

                            <?php foreach ($phase['tags'] as $tag): ?>

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
     CRYPTOGRAPHIC DESIGN
========================================================= -->

<section class="section" aria-labelledby="crypto-heading">

    <div class="container">

        <div class="row g-5 align-items-start">

            <div class="col-lg-5">

                <span class="section-label">Cryptographic Design</span>

                <h2 id="crypto-heading" class="section-title">
                    Lightweight security mechanisms.
                </h2>

                <p class="lead-text">
                    SAR-Sec combines cryptographic primitives for
                    identity verification, key establishment,
                    confidentiality, integrity and freshness.
                </p>

                <p>
                    The design emphasizes mechanisms suitable for
                    security-sensitive communication while considering
                    the resource constraints and dynamic behavior of
                    UAV networks.
                </p>

            </div>


            <div class="col-lg-7">

                <div class="crypto-grid">

                    <?php foreach ($cryptoCards as $card): ?>

                        <div class="crypto-card">

                            <span class="crypto-card__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($card['icon']) ?>"></i>
                            </span>

                            <span class="crypto-card__label">
                                <?= e($card['label']) ?>
                            </span>

                            <strong><?= e($card['name']) ?></strong>

                            <small><?= e($card['detail']) ?></small>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     THREAT MODEL
========================================================= -->

<section class="section--dark" aria-labelledby="threat-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Threat Model</span>

            <h2 id="threat-heading" class="section-title">
                Designing against active network threats
            </h2>

            <p class="section-desc">
                The research considers an adversarial communication
                environment where malicious actors can interfere
                with network traffic.
            </p>

        </header>


        <div class="row g-4">

            <?php foreach ($threats as $threat): ?>

                <div class="col-md-6 col-lg-3">

                    <article class="threat-card">

                        <div class="threat-card__top">

                            <i class="fa-solid <?= e($threat['icon']) ?>" aria-hidden="true"></i>

                            <span><?= e($threat['type']) ?></span>

                        </div>

                        <h3><?= e($threat['title']) ?></h3>

                        <p><?= e($threat['text']) ?></p>

                        <div class="threat-card__focus">

                            <span>DEFENSE FOCUS</span>

                            <strong><?= e($threat['focus']) ?></strong>

                        </div>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     SIMULATION & EVALUATION
========================================================= -->

<section class="section" aria-labelledby="simulation-heading">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-6">

                <span class="section-label">Evaluation</span>

                <h2 id="simulation-heading" class="section-title">
                    Simulation-based evaluation
                </h2>

                <p class="lead-text">
                    The protocol is evaluated through network simulation
                    to examine both security behavior and network
                    performance.
                </p>

                <p>
                    NS-3 provides the environment for modelling UAV
                    communication, mobility, wireless conditions,
                    routing behavior and attack scenarios.
                </p>


                <div class="sim-tools">

                    <?php foreach ($simTools as $tool): ?>

                        <div class="sim-tool">

                            <i class="fa-solid <?= e($tool['icon']) ?>" aria-hidden="true"></i>

                            <span>
                                <small><?= e($tool['label']) ?></small>
                                <?= e($tool['value']) ?>
                            </span>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="metrics-panel">

                    <div class="metrics-panel__head">

                        <span>EVALUATION METRICS</span>

                        <i class="fa-solid fa-chart-line" aria-hidden="true"></i>

                    </div>


                    <?php foreach ($metrics as $metric): ?>

                        <div class="metric-row">

                            <div>
                                <span><?= e($metric['num']) ?></span>
                                <strong><?= e($metric['name']) ?></strong>
                            </div>

                            <small><?= e($metric['code']) ?></small>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     RESEARCH PROCESS
========================================================= -->

<section class="section section--muted" aria-labelledby="process-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Research Process</span>

            <h2 id="process-heading" class="section-title">
                From problem to evaluation
            </h2>

        </header>


        <div class="process-flow">

            <?php foreach ($process as $index => $step): ?>

                <div class="process-step">

                    <span class="process-step__num"><?= e($step['number']) ?></span>

                    <span class="process-step__icon" aria-hidden="true">
                        <i class="fa-solid <?= e($step['icon']) ?>"></i>
                    </span>

                    <h3><?= e($step['title']) ?></h3>

                    <p><?= e($step['text']) ?></p>

                </div>

                <?php if ($index < count($process) - 1): ?>

                    <div class="process-arrow" aria-hidden="true">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     PUBLICATIONS
========================================================= -->

<section
    class="section"
    id="publications"
    aria-labelledby="publications-heading"
>

    <div class="container">

        <div class="pub-header">

            <div>

                <span class="section-label">Publications</span>

                <h2 id="publications-heading" class="section-title">
                    Published research
                </h2>

                <p class="section-desc">
                    Research contributions addressing security, privacy
                    and performance challenges in communication networks.
                </p>

            </div>

            <div class="pub-count">

                <strong>03</strong>

                <span>Published Papers</span>

            </div>

        </div>


        <div class="pub-list">

            <?php foreach ($publications as $pub): ?>

                <article class="pub-card">

                    <div class="pub-card__num">
                        <?= e($pub['number']) ?>
                    </div>

                    <div class="pub-card__body">

                        <div class="pub-card__topline">

                            <span class="pub-card__type">
                                <?= e($pub['type']) ?>
                            </span>

                            <time class="pub-card__year">
                                <?= e($pub['year']) ?>
                            </time>

                        </div>

                        <h3><?= e($pub['title']) ?></h3>

                        <p><?= e($pub['text']) ?></p>


                        <div class="pub-card__meta">

                            <span>
                                <i class="fa-solid fa-book" aria-hidden="true"></i>
                                <cite><?= e($pub['journal']) ?></cite>
                            </span>

                            <span>
                                <i class="fa-solid fa-file-lines" aria-hidden="true"></i>
                                <?= e($pub['volume']) ?>
                            </span>

                            <span>
                                <i class="fa-solid fa-layer-group" aria-hidden="true"></i>
                                <?= e($pub['pages']) ?>
                            </span>

                        </div>


                        <div class="pub-card__actions">

                            <a
                                href="<?= e($pub['doi']) ?>"
                                class="link-accent"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                View publication
                                <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                            </a>

                            <span class="pub-card__doi"><?= e($pub['doi_text']) ?></span>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     RESEARCH INTERESTS
========================================================= -->

<section class="section section--muted" aria-labelledby="interests-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Research Interests</span>

            <h2 id="interests-heading" class="section-title">
                Areas I continue to explore
            </h2>

        </header>


        <div class="row g-4">

            <?php foreach ($interests as $interest): ?>

                <div class="col-md-6 col-lg-4">

                    <article class="interest-card">

                        <span class="interest-card__num">
                            <?= e($interest['number']) ?>
                        </span>

                        <span class="interest-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($interest['icon']) ?>"></i>
                        </span>

                        <h3><?= e($interest['title']) ?></h3>

                        <p><?= e($interest['text']) ?></p>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     RESEARCH TOOLKIT
========================================================= -->

<section class="section" aria-labelledby="toolkit-heading">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-5">

                <span class="section-label">Research Toolkit</span>

                <h2 id="toolkit-heading" class="section-title">
                    Technologies supporting my research
                </h2>

                <p class="lead-text">
                    Research is supported by a combination of
                    programming, simulation, packet analysis,
                    cryptography and data analysis.
                </p>

            </div>


            <div class="col-lg-7">

                <div class="toolkit-cloud">

                    <?php foreach ($toolkit as $tool): ?>

                        <span class="toolkit-chip"><?= e($tool) ?></span>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     RESEARCH PRINCIPLES
========================================================= -->

<section class="section--dark" aria-labelledby="principles-heading">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-5">

                <span class="section-label">Research Approach</span>

                <h2 id="principles-heading" class="section-title">
                    Security should be measurable, practical and defensible.
                </h2>

                <p>
                    My approach combines security design with
                    implementation and evaluation, focusing on
                    solutions that can be examined against both
                    security and operational requirements.
                </p>

            </div>


            <div class="col-lg-7">

                <div class="principles-list">

                    <?php foreach ($principles as $principle): ?>

                        <div class="principle-item">

                            <i class="fa-solid <?= e($principle['icon']) ?>" aria-hidden="true"></i>

                            <span>
                                <strong><?= e($principle['title']) ?></strong>
                                <?= e($principle['text']) ?>
                            </span>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     RESEARCH STATUS
========================================================= -->

<section class="section" aria-labelledby="status-heading">

    <div class="container">

        <div class="status-panel">

            <span class="status-panel__icon" aria-hidden="true">
                <i class="fa-solid fa-flask"></i>
            </span>


            <div class="status-panel__body">

                <span class="section-label">Current Research</span>

                <h2 id="status-heading">
                    SAR-Sec is under active evaluation.
                </h2>

                <p>
                    Protocol development and simulation work form part
                    of the ongoing postgraduate research process. Final
                    quantitative findings will be presented after the
                    experimental evaluation and analysis are completed.
                </p>

            </div>


            <div class="status-panel__badge">
                <span></span>
                IN PROGRESS
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

                <span class="cta-eyebrow">Research Collaboration</span>

                <h2>Interested in similar research?</h2>

                <p>
                    I'm interested in professional and academic
                    conversations around network security, FANETs,
                    authentication, cryptography, simulation and
                    secure emerging technologies.
                </p>

            </div>

            <div class="cta-card__actions">

                <a href="<?= e(url('contact.php')) ?>" class="btn btn-light btn-lg">
                    Start a conversation
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>

                <a href="#publications" class="btn btn-outline-light btn-lg">
                    Publications
                </a>

            </div>

        </div>

    </div>

</section>


<?php require __DIR__ . '/partials/footer.php'; ?>