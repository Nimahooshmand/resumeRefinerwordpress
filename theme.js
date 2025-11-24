(function () {
    function initMobileMenu() {
        const toggle = document.querySelector('[data-nav-toggle]');
        const mobileMenu = document.querySelector('#mobile-menu');
        if (!toggle || !mobileMenu) {
            return;
        }

        const closeMenu = () => {
            toggle.setAttribute('aria-expanded', 'false');
            mobileMenu.classList.remove('is-open');
            mobileMenu.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('rr-mobile-menu-open');
        };

        toggle.addEventListener('click', () => {
            const expanded = toggle.getAttribute('aria-expanded') === 'true';
            if (expanded) {
                closeMenu();
            } else {
                toggle.setAttribute('aria-expanded', 'true');
                mobileMenu.classList.add('is-open');
                mobileMenu.setAttribute('aria-hidden', 'false');
                document.body.classList.add('rr-mobile-menu-open');
            }
        });

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', closeMenu);
        });

        document.addEventListener('keyup', (event) => {
            if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
                closeMenu();
            }
        });
    }

    function initAccordion() {
        const accordions = document.querySelectorAll('.rr-accordion__trigger');
        accordions.forEach((btn) => {
            btn.addEventListener('click', () => {
                const expanded = btn.getAttribute('aria-expanded') === 'true';
                const next = btn.nextElementSibling;
                btn.setAttribute('aria-expanded', (!expanded).toString());
                if (next) {
                    next.classList.toggle('is-open');
                }
                const icon = btn.querySelector('.icon');
                if (icon) {
                    icon.textContent = expanded ? '+' : '-';
                }
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            initMobileMenu();
            initAccordion();
        });
    } else {
        initMobileMenu();
        initAccordion();
    }
})();