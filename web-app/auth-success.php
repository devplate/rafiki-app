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
                        <div class="card mb-0 border-0 mt-5 p-4 shadow-none mb-0">
                            <div class="card-body p-sm-5 m-lg-4">
                                <div class="avatar-lg mx-auto mt-5">
                                    <div class="avatar-title bg-body-secondary text-primary display-5 rounded-circle">
                                        <i class="bi bi-emoji-smile"></i>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <h4>Well done !</h4>
                                    <p class="text-muted mx-4">Aww yeah, you successfully read this important message.</p>
                                    <div class="mt-4">
                                        <a href="dashboard.php" class="btn btn-primary w-100">Back to Dashboard</a>
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