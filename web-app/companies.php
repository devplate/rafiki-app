<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

    <!-- head starts -->
    <?php include 'includes/head.php';?>

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
                <?php include 'includes/sidebar.php';?>
                <!-- Left Sidebar End -->

                <!-- Vertical Overlay-->
                <div class="vertical-overlay"></div>
            
                <!-- Header starts -->
                <?php include 'includes/header.php';?>
                <!-- header ends -->

                <!-- notification models starts -->
                <?php include 'includes/notification-models.php';?>
                <!-- notification models ends -->

                <!-- Start right Content here -->
            <div class="main-content">

                <!-- page contents start -->
                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Companies</h5>
                                    </div>
                                    <div class="table-responsive card-body">
                                    <table id="buttons-datatables" class="display table table-hover table-nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 10px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-base" type="checkbox" id="checkAll01" value="option">
                                                        </div>
                                                    </th>
                                                    <th>ID</th>
                                                    <th>Size</th>
                                                    <th>Name</th>
                                                    <th>Phone no.</th>
                                                    <th>Email</th>
                                                    <th>Postal address</th>
                                                    <th>Physical location</th>
                                                    <th>Joined</th>
                                                    <th>Expired</th>
                                                    <th>Status</th>
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
                                                    <td>RFC002</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                                                    <td>RFC001</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                                                    <td>RFC004</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                                                    <td>RFC001</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                                                    <td>RFC001</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-danger">Expired</span></td>
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
                                                    <td>RFC001</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                                                    <td>RFC001</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                                                    <td>RFC001</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                                                    <td>RFC001</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                                                    <td>RFC001</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                                                    <td>RFC001</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                                                    <td>RFC001</td>
                                                    <td>120</td>
                                                    <td>Vodacom Tanzania co .td</td>
                                                    <td>+255 849 849 843</td>
                                                    <td>info@vodacom.co.tz</td>
                                                    <td>P.O.Box 2453 Dar es salaam</td>
                                                    <td>Kigamboni, Dar es salaam, Tanzania</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td>03 Oct, 2025</td>
                                                    <td><span class="badge bg-success">Active</span></td>
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
                            </div><!--end col-->
                        </div><!--end row-->

                    </div>
                </div>    
                <!-- page content ends -->

                <!-- footer starts -->
                <?php include 'includes/footer.php';?>
                <!-- footer ends -->

            </div>
            <!-- end main content-->

        </div>
            <!-- layout-wrapper ends -->


            <!--start back-to-top-->
            <?php include 'includes/back-button.php'; ?>
            <!--end back-to-top-->

            <!--preloader starts-->
            <?php include 'includes/preloader.php';?>
            <!-- preloader ends -->

            <!-- theme Settings starts -->
            <?php include 'includes/theme-settings.php';
            ?>
            <!-- theme settings ends -->

            <!-- javascript links starts  -->
            <?php include 'includes/javascripts.php';?>

            
            <!-- apexcharts init -->
            <script src="assets/js/pages/apexcharts-column.init.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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

            <script src="assets/js/pages/datatables.init.js"></script>
            <!-- javascript links ends -->


    </body>

</html>