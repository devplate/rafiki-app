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

                    <div class="col-lg-6">
                        <div class="card mb-0 border-0 shadow-none mb-0">
                            <div class="card-body p-sm-5 m-lg-4">
                                <div class="p-5 mt-5">

                                    
                                    <div class="text-muted text-center mb-4 pb-2 mx-lg-3">
                                        <div class="mb-4">
                                            <img src="../assets/images/auth/permission.png" alt="" class="avatar-md">
                                        </div>
                                        <h4>Verify Your Email</h4>
                                        <p>Please enter the 4 digit code sent to <span class="fw-semibold">example@abc.com</span></p>
                                    </div>
                                
                                    <form autocomplete="off">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                                    <input type="text" class="form-control form-control-lg text-center" placeholder="0" onkeyup="moveToNext(1, event)" maxLength="1" id="digit1-input">
                                                </div>
                                            </div><!-- end col -->
                                
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                                    <input type="text" class="form-control form-control-lg text-center" placeholder="0" onkeyup="moveToNext(2, event)" maxLength="1" id="digit2-input">
                                                </div>
                                            </div><!-- end col -->
                                
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                                    <input type="text" class="form-control form-control-lg text-center" placeholder="0" onkeyup="moveToNext(3, event)" maxLength="1" id="digit3-input">
                                                </div>
                                            </div><!-- end col -->
                                
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                                    <input type="text" class="form-control form-control-lg text-center" placeholder="0" onkeyup="moveToNext(4, event)" maxLength="1" id="digit4-input">
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                    </form><!-- end form -->
                                
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-primary w-100">Confirm</button>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">Didn't receive a code ? <a href="auth-pass-reset.html" class="fw-semibold text-primary text-decoration-underline">Resend</a> </p>
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