<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

<!-- head starts -->

<?php include 'includes/head.php'; ?>
<!--datatable css-->

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

                    <!-- top stasts starts -->
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="dashboard.php" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="dashboard.php">Today</a>
                                            <a class="dropdown-item" href="dashboard.php">Last Week</a>
                                            <a class="dropdown-item" href="dashboard.php">Last Month</a>
                                            <a class="dropdown-item" href="dashboard.php">Current Year</a>
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
                                        <a class="text-reset dropdown-btn" href="dashboard.php" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="dashboard.php">Today</a>
                                            <a class="dropdown-item" href="dashboard.php">Last Week</a>
                                            <a class="dropdown-item" href="dashboard.php">Last Month</a>
                                            <a class="dropdown-item" href="dashboard.php">Current Year</a>
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
                                        <a class="text-reset dropdown-btn" href="dashboard.php" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="dashboard.php">Today</a>
                                            <a class="dropdown-item" href="dashboard.php">Last Week</a>
                                            <a class="dropdown-item" href="dashboard.php">Last Month</a>
                                            <a class="dropdown-item" href="dashboard.php">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">Companies</p>

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
                                        <a class="text-reset dropdown-btn" href="dashboard.php" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="dashboard.php">Today</a>
                                            <a class="dropdown-item" href="dashboard.php">Last Week</a>
                                            <a class="dropdown-item" href="dashboard.php">Last Month</a>
                                            <a class="dropdown-item" href="dashboard.php">Current Year</a>
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
                    <div class="row mb-4">
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
                    </div>
                    <!-- row ends -->

                </div>
                <!-- page contents ends -->

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
        <?php include 'includes/theme-settings.php';?>
        <!-- theme settings ends -->

        <!-- javascript links starts  -->
        <?php include 'includes/javascripts.php'; ?>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Echarts -->
        <script src="assets/libs/echarts/echarts.min.js"></script>

        <!-- Vector map-->
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

        <script src="assets/libs/list.js/list.min.js"></script>

        <!-- dashboard-analytics init js -->
        <script src="assets/js/pages/dashboard-analytics.init.js"></script>

        <!-- apexcharts init -->
        <script src="assets/js/pages/apexcharts-column.init.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js"></script>

</body>

</html>