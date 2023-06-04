<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

    <!-- head starts -->
    <?php include '../includes/head.php';?>
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" >
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" >

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <!-- head ends -->

    <body>

        <!-- layout-wrapper start -->
        <div id="layout-wrapper">

                <!-- left sidebar starts -->
                <?php include '../includes/sidebar.php';?>
                <!-- Left Sidebar End -->

                <!-- Vertical Overlay-->
                <div class="vertical-overlay"></div>
            
                <!-- Header starts -->
                <?php include '../includes/header.php';?>
                <!-- header ends -->

                <!-- notification models starts -->
                <?php include '../includes/notification-models.php';?>
                <!-- notification models ends -->

                <!-- Start right Content here -->
            <div class="main-content">

                <!-- page contents start -->
                <div class="page-content">
                    <div class="container-fluid">

                    <!-- top stasts starts -->
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="../dashboard/dashboard.php" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Today</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Last Week</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Last Month</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">Patients</p>

                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h5 class="mb-4"><span class="counter-value" data-target="3680"></span></h5>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 06.41% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="session_chart" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="../dashboard/dashboard.php" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Today</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Last Week</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Last Month</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">Doctors</p>
                        
                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h5 class="mb-4"><span class="counter-value" data-target="900">0</span></h5>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="visti_duration_chart" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="../dashboard/dashboard.php" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Today</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Last Week</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Last Month</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">Appointments</p>
                        
                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h5 class="mb-4"><span class="counter-value" data-target="164">0</span></h5>
                                            <p class="text-danger mb-0"><i class="bi bi-arrow-down me-1"></i> 07.26% Last Week</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="impressions_chart" data-colors='["--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="../dashboard/dashboard.php" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Today</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Last Week</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Last Month</a>
                                            <a class="dropdown-item" href="../dashboard/dashboard.php">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">Attended cases</p>
                        
                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h5 class="mb-4"><span class="counter-value" data-target="291"></span></h5>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="views_chart" data-colors='["--tb-primary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- top stasts end -->

                <!-- row start -->
                <div class="row">
                    <!-- chart start -->
                    <div class="col-xl-12">
                        <div class="card mt-3 pb-3">
                            <div class="card-header mt-3">
                                <h4 class="card-title mb-0">Patients stats </h4>
                            </div><!-- end card header -->

                            <!-- To edit this component go to /assets/js/pages/apexcharts-column.init.js -->
                            <div class="card-body">
                                <div id="column_chart" data-colors='["--tb-danger", "--tb-primary", "--tb-success", "--tb-purple", "--tb-info", "--tb-warning"]' class="apex-charts" dir="ltr"></div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- chart ends -->

                    <!-- patient list starts -->
                    <div class="col-xl-12">
                        <div class="card mt-3">
                            <div class="card-header mt-3">
                                <h4 class="card-title mb-2">Patients list</h4>
                            </div>
                            <div class="card-body">
                                <table id="fixed-header" class="table dt-responsive nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" id="checkAll02" value="option">
                                                </div>
                                            </th>
                                            <th>ID.</th>
                                            <th>Name</th>
                                            <th>Phone number</th>
                                            <th>Company</th>
                                            <th>Job position</th>
                                            <th>Insurance name:</th>
                                            <th>Insurance no:</th>
                                            <th>Joined:</th>
                                            <th>Status</th>
                                            <th>Login keys</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Vodacom Company</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Tigo Tanzania</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Tigo Tanzania</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Devplate Creative Agency</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Vodacom Company</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Vodacom Company</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Vodacom Company</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Vodacom Company</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Vodacom Company</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Vodacom Company</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Vodacom Company</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input fs-base" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td>RP0001</td>
                                            <td>Emanuel Karimu Salimu</td>
                                            <td>+255 789 899 998</td>
                                            <td>Vodacom Company</td>
                                            <td>Selling manager</td>
                                            <td>Bumako Insurance</td>
                                            <td>BM9300-293-23920</td>
                                            <td>03 Oct, 2021</td>
                                            <td><span class="badge bg-info-subtle text-success">Active member</span></td>
                                            <td><span class="badge bg-danger">8978</span></td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="tables-datatables.html#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- patient list ends -->
                </div>
                <!-- row ends -->

                </div>
                <!-- page contents ends -->

                <!-- footer starts -->
                <?php include '../includes/footer.php';?>
                <!-- footer ends -->

            </div>
            <!-- end main content-->

        </div>
            <!-- layout-wrapper ends -->


            <!--start back-to-top-->
            <?php include '../includes/back-button.php'; ?>
            <!--end back-to-top-->

            <!--preloader starts-->
            <?php include '../includes/preloader.php';?>
            <!-- preloader ends -->

            <!-- theme Settings starts -->
            <?php include '../includes/theme-settings.php';
            ?>
            <!-- theme settings ends -->

            <!-- javascript links starts  -->
            <?php include '../includes/javascripts.php';?>

            
            <!-- apexcharts init -->
            <script src="../assets/js/pages/apexcharts-column.init.js"></script>
            <script src="../assets/libs/simplebar/simplebar.min.js"></script>
            
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
             
            <!-- apexcharts -->
            <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js"></script>

            <!--datatable js-->
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

            <script src="../assets/js/pages/datatables.init.js"></script>
            <!-- javascript links ends -->


    </body>

</html>