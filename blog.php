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
    'title'       => 'Insights',
    'description' => 'Articles and technical notes by Emmanuel Asituha on cybersecurity, software development, Data & AI, IT infrastructure, security research and emerging technologies.',
    'slug'        => 'blog',
    'body_class'  => 'blog-page',
    'css'         => ['assets/css/blog.css'],
];

/* =====================================================================
   Content
   ===================================================================== */

$firstName = explode(' ', trim($config['name']))[0];
$lastName  = explode(' ', trim($config['name']))[1] ?? '';


/* -------- Categories / filters -------- */

$categories = [
    ['key' => 'all',            'label' => 'All Insights',   'icon' => 'fa-layer-group'],
    ['key' => 'cybersecurity',  'label' => 'Cybersecurity',  'icon' => 'fa-shield-halved'],
    ['key' => 'development',    'label' => 'Development',    'icon' => 'fa-code'],
    ['key' => 'ai',             'label' => 'Data & AI',      'icon' => 'fa-brain'],
    ['key' => 'research',       'label' => 'Research',       'icon' => 'fa-microscope'],
    ['key' => 'infrastructure', 'label' => 'Infrastructure', 'icon' => 'fa-server'],
];


/* -------- Knowledge areas visual (hero) -------- */

$knowledgeAreas = [
    ['icon' => 'fa-shield-halved', 'title' => 'Cybersecurity', 'sub' => 'Security • Risk • Defense'],
    ['icon' => 'fa-code',          'title' => 'Development',   'sub' => 'Python • Django • Web'],
    ['icon' => 'fa-brain',         'title' => 'Data & AI',     'sub' => 'Data • Analytics • Intelligence'],
    ['icon' => 'fa-microscope',    'title' => 'Research',      'sub' => 'FANET • Networks • Cryptography'],
];


/* -------- Featured article -------- */

$featuredArticle = [
    'categories' => ['cybersecurity', 'research'],
    'eyebrow'    => 'FEATURED',
    'category'   => 'CYBERSECURITY',
    'icon'       => 'fa-satellite-dish',
    'read_time'  => '8 min read',
    'title'      => 'Why Authentication Matters in Flying Ad Hoc Networks',
    'text'       => 'Flying Ad Hoc Networks introduce unique security challenges because UAV nodes operate in highly dynamic environments. This article explores why authentication is a critical component of securing communication between UAVs and supporting infrastructure.',
    'tags'       => ['FANET', 'Authentication', 'UAV Security', 'Cryptography'],
    'link'       => 'blog/fanet-authentication.php',
];


/* -------- Articles -------- */

