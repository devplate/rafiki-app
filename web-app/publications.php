<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

<!-- head starts -->
<?php include 'includes/head.php'; ?>

<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<style>
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
                margin: 30px 0;
                white-space: nowrap;
                justify-content: flex-end;
            }
    </style>

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
                        <div class="col-xxl-9">
                            <div class="card" id="propertyList">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-0">Articles</h5>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Post title</th>
                                                <th>Type</th>
                                                <th>Author</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="post_id">
                                                    <span class="post_id">#TBS01</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 position-relative">
                                                        <img src="assets/images/real-estate/img-01.jpg" alt="" height="35" class="rounded">
                                                        <a href="apps-real-estate-property-overview.html" class="post_title text-reset stretched-link">How to handle working stress and pressure</a>
                                                    </div>
                                                </td>
                                                <td>Audio</td>
                                                <td class="author">
                                                    Oscar Salim Balali
                                                </td>
                                                <td class="address">
                                                    20/10/2023
                                                </td>

                                                <td>
                                                    <span class="badge bg-success text-white status">Published</span>
                                                </td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0">
                                                        <li>
                                                            <a href="apps-real-estate-property-overview.html" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-real-estate.html#!" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-real-estate.html#!" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="id">
                                                    <span class="post_id">#TBS01</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 position-relative">
                                                        <img src="assets/images/real-estate/img-01.jpg" alt="" height="35" class="rounded">
                                                        <a href="apps-real-estate-property-overview.html" class="post_title text-reset stretched-link">How to handle working stress and pressure</a>
                                                    </div>
                                                </td>
                                                <td>Article</td>
                                                <td class="author">
                                                    Karim Salim Balali
                                                </td>
                                                <td class="address">
                                                    20/10/2023
                                                </td>

                                                <td>
                                                    <span class="badge bg-success text-white status">Published</span>
                                                </td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0">
                                                        <li>
                                                            <a href="apps-real-estate-property-overview.html" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-real-estate.html#!" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-real-estate.html#!" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="post_id">
                                                    <span class="post_id">#TBS03</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 position-relative">
                                                        <img src="assets/images/real-estate/img-01.jpg" alt="" height="35" class="rounded">
                                                        <a href="apps-real-estate-property-overview.html" class="post_title text-reset stretched-link">How to handle working stress and pressure</a>
                                                    </div>
                                                </td>
                                                <td>Article</td>
                                                <td class="author">
                                                    Karim Salim Balali
                                                </td>
                                                <td class="address">
                                                    20/10/2023
                                                </td>

                                                <td>
                                                    <span class="badge bg-success text-white status">Published</span>
                                                </td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0">
                                                        <li>
                                                            <a href="apps-real-estate-property-overview.html" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-real-estate.html#!" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-real-estate.html#!" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="post_id">
                                                    <span class="post_id">#TBS01</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 position-relative">
                                                        <img src="assets/images/real-estate/img-01.jpg" alt="" height="35" class="rounded">
                                                        <a href="apps-real-estate-property-overview.html" class="post_title text-reset stretched-link">How to handle working stress and pressure</a>
                                                    </div>
                                                </td>
                                                <td>Article</td>
                                                <td class="author">
                                                    Karim Salim Balali
                                                </td>
                                                <td class="address">
                                                    20/10/2023
                                                </td>

                                                <td>
                                                    <span class="badge bg-danger text-white status">Draft</span>
                                                </td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0">
                                                        <li>
                                                            <a href="apps-real-estate-property-overview.html" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-real-estate.html#!" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-real-estate.html#!" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="post_id">
                                                    <span class="post_id">#TBS01</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2 position-relative">
                                                        <img src="assets/images/real-estate/img-01.jpg" alt="" height="35" class="rounded">
                                                        <a href="apps-real-estate-property-overview.html" class="post_title text-reset stretched-link">How to handle working stress and pressure</a>
                                                    </div>
                                                </td>
                                                <td>Article</td>
                                                <td class="author">
                                                    Karim Salim Balali
                                                </td>
                                                <td class="address">
                                                    20/10/2023
                                                </td>

                                                <td>
                                                    <span class="badge bg-success text-white status">Published</span>
                                                </td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0">
                                                        <li>
                                                            <a href="apps-real-estate-property-overview.html" class="btn btn-subtle-primary btn-icon btn-sm "><i class="ph-eye"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-real-estate.html#!" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="dashboard-real-estate.html#!" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->

                                </div>

                            </div>
                        </div><!--end col-->

                    </div><!--end row-->

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