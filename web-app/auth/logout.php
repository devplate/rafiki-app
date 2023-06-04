<!doctype html>

<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">

    <!-- head starts -->
    <?php include '../includes/head.php';?>
    <!-- head ends -->

    <body>
        
        <section class="auth-page-wrapper bg-white position-relative d-flex min-vh-100">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    
                    <!-- left side bar start  -->
                    <?php include '../includes/auth-left-sidebar.php'; ?>
                    <!-- left side bar ends -->

                    <!--end col-->

                    <div class="col-lg-6 pt-5">
                        <div class="card mt-5 pt-5 border-0 shadow-none mb-0">
                            <div class="card-body p-sm-5 m-lg-4">
                                <div class="display-5 text-center">
                                    <i class="bi bi-box-arrow-right"></i>
                                </div>
                                <div class="mt-4 p-2 text-center">
                                    <h5 class="fs-2xl">You are Logged Out</h5>
                                    <p class="text-muted">Thank you for using <span class="fw-semibold">Rafiki App</span></p>
                                    <div class="mt-4">
                                        <a href="../auth/login.php" class="btn btn-primary w-100">Sign In</a>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        
        <!-- javascript links starts  -->
        <?php include '../includes/javascripts.php';?>
        <!-- javascript links ends -->

    </body>

</html>