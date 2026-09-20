/**
 * ==========================================================
 * EMMANUEL ASITUHA — PERSONAL PORTFOLIO
 * Global JavaScript
 * ==========================================================
 */

"use strict";


document.addEventListener("DOMContentLoaded", () => {

    /* ======================================================
       1. ELEMENT REFERENCES
       ====================================================== */

    const navbar = document.querySelector(".navbar");
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinksContainer = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-link");
    const backToTop = document.querySelector(".back-to-top");
    const revealElements = document.querySelectorAll(".reveal");


    /* ======================================================
       2. NAVBAR SCROLL STATE
       ====================================================== */

    const handleNavbarScroll = () => {

        if (!navbar) return;

        if (window.scrollY > 20) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }

    };


    window.addEventListener("scroll", handleNavbarScroll);

    handleNavbarScroll();


    /* ======================================================
       3. MOBILE NAVIGATION
       ====================================================== */

    const closeMobileMenu = () => {

        if (!menuToggle || !navLinksContainer) return;

        menuToggle.classList.remove("active");
        navLinksContainer.classList.remove("active");

        document.body.classList.remove("no-scroll");

        menuToggle.setAttribute("aria-expanded", "false");

    };


    const openMobileMenu = () => {

        if (!menuToggle || !navLinksContainer) return;

        menuToggle.classList.add("active");
        navLinksContainer.classList.add("active");

        document.body.classList.add("no-scroll");

        menuToggle.setAttribute("aria-expanded", "true");

    };


    if (menuToggle && navLinksContainer) {

        menuToggle.addEventListener("click", () => {

            const menuOpen =
                navLinksContainer.classList.contains("active");

            if (menuOpen) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }

        });

    }


    /* ======================================================
       4. CLOSE MOBILE MENU AFTER CLICK
       ====================================================== */

    navLinks.forEach(link => {

        link.addEventListener("click", () => {
            closeMobileMenu();
        });

    });


    /* ======================================================
       5. CLOSE MENU WITH ESCAPE
       ====================================================== */

    document.addEventListener("keydown", event => {

        if (event.key === "Escape") {
            closeMobileMenu();
        }

    });


    /* ======================================================
       6. CLOSE MENU WHEN SCREEN EXPANDS
       ====================================================== */

    window.addEventListener("resize", () => {

        if (window.innerWidth > 992) {
            closeMobileMenu();
        }

    });


    /* ======================================================
       7. BACK TO TOP
       ====================================================== */

    const handleBackToTop = () => {

        if (!backToTop) return;

        if (window.scrollY > 500) {
            backToTop.classList.add("show");
        } else {
            backToTop.classList.remove("show");
        }

    };


    window.addEventListener("scroll", handleBackToTop);

    handleBackToTop();


    if (backToTop) {

        backToTop.addEventListener("click", event => {

            event.preventDefault();

            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

        });

    }


    /* ======================================================
       8. SCROLL REVEAL
       ====================================================== */

    if ("IntersectionObserver" in window) {

        const revealObserver =
            new IntersectionObserver(
                entries => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add("visible");

                            revealObserver.unobserve(
                                entry.target
                            );

                        }

                    });

                },
                {
                    threshold: 0.12
                }
            );


        revealElements.forEach(element => {

            revealObserver.observe(element);

        });

    } else {

        revealElements.forEach(element => {
            element.classList.add("visible");
        });

    }


    /* ======================================================
       9. ACTIVE NAVIGATION LINK
       ====================================================== */

    const currentPage =
        window.location.pathname
            .split("/")
            .pop() || "index.html";


    navLinks.forEach(link => {

        const href = link.getAttribute("href");

        if (!href) return;

        const linkPage =
            href.split("/")
                .pop()
                .split("#")[0];


        if (
            linkPage === currentPage ||
            (
                currentPage === "" &&
                linkPage === "index.html"
            )
        ) {

            link.classList.add("active");

        }

    });


    /* ======================================================
       10. SMOOTH INTERNAL LINKS
       ====================================================== */

    document
        .querySelectorAll('a[href^="#"]')
        .forEach(anchor => {

            anchor.addEventListener("click", function (event) {

                const href =
                    this.getAttribute("href");

                if (
                    !href ||
                    href === "#"
                ) {
                    return;
                }


                const target =
                    document.querySelector(href);


                if (!target) return;


                event.preventDefault();


                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });

            });

        });


    /* ======================================================
       11. COPYRIGHT YEAR
       ====================================================== */

    const yearElements =
        document.querySelectorAll("[data-current-year]");


    yearElements.forEach(element => {

        element.textContent =
            new Date().getFullYear();

    });


    /* ======================================================
       12. COUNTER ANIMATION
       ====================================================== */

    const counters =
        document.querySelectorAll("[data-counter]");


    const animateCounter = element => {

        const target =
            Number(
                element.getAttribute("data-counter")
            );


        if (
            Number.isNaN(target) ||
            target < 0
        ) {
            return;
        }


        const duration = 1200;

        const startTime =
            performance.now();


        const updateCounter = currentTime => {

            const elapsed =
                currentTime - startTime;


            const progress =
                Math.min(
                    elapsed / duration,
                    1
                );


            /*
             * Ease-out cubic animation.
             */

            const easedProgress =
                1 - Math.pow(1 - progress, 3);


            const currentValue =
                Math.floor(
                    target * easedProgress
                );


            element.textContent =
                currentValue.toLocaleString();


            if (progress < 1) {

                requestAnimationFrame(
                    updateCounter
                );

            } else {

                element.textContent =
                    target.toLocaleString();

            }

        };


        requestAnimationFrame(
            updateCounter
        );

    };


    if (
        counters.length &&
        "IntersectionObserver" in window
    ) {

        const counterObserver =
            new IntersectionObserver(
                entries => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            animateCounter(
                                entry.target
                            );

                            counterObserver.unobserve(
                                entry.target
                            );

                        }

                    });

                },
                {
                    threshold: 0.5
                }
            );


        counters.forEach(counter => {

            counterObserver.observe(counter);

        });

    }


    /* ======================================================
       13. EXTERNAL LINKS
       ====================================================== */

    document
        .querySelectorAll('a[target="_blank"]')
        .forEach(link => {

            const rel =
                link.getAttribute("rel") || "";


            const relValues =
                new Set(
                    rel.split(/\s+/)
                        .filter(Boolean)
                );


            relValues.add("noopener");
            relValues.add("noreferrer");


            link.setAttribute(
                "rel",
                [...relValues].join(" ")
            );

        });


    /* ======================================================
       14. CONTACT FORM FRONT-END VALIDATION
       ====================================================== */

    const contactForm =
        document.querySelector("#contactForm");


    if (contactForm) {

        contactForm.addEventListener(
            "submit",
            event => {

                const requiredFields =
                    contactForm.querySelectorAll(
                        "[required]"
                    );


                let valid = true;


                requiredFields.forEach(field => {

                    field.classList.remove(
                        "is-invalid"
                    );


                    if (!field.value.trim()) {

                        field.classList.add(
                            "is-invalid"
                        );

                        valid = false;

                    }

                });


                const emailField =
                    contactForm.querySelector(
                        'input[type="email"]'
                    );


                if (
                    emailField &&
                    emailField.value.trim()
                ) {

                    const emailPattern =
                        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


                    if (
                        !emailPattern.test(
                            emailField.value.trim()
                        )
                    ) {

                        emailField.classList.add(
                            "is-invalid"
                        );

                        valid = false;

                    }

                }


                if (!valid) {

                    event.preventDefault();

                    const firstInvalid =
                        contactForm.querySelector(
                            ".is-invalid"
                        );


                    if (firstInvalid) {

                        firstInvalid.focus();

                    }

                }

            }
        );

    }

});

