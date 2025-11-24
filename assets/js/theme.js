(function () {
    const toggle = document.querySelector('.rr-nav-toggle');
    const mobileMenu = document.querySelector('#mobile-menu');

    if (toggle && mobileMenu) {
        toggle.addEventListener('click', function () {
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', (!expanded).toString());
            mobileMenu.classList.toggle('is-open');
        });
    }

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
})();