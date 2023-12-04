<?php include 'connect/database.php';
session_start();
if (!isset($_SESSION["user"])){
    header("Location: http://localhost/web-app/auth-login.php");
}
?>

<!doctype html>

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
                                    <h5 class="fs-3xl">Lock Screen</h5>
                                    <p class="text-muted mb-4">Enter your password to unlock the screen!</p>
                                </div>
                                <div class="user-thumb text-center">
                                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                    <h5 class="font-size-15 mt-3 text-muted">Hi ! Richard Marshall</h5>
                                </div>
                                <div class="p-2 mt-5">
                                    <form action="dashboard.php">
                                        <div class="mb-3">
                                            <label class="form-label text-muted" for="userpassword">Enter your login keys</label>
                                            <input type="password" class="form-control password-input" id="userpassword" placeholder="login keys" required>
                                        </div>
                                        <div class="mb-2 mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Unlock</button>
                                        </div>
                                    </form><!-- end form -->

                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">Not you ? return <a href="auth-login.php" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
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