/* =========================================================
   Main Site JS
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {

    /* ---------------- Current year ---------------- */
    document.querySelectorAll("[data-current-year]").forEach((el) => {
        el.textContent = new Date().getFullYear();
    });


    /* ---------------- Mobile menu toggle ---------------- */
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks   = document.querySelector(".nav-links");

    if (menuToggle && navLinks) {
        menuToggle.addEventListener("click", () => {
            const open = navLinks.classList.toggle("is-open");
            menuToggle.setAttribute("aria-expanded", String(open));
        });
    }


    /* ---------------- Back to top ---------------- */
    const backToTop = document.querySelector(".back-to-top");

    if (backToTop) {
        const toggleBackToTop = () => {
            backToTop.classList.toggle("visible", window.scrollY > 400);
        };

        window.addEventListener("scroll", toggleBackToTop, { passive: true });
        toggleBackToTop();

        backToTop.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }


    /* ---------------- Reveal on scroll ---------------- */
    const revealEls = document.querySelectorAll(".reveal");

    if (revealEls.length && "IntersectionObserver" in window) {
        const io = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-visible");
                        io.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
        );

        revealEls.forEach((el) => io.observe(el));
    } else {
        revealEls.forEach((el) => el.classList.add("is-visible"));
    }


    /* ---------------- Animated counters ---------------- */
    const counters = document.querySelectorAll("[data-counter]");

    if (counters.length && "IntersectionObserver" in window) {
        const counterIO = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;

                    const el     = entry.target;
                    const target = parseInt(el.dataset.counter, 10) || 0;
                    const duration = 1200;
                    const start  = performance.now();

                    const tick = (now) => {
                        const progress = Math.min((now - start) / duration, 1);
                        const eased    = 1 - Math.pow(1 - progress, 3);
                        el.textContent = Math.round(target * eased);
                        if (progress < 1) requestAnimationFrame(tick);
                    };

                    requestAnimationFrame(tick);
                    counterIO.unobserve(el);
                });
            },
            { threshold: 0.4 }
        );

        counters.forEach((el) => counterIO.observe(el));
    }


    /* ---------------- Smooth scroll for in-page links ---------------- */
    document.querySelectorAll('a[href^="#"]').forEach((link) => {
        link.addEventListener("click", (e) => {
            const id = link.getAttribute("href");
            if (!id || id === "#") return;

            const target = document.querySelector(id);
            if (!target) return;

            e.preventDefault();
            target.scrollIntoView({ behavior: "smooth", block: "start" });
        });
    });

});