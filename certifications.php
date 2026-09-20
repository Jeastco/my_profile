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
    'title'       => 'Certifications',
    'description' => 'Professional certifications and credentials earned by Emmanuel Asituha — Cisco Networking Academy, OPSWAT, cybersecurity, networking and AI.',
    'slug'        => 'certifications',
    'body_class'  => 'certifications-page',
    'css'         => ['assets/css/certifications.css'],
];

/* =====================================================================
   Content — sourced from Credly badge wallet
   https://www.credly.com/users/emmanuel-asituha1/badges/credly
   ===================================================================== */

$firstName = explode(' ', trim($config['name']))[0];
$lastName  = explode(' ', trim($config['name']))[1] ?? '';

$credlyUrl = 'https://www.credly.com/users/emmanuel-asituha1/badges/credly';


/* -------- All credentials -------- */

$credentials = [

    /* =========================================================
       Cisco — Networking & Cybersecurity Certifications
    ========================================================= */

    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'CCNA: Enterprise Networking, Security, and Automation',
        'categories' => ['networking', 'security'],
        'type'       => 'CCNA',
        'icon'       => 'fa-network-wired',
        'issued'     => 'Sep 13, 2024',
        'issued_iso' => '2024-09-13',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Advanced routing, switching, WAN technologies, network security and automation concepts.',
    ],
    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'CCNA: Switching, Routing, and Wireless Essentials',
        'categories' => ['networking'],
        'type'       => 'CCNA',
        'icon'       => 'fa-network-wired',
        'issued'     => 'Jul 24, 2024',
        'issued_iso' => '2024-07-24',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Switching technologies, VLANs, routing protocols and wireless network configuration.',
    ],
    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'CCNA: Introduction to Networks',
        'categories' => ['networking'],
        'type'       => 'CCNA',
        'icon'       => 'fa-network-wired',
        'issued'     => 'Apr 26, 2024',
        'issued_iso' => '2024-04-26',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Networking fundamentals, protocols, IP addressing, and network architecture.',
    ],
    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'Network Technician Career Path',
        'categories' => ['networking'],
        'type'       => 'CAREER PATH',
        'icon'       => 'fa-screwdriver-wrench',
        'issued'     => 'Mar 6, 2026',
        'issued_iso' => '2026-03-06',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Comprehensive networking career path covering device configuration, protocols and troubleshooting.',
    ],


    /* =========================================================
       Cisco — Cybersecurity Certifications
    ========================================================= */

    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'Ethical Hacker',
        'categories' => ['cybersecurity'],
        'type'       => 'SECURITY',
        'icon'       => 'fa-user-secret',
        'issued'     => 'May 5, 2025',
        'issued_iso' => '2025-05-05',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Offensive security skills — vulnerability assessment, penetration testing and ethical hacking methodology.',
    ],
    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'Junior Cybersecurity Analyst Career Path',
        'categories' => ['cybersecurity'],
        'type'       => 'CAREER PATH',
        'icon'       => 'fa-shield-halved',
        'issued'     => 'May 5, 2025',
        'issued_iso' => '2025-05-05',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Complete cybersecurity analyst pathway — threat detection, incident response, monitoring and defense.',
    ],
    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'Cyber Threat Management',
        'categories' => ['cybersecurity'],
        'type'       => 'SECURITY',
        'icon'       => 'fa-bug-slash',
        'issued'     => 'Sep 10, 2024',
        'issued_iso' => '2024-09-10',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Threat intelligence, vulnerability management and cybersecurity governance concepts.',
    ],
    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'Cybersecurity Essentials',
        'categories' => ['cybersecurity'],
        'type'       => 'SECURITY',
        'icon'       => 'fa-lock',
        'issued'     => 'Nov 30, 2022',
        'issued_iso' => '2022-11-30',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Foundational cybersecurity concepts — threats, vulnerabilities, cryptography and access control.',
    ],
    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'Introduction to Cybersecurity',
        'categories' => ['cybersecurity'],
        'type'       => 'SECURITY',
        'icon'       => 'fa-shield-halved',
        'issued'     => 'Jun 5, 2022',
        'issued_iso' => '2022-06-05',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Entry-level cybersecurity awareness — landscape, threats and career paths.',
    ],


    /* =========================================================
       Cisco — Data & AI
    ========================================================= */

    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'Introduction to Modern AI',
        'categories' => ['ai', 'data'],
        'type'       => 'AI',
        'icon'       => 'fa-brain',
        'issued'     => 'Mar 16, 2026',
        'issued_iso' => '2026-03-16',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Foundations of modern artificial intelligence — machine learning concepts, generative AI and applications.',
    ],
    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'Introduction to Data Science',
        'categories' => ['ai', 'data'],
        'type'       => 'DATA',
        'icon'       => 'fa-chart-line',
        'issued'     => 'Apr 25, 2024',
        'issued_iso' => '2024-04-25',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Data science fundamentals — data analysis, statistics, and the data science workflow.',
    ],


    /* =========================================================
       Cisco — Program Participation
    ========================================================= */

    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'Cisco Networking Academy Learn-A-Thon 2026',
        'categories' => ['networking', 'learning'],
        'type'       => 'PROGRAM',
        'icon'       => 'fa-trophy',
        'issued'     => 'May 1, 2026',
        'issued_iso' => '2026-05-01',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Participation in the Cisco Networking Academy global learning challenge 2026.',
    ],
    [
        'issuer'     => 'Cisco',
        'issuer_key' => 'cisco',
        'title'      => 'Networking Academy Learn-A-Thon 2024',
        'categories' => ['networking', 'learning'],
        'type'       => 'PROGRAM',
        'icon'       => 'fa-trophy',
        'issued'     => 'Apr 26, 2024',
        'issued_iso' => '2024-04-26',
        'expires'    => null,
        'status'     => 'active',
        'description'=> 'Participation in the Cisco Networking Academy global learning challenge 2024.',
    ],


    /* =========================================================
       OPSWAT
    ========================================================= */

    [
        'issuer'     => 'OPSWAT',
        'issuer_key' => 'opswat',
        'title'      => 'Introduction to Critical Infrastructure Protection (ICIP)',
        'categories' => ['cybersecurity'],
        'type'       => 'SECURITY',
        'icon'       => 'fa-industry',
        'issued'     => null,
        'issued_iso' => null,
        'expires'    => 'Jul 2, 2027',
        'expires_iso'=> '2027-07-02',
        'status'     => 'active',
        'description'=> 'Critical infrastructure protection — securing industrial control systems, OT environments and essential services.',
    ],
];


