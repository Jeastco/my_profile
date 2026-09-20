<?php
declare(strict_types=1);

/* =====================================================================
   Bootstrap
   ===================================================================== */

$config = require __DIR__ . '/config.php';

/* ---------------------------------------------------------------------
   Secure session for CSRF
--------------------------------------------------------------------- */

$isHttps = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';

session_set_cookie_params([
    'lifetime' => 0,
    'path'     => '/',
    'secure'   => $isHttps,
    'httponly' => true,
    'samesite' => 'Strict',
]);

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

/* Generate CSRF token (30 min lifetime) */
$csrfLifetime = 1800;

if (
    empty($_SESSION['csrf_token']) ||
    empty($_SESSION['csrf_token_time']) ||
    (time() - (int) $_SESSION['csrf_token_time']) > $csrfLifetime
) {
    $_SESSION['csrf_token']      = bin2hex(random_bytes(32));
    $_SESSION['csrf_token_time'] = time();
}

$csrfToken = (string) $_SESSION['csrf_token'];

/* =====================================================================
   Page config
   ===================================================================== */

$page = [
    'title'       => 'Contact',
    'description' => 'Contact Emmanuel Asituha regarding cybersecurity, software development, Data & AI, IT infrastructure, research, collaboration and technology opportunities.',
    'slug'        => 'contact',
    'body_class'  => 'contact-page',
    'css'         => ['assets/css/contact.css'],
];

/* =====================================================================
   Content
   ===================================================================== */

$firstName = explode(' ', trim($config['name']))[0];
$lastName  = explode(' ', trim($config['name']))[1] ?? '';


/* -------- Contact channel cards -------- */

$channelCards = [
    [
        'key'    => 'email',
        'icon'   => 'fa-envelope',
        'brand'  => 'fa-solid',
        'label'  => 'Email',
        'value'  => $config['channels']['email']['value'] ?? '',
        'href'   => $config['channels']['email']['href'] ?? '#',
        'note'   => $config['channels']['email']['note'] ?? '',
    ],
    [
        'key'      => 'phone',
        'icon'     => 'fa-phone',
        'brand'    => 'fa-solid',
        'label'    => 'Phone',
        'value'    => $config['channels']['phone']['value'] ?? '',
        'href'     => $config['channels']['phone']['href'] ?? '#',
        'note'     => $config['channels']['phone']['note'] ?? '',
    ],
    [
        'key'      => 'whatsapp',
        'icon'     => 'fa-whatsapp',
        'brand'    => 'fa-brands',
        'label'    => 'WhatsApp',
        'value'    => $config['channels']['whatsapp']['value'] ?? '',
        'href'     => $config['channels']['whatsapp']['href'] ?? '#',
        'note'     => $config['channels']['whatsapp']['note'] ?? '',
        'external' => true,
    ],
    [
        'key'      => 'linkedin',
        'icon'     => 'fa-linkedin-in',
        'brand'    => 'fa-brands',
        'label'    => 'LinkedIn',
        'value'    => $config['channels']['linkedin']['value'] ?? '',
        'href'     => $config['channels']['linkedin']['href'] ?? '#',
        'note'     => $config['channels']['linkedin']['note'] ?? '',
        'external' => true,
    ],
    [
        'key'      => 'github',
        'icon'     => 'fa-github',
        'brand'    => 'fa-brands',
        'label'    => 'GitHub',
        'value'    => $config['channels']['github']['value'] ?? '',
        'href'     => $config['channels']['github']['href'] ?? '#',
        'note'     => $config['channels']['github']['note'] ?? '',
        'external' => true,
    ],
    [
        'key'      => 'credly',
        'icon'     => 'fa-certificate',
        'brand'    => 'fa-solid',
        'label'    => 'Credly',
        'value'    => $config['channels']['credly']['value'] ?? '',
        'href'     => $config['channels']['credly']['href'] ?? '#',
        'note'     => $config['channels']['credly']['note'] ?? '',
        'external' => true,
    ],
];


/* -------- Contact reasons (left column) -------- */

