<!-- JS: Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // Bootstrap Tooltip
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    // Handle focus on modal/offcanvas show
    document.addEventListener('shown.bs.modal', function (e) {
        const input = e.target.querySelector('[autofocus]');
        if (input) {
            input.focus();
            if (typeof input.select === 'function') input.select();
        }
    });

    document.addEventListener('shown.bs.offcanvas', function (e) {
        const input = e.target.querySelector('[autofocus]');
        if (input) {
            input.focus();
            if (typeof input.select === 'function') input.select();
        }
    });

});
</script>