/* -------- Derived stats -------- */

$totalCredentials = count($credentials);
$activeCredentials = count(array_filter($credentials, fn($c) => $c['status'] === 'active'));
$issuerCount = count(array_unique(array_column($credentials, 'issuer')));


/* -------- Filter categories -------- */

$filters = [
    ['key' => 'all',           'label' => 'All Credentials', 'icon' => 'fa-layer-group'],
    ['key' => 'cybersecurity', 'label' => 'Cybersecurity',   'icon' => 'fa-shield-halved'],
    ['key' => 'networking',    'label' => 'Networking',      'icon' => 'fa-network-wired'],
    ['key' => 'ai',            'label' => 'Data & AI',       'icon' => 'fa-brain'],
    ['key' => 'cisco',         'label' => 'Cisco',           'icon' => 'fa-certificate'],
    ['key' => 'opswat',        'label' => 'OPSWAT',          'icon' => 'fa-industry'],
];


/* -------- Career paths (featured) -------- */

$careerPaths = [
    [
        'icon'   => 'fa-shield-halved',
        'title'  => 'Junior Cybersecurity Analyst',
        'issuer' => 'Cisco Networking Academy',
        'date'   => 'May 5, 2025',
        'text'   => 'Complete cybersecurity analyst pathway covering threat detection, incident response, monitoring and defense.',
        'tags'   => ['Threat Analysis', 'Incident Response', 'Network Defense'],
    ],
    [
        'icon'   => 'fa-network-wired',
        'title'  => 'Network Technician',
        'issuer' => 'Cisco Networking Academy',
        'date'   => 'Mar 6, 2026',
        'text'   => 'Comprehensive networking career path covering device configuration, protocols and troubleshooting.',
        'tags'   => ['Routing', 'Switching', 'Troubleshooting'],
    ],
];


/* -------- Memberships -------- */

