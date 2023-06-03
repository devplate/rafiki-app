<!doctype html>

<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">

    <!-- head starts -->
    <?php include '../includes/head.php';?>
    <!-- head ends -->

    <body>
        
        <section class="auth-page-wrapper bg-white position-relative d-flex min-vh-100">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card g-0 mb-0">
                            <div class="row g-0 align-items-center">

                                <div class="col-xxl-6">
                                    <div class="card auth-card py-5 bg-secondary min-vh-100 border-0 shadow-none d-none d-sm-block mb-0">
                                        <div class="card-body py-5 d-flex justify-content-between flex-column">
                            
                                            <div class="auth-effect-main my-5 position-relative rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                                <div class="effect-circle-1 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                    <div class="effect-circle-2 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                        <div class="effect-circle-3 mx-auto rounded-circle position-relative text-white fs-4xl d-flex align-items-center justify-content-center">
                                                            <img src="../assets/images/logo/logo-light.svg" alt="" srcset="" height="70">
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="auth-user-list list-unstyled">
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="../assets/images/users/avatar-1.jpg" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="../assets/images/users/avatar-2.jpg" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="../assets/images/users/avatar-3.jpg" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="../assets/images/users/avatar-4.jpg" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="../assets/images/users/avatar-5.jpg.png" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
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