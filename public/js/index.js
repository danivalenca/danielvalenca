document.addEventListener("DOMContentLoaded", function() {

	// Contact Modal: Confirmation
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === 'contact-created') {

    	// Get modal and show
        const modal = new bootstrap.Modal(document.getElementById('modal-contact-confirmation'));
        modal.show();

        // Auto-close modal after 3 seconds
        setTimeout(() => {
            modal.hide();
        }, 3000);

        // Clean up the URL (remove ?success=contact-created)
        const newUrl = window.location.pathname;
        window.history.replaceState({}, document.title, newUrl);
    }

    // Google reCAPTCHA
    document.querySelector("form").addEventListener("submit", function(e) {

        e.preventDefault();

        grecaptcha.ready(function() {
            grecaptcha.execute("6LcIxcsrAAAAALKFdPEmXPkusdFiBOOnJm_WPKKL", {action: "contact"}).then(function(token) {
                document.getElementById("g-recaptcha-response").value = token;
                e.target.submit();
            });
        });

    });

});