$memberships = [
    [
        'icon'   => 'fa-globe',
        'type'   => 'PROFESSIONAL MEMBERSHIP',
        'title'  => 'Internet Society',
        'text'   => 'Member of the global Internet Society community supporting an open, globally connected, secure and trustworthy Internet.',
    ],
    [
        'icon'   => 'fa-flag',
        'type'   => 'CYBERSECURITY COMMUNITY',
        'title'  => 'Capture The Flag',
        'text'   => 'Active interest in cybersecurity challenges and practical security problem-solving environments.',
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

<section class="cert-hero" aria-labelledby="cert-hero-heading">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-7">

                <span class="badge-soft">
                    <span class="badge-dot" aria-hidden="true"></span>
                    Credentials &amp; Certifications
                </span>


                <h1 id="cert-hero-heading" class="cert-hero__title">
                    Verified credentials,
                    <span class="text-accent">continuous learning.</span>
                </h1>


                <p class="cert-hero__lead">
                    A growing portfolio of professional certifications
                    across cybersecurity, networking, Data &amp; AI — earned
                    through the Cisco Networking Academy, OPSWAT and
                    other industry programs.
                </p>


                <div class="cert-hero__actions">

                    <a
                        href="<?= e($credlyUrl) ?>"
                        class="btn btn-primary btn-lg"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <i class="fa-solid fa-certificate" aria-hidden="true"></i>
                        Verify on Credly
                        <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                    </a>

                    <a href="#credentials" class="btn btn-outline-primary btn-lg">
                        Browse credentials
                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    </a>

                </div>

            </div>


            <div class="col-lg-5">

                <div class="cert-summary">

                    <div class="cert-summary__head">

                        <span>CREDLY BADGE WALLET</span>

                        <i class="fa-solid fa-certificate" aria-hidden="true"></i>

                    </div>


                    <div class="cert-summary__stat">

                        <strong><?= (int) $totalCredentials ?></strong>
                        <span>Total Credentials</span>

                    </div>


                    <div class="cert-summary__row">

                        <div>
                            <strong><?= (int) $activeCredentials ?></strong>
                            <span>Active</span>
                        </div>

                        <div>
                            <strong><?= (int) $issuerCount ?></strong>
                            <span>Issuers</span>
                        </div>

                    </div>


                    <div class="cert-summary__issuers">

                        <span class="issuer-badge issuer-badge--cisco">
                            <i class="fa-solid fa-certificate" aria-hidden="true"></i>
                            Cisco
                        </span>

                        <span class="issuer-badge issuer-badge--opswat">
                            <i class="fa-solid fa-industry" aria-hidden="true"></i>
                            OPSWAT
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FILTER BAR
========================================================= -->

<section class="filter-bar" aria-label="Credential filters">

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
     CREDENTIALS GRID
========================================================= -->

<section
    class="section"
    id="credentials"
    aria-labelledby="credentials-heading"
>

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">All Credentials</span>

            <h2 id="credentials-heading" class="section-title">
                Professional certifications
            </h2>

            <p class="section-desc">
                Each credential is independently verifiable through Credly.
                Filter by issuer, domain or specialty.
            </p>

        </header>


        <div class="row g-4" id="certGrid">

            <?php foreach ($credentials as $credential): ?>

                <div
                    class="col-md-6 col-lg-4 cert-item"
                    data-categories="<?= e(implode(' ', $credential['categories'])) ?> <?= e($credential['issuer_key']) ?>"
                >

                    <article class="cert-card">

                        <header class="cert-card__head">

                            <span class="cert-card__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($credential['icon']) ?>"></i>
                            </span>

                            <span class="cert-card__type">
                                <?= e($credential['type']) ?>
                            </span>

                        </header>


                        <span class="cert-card__issuer">
                            <?= e($credential['issuer']) ?>
                        </span>


                        <h3><?= e($credential['title']) ?></h3>


                        <p class="cert-card__desc">
                            <?= e($credential['description']) ?>
                        </p>


                        <div class="cert-card__meta">

                            <?php if (!empty($credential['issued'])): ?>

                                <div>
                                    <span class="cert-card__meta-label">Issued</span>
                                    <time
                                        class="cert-card__meta-value"
                                        datetime="<?= e($credential['issued_iso'] ?? '') ?>"
                                    >
                                        <?= e($credential['issued']) ?>
                                    </time>
                                </div>

                            <?php endif; ?>


                            <?php if (!empty($credential['expires'])): ?>

                                <div>
                                    <span class="cert-card__meta-label">Expires</span>
                                    <time
                                        class="cert-card__meta-value"
                                        datetime="<?= e($credential['expires_iso'] ?? '') ?>"
                                    >
                                        <?= e($credential['expires']) ?>
                                    </time>
                                </div>

                            <?php endif; ?>

                        </div>


                        <div class="cert-card__footer">

                            <span class="status-pill status-pill--<?= e($credential['status']) ?>">

                                <?php if ($credential['status'] === 'active'): ?>

                                    <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                                    Active

                                <?php else: ?>

                                    <i class="fa-solid fa-circle-minus" aria-hidden="true"></i>
                                    Expired

                                <?php endif; ?>

                            </span>


                            <a
                                href="<?= e($credlyUrl) ?>"
                                class="cert-card__verify"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Verify <?= e($credential['title']) ?> on Credly"
                            >
                                Verify
                                <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                            </a>

                        </div>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>


        <!-- Empty state -->
        <div class="empty-state" id="certEmpty" hidden>

            <i class="fa-solid fa-folder-open" aria-hidden="true"></i>

            <h3>No credentials found</h3>

            <p>Try a different category filter.</p>

        </div>

    </div>

</section>



<!-- =========================================================
     CAREER PATHS (featured)
========================================================= -->

<section class="section section--muted" aria-labelledby="paths-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Career Pathways</span>

            <h2 id="paths-heading" class="section-title">
                Structured learning tracks
            </h2>

            <p class="section-desc">
                Multi-course career paths completed through the Cisco
                Networking Academy.
            </p>

        </header>


        <div class="row g-4 justify-content-center">

            <?php foreach ($careerPaths as $path): ?>

                <div class="col-md-6 col-lg-5">

                    <article class="path-card">

                        <div class="path-card__head">

                            <span class="path-card__icon" aria-hidden="true">
                                <i class="fa-solid <?= e($path['icon']) ?>"></i>
                            </span>

                            <div>
                                <span class="path-card__eyebrow">
                                    CAREER PATH
                                </span>
                                <h3><?= e($path['title']) ?></h3>
                            </div>

                        </div>


                        <p class="path-card__issuer">
                            <i class="fa-solid fa-certificate" aria-hidden="true"></i>
                            <?= e($path['issuer']) ?>
                        </p>


                        <p class="path-card__text">
                            <?= e($path['text']) ?>
                        </p>


                        <div class="tag-row">

                            <?php foreach ($path['tags'] as $tag): ?>

                                <span class="chip chip--accent"><?= e($tag) ?></span>

                            <?php endforeach; ?>

                        </div>


                        <div class="path-card__footer">

                            <time class="path-card__date">
                                Issued <?= e($path['date']) ?>
                            </time>

                        </div>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     MEMBERSHIPS
========================================================= -->

<section class="section" aria-labelledby="memberships-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Professional Community</span>

            <h2 id="memberships-heading" class="section-title">
                Memberships &amp; communities
            </h2>

            <p class="section-desc">
                Participating in professional communities that support
                knowledge sharing, technology development and an
                open, secure Internet.
            </p>

        </header>


        <div class="row g-4 justify-content-center">

            <?php foreach ($memberships as $membership): ?>

                <div class="col-md-6 col-lg-5">

                    <article class="membership-card">

                        <span class="membership-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($membership['icon']) ?>"></i>
                        </span>

                        <div>

                            <span class="membership-card__type">
                                <?= e($membership['type']) ?>
                            </span>

                            <h3><?= e($membership['title']) ?></h3>

                            <p><?= e($membership['text']) ?></p>

                        </div>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     VERIFY BANNER
========================================================= -->

<section class="section section--muted" aria-labelledby="verify-heading">

    <div class="container">

        <div class="verify-banner">

            <span class="verify-banner__icon" aria-hidden="true">
                <i class="fa-solid fa-certificate"></i>
            </span>


            <div class="verify-banner__body">

                <span class="section-label">Independent Verification</span>

                <h2 id="verify-heading">
                    All credentials verified through Credly
                </h2>

                <p>
                    Every certification listed here is independently
                    verifiable through my public Credly badge wallet.
                    Click below to view issuer-verified badges,
                    metadata and skills associated with each credential.
                </p>

            </div>


            <a
                href="<?= e($credlyUrl) ?>"
                class="btn btn-primary"
                target="_blank"
                rel="noopener noreferrer"
            >
                Open Credly wallet
                <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
            </a>

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

                <span class="cta-eyebrow">Verify &amp; Connect</span>

                <h2>Want to see how these credentials are applied?</h2>

                <p>
                    Explore my experience, projects and research to see
                    how this training translates into practical
                    cybersecurity, networking and development work.
                </p>

            </div>

            <div class="cta-card__actions">

                <a href="<?= e(url('experience.php')) ?>" class="btn btn-light btn-lg">
                    View experience
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>

                <a href="<?= e(url('contact.php')) ?>" class="btn btn-outline-light btn-lg">
                    Contact me
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

    const tabs       = document.querySelectorAll(".filter-tab");
    const certItems  = document.querySelectorAll(".cert-item");
    const emptyState = document.getElementById("certEmpty");

    if (!tabs.length) return;

    const applyFilter = (filter) => {

        let visible = 0;

        certItems.forEach((item) => {

            const cats = (item.dataset.categories || "").toLowerCase();
            const show = filter === "all" || cats.split(/\s+/).includes(filter);

            item.style.display = show ? "" : "none";
            if (show) visible++;

        });

        if (emptyState) {
            emptyState.hidden = visible !== 0;
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