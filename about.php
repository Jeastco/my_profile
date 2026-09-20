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
    'title'       => 'About',
    'description' => 'Learn about Emmanuel Asituha — cybersecurity professional, software developer, IT specialist and technology researcher based in Kenya.',
    'slug'        => 'about',
    'body_class'  => 'about-page',
    'css'         => ['assets/css/about.css'],
];

/* =====================================================================
   Content
   ===================================================================== */

$firstName = explode(' ', trim($config['name']))[0];
$lastName  = explode(' ', trim($config['name']))[1] ?? '';


/* -------- Quick facts -------- */

$quickFacts = [
    [
        'icon'  => 'fa-location-dot',
        'label' => 'Based in',
        'value' => $config['location'] ?? 'Kenya',
    ],
    [
        'icon'  => 'fa-globe',
        'label' => 'Works',
        'value' => 'Local & Remote',
    ],
    [
        'icon'  => 'fa-graduation-cap',
        'label' => 'Degree',
        'value' => 'MSc IT Security & Audit',
    ],
    [
        'icon'  => 'fa-circle-check',
        'label' => 'Status',
        'value' => 'Open to opportunities',
    ],
];


/* -------- Positioning (three pillars) -------- */

$positioning = [
    [
        'icon'  => 'fa-shield-halved',
        'title' => 'Security First',
        'text'  => 'I approach every system with security as a design requirement, not an afterthought.',
    ],
    [
        'icon'  => 'fa-code',
        'title' => 'Builder Mindset',
        'text'  => 'I build practical solutions that solve real problems — not technology for its own sake.',
    ],
    [
        'icon'  => 'fa-arrow-trend-up',
        'title' => 'Continuous Learning',
        'text'  => 'I keep expanding into new domains: from IT operations to cybersecurity to Data & AI.',
    ],
];


/* -------- Journey timeline -------- */

$journey = [
    [
        'stage' => 'Foundation',
        'icon'  => 'fa-computer',
        'title' => 'Information Technology',
        'text'  => 'My early experience developed a strong practical foundation in computer systems, ICT support, networking, hardware, software and supporting users.',
        'period' => '2017 — 2021',
    ],
    [
        'stage' => 'Specialization',
        'icon'  => 'fa-user-shield',
        'title' => 'Cybersecurity & Digital Forensics',
        'text'  => 'Studying Computer Security and Forensics strengthened my interest in protecting information systems, understanding attacks and developing secure communication mechanisms.',
        'period' => '2017 — 2022',
    ],
    [
        'stage' => 'Research',
        'icon'  => 'fa-microscope',
        'title' => 'Security Research',
        'text'  => 'My academic and professional interests developed into research covering network security, VANETs, FANETs, authentication, privacy and secure communications.',
        'period' => '2022 — Present',
    ],
    [
        'stage' => 'Building',
        'icon'  => 'fa-code',
        'title' => 'Software Development',
        'text'  => 'Development allows me to move beyond identifying technology problems into actually designing and implementing solutions.',
        'period' => '2024 — Present',
    ],
    [
        'stage' => 'Next Frontier',
        'icon'  => 'fa-brain',
        'title' => 'Data & Artificial Intelligence',
        'text'  => 'I am expanding my capabilities in Data and AI and exploring how intelligent technologies can enhance software, cybersecurity and decision-making.',
        'period' => '2025 — Present',
    ],
];


/* -------- Education -------- */

$education = [
    [
        'icon'    => 'fa-graduation-cap',
        'status'  => 'Postgraduate',
        'degree'  => 'Master of Science in Information Technology Security and Audit',
        'school'  => 'Jaramogi Oginga Odinga University of Science and Technology',
        'detail'  => 'Advanced study and research in cybersecurity, information security, security auditing and secure information systems.',
        'project_label' => 'Current Research',
        'project' => 'An Efficient Security Protocol for Search and Rescue Flying Ad Hoc Networks Applications',
    ],
    [
        'icon'    => 'fa-user-secret',
        'status'  => 'Undergraduate',
        'degree'  => 'Bachelor of Science in Computer Security and Forensics',
        'school'  => 'Jaramogi Oginga Odinga University of Science and Technology',
        'detail'  => 'Second Class Honours — Upper Division',
        'project_label' => 'Final Project',
        'project' => 'Packets Authentication using Digital Signatures and Traffic Analysis',
    ],
];


/* -------- Values -------- */

