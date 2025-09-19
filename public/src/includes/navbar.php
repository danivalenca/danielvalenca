<nav id="navbar-mobile" class="border-bottom border-light-subtle py-4 d-xl-none sticky-top bg-white">

    <div class="container">

        <div class="row justify-content-center justify-content-xl-start">

            <div class="col-11 col-xl-6">

                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex align-items-center">
                        <img src="img/avatar.jpg" alt="Daniel Valenca" class="object-fit-contain" style="height: 43px;">
                        <div class="ms-3">
                            <p class="fs-5 fw-semibold">Daniel Valenca</p>
                        </div>
                    </div>

                    <a href="#offcanvas-menu" class="btn btn-light-primary" data-bs-toggle="offcanvas">
                        <i class="bi bi-list"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</nav>

<!-- Offcanvas Menu -->
<div class="offcanvas offcanvas-start bg-white border-end border-light-subtle" tabindex="-1" id="offcanvas-menu" aria-labelledby="offcanvas-menu-label">

    <div class="d-flex flex-column vh-100">

        <!-- Offcanvas Header -->
        <div class="d-flex justify-content-end p-4">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <?php require __DIR__ . '/menu.php'; ?>

    </div>

</div>
<!-- Offcanvas Menu -->