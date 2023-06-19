<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

<!-- head starts -->
<?php include 'includes/head.php'; ?>

<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<!--Swiper slider css-->
<link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
<!-- dropzone css -->
<link href="assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css">

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
                        <div class="col-xl-4">

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="dropdown flex-shrink-0 ms-auto">
                                            <button class="btn btn-light btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx ri-edit-line"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="bx bx-user-x me-1 align-baseline"></i> deactivate</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-center border-bottom pt-3 pb-4">
                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-lg rounded-circle p-1 img-thumbnail">
                                        <div class="mt-3">
                                            <h5>Dr. Asha Matawana</h5>
                                            <p class="text-muted">ID: RD89273</p>
                                        </div>
                                    </div>

                                    <div class="pt-4 pb-2">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-sm align-middle table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Age:</th>
                                                            <td class="text-muted">67</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Gender:</th>
                                                            <td class="text-muted">Male</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Language:</th>
                                                            <td class="text-muted">English, Swahili</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Nationality:</th>
                                                            <td class="text-muted">Tanzania</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">National Id no:</th>
                                                            <td class="text-muted">3232-5532-7383-738-7438</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Phone number:</th>
                                                            <td class="text-muted">+255 738 738 7438</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Alt number:</th>
                                                            <td class="text-muted">+255 738 738 7438</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Email address:</th>
                                                            <td class="text-muted">info@vodacom.co.tz</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Location:</th>
                                                            <td class="text-muted">Kigamboni Dar es Salaam, Tanzania</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Joined Date:</th>
                                                            <td class="text-muted">30 Oct 2023</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-->


                            <div class="card">
                                <div class="card-body">

                                    <div class="pt-2">
                                        <h5 class="card-title mb-3">Emergency</h5>
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-sm align-middle table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Full name</th>
                                                            <td class="text-muted">Khadija Ally Said</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Phone number:</th>
                                                            <td class="text-muted">073487436463</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Alt number</th>
                                                            <td class="text-muted">0932734638394</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Email address:</th>
                                                            <td class="text-muted">info@vodacom.co.tz</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Location:</th>
                                                            <td class="text-muted">Kigamboni Dar es Salaam, Tanzania</td>
                                                        </tr>

                                                        <tr>
                                                            <th class="ps-0 text-end" scope="row">Relationship:</th>
                                                            <td class="text-muted">Spouse</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-->

                        </div><!--end col-->


                        <div class="col-xl-8">

                            <div class="row align-items-center g-3 mb-4">
                                <div class="col-md order-1">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills arrow-navtabs nav-secondary gap-2 flex-grow-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="pages-profile.html#profile" role="tab">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="pages-profile.html#qualification" role="tab">
                                                Qualifications
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="pages-profile.html#patients" role="tab">
                                                Patients
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="pages-profile.html#activities" role="tab">
                                                Activities
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="pages-profile.html#settings" role="tab">
                                                Settings
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="tab-content">

                                <div class="tab-pane active" id="profile" role="tabpanel">

                                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
                                        <div class="col">
                                            <div class="card border-bottom border-3 border-secondary">
                                                <div class="card-body">
                                                    <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 3.8%</span>
                                                    <h4 class="mb-4"><span class="counter-value" data-target="128">0</span></h4>

                                                    <p class="text-muted fw-medium mb-0">Attended patients</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border-bottom border-3 border-warning">
                                                <div class="card-body">
                                                    <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 12.6%</span>
                                                    <h4 class="mb-4"><span class="counter-value" data-target="140">0</span></h4>

                                                    <p class="text-muted fw-medium mb-0">Appointments</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border-bottom border-3 border-success">
                                                <div class="card-body">
                                                    <span class="badge bg-success-subtle text-success float-end"><i class="ph-trend-up align-middle me-1"></i> 18.7%</span>
                                                    <h4 class="mb-4"><span class="counter-value" data-target="281">0</span></h4>

                                                    <p class="text-muted fw-medium mb-0">Prescriptions</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!---end row-->

                                    <!-- row start -->
                                    <div class="row mb-3">
                                        <!-- chart start -->
                                        <div class="col-xl-12">
                                            <div class="card mt-3 pb-3">
                                                <div class="card-header mt-3">
                                                    <h4 class="card-title mb-0">Patients attended stats </h4>
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

                                    <div class="row">
                                        <div class="col-lg-12 mb-4">
                                            <div class="card pb-4">
                                                <div class="card-header d-flex flex-wrap align-items-center gap-3 mb-2">
                                                    <h6 class="card-title flex-grow-1 pt-3 mb-0">Ratings & Reviews</h6>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown card-header-dropdown">
                                                            <a class="text-muted dropdown-btn" href="apps-ecommerce-product-details.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                This Month <i class="mdi mdi-chevron-down ms-1"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="apps-ecommerce-product-details.html#">Today</a>
                                                                <a class="dropdown-item" href="apps-ecommerce-product-details.html#">Yesterday</a>
                                                                <a class="dropdown-item" href="apps-ecommerce-product-details.html#">Last 7 Days</a>
                                                                <a class="dropdown-item" href="apps-ecommerce-product-details.html#">Last 30 Days</a>
                                                                <a class="dropdown-item" href="apps-ecommerce-product-details.html#">This Month</a>
                                                                <a class="dropdown-item" href="apps-ecommerce-product-details.html#">Last Month</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row gy-3">
                                                        <div class="col-lg-3">
                                                            <div class="text-center mt-3 mt-lg-5">
                                                                <h1 class="mb-3">4.9 <small class="fs-sm text-muted fw-normal">/ 5.0</small></h1>
                                                                <div class="text-warning hstack gap-2 justify-content-center mb-2">
                                                                    <i class="bi bi-star-fill align-baseline"></i>
                                                                    <i class="bi bi-star-fill align-baseline"></i>
                                                                    <i class="bi bi-star-fill align-baseline"></i>
                                                                    <i class="bi bi-star-fill align-baseline"></i>
                                                                    <i class="bi bi-star-fill align-baseline"></i>
                                                                </div>
                                                                <p class="mb-0"><b>300</b> Reviews</p>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-9">
                                                            <div>
                                                                <div class="me-lg-n3 pe-lg-4" data-simplebar style="max-height: 500px;">
                                                                    <ul class="list-unstyled mb-0" id="review-list">
                                                                        <li class="review-list py-2" id="review-1">
                                                                            <div class="border p-3">
                                                                                <div class="hstack flex-wrap gap-3 mb-4">
                                                                                    <div class="badge rounded-pill bg-danger-subtle text-danger mb-0">
                                                                                        <i class="mdi mdi-star"></i> <span class="rate-num">4.5</span>
                                                                                    </div>
                                                                                    <div class="vr"></div>
                                                                                    <div class="flex-grow-1">
                                                                                        <p class="mb-0"><a href="apps-ecommerce-product-details.html#!">Jansh Brown</a></p>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <span class="text-muted fs-13 mb-0">08 Mar, 2023</span>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <a href="apps-ecommerce-product-details.html#addReview" class="badge bg-secondary-subtle text-secondary edit-item-list" data-bs-toggle="modal"><i class="ph-pencil align-baseline me-1"></i> Edit</a>
                                                                                        <a href="apps-ecommerce-product-details.html#removeItemModal" class="badge bg-danger-subtle text-danger" data-bs-toggle="modal"><i class="ph-trash align-baseline"></i></a>
                                                                                    </div>
                                                                                </div>

                                                                                <h6 class="review-title fs-md">Product Quality</h6>
                                                                                <p class="review-desc mb-0">" This is an incredible framework worth so much in the right hands! Nowhere else are you going to get so much flexibility and great code for a few dollars. Highly recommend purchasing today! Like right now! "</p>

                                                                            </div>
                                                                        </li>
                                                                        <li class="review-list py-2" id="review-2">
                                                                            <div class="border p-3">
                                                                                <div class="hstack flex-wrap gap-3 mb-4">
                                                                                    <div class="badge rounded-pill bg-danger-subtle text-danger mb-0">
                                                                                        <i class="mdi mdi-star"></i> <span class="rate-num">4.0</span>
                                                                                    </div>
                                                                                    <div class="vr"></div>
                                                                                    <div class="flex-grow-1">
                                                                                        <p class="mb-0"><a href="apps-ecommerce-product-details.html#!">Camilla Harber</a></p>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted fs-13 mb-0">03 Mar, 2023</p>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <a href="apps-ecommerce-product-details.html#addReview" class="badge bg-secondary-subtle text-secondary edit-item-list" data-bs-toggle="modal"><i class="ph-pencil align-baseline me-1"></i> Edit</a>
                                                                                        <a href="apps-ecommerce-product-details.html#removeItemModal" class="badge bg-danger-subtle text-danger" data-bs-toggle="modal"><i class="ph-trash align-baseline"></i></a>
                                                                                    </div>
                                                                                </div>

                                                                                <h6 class="review-title fs-md">Product Quality</h6>
                                                                                <p class="review-desc mb-0">" We have used your other templates as well and seems it's amazing with the design and code quality. Wish you best for the future updates. Keep updated you will be #1 in near future. "</p>
                                                                            </div>
                                                                        </li>

                                                                        <li class="review-list py-2" id="review-3">
                                                                            <div class="border p-3">
                                                                                <div class="hstack flex-wrap gap-3 mb-4">
                                                                                    <div class="badge rounded-pill bg-danger-subtle text-danger mb-0">
                                                                                        <i class="mdi mdi-star"></i> <span class="rate-num">5.0</span>
                                                                                    </div>
                                                                                    <div class="vr"></div>
                                                                                    <div class="flex-grow-1">
                                                                                        <p class="mb-0"><a href="apps-ecommerce-product-details.html#!">Kaylin Bechtelar</a></p>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted fs-13 mb-0">28 Feb, 2023</p>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <a href="apps-ecommerce-product-details.html#addReview" class="badge bg-secondary-subtle text-secondary edit-item-list" data-bs-toggle="modal"><i class="ph-pencil align-baseline me-1"></i> Edit</a>
                                                                                        <a href="apps-ecommerce-product-details.html#removeItemModal" class="badge bg-danger-subtle text-danger" data-bs-toggle="modal"><i class="ph-trash align-baseline"></i></a>
                                                                                    </div>
                                                                                </div>

                                                                                <h6 class="review-title fs-md">Design Quality</h6>
                                                                                <p class="review-desc mb-0">" This template is incredibly comprehensive considering how new and modern it is! I bought 8 different admin templates recently and all of them had some good features, but were always missing stuff that you only realise after purchase. I've migrated my site to this template and have yet to find anything missing or lacking! Plus, the online documentation is really easy to use and access and very comprehensive! Well done guys and thank you! "</p>
                                                                            </div>
                                                                        </li>

                                                                        <li class="review-list py-2" id="review-4">
                                                                            <div class="border p-3">
                                                                                <div class="hstack flex-wrap gap-3 mb-4">
                                                                                    <div class="badge rounded-pill bg-danger-subtle text-danger mb-0">
                                                                                        <i class="mdi mdi-star"></i> <span class="rate-num">3.5</span>
                                                                                    </div>
                                                                                    <div class="vr"></div>
                                                                                    <div class="flex-grow-1">
                                                                                        <p class="mb-0"><a href="apps-ecommerce-product-details.html#!">Dedrick Shields</a></p>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted fs-13 mb-0">24 Feb, 2023</p>
                                                                                    </div>
                                                                                    <div class="flex-shrink-0">
                                                                                        <a href="apps-ecommerce-product-details.html#addReview" class="badge bg-secondary-subtle text-secondary edit-item-list" data-bs-toggle="modal"><i class="ph-pencil align-baseline me-1"></i> Edit</a>
                                                                                        <a href="apps-ecommerce-product-details.html#removeItemModal" class="badge bg-danger-subtle text-danger" data-bs-toggle="modal"><i class="ph-trash align-baseline"></i></a>
                                                                                    </div>
                                                                                </div>

                                                                                <h6 class="review-title fs-md">Feature Availability</h6>
                                                                                <p class="review-desc mb-0">" Hello everyone, I would like to suggest here two contents that you could create. Course pages and blog pages. In them you could insert the listing and management of courses and listing and management of blog. The theme is perfect, one of the best purchases I've ever made. "</p>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div><!--end row-->
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                </div>
                                <!--end tab-pane-->

                                <div class="tab-pane fade" id="qualification" role="tabpanel">
                                    <div class="card py-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Qualification</h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-4">
                                                    <div class="d-flex">
                                                        <span class="education size-3"><i class="ph-student"></i></span>
                                                        <h6 class="fs-md p-3">Muhimbili Medical University</h6>
                                                    </div>
                                                    <div class="education-map">
                                                        <p class="text-muted mb-0">Bachelor of Science in Medical</p>
                                                        <p class="mt-1">Jan 2018 - Feb 2022</p>
                                                    </div>
                                                </li>

                                                <li class="mb-4">
                                                    <div class="d-flex">
                                                        <span class="education size-3"><i class="ph-student"></i></span>
                                                        <h6 class="fs-md p-3">Muhimbili Medical University</h6>
                                                    </div>
                                                    <div class="education-map">
                                                        <p class="text-muted mb-0">Bachelor of Science in Medical</p>
                                                        <p class="mt-1">Jan 2018 - Feb 2022</p>
                                                    </div>
                                                </li>

                                                <li class="mb-4">
                                                    <div class="d-flex">
                                                        <span class="education size-3"><i class="ph-student"></i></span>
                                                        <h6 class="fs-md p-3">Muhimbili Medical University</h6>
                                                    </div>
                                                    <div class="education-map">
                                                        <p class="text-muted mb-0">Bachelor of Science in Medical</p>
                                                        <p class="mt-1">Jan 2018 - Feb 2022</p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!--end card-->

                                </div>
                                <!--end tab-pane-->

                                <div class="tab-pane fade" id="activities" role="tabpanel">
                                    <div class="card py-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Activity Stream</h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="acitivity-timeline-2 list-unstyled mb-0">
                                                <li>
                                                    <h6 class="fs-md">James Mahindi Mapunda</h6>
                                                    <p>09:24 PM</p>
                                                    <p class="text-muted mb-0">Booked appointment to see Dr Ally bakari shabarni</p>
                                                </li>
                                                <li>
                                                    <h6 class="fs-md">Emanuel Karim Mandonga</h6>
                                                    <p class="mb-3">4 days ago</p>
                                                    <p class="text-muted mb-0">Diagnosed with Sleeping sickness</p>
                                                </li>
                                                <li>
                                                    <h6 class="fs-md">Juma Shabani Suleman</h6>
                                                    <p class="mb-3">5 days ago</p>
                                                    <p class="text-muted mb-0">Attended live section hosted by Dr Asha Shabani Juma</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end card-->

                                </div>
                                <!--end tab-pane-->

                                <div class="tab-pane fade" id="patients" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="dropdown float-end">
                                                        <a class="text-muted" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="patient-view.php">View</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Edit</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Remove</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded">
                                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="fs-md"><a href="pages-profile.html" class="text-dark">Patricia Honda</a></h5>
                                                            <p class="text-muted mb-0">Full Stack Developer</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 617 219 6245</p>
                                                        <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> patriciahonda@steex.com</p>
                                                        <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 2995 Lynn Street Newton, MA 02160</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xxl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="dropdown float-end">
                                                        <a class="text-muted" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="patient-view.php">View</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Edit</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Remove</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded">
                                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="fs-md"><a href="pages-profile.html" class="text-dark">James Lash</a></h5>
                                                            <p class="text-muted mb-0">Web Designer</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 617 219 6245</p>
                                                        <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> jameslash@steex.com</p>
                                                        <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 3089 Leroy Lane Pollock, SD 57648</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xxl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="dropdown float-end">
                                                        <a class="text-muted" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="patient-view.php">View</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Edit</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Remove</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded">
                                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="fs-md"><a href="pages-profile.html" class="text-dark">Angus Garnsey</a></h5>
                                                            <p class="text-muted mb-0">React Developer</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 085 383 2388</p>
                                                        <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> angusgarnsey@steex.com</p>
                                                        <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 1738 Old Cres Lady Frere 5411</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xxl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="dropdown float-end">
                                                        <a class="text-muted" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="patient-view.php">View</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Edit</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Remove</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <img src="assets/images/users/avatar-5.jpg.png" alt="" class="avatar-sm rounded">
                                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="fs-md"><a href="pages-profile.html" class="text-dark">Matilda Marston</a></h5>
                                                            <p class="text-muted mb-0">Shopify Developer</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 082 288 1065</p>
                                                        <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> matildamarston@steex.com</p>
                                                        <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 2168 Bezuidenhout St Evander 2270</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xxl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="dropdown float-end">
                                                        <a class="text-muted" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="patient-view.php">View</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Edit</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Remove</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded">
                                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="fs-md"><a href="pages-profile.html" class="text-dark">Zachary Benjamin</a></h5>
                                                            <p class="text-muted mb-0">Shopify Developer</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 348 9730237</p>
                                                        <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> zacharybenjamin@steex.com</p>
                                                        <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> Via Carlo Alberto, 8 22020-Faloppio CO</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xxl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="dropdown float-end">
                                                        <a class="text-muted" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="patient-view.php">View</a> <a class="dropdown-item" href="pages-profile.html#">Remove</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Edit</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title fs-lg bg-danger-subtle text-danger rounded">
                                                                    RC
                                                                </div>
                                                            </div>
                                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="fs-md"><a href="pages-profile.html" class="text-dark">Ruby Chomley</a></h5>
                                                            <p class="text-muted mb-0">Shopify Developer</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 348 9730237</p>
                                                        <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> rubychomley@steex.com</p>
                                                        <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> Via Pasquale Scura, 76 75010-Calciano MT</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xxl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="dropdown float-end">
                                                        <a class="text-muted" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="patient-view.php">View</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Edit</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Remove</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded">
                                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="fs-md"><a href="pages-profile.html" class="text-dark">Sophia Prendiville</a></h5>
                                                            <p class="text-muted mb-0">Angular Developer</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 0354 3037376</p>
                                                        <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> sophiaprendiville@steex.com</p>
                                                        <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> 36078-Maglio Di Sopra VI</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xxl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="dropdown float-end">
                                                        <a class="text-muted" href="pages-profile.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-horizontal-rounded"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="patient-view.php">View</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Edit</a>
                                                            <a class="dropdown-item" href="pages-profile.html#">Remove</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 position-relative">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title fs-lg bg-info-subtle text-info rounded">
                                                                    SZ
                                                                </div>
                                                            </div>
                                                            <span class="position-absolute top-0 start-100 translate-middle badge border border-2 border-white rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="fs-md"><a href="pages-profile.html" class="text-dark">Samantha Zepps</a></h5>
                                                            <p class="text-muted mb-0">Project Manager</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <p class="text-muted mb-2"><i class="bi bi-telephone align-baseline me-1"></i> 0365 4363346</p>
                                                        <p class="text-muted mb-2"><i class="bi bi-envelope align-baseline me-1"></i> samanthazepps@steex.com</p>
                                                        <p class="text-muted mb-0"><i class="bi bi-geo-alt align-baseline me-1"></i> Via del Carmine, 108 36040-Sarego VI</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm">
                                            <div class="text-muted text-center text-sm-start">
                                                Showing <span class="fw-semibold">9</span> of <span class="fw-semibold">13</span> Results
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <div class="pagination-wrap hstack justify-content-center gap-2">
                                                <a class="page-item pagination-prev disabled" href="pages-profile.html#">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0">
                                                    <li class="active"><a class="page" href="pages-profile.html#" data-i="1" data-page="10">1</a></li>
                                                    <li><a class="page" href="pages-profile.html#" data-i="2" data-page="10">2</a></li>
                                                </ul>
                                                <a class="page-item pagination-next" href="pages-profile.html#">
                                                    Next
                                                </a>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                                <!--end tab-pane-->

                                <div class="tab-pane" id="settings" role="tabpanel">

                                    <div class="card py-3">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Profile Settings</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-0">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <label for="directMessage" class="form-check-label fs-md">View Diagnosis</label>
                                                            <p class="text-muted">Allow this doctor to view patient diagnosis</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="directMessage" checked>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex mt-2">
                                                        <div class="flex-grow-1">
                                                            <label class="form-check-label fs-md mb-1" for="desktopNotification">
                                                                Attended Anxiety
                                                            </label>
                                                            <p class="text-muted">Allow this doctor to attend patient with Anxiety</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification" checked>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex mt-2">
                                                        <div class="flex-grow-1">
                                                            <label class="form-check-label fs-md mb-1" for="desktopNotification">
                                                                Attended Sex Dysfunction
                                                            </label>
                                                            <p class="text-muted">Allow this doctor to attend patient with Sex Dysfunction</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification" checked>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex mt-2">
                                                        <div class="flex-grow-1">
                                                            <label class="form-check-label fs-md mb-1" for="desktopNotification">
                                                                Attended Substance Abuse
                                                            </label>
                                                            <p class="text-muted">Allow this doctor to attend patient with Substance Abuse</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex mt-2">
                                                        <div class="flex-grow-1">
                                                            <label class="form-check-label fs-md mb-1" for="desktopNotification">
                                                                Attended Depression
                                                            </label>
                                                            <p class="text-muted">Allow this doctor to attend patient with Depression</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification" checked>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex mt-2">
                                                        <div class="flex-grow-1">
                                                            <label class="form-check-label fs-md mb-1" for="desktopNotification">
                                                                Attended Stress
                                                            </label>
                                                            <p class="text-muted">Allow this doctor to attend patient with Stress</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex mt-2">
                                                        <div class="flex-grow-1">
                                                            <label class="form-check-label fs-md mb-1" for="desktopNotification">
                                                                Attended Aggression
                                                            </label>
                                                            <p class="text-muted">Allow this doctor to attend patient with Aggression</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification" checked>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end card-->
                                    </div>

                                    <div class="card py-3">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Changes Password</h6>
                                        </div>
                                        <div class="card-body">
                                            <form action="pages-profile-settings.html">
                                                <div class="row g-2 justify-content-lg-between align-items-center">

                                                    <div class="col-lg-6">
                                                        <div class="auth-pass-inputgroup">
                                                            <label for="password-input" class="form-label">New Password*</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control password-input" id="password-input" onpaste="return false" placeholder="New password" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button"><i class="ri-eye-fill align-middle"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="auth-pass-inputgroup">
                                                            <label for="confirm-password-input" class="form-label">Confirm Password*</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control password-input" onpaste="return false" id="confirm-password-input" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button"><i class="ri-eye-fill align-middle"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-4">
                                                        <div class="">
                                                            <button type="submit" class="btn btn-success">Create password</button>
                                                        </div>
                                                    </div>

                                                    <!--end col-->

                                                    <div class="col-lg-12">
                                                        <div class="card bg-light shadow-none passwd-bg" id="password-contain">
                                                            <div class="card-body">
                                                                <div class="mb-4">
                                                                    <h5 class="fs-sm">Password must contain:</h5>
                                                                </div>
                                                                <div class="">
                                                                    <p id="pass-length" class="invalid fs-xs mb-2">Minimum <b>8 characters</b></p>
                                                                    <p id="pass-lower" class="invalid fs-xs mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                                    <p id="pass-upper" class="invalid fs-xs mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                                    <p id="pass-number" class="invalid fs-xs mb-0">A least <b>number</b> (0-9)</p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--end row-->
                                            </form>

                                        </div>
                                    </div>

                                </div>
                                <!--end tab-pane-->

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

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
    <!-- dropzone js -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>
    <!-- rater-js plugin -->
    <script src="assets/libs/rater-js/index.js"></script>

    <script src="assets/js/pages/ecommerce-product-overview.init.js"></script>

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

    <!-- password-create init -->
    <script src="assets/js/pages/passowrd-create.init.js"></script>

    <!-- profile-setting init js -->
    <script src="assets/js/pages/profile-setting.init.js"></script>

    <!-- cleave.js -->
    <script src="assets/libs/cleave.js/cleave.min.js"></script>

    <!-- form masks init -->
    <script src="assets/js/pages/form-masks.init.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- apexcharts init -->
    <script src="assets/js/pages/apexcharts-column.init.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>




</body>

</html>