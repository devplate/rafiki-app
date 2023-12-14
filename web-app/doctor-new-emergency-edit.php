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
                                <h4 class="card-title mb-2 mt-1">Update doctor</h4>
                            </div><!-- end card header -->
                            <div class="card-body form-steps">
                                <form class="vertical-navs-step" action="connect/database.php" method="post">
                                    <div class="row gy-5">

                                    <div class="col-lg-3">
                                            <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                                <a href="doctor-new-details-edit.php">
                                                <button class="nav-link active" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                                                    <span class="step-title me-2">
                                                        <i class="ri-close-circle-fill step-icon me-2"></i> Step 1
                                                    </span>
                                                    Details
                                                </button>
                                                </a>
                                                <a href="doctor-new-emergency-edit.php">
                                                <button class="nav-link active done" id="v-pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="false">
                                                    <span class="step-title me-2">
                                                        <i class="ri-close-circle-fill step-icon me-2"></i> Step 2
                                                    </span>
                                                    Emergency
                                                </button>
                                                </a>
                                                <a href="doctor-new-education-edit.php">
                                                <button class="nav-link active done" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                                                    <span class="step-title me-2">
                                                        <i class="ri-close-circle-fill step-icon me-2"></i> Step 3
                                                    </span>
                                                    Education
                                                </button>
                                                </a>
                                            </div>
                                            <!-- end nav -->
                                        </div> <!-- end col-->

                                        <div class="col-lg-9">
                                            <div class="px-lg-4">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                    
                                                    <form action="connect/database.php" method="post" enctype="multipart/form-data">
                                                        <div class="mb-4">
                                                            <h5>Emergency details</h5>
                                                        </div>

                                                        <div>
                                                            <div class="row g-3">

                                                                    <div class="col-lg-4">
                                                                        <div class="mb-2">
                                                                            <label class="form-label text-muted" for="steparrow-gen-info-fname-input">First name </label>
                                                                            <input type="text" data-value name="contact_first_name" class="form-control" id="steparrow-gen-info-fname-input" value="Karmu">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="mb-2">
                                                                            <label class="form-label text-muted" for="steparrow-gen-info-sname-input">Second name </label>
                                                                            <input type="email" data-value name="contact_second_name" class="form-control" id="steparrow-gen-info-sname-input" value="Salimu">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <div class="mb-2">
                                                                            <label class="form-label text-muted" for="steparrow-gen-info-lname-input">Last name </label>
                                                                            <input type="email" data-value name="contact_last_name" class="form-control" id="steparrow-gen-info-lname-input" value="Almas">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label text-muted" for="cleave-phone">Phone number </label>
                                                                            <div class="input-group">
                                                                            <span class="input-group-text">+255</span>
                                                                            <input type="text" data-value name="doctor_phone_number" class="form-control" id="cleave-phone" value="4838438439">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label mb-4x text-muted" for="cleave-alt-phone"></label>
                                                                            <div class="input-group">
                                                                            <span class="input-group-text">+255</span>
                                                                            <input type="text" data-value name="doctor_alt_phone_number" class="form-control" id="cleave-alt-phone" value="8493848273">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                

                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label text-muted" for="steparrow-gen-info-lname-input">Relationship </label>
                                                                            <select class="form-select" data-value name="contact_relationship" id="state">
                                                                                <option value="Spouse">Spouse</option>
                                                                                <option value="Sister/Brother" selected>Sister/Brother</option>
                                                                                <option value="Collegue">Collegue</option>
                                                                                <option value="Parent">Parent</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label text-muted" for="steparrow-gen-info-lname-input">Physical address </label>
                                                                            <input type="text" data-value name="contact_physical" class="form-control" id="steparrow-gen-info-lname-input" value="Kigamboni, Dar es salaam">
                                                                        </div>
                                                                    </div>

                                                            </div>
                                                        </div>

                                                        <div class="d-flex align-items-start gap-3 mt-4">
                                                            <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab"><i class="ri-arrow-up-line label-icon align-middle fs-lg ms-2"></i>Update</button>
                                                        </div>
                                                    </form>

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