$contactReasons = [
    [
        'icon'  => 'fa-briefcase',
        'title' => 'Professional Opportunities',
        'text'  => 'Cybersecurity, IT, development, infrastructure and technology roles.',
    ],
    [
        'icon'  => 'fa-code',
        'title' => 'Software Projects',
        'text'  => 'Web applications, digital platforms, automation and secure system development.',
    ],
    [
        'icon'  => 'fa-shield-halved',
        'title' => 'Cybersecurity',
        'text'  => 'Security assessment, infrastructure security, GRC and defensive security.',
    ],
    [
        'icon'  => 'fa-brain',
        'title' => 'Data & AI',
        'text'  => 'Data-driven applications, analytics, AI integration and emerging technologies.',
    ],
    [
        'icon'  => 'fa-microscope',
        'title' => 'Research Collaboration',
        'text'  => 'FANETs, network security, authentication, cryptography and related research.',
    ],
];


/* -------- What to expect (sidebar) -------- */

$expectations = [
    ['icon' => 'fa-clock',           'text' => 'Response within 24–48 hours'],
    ['icon' => 'fa-shield-halved',   'text' => 'Confidential handling of your message'],
    ['icon' => 'fa-comments',        'text' => 'No obligation — a simple conversation'],
];


/* -------- Topical focus tags (sidebar) -------- */

$focusTags = [
    'Cybersecurity', 'Development', 'Data & AI',
    'Infrastructure', 'Research',
];


/* -------- FAQ -------- */

$faqs = $config['faqs'] ?? [];


/* =====================================================================
   Render
   ===================================================================== */

require __DIR__ . '/partials/header.php';
?>


<!-- =========================================================
     HERO
========================================================= -->

<section class="contact-hero" aria-labelledby="contact-hero-heading">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-7">

                <span class="badge-soft">
                    <span class="badge-dot" aria-hidden="true"></span>
                    Get in Touch
                </span>


                <h1 id="contact-hero-heading" class="contact-hero__title">
                    Let's start a
                    <span class="text-accent">conversation.</span>
                </h1>


                <p class="contact-hero__lead">
                    Whether you want to discuss cybersecurity, software
                    development, Data &amp; AI, infrastructure, research
                    or a technology project, I'm always interested in
                    meaningful professional conversations.
                </p>


                <div class="contact-hero__actions">

                    <a href="#contact-form" class="btn btn-primary btn-lg">
                        Send a message
                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    </a>

                    <a
                        href="<?= e($config['channels']['linkedin']['href']) ?>"
                        class="btn btn-outline-primary btn-lg"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                        LinkedIn
                    </a>

                </div>

            </div>


            <div class="col-lg-5">

                <div class="status-card">

                    <div class="status-card__head">

                        <span class="status-pill">
                            <span class="status-pill__dot"></span>
                            Available
                        </span>

                        <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>

                    </div>


                    <div class="status-card__body">

                        <span class="status-card__avatar" aria-hidden="true">
                            <?= e($config['initials']) ?>
                        </span>

                        <div>
                            <strong><?= e($config['name']) ?></strong>
                            <span><?= e($config['role']) ?></span>
                        </div>

                    </div>


                    <div class="status-card__meta">

                        <div>
                            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                            <?= e($config['location']) ?>
                        </div>

                        <div>
                            <i class="fa-solid fa-globe" aria-hidden="true"></i>
                            Local &amp; remote
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     CHANNEL CARDS
========================================================= -->

<section class="channel-section" aria-labelledby="channels-heading">

    <div class="container">

        <header class="section-head">

            <span class="section-label">Direct Channels</span>

            <h2 id="channels-heading" class="section-title">
                Pick whichever works best
            </h2>

        </header>


        <div class="row g-3">

            <?php foreach ($channelCards as $channel): ?>

                <div class="col-6 col-md-4 col-lg-2">

                    <a
                        href="<?= e($channel['href']) ?>"
                        class="channel-card"
                        <?= !empty($channel['external']) ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
                    >

                        <span class="channel-card__icon" aria-hidden="true">
                            <i class="<?= e($channel['brand'] . ' ' . $channel['icon']) ?>"></i>
                        </span>

                        <strong class="channel-card__label">
                            <?= e($channel['label']) ?>
                        </strong>

                        <span class="channel-card__value">
                            <?= e($channel['value']) ?>
                        </span>

                        <?php if (!empty($channel['note'])): ?>

                            <span class="channel-card__note">
                                <?= e($channel['note']) ?>
                            </span>

                        <?php endif; ?>

                    </a>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     FORM + SIDEBAR