$values = [
    [
        'icon'  => 'fa-shield-halved',
        'title' => 'Security by Design',
        'text'  => 'Security should be considered from the beginning rather than added after a system has already been built.',
    ],
    [
        'icon'  => 'fa-lightbulb',
        'title' => 'Practical Innovation',
        'text'  => 'Technology creates value when innovation translates into solutions people and organizations can actually use.',
    ],
    [
        'icon'  => 'fa-scale-balanced',
        'title' => 'Integrity',
        'text'  => 'Cybersecurity and IT require responsibility, professionalism and respect for the information entrusted to us.',
    ],
    [
        'icon'  => 'fa-arrow-trend-up',
        'title' => 'Continuous Improvement',
        'text'  => 'Technology never stops changing. Learning, experimentation and refinement are continuous parts of my work.',
    ],
    [
        'icon'  => 'fa-users',
        'title' => 'User-Centred Thinking',
        'text'  => 'Technical solutions should support the people and organizations they are designed to serve.',
    ],
    [
        'icon'  => 'fa-gears',
        'title' => 'Reliability',
        'text'  => 'Good technology should remain secure, maintainable and dependable beyond its initial implementation.',
    ],
];


/* -------- Beyond work -------- */

$beyondWork = [
    [
        'icon'   => 'fa-globe',
        'title'  => 'Internet Society',
        'detail' => 'Member of the global Internet Society community.',
    ],
    [
        'icon'   => 'fa-flag',
        'title'  => 'Capture The Flag',
        'detail' => 'Active interest in cybersecurity challenges and practical problem-solving.',
    ],
    [
        'icon'   => 'fa-book-open-reader',
        'title'  => 'Professional Learning',
        'detail' => 'Research, certifications and continuous technical development.',
    ],
    [
        'icon'   => 'fa-code-branch',
        'title'  => 'Open Source',
        'detail' => 'Building and sharing developer projects where possible.',
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

<section class="about-hero" aria-labelledby="about-hero-heading">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="badge-soft">
                    <span class="badge-dot" aria-hidden="true"></span>
                    About Me
                </span>


                <h1 id="about-hero-heading" class="about-hero__title">
                    Technology. Security.
                    <span class="text-accent">Innovation.</span>
                </h1>


                <p class="about-hero__lead">
                    I am <?= e($config['name']) ?> — a cybersecurity
                    professional, software developer, IT specialist and
                    researcher interested in building secure, practical
                    and innovative technology solutions.
                </p>


                <p class="about-hero__text">
                    My work sits at the intersection of cybersecurity,
                    software engineering, information technology,
                    Data &amp; AI, infrastructure and research.
                </p>


                <div class="about-hero__actions">

                    <a href="<?= e(url('projects.php')) ?>" class="btn btn-primary btn-lg">
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

            </div>


            <div class="col-lg-6">

                <div class="about-portrait">

                    <div class="about-portrait__image">

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


                    <div class="about-portrait__badge">

                        <i class="fa-solid fa-code" aria-hidden="true"></i>

                        <div>
                            <span>I don't just secure technology.</span>
                            <strong>I build it too.</strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Quick facts -->

        <div class="quick-facts">

            <?php foreach ($quickFacts as $fact): ?>

                <div class="quick-fact">

                    <i class="fa-solid <?= e($fact['icon']) ?>" aria-hidden="true"></i>

                    <div>
                        <span><?= e($fact['label']) ?></span>
                        <strong><?= e($fact['value']) ?></strong>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     STORY
========================================================= -->

<section class="section" aria-labelledby="story-heading">

    <div class="container">

        <div class="row g-5 align-items-start">

            <div class="col-lg-5">

                <span class="section-label">My Story</span>

                <h2 id="story-heading" class="section-title">
                    More than a
                    <span class="text-accent">single job title.</span>
                </h2>

            </div>


            <div class="col-lg-7">

                <p class="lead-text">
                    I am an Information Technology and Cybersecurity
                    professional with a multidisciplinary background
                    spanning security, software development,
                    infrastructure, research and emerging technologies.
                </p>

                <p>
                    My journey in technology has allowed me to work
                    across different environments and responsibilities,
                    including ICT support, networking, cybersecurity
                    research, risk assessment, Microsoft 365,
                    systems administration, application development,
                    web development and data management.
                </p>

                <p>
                    Over time, my interests have expanded beyond
                    maintaining and securing technology into designing
                    and building it. Software development now forms
                    an important part of my professional direction,
                    alongside a growing focus on Data and AI.
                </p>

                <p>
                    What connects these areas is a simple objective:
                    <strong>understand the problem, build the right
                    solution, secure it properly and continue
                    improving it.</strong>
                </p>

            </div>

        </div>


        <!-- Positioning pillars -->

        <div class="row g-4 mt-5">

            <?php foreach ($positioning as $pillar): ?>

                <div class="col-md-4">

                    <div class="positioning-card">

                        <span class="positioning-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($pillar['icon']) ?>"></i>
                        </span>

                        <h3><?= e($pillar['title']) ?></h3>

                        <p><?= e($pillar['text']) ?></p>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     JOURNEY TIMELINE
========================================================= -->

<section class="section section--muted" aria-labelledby="journey-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">My Journey</span>

            <h2 id="journey-heading" class="section-title">
                From IT Support to Building &amp; Securing Systems
            </h2>

            <p class="section-desc">
                A progression shaped by hands-on technology work,
                cybersecurity, academic research and continuous learning.
            </p>

        </header>


        <div class="journey-timeline">

            <?php foreach ($journey as $index => $item): ?>

                <div class="journey-item">

                    <div class="journey-item__marker">

                        <i class="fa-solid <?= e($item['icon']) ?>" aria-hidden="true"></i>

                    </div>


                    <div class="journey-item__body">

                        <div class="journey-item__header">

                            <span class="journey-item__stage">
                                <?= e($item['stage']) ?>
                            </span>

                            <span class="journey-item__period">
                                <?= e($item['period']) ?>
                            </span>

                        </div>

                        <h3><?= e($item['title']) ?></h3>

                        <p><?= e($item['text']) ?></p>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     EDUCATION
========================================================= -->

<section class="section" aria-labelledby="education-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Education</span>

            <h2 id="education-heading" class="section-title">
                Academic Foundation
            </h2>

            <p class="section-desc">
                Formal education supporting my work in cybersecurity,
                digital systems and information technology.
            </p>

        </header>


        <div class="row g-4 justify-content-center">

            <?php foreach ($education as $edu): ?>

                <div class="col-md-6 col-lg-5">

                    <article class="education-card">

                        <div class="education-card__top">

                            <span class="education-card__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($edu['icon']) ?>"></i>
                            </span>

                            <span class="education-card__status">
                                <?= e($edu['status']) ?>
                            </span>

                        </div>

                        <h3><?= e($edu['degree']) ?></h3>

                        <p class="education-card__school">
                            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                            <?= e($edu['school']) ?>
                        </p>

                        <p class="education-card__detail">
                            <?= e($edu['detail']) ?>
                        </p>

                        <div class="education-card__project">

                            <span><?= e($edu['project_label']) ?></span>

                            <strong><?= e($edu['project']) ?></strong>

                        </div>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     VALUES
========================================================= -->

<section class="section section--muted" aria-labelledby="values-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">What Guides My Work</span>

            <h2 id="values-heading" class="section-title">
                Professional Values
            </h2>

            <p class="section-desc">
                The principles I apply whether I'm securing
                infrastructure, developing software, supporting
                users or conducting research.
            </p>

        </header>


        <div class="row g-4">

            <?php foreach ($values as $value): ?>

                <div class="col-md-6 col-lg-4">

                    <article class="value-card">

                        <span class="value-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($value['icon']) ?>"></i>
                        </span>

                        <h3><?= e($value['title']) ?></h3>

                        <p><?= e($value['text']) ?></p>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     BEYOND WORK
========================================================= -->

<section class="section" aria-labelledby="beyond-heading">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-5">

                <span class="section-label">Beyond Work</span>

                <h2 id="beyond-heading" class="section-title">
                    Learning beyond the workplace.
                </h2>

                <p class="section-desc">
                    Professional growth also comes from participating
                    in broader technology and cybersecurity communities.
                </p>

            </div>


            <div class="col-lg-7">

                <div class="beyond-grid">

                    <?php foreach ($beyondWork as $item): ?>

                        <div class="beyond-card">

                            <i class="fa-solid <?= e($item['icon']) ?>" aria-hidden="true"></i>

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
     PHILOSOPHY QUOTE
========================================================= -->

<section class="quote-section">

    <div class="container">

        <blockquote class="philosophy-quote">

            <i class="fa-solid fa-quote-left philosophy-quote__icon" aria-hidden="true"></i>

            <p>
                I believe effective technology should solve a
                real problem, security should be built into the
                solution, and continuous learning should guide
                how that solution evolves.
            </p>

            <footer class="philosophy-quote__author">
                <span class="philosophy-quote__line" aria-hidden="true"></span>
                <span><?= e($config['name']) ?></span>
            </footer>

        </blockquote>

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
                    Explore Further
                </span>

                <h2>
                    Want to see what I'm building and researching?
                </h2>

                <p>
                    Explore my software projects, cybersecurity
                    research, professional experience and technical
                    work in more detail.
                </p>

            </div>

            <div class="cta-card__actions">

                <a href="<?= e(url('projects.php')) ?>" class="btn btn-light btn-lg">
                    View projects
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>

                <a href="<?= e(url('research.php')) ?>" class="btn btn-outline-light btn-lg">
                    View research
                </a>

            </div>

        </div>

    </div>

</section>


<?php require __DIR__ . '/partials/footer.php'; ?>