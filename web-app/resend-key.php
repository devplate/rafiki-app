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

                    <div class="col-lg-6 mx-auto">
                        <div class="card mb-0 border-0 shadow-none mb-0">
                            <div class="card-body p-sm-5 m-lg-4">
                                <div class="text-center p-5">
                                    <h5 class="fs-3xl">Request login keys</h5>
                                    <p class="text-muted mb-4">Request login keys via your email</p>
                                    <div class="pb-4">
                                        <img src="assets/images/auth/email.png" alt="" class="avatar-md">
                                    </div>
                                </div>

                                <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                                    Enter your email and instructions will be sent to you!
                                </div>
                                <div class="p-2">
                                    <form>
                                        <div class="mb-4">
                                            <label class="form-label text-muted">Your email address</label>
                                            <input type="email" class="form-control password-input" id="email" placeholder="Enter your email" required >
                                        </div>

                                        <div class="text-center mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Resend a login keys</button>
                                        </div>
                                    </form><!-- end form -->
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0 text-muted">Wait, I received my login keys... <a href="../auth/login.php" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
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