$articles = [
    [
        'categories' => ['cybersecurity', 'research'],
        'cover'      => 'cover--cyber',
        'icon'       => 'fa-rotate-left',
        'category'   => 'Security',
        'read_time'  => '6 min read',
        'title'      => 'Understanding Replay Attacks and How Secure Systems Prevent Them',
        'text'       => 'A practical look at replay attacks, why freshness matters and how timestamps, nonces and sequence numbers help protect network protocols.',
        'link'       => 'blog/replay-attacks.php',
        'source'     => 'Security Notes',
    ],
    [
        'categories' => ['development'],
        'cover'      => 'cover--dev',
        'icon'       => 'fa-code',
        'category'   => 'Development',
        'read_time'  => '7 min read',
        'title'      => 'Building Secure Django Applications from the Beginning',
        'text'       => 'Security should not be added at the end of development. This article examines practical security considerations when designing Django applications.',
        'link'       => 'blog/secure-django.php',
        'source'     => 'Developer Notes',
    ],
    [
        'categories' => ['ai', 'development'],
        'cover'      => 'cover--ai',
        'icon'       => 'fa-brain',
        'category'   => 'Data & AI',
        'read_time'  => '7 min read',
        'title'      => 'Where Artificial Intelligence Fits into Modern Farm Management Systems',
        'text'       => 'Exploring how data and AI can support analytics, decision-making, monitoring and operational efficiency within agricultural software platforms.',
        'link'       => 'blog/ai-farm-management.php',
        'source'     => 'AI Notes',
    ],
    [
        'categories' => ['infrastructure', 'cybersecurity'],
        'cover'      => 'cover--infra',
        'icon'       => 'fa-brands fa-ubuntu',
        'category'   => 'Linux Security',
        'read_time'  => '9 min read',
        'title'      => 'Practical Steps for Hardening an Ubuntu Server',
        'text'       => 'A defensive overview of reducing attack surface, managing access, maintaining updates and improving the security posture of an Ubuntu server.',
        'link'       => 'blog/ubuntu-server-hardening.php',
        'source'     => 'Infrastructure',
    ],
    [
        'categories' => ['research', 'cybersecurity'],
        'cover'      => 'cover--research',
        'icon'       => 'fa-satellite-dish',
        'category'   => 'Research',
        'read_time'  => '8 min read',
        'title'      => 'Security Challenges in Search and Rescue UAV Networks',
        'text'       => 'Search and Rescue FANETs operate in challenging environments. This article examines authentication, replay, spoofing, jamming and availability risks.',
        'link'       => 'blog/sar-fanet-security.php',
        'source'     => 'Research Notes',
    ],
    [
        'categories' => ['development', 'ai'],
        'cover'      => 'cover--dev',
        'icon'       => 'fa-piggy-bank',
        'category'   => 'Development',
        'read_time'  => '6 min read',
        'title'      => 'Building PigMaster: Lessons from Developing a Farm Management Platform',
        'text'       => 'Notes from designing a farm-management application covering animal records, breeding, health, inventory, finance and future AI capabilities.',
        'link'       => 'blog/building-pigmaster.php',
        'source'     => 'Build Journal',
    ],
    [
        'categories' => ['cybersecurity'],
        'cover'      => 'cover--cyber',
        'icon'       => 'fa-scale-balanced',
        'category'   => 'Cybersecurity',
        'read_time'  => '7 min read',
        'title'      => 'Understanding Risk Assessment in Information Security',
        'text'       => 'A practical introduction to identifying assets, threats, vulnerabilities, likelihood and impact when assessing information-security risk.',
        'link'       => 'blog/security-risk-assessment.php',
        'source'     => 'GRC',
    ],
    [
        'categories' => ['ai'],
        'cover'      => 'cover--ai',
        'icon'       => 'fa-chart-line',
        'category'   => 'Learning',
        'read_time'  => '5 min read',
        'title'      => 'My Journey into Data and Artificial Intelligence',
        'text'       => 'Reflections on expanding from cybersecurity and software development into data, analytics and artificial intelligence.',
        'link'       => 'blog/data-ai-journey.php',
        'source'     => 'Learning Journal',
    ],
    [
        'categories' => ['cybersecurity', 'infrastructure'],
        'cover'      => 'cover--infra',
        'icon'       => 'fa-lock',
        'category'   => 'Infrastructure',
        'read_time'  => '8 min read',
        'title'      => 'SSL/TLS Certificates: What Server Administrators Should Understand',
        'text'       => 'Understanding certificates, private keys, certificate chains and common verification problems when managing secure web servers.',
        'link'       => 'blog/ssl-tls-certificates.php',
        'source'     => 'Server Security',
    ],
];


/* -------- Topics grid -------- */

$topics = [
    [
        'icon'  => 'fa-shield-halved',
        'title' => 'Cybersecurity',
        'text'  => 'Defensive security, network security, risk management and secure architecture.',
        'filter'=> 'cybersecurity',
    ],
    [
        'icon'  => 'fa-code',
        'title' => 'Development',
        'text'  => 'Python, Django, web applications, secure coding and software architecture.',
        'filter'=> 'development',
    ],
    [
        'icon'  => 'fa-brain',
        'title' => 'Data & AI',
        'text'  => 'Data analysis, AI integration, analytics and intelligent applications.',
        'filter'=> 'ai',
    ],
    [
        'icon'  => 'fa-server',
        'title' => 'Infrastructure',
        'text'  => 'Linux, servers, networks, Microsoft 365 and infrastructure security.',
        'filter'=> 'infrastructure',
    ],
    [
        'icon'  => 'fa-microscope',
        'title' => 'Research',
        'text'  => 'FANETs, VANETs, authentication, cryptography and emerging networks.',
        'filter'=> 'research',
    ],
];


/* -------- Build journal items -------- */

$buildLog = [
    ['num' => '01', 'title' => 'Architecture',         'text' => 'Multi-tenant application design'],
    ['num' => '02', 'title' => 'Farm Management',      'text' => 'Pig, breeding, health & feeding workflows'],
    ['num' => '03', 'title' => 'Business Operations',  'text' => 'Inventory, finance & reporting'],
    ['num' => '04', 'title' => 'Intelligence',         'text' => 'Analytics & future AI integration'],
];


/* =====================================================================
   Render
   ===================================================================== */

