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
                                                            <h5>Education details</h5>
                                                        </div>

                                                        <!-- loop data here -->

                                                        <!-- start data 1 -->
                                                            <div class="row g-3 mb-4">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-2">
                                                                        <label class="form-label text-muted" for="steparrow-gen-info-fname-input">University/Collage</label><input type="text" data-value name="college_uni_name" class="form-control" id="degreeTitle" value="Muhimbili University" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-4">
                                                                        <label class="form-label text-muted" for="steparrow-gen-info-sname-input">Education level</label><select class="form-select" id="qualification" data-value name="qualification">
                                                                            <option value="">Select an education level</option>
                                                                            <option value="Certificate">Certificate</option>
                                                                            <option value="Diploma" >Diploma</option>
                                                                            <option value="Advanced Diploma">Advanced Diploma</option>
                                                                            <option value="Associate Degree">Associate Degree</option>
                                                                            <option value="Bachelor Degree">Bachelor Degree</option>
                                                                            <option value="Master Degree">Master Degree</option>
                                                                            <option value="Doctorate Degree" selected>Doctorate Degree</option>
                                                                            <option value="Professional Degree">Professional Degree</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-4">
                                                                        <label class="form-label text-muted" for="steparrow-gen-info-lname-input">Studied Course</label><input type="text" data-value name="studied_course" class="form-control" id="steparrow-gen-info-fname-input" value="Master of MD" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <div class="mb-4">
                                                                        <label for="passedYear" class="form-label text-muted">Start</label>
                                                                        <input type="text" class="form-control" data-trigger data-value name="startYear" value="2010">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <div class="mb-4">
                                                                        <label for="passedYear" class="form-label text-muted">Finish</label>
                                                                        <input type="text" class="form-control" data-trigger data-value name="finishYear" value="2015">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end data 1 -->

                                                            <!-- start data 2 -->
                                                            <div class="row g-3 mb-4">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-2">
                                                                        <label class="form-label text-muted" for="steparrow-gen-info-fname-input">University/Collage</label><input type="text" data-value name="college_uni_name" class="form-control" id="degreeTitle" value="Mzumbe University" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-4">
                                                                        <label class="form-label text-muted" for="steparrow-gen-info-sname-input">Education level</label><select class="form-select" id="qualification" data-value name="qualification">
                                                                            <option value="">Select an education level</option>
                                                                            <option value="Certificate">Certificate</option>
                                                                            <option value="Diploma" >Diploma</option>
                                                                            <option value="Advanced Diploma">Advanced Diploma</option>
                                                                            <option value="Associate Degree">Associate Degree</option>
                                                                            <option value="Bachelor Degree">Bachelor Degree</option>
                                                                            <option value="Master Degree">Master Degree</option>
                                                                            <option value="Doctorate Degree" selected>Doctorate Degree</option>
                                                                            <option value="Professional Degree">Professional Degree</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-4">
                                                                        <label class="form-label text-muted" for="steparrow-gen-info-lname-input">Studied Course</label><input type="text" data-value name="studied_course" class="form-control" id="steparrow-gen-info-fname-input" value="Master of MD" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <div class="mb-4">
                                                                        <label for="passedYear" class="form-label text-muted">Start</label>
                                                                        <input type="text" class="form-control" data-trigger data-value name="startYear" value="2016">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2">
                                                                    <div class="mb-4">
                                                                        <label for="passedYear" class="form-label text-muted">Finish</label>
                                                                        <input type="text" class="form-control" data-trigger data-value name="finishYear" value="2018">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end data 2 -->

                                                            <!-- end of the loop -->

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