<?php include 'connect/database.php';

?>

<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

<!-- head starts -->
<?php include 'includes/head.php'; ?>

<!-- head ends -->

<body>

    <!-- layout-wrapper start -->
    <div id="layout-wrapper">

        <!-- left sidebar starts -->
        <?php include 'includes/sidebar.php'; ?>
        <!-- Left Sidebar End -->

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- Header starts -->
        <?php include 'includes/header.php'; ?>
        <!-- header ends -->

        <!-- notification models starts -->
        <?php include 'includes/notification-models.php'; ?>
        <!-- notification models ends -->

        <!-- Start right Content here -->
        <div class="main-content">

            <!-- page contents start -->
            <div class="page-content">
                <div class="container-fluid">

                    <div class="col-xl-12">
                        <div class="card pb-3">
                        <div class="card-header">
                                <h4 class="card-title mb-2 mt-1">Add new doctor</h4>
                            </div><!-- end card header -->
                            <div class="card-body form-steps">
                                <form class="vertical-navs-step" action="connect/database.php" method="post">
                                    <div class="row gy-5">

                                        <div class="col-lg-3">
                                            <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link done" id="v-pills-bill-info-tab" disabled data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                                                    <span class="step-title me-2">
                                                        <i class="ri-close-circle-fill step-icon me-2"></i> Step 1
                                                    </span>
                                                    Details
                                                </button>
                                                <button class="nav-link done" id="v-pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" disabled role="tab" aria-controls="v-pills-bill-address" aria-selected="false">
                                                    <span class="step-title me-2">
                                                        <i class="ri-close-circle-fill step-icon me-2"></i> Step 2
                                                    </span>
                                                    Emergency
                                                </button>
                                                <button class="nav-link done" id="v-pills-payment-tab" disabled data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                                                    <span class="step-title me-2">
                                                        <i class="ri-close-circle-fill step-icon me-2"></i> Step 3
                                                    </span>
                                                    Education
                                                </button>
                                                <button class="nav-link done active" id="v-pills-finish-tab" disabled data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">
                                                    <span class="step-title me-2">
                                                        <i class="ri-close-circle-fill step-icon me-2"></i> Step 5
                                                    </span>
                                                    Finish
                                                </button>
                                            </div>
                                            <!-- end nav -->
                                        </div> <!-- end col-->

                                        <div class="col-lg-9">
                                            <div class="px-lg-4">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                    
                                                    <div class="text-center">

                                                            <div class="avatar-md mt-1 mb-4 mx-auto">
                                                                <div class="avatar-title bg-light text-success display-4 rounded-circle">
                                                                    <i class="ri-checkbox-circle-fill"></i>
                                                                </div>
                                                            </div>
                                                            <h5>Well Done !</h5>
                                                            <p class="text-muted">You have Successfully create a Doctor</p>
                                                        </div>

                                                    </div>
                                                    <!-- end tab pane -->
                                                <!-- end of form -->

                                                </div>
                                                <!-- end tab content -->
                                            </div>
                                        </div>
                                        <!-- end col -->

                                    </div>
                                    <!-- end row -->
                                </form>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
            </div>
            <!-- page content ends -->

            <!-- footer starts -->
            <?php include 'includes/footer.php'; ?>
            <!-- footer ends -->

        </div>
        <!-- end main content-->

    </div>
    <!-- layout-wrapper ends -->


    <!--start back-to-top-->
    <?php include 'includes/back-button.php'; ?>
    <!--end back-to-top-->

    <!--preloader starts-->
    <?php include 'includes/preloader.php'; ?>
    <!-- preloader ends -->

    <!-- theme Settings starts -->
    <?php include 'includes/theme-settings.php';
    ?>
    <!-- theme settings ends -->

    <!-- javascript links starts  -->
    <?php include 'includes/javascripts.php'; ?>

    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>

    <!-- cleave.js -->
    <script src="assets/libs/cleave.js/cleave.min.js"></script>

    <!-- form masks init -->
    <script src="assets/js/pages/form-masks.init.js"></script>

    <!-- Learning instructor create init js -->
    <script src="assets/js/pages/learning-education-create.init.js"></script>

    <!-- javascript links ends -->

</body>

</html>