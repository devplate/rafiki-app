<!doctype html>
<?php
session_start();
if (isset($_SESSION["user"])){
    header("Location: http://localhost/web-app/dashboard.php");
}
?>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">

    <!-- head starts -->
    <?php include 'includes/head.php';?>
    <!-- head ends -->

    <body>


        <section class="auth-page-wrapper bg-white position-relative d-flex min-vh-100">
            <div class="container-fluid g-0">
                <div class="row g-0">

                    <!-- left side bar start  -->
                    <?php include 'includes/auth-left-sidebar.php'; ?>
                    <!-- left side bar ends -->

                    <!--end col-->

                    <div class="col-lg-6">
                        <div class="card mb-0 border-0 shadow-none mb-0">
                            <div class="card-body p-sm-5 m-lg-4">
                                <div class="text-center mt-5">
                                    <h5 class="fs-3xl text-primary">WELCOME RAFIKI</h5>
                                    <p class="text-muted">Sign in to your Rafiki account </p>
                                </div>
                                <div class="p-2 mt-5">
                                    <form action="connect/login.php" method="post">
                
                                        <div class="mb-4">
                                            <label for="username" class="form-label text-muted">Username <span class="text-danger">*</span></label>
                                            <div class="position-relative ">
                                                <input type="text" name="username" class="form-control  password-input" id="username" placeholder="Enter username" required>
                                            </div>
                                        </div>
                
                                        <div class="mb-4">
                                            <label class="form-label text-muted" for="password-input">Password <span class="text-danger">*</span></label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input " placeholder="Enter login key" id="password-input">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>
                
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label text-muted" for="auth-remember-check">Remember me</label>
                                        </div>
                
                                        <div class="mt-4">
                                            <button name="login_user" value="Sign in" class="btn btn-primary w-100" type="submit">Sign In</button>
                                        </div>
                
                                    </form>
                
                                    <div class="text-center mt-5">
                                        <p class="mb-0 text-secondary"><a href="dashboard.php">Term of use and privacy policy</a> </p>
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
        <?php include 'includes/javascripts.php';?>
        <!-- javascript links ends -->

    </body>

</html>