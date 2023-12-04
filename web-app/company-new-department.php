<?php include 'connect/database.php';



?>

<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

<!-- head starts -->
<?php include 'includes/head.php'; ?>

<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

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

                <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-2 mt-1">Add new company</h4>
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
                                                    <button class="nav-link active" id="v-pills-bill-department-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-department" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="true">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 2
                                                        </span>
                                                        Departments
                                                    </button>
                                                    <button class="nav-link" id="v-pills-payment-tab" disabled data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 3
                                                        </span>
                                                        HR infos
                                                    </button>
                                                    <button class="nav-link" id="v-pills-payment-tab" disabled data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 4
                                                        </span>
                                                        Insurance
                                                    </button>
                                                    <button class="nav-link" id="v-pills-finish-tab" disabled data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">
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
                                                        <div class="tab-pane fade show active" id="v-pills-bill-department" role="tabpanel" aria-labelledby="v-pills-bill-department-tab">
                                                        
                                                        <form action="connect/database.php" method="post" enctype="multipart/form-data">
                                                            <div class="mb-4">
                                                                <h5>Add department</h5>
                                                            </div>

                                                            <div>
                                                                <div class="row g-3">

                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <p class="text-muted">Select a company <span class="text-danger">*</span></p>
                                                                            <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                                                                <option value="">Choose from the list</option>
                                                                                <option value="Company one">Company one</option>
                                                                                <option value="Company two">Company two</option>
                                                                                <option value="Company three">Company three</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <div class="mb-1">
                                                                        <label for="company" class="form-label text-muted">Department name <span class="text-danger">*</span></label>
                                                                            <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                                                                <option value="">Choose from the list</option>
                                                                                <option value="Department one">Department one</option>
                                                                                <option value="Department two">Department two</option>
                                                                                <option value="Department three">Department three</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        
                                                                        <label for="company" class="form-label text-muted">Department name <span class="text-danger">*</span></label>
                                                                        <input type="text" required class="form-control" placeholder="Add new department" value="">
                                                                    </div>
                                                                    
                                                                    <div class="col-sm-12">
                                                                        <label for="depdesc" class="form-label text-muted">Department description. </label>
                                                                        <textarea type="text" class="form-control" placeholder="Enter description" value=""></textarea>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                            <button id="btnGroupDrop1" type="submit" class="btn right btn-success ms-auto nexttab dropdown-toggle" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-payment-tab" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Save
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                                                                    <li><button type="submit" class="dropdown-item">Save & New</button></li>
                                                                    <li><button type="submit" class="dropdown-item">Save & Next</button></li>
                                                                </ul>
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
                            </div>
                            <!-- end -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

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

    <!-- javascript links ends -->

    <!-- Learning instructor create init js -->
    <script src="assets/js/pages/learning-instructor-create.init.js"></script>


</body>

</html>