========================================================= -->

<section
    class="section"
    id="contact-form"
    aria-labelledby="form-heading"
>

    <div class="container">

        <div class="row g-5">


            <!-- =================================================
                 FORM
            ================================================== -->

            <div class="col-lg-7">

                <div class="form-card">

                    <header class="form-card__head">

                        <div>
                            <span class="form-card__eyebrow">SEND A MESSAGE</span>
                            <h2 id="form-heading">Let's talk</h2>
                            <p>I'll reply as soon as I can.</p>
                        </div>

                        <i class="fa-regular fa-envelope" aria-hidden="true"></i>

                    </header>


                    <form
                        id="contactForm"
                        action="<?= e(url('send-message.php')) ?>"
                        method="POST"
                        novalidate
                    >

                        <!-- CSRF -->
                        <input
                            type="hidden"
                            name="csrf_token"
                            value="<?= e($csrfToken) ?>"
                        >


                        <!-- Honeypot -->
                        <div class="form-honeypot" aria-hidden="true">
                            <label for="website">Website</label>
                            <input
                                type="text"
                                id="website"
                                name="website"
                                tabindex="-1"
                                autocomplete="off"
                            >
                        </div>


                        <!-- Name + Email -->
                        <div class="row g-3">

                            <div class="col-md-6">

                                <label for="name" class="form-label">
                                    Full Name <span class="required">*</span>
                                </label>

                                <div class="input-group-icon">

                                    <i class="fa-regular fa-user" aria-hidden="true"></i>

                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        class="form-control"
                                        placeholder="Your name"
                                        autocomplete="name"
                                        maxlength="100"
                                        required
                                    >

                                </div>

                                <small class="form-error"></small>

                            </div>


                            <div class="col-md-6">

                                <label for="email" class="form-label">
                                    Email <span class="required">*</span>
                                </label>

                                <div class="input-group-icon">

                                    <i class="fa-regular fa-envelope" aria-hidden="true"></i>

                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="you@example.com"
                                        autocomplete="email"
                                        maxlength="150"
                                        required
                                    >

                                </div>

                                <small class="form-error"></small>

                            </div>

                        </div>


                        <!-- Organization -->
                        <div class="mt-3">

                            <label for="organization" class="form-label">
                                Organization
                                <span class="optional">Optional</span>
                            </label>

                            <div class="input-group-icon">

                                <i class="fa-regular fa-building" aria-hidden="true"></i>

                                <input
                                    type="text"
                                    id="organization"
                                    name="organization"
                                    class="form-control"
                                    placeholder="Company or organization"
                                    autocomplete="organization"
                                    maxlength="150"
                                >

                            </div>

                        </div>


                        <!-- Subject -->
                        <div class="mt-3">

                            <label for="subject" class="form-label">
                                Topic <span class="required">*</span>
                            </label>

                            <div class="input-group-icon">

                                <i class="fa-solid fa-layer-group" aria-hidden="true"></i>

                                <select
                                    id="subject"
                                    name="subject"
                                    class="form-select"
                                    required
                                >
                                    <option value="">Choose a topic…</option>

                                    <?php foreach (($config['enquiry_subjects'] ?? []) as $value => $label): ?>

                                        <option value="<?= e($value) ?>">
                                            <?= e($label) ?>
                                        </option>

                                    <?php endforeach; ?>

                                </select>

                            </div>

                            <small class="form-error"></small>

                        </div>


                        <!-- Message -->
                        <div class="mt-3">

                            <div class="label-row">

                                <label for="message" class="form-label">
                                    Message <span class="required">*</span>
                                </label>

                                <span class="char-count" id="messageCount">0 / 1500</span>

                            </div>

                            <textarea
                                id="message"
                                name="message"
                                class="form-control"
                                rows="6"
                                placeholder="Tell me briefly what this is about…"
                                minlength="10"
                                maxlength="1500"
                                required
                            ></textarea>

                            <small class="form-error"></small>

                        </div>


                        <!-- Privacy note -->
                        <div class="privacy-note">

                            <i class="fa-solid fa-lock" aria-hidden="true"></i>

                            <p>
                                Do not include passwords, credentials or
                                confidential information in this form.
                            </p>

                        </div>


                        <!-- Submit -->
                        <button
                            type="submit"
                            class="btn btn-primary btn-submit"
                        >
                            <span>Send message</span>
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        </button>


                        <div
                            class="form-status"
                            id="formStatus"
                            role="status"
                            aria-live="polite"
                        ></div>

                    </form>

                </div>

            </div>



            <!-- =================================================
                 SIDEBAR
            ================================================== -->

            <aside class="col-lg-5">

                <div class="side-panel">

                    <h3>What to expect</h3>

                    <ul class="expect-list">

                        <?php foreach ($expectations as $item): ?>

                            <li>

                                <i class="fa-solid <?= e($item['icon']) ?>" aria-hidden="true"></i>

                                <span><?= e($item['text']) ?></span>

                            </li>

                        <?php endforeach; ?>

                    </ul>


                    <hr>


                    <h3>Topical focus</h3>

                    <div class="focus-tags">

                        <?php foreach ($focusTags as $tag): ?>

                            <span class="focus-tag"><?= e($tag) ?></span>

                        <?php endforeach; ?>

                    </div>


                    <hr>


                    <h3>Prefer social?</h3>

                    <div class="social-grid">

                        <a
                            href="<?= e($config['channels']['linkedin']['href']) ?>"
                            class="social-btn social-btn--linkedin"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                            LinkedIn
                        </a>

                        <a
                            href="<?= e($config['channels']['github']['href']) ?>"
                            class="social-btn social-btn--github"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <i class="fa-brands fa-github" aria-hidden="true"></i>
                            GitHub
                        </a>

                        <a
                            href="<?= e($config['channels']['whatsapp']['href']) ?>"
                            class="social-btn social-btn--whatsapp"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                            WhatsApp
                        </a>

                        <a
                            href="<?= e($config['channels']['credly']['href']) ?>"
                            class="social-btn social-btn--credly"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <i class="fa-solid fa-certificate" aria-hidden="true"></i>
                            Credly
                        </a>

                    </div>

                </div>


                <!-- Reasons -->
                <div class="reasons-card">

                    <h3>What we can discuss</h3>

                    <ul class="reasons-list">

                        <?php foreach ($contactReasons as $reason): ?>

                            <li>

                                <span class="reasons-list__icon" aria-hidden="true">
                                    <i class="fa-solid <?= e($reason['icon']) ?>"></i>
                                </span>

                                <div>
                                    <strong><?= e($reason['title']) ?></strong>
                                    <span><?= e($reason['text']) ?></span>
                                </div>

                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            </aside>

        </div>

    </div>

