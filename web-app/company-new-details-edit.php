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
                                    <h4 class="card-title mb-2 mt-1">Update company</h4>
                                </div><!-- end card header -->
                                <div class="card-body form-steps">
                                    <form class="vertical-navs-step" action="connect/database.php" method="post">
                                        <div class="row gy-5">

                                            <div class="col-lg-3">
                                                <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                                    
                                                    <a href="company-new-details-edit.php">
                                                    <button class="nav-link done active" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 1
                                                        </span>
                                                        Details
                                                    </button>
                                                    </a>
                                                   <a href="company-new-department-edit.php">
                                                   <button class="nav-link active done" id="v-pills-bill-department-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-department" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="true">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 2
                                                        </span>
                                                        Departments
                                                    </button>
                                                   </a>
                                                    <a href="company-new-hr-edit.php">
                                                    <button class="nav-link done active" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 3
                                                        </span>
                                                        HR infos
                                                    </button>
                                                    </a>
                                                    
                                                    <a href="company-new-insurance-edit.php">
                                                    <button class="nav-link done active" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 4
                                                        </span>
                                                        Insurance
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
                                                                <h5>Company details</h5>
                                                            </div>

                                                            <div>
                                                                <div class="row g-3">
                                                                  <div class="mb-3">
                                                                        <label for="formFile" class="form-label text-muted">Company logo</label>
                                                                        <input class="form-control" type="file" id="formFile">
                                                                    </div>

                                                                    <div class="col-sm-8">
                                                                        <label for="company" class="form-label text-muted">Company name</label>
                                                                        <input type="text" class="form-control" placeholder="Full name" value="Company A">
                                                                    </div>
                                                                    
                                                                    <div class="col-sm-4">
                                                                        <label for="regno" class="form-label text-muted">Reg no.</label>
                                                                        <input type="text" class="form-control" placeholder="Registration" value="736483">
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <label for="pnumber" class="form-label text-muted">Phone number</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text">+255</span>
                                                                            <input type="text" id="cleave-phone" class="form-control" value="38823628932" placeholder="Enter number">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <label for="altnumber" class="form-label text-muted mb-4x"></label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text">+255</span>
                                                                            <input type="text" id="cleave-alt-phone" class="form-control" value="4738743874" placeholder="Alterative number">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <label for="website" class="form-label text-muted">Website</label>
                                                                        <input type="text" class="form-control" value="https://companya.com" placeholder="Enter website link">
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <label for="email" class="form-label text-muted">Email address</label>
                                                                        <input type="email" class="form-control" value="companya@gmail.com" placeholder="Enter Company email">
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <label for="physical" class="form-label text-muted">Physical address</label>
                                                                        <input type="text" class="form-control" value="Manzese Kona, Dar es salaam Tanzania" placeholder="Enter physical address">
                                                                    </div>

                                                                    <div class="col-6">
                                                                        <label for="long" class="form-label text-muted">Map location</label>
                                                                        <input type="text" class="form-control" value="743" placeholder="Longitudes">
                                                                    </div>
                                                                    
                                                                    <div class="col-6">
                                                                        <label for="lats" class="form-label text-muted mb-4x"></label>
                                                                        <input type="text" class="form-control" value="473" placeholder="Latitudes">
                                                                    </div>

                                                                    <div class="col-8">
                                                                        <label for="postal" class="form-label text-muted">Postal address</label>
                                                                        <input type="text" class="form-control" value="P.O.Box, 4384 Dar es salaam" placeholder="Enter Postal address">
                                                                    </div>

                                                                    <div class="col-4">
                                                                        <label for="employees" class="form-label text-muted">Number of employees</label>
                                                                        <input type="number" class="form-control" value="73" placeholder="Enter number">
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