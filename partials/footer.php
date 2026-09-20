<?php
declare(strict_types=1);

/* ---------------------------------------------------------------------
   Footer data — reuse config
--------------------------------------------------------------------- */

$footerColumns = [
    'Explore' => [
        ['label' => 'About',       'href' => 'about.php'],
        ['label' => 'Experience',  'href' => 'experience.php'],
        ['label' => 'Projects',    'href' => 'projects.php'],
        ['label' => 'Research',    'href' => 'research.php'],
    ],
    'Expertise' => [
        ['label' => 'Cybersecurity',        'href' => 'expertise.php#cybersecurity'],
        ['label' => 'Software Development', 'href' => 'expertise.php#development'],
        ['label' => 'Data & AI',            'href' => 'expertise.php#data-ai'],
        ['label' => 'IT Infrastructure',    'href' => 'expertise.php#infrastructure'],
    ],
    'Resources' => [
        ['label' => 'Certifications', 'href' => 'certifications.php'],
        ['label' => 'Insights',       'href' => 'blog.php'],
        ['label' => 'Contact',        'href' => 'contact.php'],
        ['label' => 'Download CV',    'href' => 'assets/documents/cv.pdf', 'external' => true],
    ],
    'Direct' => [
        ['label' => 'Email',    'href' => $config['channels']['email']['href']    ?? '#'],
        ['label' => 'WhatsApp', 'href' => $config['channels']['whatsapp']['href'] ?? '#', 'external' => true],
        ['label' => 'LinkedIn', 'href' => $config['channels']['linkedin']['href'] ?? '#', 'external' => true],
        ['label' => 'Credly',   'href' => $config['channels']['credly']['href']   ?? '#', 'external' => true],
    ],
];
?>
</main>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer class="footer" role="contentinfo">

    <div class="container">

        <div class="row g-4">

            <!-- Brand -->
            <div class="col-lg-4 col-md-6">

                <a href="<?= e(url('index.php')) ?>" class="footer-logo">

                    <span class="logo-mark" aria-hidden="true">
                        <?= e($config['initials'] ?? 'EA') ?>
                    </span>

                    <?= e($firstName) ?>
                    <span><?= e($lastName) ?></span>

                </a>

                <p class="footer-desc">
                    Cybersecurity professional, software developer,
                    IT specialist and researcher building secure,
                    practical digital solutions.
                </p>


                <div class="footer-socials">

                    <?php foreach (['linkedin', 'github'] as $key): ?>

                        <?php if (!empty($config['channels'][$key])): ?>

                            <?php $channel = $config['channels'][$key]; ?>

                            <a
                                href="<?= e($channel['href']) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="<?= e($channel['label']) ?>"
                            >
                                <i
                                    class="<?= e($channel['brand'] . ' ' . $channel['icon']) ?>"
                                    aria-hidden="true"
                                ></i>
                            </a>

                        <?php endif; ?>

                    <?php endforeach; ?>

                    <a href="<?= e(url('contact.php')) ?>" aria-label="Contact">
                        <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                    </a>

                </div>

            </div>


            <!-- Columns -->
            <?php foreach ($footerColumns as $heading => $links): ?>

                <div class="col-lg-2 col-md-6 col-6">

                    <h4><?= e($heading) ?></h4>

                    <ul>

                        <?php foreach ($links as $link): ?>

                            <li>

                                <a
                                    href="<?= e(isset($link['external']) && $link['external'] ? $link['href'] : url($link['href'])) ?>"
                                    <?= !empty($link['external']) ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
                                >
                                    <?= e($link['label']) ?>
                                </a>

                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            <?php endforeach; ?>

        </div>


        <div class="footer-bottom">

            <p>
                &copy; <span data-current-year><?= date('Y') ?></span>
                <?= e($config['name'] ?? '') ?>.
                All rights reserved.
            </p>

            <p>Cybersecurity • Development • Data &amp; AI • Research</p>

        </div>

    </div>

</footer>



<button class="back-to-top" type="button" aria-label="Back to top">
    <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
</button>



<!-- =========================================================
     SCRIPTS
========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
    defer
></script>

<script src="<?= e(asset('assets/js/main.js')) ?>" defer></script>

<?php if (!empty($page['scripts'])): ?>

    <?php foreach ((array) $page['scripts'] as $script): ?>

        <script src="<?= e(asset($script)) ?>" defer></script>

    <?php endforeach; ?>

<?php endif; ?>


<?php if (!empty($page['inline_script'])): ?>

    <script>
        <?= $page['inline_script'] /* intentionally unescaped — trusted page code */ ?>
    </script>

<?php endif; ?>


</body>

</html>