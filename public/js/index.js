document.addEventListener("DOMContentLoaded", function() {

    // Contact Modal: Confirmation
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === 'contact-created') {
        const modal = new bootstrap.Modal(document.getElementById('modal-contact-confirmation'));
        modal.show();

        setTimeout(() => modal.hide(), 3000);

        const newUrl = window.location.pathname;
        window.history.replaceState({}, document.title, newUrl);
    }

    // Google reCAPTCHA
    const form = document.querySelector("form");
    if (form) {
        form.addEventListener("submit", function(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute("6LcIxcsrAAAAALKFdPEmXPkusdFiBOOnJm_WPKKL", {action: "contact"}).then(function(token) {
                    document.getElementById("g-recaptcha-response").value = token;
                    form.submit();
                });
            });
        });
    }

    // Navbar Mobile Sticky & Hidden
    const navbar = document.getElementById("navbar-mobile");
    const main = document.querySelector("main");

    if (navbar && main) {
        let prevScrollpos = 0;
        main.addEventListener("scroll", function () {
            let currentScrollPos = main.scrollTop;
            if (window.innerWidth < 1200) {
                if (prevScrollpos > currentScrollPos + 5) {
                    navbar.classList.add("sticky-top");
                } else if (currentScrollPos > prevScrollpos + 5) {
                    navbar.classList.remove("sticky-top");
                }
                prevScrollpos = currentScrollPos;
            } else {
                navbar.classList.add("sticky-top");
            }
        });
    }

    // Projects Collapse Button Disabled
    const moreProjects = document.getElementById('more-projects');
    if (moreProjects) {
        moreProjects.addEventListener('shown.bs.collapse', function () {
            const toggleBtn = document.getElementById('toggle-projects');
            if (toggleBtn) toggleBtn.disabled = true;
        });
    }
    
});