require __DIR__ . '/partials/header.php';
?>


<!-- =========================================================
     HERO
========================================================= -->

<section class="blog-hero" aria-labelledby="blog-hero-heading">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="badge-soft">
                    <span class="badge-dot" aria-hidden="true"></span>
                    Insights &amp; Knowledge
                </span>


                <h1 id="blog-hero-heading" class="blog-hero__title">
                    Ideas, research &amp;
                    <span class="text-accent">technical insights.</span>
                </h1>


                <p class="blog-hero__lead">
                    A collection of articles, technical notes, research
                    perspectives and practical guides covering
                    cybersecurity, software development, Data &amp; AI,
                    infrastructure and emerging technologies.
                </p>


                <div class="blog-hero__actions">

                    <a href="#latest" class="btn btn-primary btn-lg">
                        Explore articles
                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    </a>

                    <a href="<?= e(url('research.php')) ?>" class="btn btn-outline-primary btn-lg">
                        Research publications
                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="knowledge-panel" aria-hidden="true">

                    <div class="knowledge-panel__head">

                        <span>KNOWLEDGE AREAS</span>

                        <i class="fa-solid fa-lightbulb"></i>

                    </div>


                    <?php foreach ($knowledgeAreas as $area): ?>

                        <div class="knowledge-item">

                            <span class="knowledge-item__icon">
                                <i class="fa-solid <?= e($area['icon']) ?>"></i>
                            </span>

                            <div>
                                <strong><?= e($area['title']) ?></strong>
                                <span><?= e($area['sub']) ?></span>
                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FILTER + SEARCH BAR
========================================================= -->

<section class="filter-bar" aria-label="Article filters">

    <div class="container">

        <div class="filter-bar__inner">

            <div class="filter-tabs" role="tablist">

                <?php foreach ($categories as $index => $cat): ?>

                    <button
                        type="button"
                        class="filter-tab <?= $index === 0 ? 'active' : '' ?>"
                        data-filter="<?= e($cat['key']) ?>"
                        role="tab"
                        aria-selected="<?= $index === 0 ? 'true' : 'false' ?>"
                    >
                        <i class="fa-solid <?= e($cat['icon']) ?>" aria-hidden="true"></i>
                        <span><?= e($cat['label']) ?></span>
                    </button>

                <?php endforeach; ?>

            </div>


            <div class="search-box">

                <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>

                <input
                    type="search"
                    id="articleSearch"
                    placeholder="Search insights..."
                    aria-label="Search articles"
                    autocomplete="off"
                >

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FEATURED ARTICLE
========================================================= -->

<section class="section" aria-labelledby="featured-article-heading">

    <div class="container">

        <header class="section-head">

            <span class="section-label">Featured Article</span>

            <h2 id="featured-article-heading" class="section-title">
                Start here
            </h2>

        </header>


        <article class="featured-article">

            <div class="featured-article__visual" aria-hidden="true">

                <div class="featured-article__graphic">

                    <div class="featured-article__core">
                        <i class="fa-solid <?= e($featuredArticle['icon']) ?>"></i>
                    </div>


                    <div class="featured-article__node featured-article__node--1">
                        <i class="fa-solid fa-plane"></i>
                    </div>

                    <div class="featured-article__node featured-article__node--2">
                        <i class="fa-solid fa-plane"></i>
                    </div>

                    <div class="featured-article__node featured-article__node--3">
                        <i class="fa-solid fa-plane"></i>
                    </div>

                    <div class="featured-article__node featured-article__node--4">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                </div>

            </div>


            <div class="featured-article__body">

                <div class="featured-article__meta">

                    <span class="featured-article__eyebrow">
                        <?= e($featuredArticle['category']) ?>
                    </span>

                    <span>
                        <i class="fa-regular fa-clock" aria-hidden="true"></i>
                        <?= e($featuredArticle['read_time']) ?>
                    </span>

                </div>


                <h3><?= e($featuredArticle['title']) ?></h3>

                <p><?= e($featuredArticle['text']) ?></p>


                <div class="tag-row">

                    <?php foreach ($featuredArticle['tags'] as $tag): ?>

                        <span class="chip chip--accent"><?= e($tag) ?></span>

                    <?php endforeach; ?>

                </div>


                <a
                    href="<?= e(url($featuredArticle['link'])) ?>"
                    class="link-accent mt-3"
                >
                    Read article
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>

            </div>

        </article>

    </div>

</section>



<!-- =========================================================
     ARTICLE GRID
========================================================= -->