</section>



<!-- =========================================================
     FAQ
========================================================= -->

<?php if (!empty($faqs)): ?>

    <section class="section section--muted" aria-labelledby="faq-heading">

        <div class="container">

            <header class="section-head section-head--center">

                <span class="section-label">Quick Answers</span>

                <h2 id="faq-heading" class="section-title">
                    Before you get in touch
                </h2>

            </header>


            <div class="faq-list">

                <?php foreach ($faqs as $i => $faq): ?>

                    <details class="faq-item" <?= $i === 0 ? 'open' : '' ?>>

                        <summary>

                            <span><?= e($faq['q']) ?></span>

                            <i class="fa-solid fa-plus" aria-hidden="true"></i>

                        </summary>

                        <div class="faq-answer">

                            <p><?= e($faq['a']) ?></p>

                        </div>

                    </details>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

<?php endif; ?>



<!-- =========================================================
     PRIVACY NOTE
========================================================= -->

<section class="section">

    <div class="container">

        <div class="security-banner">

            <span class="security-banner__icon" aria-hidden="true">
                <i class="fa-solid fa-lock"></i>
            </span>

            <div>

                <span class="section-label">Privacy &amp; Security</span>

                <h2>Your message should stay simple and non-sensitive.</h2>

                <p>
                    The production contact system uses server-side validation,
                    anti-spam controls, CSRF protection, rate limiting and
                    secure message handling. Sensitive credentials or
                    confidential records should never be sent through a
                    general website contact form.
                </p>

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

                <span class="cta-eyebrow">Start a Conversation</span>

                <h2>Have something interesting to discuss?</h2>

                <p>
                    Technology moves forward through ideas, collaboration,
                    research and building. Send me a message and let's
                    start there.
                </p>

            </div>

            <div class="cta-card__actions">

                <a href="#contact-form" class="btn btn-light btn-lg">
                    Send a message
                    <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
                </a>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     CONTACT FORM SCRIPT