<section
    class="section section--muted"
    id="latest"
    aria-labelledby="latest-heading"
>

    <div class="container">

        <header class="section-head">

            <span class="section-label">Latest Insights</span>

            <h2 id="latest-heading" class="section-title">
                Explore the knowledge hub
            </h2>

            <p class="section-desc">
                Practical perspectives from cybersecurity, development,
                infrastructure, Data &amp; AI and technology research.
            </p>

        </header>


        <div class="row g-4" id="articleGrid">

            <?php foreach ($articles as $article): ?>

                <div
                    class="col-md-6 col-lg-4 article-item"
                    data-categories="<?= e(implode(' ', $article['categories'])) ?>"
                    data-title="<?= e(strtolower($article['title'])) ?>"
                >

                    <article class="article-card">

                        <div class="article-card__cover <?= e($article['cover']) ?>">

                            <span class="article-card__icon" aria-hidden="true">
                                <i class="<?= str_contains($article['icon'], 'fa-brands') ? $article['icon'] : 'fa-solid ' . $article['icon'] ?>"></i>
                            </span>

                            <span class="article-card__eyebrow">
                                <?= e(strtoupper($article['category'])) ?>
                            </span>

                        </div>


                        <div class="article-card__body">

                            <div class="article-card__meta">

                                <span><?= e($article['category']) ?></span>

                                <span><?= e($article['read_time']) ?></span>

                            </div>


                            <h3><?= e($article['title']) ?></h3>

                            <p><?= e($article['text']) ?></p>


                            <div class="article-card__footer">

                                <span class="article-card__source">
                                    <i class="fa-regular fa-folder" aria-hidden="true"></i>
                                    <?= e($article['source']) ?>
                                </span>


                                <a
                                    href="<?= e(url($article['link'])) ?>"
                                    class="article-card__arrow"
                                    aria-label="Read article: <?= e($article['title']) ?>"
                                >
                                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                                </a>

                            </div>

                        </div>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>


        <!-- Empty state (hidden by default) -->

        <div class="empty-state" id="articleEmpty" hidden>

            <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>

            <h3>No insights found</h3>

            <p>Try another search term or select a different category.</p>

        </div>

    </div>

</section>



<!-- =========================================================
     TOPICS GRID
========================================================= -->

<section class="section" aria-labelledby="topics-heading">

    <div class="container">

        <header class="section-head section-head--center">

            <span class="section-label">Knowledge Areas</span>

            <h2 id="topics-heading" class="section-title">
                Topics I explore
            </h2>

            <p class="section-desc">
                The Insights section reflects the different disciplines
                that shape my professional work and continuous learning.
            </p>

        </header>


        <div class="row g-4">

            <?php foreach ($topics as $topic): ?>

                <div class="col-md-6 col-lg-4">

                    <article class="topic-card">

                        <span class="topic-card__icon" aria-hidden="true">
                            <i class="fa-solid <?= e($topic['icon']) ?>"></i>
                        </span>

                        <h3><?= e($topic['title']) ?></h3>

                        <p><?= e($topic['text']) ?></p>

                        <button
                            type="button"
                            class="topic-card__link"
                            data-topic-filter="<?= e($topic['filter']) ?>"
                        >
                            Explore <?= e($topic['title']) ?>
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </button>

                    </article>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     BUILD JOURNAL
========================================================= -->

<section class="section--dark" aria-labelledby="build-heading">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-6">

                <span class="section-label">Build Journal</span>

                <h2 id="build-heading" class="section-title">
                    Building in public: PigMaster
                </h2>

                <p class="lead-text">
                    Some of the best technical lessons come from actually
                    building something.
                </p>

                <p>
                    Through PigMaster, I document lessons around Django
                    development, database design, multi-tenant architecture,
                    security, farm-management workflows and future Data &amp; AI
                    integration.
                </p>

                <div class="mt-4">

                    <a href="<?= e(url('projects.php#pigmaster')) ?>" class="btn btn-primary">
                        Explore PigMaster
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="build-log">

                    <div class="build-log__head">

                        <i class="fa-solid fa-code" aria-hidden="true"></i>
                        <span>BUILD LOG</span>

                    </div>


                    <?php foreach ($buildLog as $item): ?>

                        <div class="build-log__item">

                            <span class="build-log__num">
                                <?= e($item['num']) ?>
                            </span>

                            <div>
                                <strong><?= e($item['title']) ?></strong>
                                <span><?= e($item['text']) ?></span>
                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     RESEARCH BANNER
========================================================= -->

<section class="section" aria-labelledby="research-banner-heading">

    <div class="container">

        <div class="research-banner">

            <span class="research-banner__icon" aria-hidden="true">
                <i class="fa-solid fa-book-open"></i>
            </span>


            <div class="research-banner__body">

                <span class="section-label">Academic Work</span>

                <h2 id="research-banner-heading">
                    Looking for my formal research?
                </h2>

                <p>
                    The Insights section contains technical explanations
                    and perspectives. My Research section contains my
                    academic publications, postgraduate research and
                    SAR-Sec work.
                </p>

            </div>


            <a href="<?= e(url('research.php')) ?>" class="btn btn-primary">
                View research
                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>

        </div>

    </div>

</section>



<!-- =========================================================
     CONNECT
========================================================= -->

<section class="section section--muted" aria-labelledby="connect-heading">

    <div class="container">

        <div class="connect-card">

            <div>

                <span class="section-label">Stay Connected</span>

                <h2 id="connect-heading">
                    Follow my work &amp; insights
                </h2>

                <p>
                    Follow my professional work for updates on cybersecurity,
                    software development, Data &amp; AI, research and
                    technology projects.
                </p>

            </div>


            <div class="connect-card__actions">

                <a
                    href="<?= e($config['channels']['linkedin']['href']) ?>"
                    class="btn btn-primary"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                    Connect on LinkedIn
                </a>


                <a href="<?= e(url('contact.php')) ?>" class="btn btn-outline-primary">
                    Contact me
                </a>

            </div>

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

                <span class="cta-eyebrow">Let's Exchange Ideas</span>

                <h2>Interested in technology, security or research?</h2>

                <p>
                    I'm open to conversations around cybersecurity,
                    development, Data &amp; AI, research, digital
                    innovation and practical technology solutions.
                </p>

            </div>

            <div class="cta-card__actions">

                <a href="<?= e(url('contact.php')) ?>" class="btn btn-light btn-lg">
                    Start a conversation
                    <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                </a>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FILTER / SEARCH SCRIPT
========================================================= -->

<script>
document.addEventListener("DOMContentLoaded", () => {

    const tabs         = document.querySelectorAll(".filter-tab");
    const topicButtons = document.querySelectorAll("[data-topic-filter]");
    const articleItems = document.querySelectorAll(".article-item");
    const searchInput  = document.getElementById("articleSearch");
    const emptyState   = document.getElementById("articleEmpty");

    let currentFilter = "all";

    /* =====================================================
       FILTER + SEARCH
    ====================================================== */

    const applyFilter = () => {

        const term = searchInput
            ? searchInput.value.trim().toLowerCase()
            : "";

        let visible = 0;

        articleItems.forEach((item) => {

            const cats = (item.dataset.categories || "").toLowerCase();
            const title = (item.dataset.title || "").toLowerCase();
            const content = item.textContent.toLowerCase();

            const catMatch =
                currentFilter === "all" ||
                cats.split(/\s+/).includes(currentFilter);

            const searchMatch =
                term === "" ||
                title.includes(term) ||
                content.includes(term);

            const show = catMatch && searchMatch;

            item.style.display = show ? "" : "none";
            if (show) visible++;

        });

        if (emptyState) {
            emptyState.hidden = visible !== 0;
        }
    };


    /* =====================================================
       CATEGORY TABS
    ====================================================== */

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {

            tabs.forEach((t) => {
                t.classList.remove("active");
                t.setAttribute("aria-selected", "false");
            });

            tab.classList.add("active");
            tab.setAttribute("aria-selected", "true");

            currentFilter = tab.dataset.filter || "all";

            applyFilter();
        });
    });


    /* =====================================================
       TOPIC BUTTONS
    ====================================================== */

    topicButtons.forEach((btn) => {
        btn.addEventListener("click", () => {

            currentFilter = btn.dataset.topicFilter || "all";

            tabs.forEach((t) => {
                const match = t.dataset.filter === currentFilter;
                t.classList.toggle("active", match);
                t.setAttribute("aria-selected", match ? "true" : "false");
            });

            applyFilter();

            /* Scroll to article grid */
            const target = document.getElementById("latest");
            if (target) {
                target.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        });
    });


    /* =====================================================
       SEARCH
    ====================================================== */

    if (searchInput) {
        searchInput.addEventListener("input", applyFilter);
    }

});
</script>


<?php require __DIR__ . '/partials/footer.php'; ?>