========================================================= -->

<script>
document.addEventListener("DOMContentLoaded", () => {

    const form         = document.getElementById("contactForm");
    const messageField = document.getElementById("message");
    const messageCount = document.getElementById("messageCount");
    const formStatus   = document.getElementById("formStatus");

    if (!form) return;

    /* =====================================================
       Character counter
    ====================================================== */

    if (messageField && messageCount) {
        const updateCount = () => {
            messageCount.textContent = messageField.value.length + " / 1500";
        };
        messageField.addEventListener("input", updateCount);
        updateCount();
    }


    /* =====================================================
       Error helpers
    ====================================================== */

    const setError = (field, message) => {
        field.classList.add("is-invalid");
        field.setAttribute("aria-invalid", "true");
        const group = field.closest(".input-group-icon, .mt-3, .col-md-6, .col-12");
        const error = group?.querySelector(".form-error");
        if (error) error.textContent = message;
    };

    const clearError = (field) => {
        field.classList.remove("is-invalid");
        field.removeAttribute("aria-invalid");
        const group = field.closest(".input-group-icon, .mt-3, .col-md-6, .col-12");
        const error = group?.querySelector(".form-error");
        if (error) error.textContent = "";
    };


    /* Live clearing */
    form.querySelectorAll(".form-control, .form-select").forEach((field) => {
        field.addEventListener("input",  () => clearError(field));
        field.addEventListener("change", () => clearError(field));
    });


    /* =====================================================
       Validate
    ====================================================== */

    const isValidEmail = (value) =>
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value.trim());

    const validate = () => {
        let valid = true;

        form.querySelectorAll("[required]").forEach((field) => {
            clearError(field);

            if (!field.value.trim()) {
                setError(field, "This field is required.");
                valid = false;
                return;
            }

            if (field.type === "email" && !isValidEmail(field.value)) {
                setError(field, "Enter a valid email address.");
                valid = false;
            }

            if (field.id === "message" && field.value.trim().length < 10) {
                setError(field, "Please provide a little more detail.");
                valid = false;
            }
        });

        return valid;
    };


    /* =====================================================
       Status
    ====================================================== */

    const setStatus = (type, message) => {
        if (!formStatus) return;
        formStatus.className = "form-status form-status-" + type;
        formStatus.textContent = message;
    };


    /* =====================================================
       Submit
    ====================================================== */

    form.addEventListener("submit", async (event) => {

        event.preventDefault();
        setStatus("info", "");

        if (!validate()) {
            setStatus("error", "Please review the highlighted fields.");
            form.querySelector(".is-invalid")?.focus();
            return;
        }

        const submitBtn = form.querySelector('button[type="submit"]');
        const original  = submitBtn.innerHTML;

        submitBtn.disabled = true;
        submitBtn.innerHTML =
            '<span>Sending…</span> <i class="fa-solid fa-spinner fa-spin"></i>';

        setStatus("info", "Sending your message…");

        try {

            const response = await fetch(form.action, {
                method: "POST",
                body: new FormData(form),
                headers: { "X-Requested-With": "XMLHttpRequest" },
            });

            let result;
            try {
                result = await response.json();
            } catch {
                throw new Error("Invalid server response.");
            }

            if (response.ok && result.success) {
                setStatus("success", result.message || "Message sent.");
                form.reset();
                if (messageCount) messageCount.textContent = "0 / 1500";
            } else {
                setStatus("error", result.message || "Something went wrong.");
            }

        } catch {
            setStatus("error", "Unable to send. Please try again later.");
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = original;
        }
    });

});
</script>


<?php require __DIR__ . '/partials/footer.php'; ?>