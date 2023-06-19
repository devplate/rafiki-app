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
                                    <div class="text-center">
                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-lg rounded-circle p-1 img-thumbnail">
                                        <div class="mt-3">
                                            <h5 class="text-primary"><a href="patient-view.php">Rashid Ali Matawana</a></h5>
                                            <p class="text-muted">ID: RD89273</p>
                                        </div>
                                    </div>

                                    <div class="hstack gap-2 justify-content-center border-bottom py-2">
                                            <ul class="call-menu-profile">
                                                <li class="nav-item">
                                                    <a href="tell:+255738437848" class="nav-link active"><i class="bi bi-telephone"></i></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="appointment-new.php" class="nav-link active"><i class="bi bi-calendar"></i></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="chat.php" class="nav-link active"><i class="bi bi-chat-dots"></i></a>
                                                </li>
                                            </ul>
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

                            <div class="card py-3 mb-5">
                                <div class="card-header">
                                    <h5 class="card-title mb-2">Medical information</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Medical information start -->

                                    <div class="border-bottom pb-3 mb-4">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="height-date text-center">
                                                    <span class="height-span"><i class="bx bx-sort-up"></i></span>
                                                    <p>Height</p>
                                                    <h3>189<span class="span-kg">Cm</span> </h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="height-date text-center">
                                                    <span class="height-span"><i class="bi bi-diagram-3"></i></span>
                                                    <p>Weight</p>
                                                    <h3>87<span class="span-kg">Kg</span> </h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="height-date text-center">
                                                    <span class="height-span"><i class="bi bi-graph-up"></i></span>
                                                    <p>BMI</p>
                                                    <h3>23.14</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="blood-stats">
                                        <div class="row">
                                            <p class="text-muted">Blood pressure</p>
                                            <div class="col-lg-5">
                                                <div class="pressure-stats">
                                                    <p>High</p>
                                                    <h3>189<span class="span-pressure">mmHg</span> </h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="pressure-stats ">
                                                    <p>Low</p>
                                                    <h3>129<span class="span-pressure">mmHg</span> </h3>
                                                </div>
                                            </div>
                                            <p class="text-muted mt-4">Blood group</p>
                                            <div class="col-lg-4">
                                                <div class="pressure-group">
                                                    <h3>B+</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Medical information ends -->
                                </div>
                            </div>
                            <!--end card-->

                        </div><!--end col-->


                        <div class="col-xl-8">

                            <div class="row align-items-center g-3 mb-4">
                                <div class="col-md order-1">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills arrow-navtabs nav-secondary gap-2 flex-grow-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="pages-profile.html#profile" role="tab">
                                                Prescription
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="pages-profile.html#medical" role="tab">
                                                Medical history
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="pages-profile.html#activities" role="tab">
                                                Personal journal
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="pages-profile.html#documents" role="tab">
                                                Documents
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="tab-content" id="accordionFlushExample">

                                <div class="tab-pane mb-5 active" id="profile" role="tabpanel">

                                    <div class="card py-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Write prescription</h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-lg-12 mb-4">
                                                    <div class="mt-2">
                                                    </div><!-- end card header -->
                                                    <div class="ckeditor-classic"></div>
                                                </div>
                                            </div><!---end row-->

                                            <div class="col-lg-12 ">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-primary"><i class="bi bi-clipboard2-check align-baseline me-1"></i> Publish now</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="card py-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Diagnosis test result</h5>
                                            <p class="text-muted mt-2">Performed on: <span class="text-alt">12 Apr 2023</span> </p>
                                        </div>
                                        <div class="card-body">
                                            <!-- Accordion Flush Example -->
                                            <h6>94% chance of having sleeping sickness and depression</h6>
                                            <hr>
                                            <div class="accordion accordion-flush">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading001">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse001" aria-expanded="false" aria-controls="flush-collapse001">
                                                            How many hours do you sleep per day
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse001" class="accordion-collapse collapse show" aria-labelledby="flush-heading001" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>A: 20hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>B: 12hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">C:</span>2hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>D: 10hrs a day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading002">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse002" aria-expanded="false" aria-controls="flush-collapse002">
                                                            How many hours do you work a day
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse002" class="accordion-collapse collapse" aria-labelledby="flush-heading002" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>A: 20hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">B:</span>2hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>C: 12hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>D: 10hrs a day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading003">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse003" aria-expanded="false" aria-controls="flush-collapse003">
                                                            Your longest time you are using to work a day
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse003" class="accordion-collapse collapse" aria-labelledby="flush-heading003" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>A: 20hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>B: 12hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">C:</span>2hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>D: 10hrs a day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading004">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse004" aria-expanded="false" aria-controls="flush-collapse004">
                                                            Do you fee important at your working space?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse004" class="accordion-collapse collapse" aria-labelledby="flush-heading004" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>A: Yes</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">B:</span>No</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading005">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse005" aria-expanded="false" aria-controls="flush-collapse005">
                                                            Do you like to go home straight after work?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse005" class="accordion-collapse collapse" aria-labelledby="flush-heading005" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">A:</span>Yes</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>B: No</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading006">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse006" aria-expanded="false" aria-controls="flush-collapse006">
                                                            Do yu have any relationship with one of your workers
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse006" class="accordion-collapse collapse" aria-labelledby="flush-heading006" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>B: Yes</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">C:</span>No</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card-->

                                    <div class="card py-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Diagnosis test result</h5>
                                            <p class="text-muted mt-2">Performed on: <span class="text-alt">12 Apr 2023</span> </p>
                                        </div>
                                        <div class="card-body">
                                            <!-- Accordion Flush Example -->
                                            <h6>94% chance of having sleeping sickness and depression</h6>
                                            <hr>
                                            <div class="accordion accordion-flush">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading0001">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse0001" aria-expanded="false" aria-controls="flush-collapse0001">
                                                            How many hours do you sleep per day
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse0001" class="accordion-collapse collapse show" aria-labelledby="flush-heading0001" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>A: 20hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>B: 12hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">C:</span>2hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>D: 10hrs a day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading0002">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse0002" aria-expanded="false" aria-controls="flush-collapse0002">
                                                            How many hours do you work a day
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse0002" class="accordion-collapse collapse" aria-labelledby="flush-heading0002" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>A: 20hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">B:</span>2hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>C: 12hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>D: 10hrs a day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading0003">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse0003" aria-expanded="false" aria-controls="flush-collapse0003">
                                                            Your longest time you are using to work a day
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse0003" class="accordion-collapse collapse" aria-labelledby="flush-heading0003" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>A: 20hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>B: 12hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">C:</span>2hrs a day</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>D: 10hrs a day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading0004">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse0004" aria-expanded="false" aria-controls="flush-collapse0004">
                                                            Do you fee important at your working space?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse0004" class="accordion-collapse collapse" aria-labelledby="flush-heading0004" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>A: Yes</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">B:</span>No</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading0005">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse0005" aria-expanded="false" aria-controls="flush-collapse0005">
                                                            Do you like to go home straight after work?
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse0005" class="accordion-collapse collapse" aria-labelledby="flush-heading0005" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">A:</span>Yes</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>B: No</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading0006">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse0006" aria-expanded="false" aria-controls="flush-collapse0006">
                                                            Do yu have any relationship with one of your workers
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse0006" class="accordion-collapse collapse" aria-labelledby="flush-heading0006" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>B: Yes</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p> <span class="answered">C:</span>No</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card-->

                                    <div class="hstack gap-2 justify-content-end">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                                <!--end tab-pane-->

                                <div class="tab-pane fade" id="medical" role="tabpanel">
                                    <div class="card py-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Medical history</h5>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-4">
                                                    <div class="d-flex">
                                                        <span class="medical-history size-3"><i class="mdi mdi-stethoscope"></i></span>
                                                        <h6 class="fs-md p-3">93% of having sleeping sickness</h6>
                                                    </div>
                                                    <div class="education-map">
                                                        <p class="text-muted mb-0">Attended on: 12 Jan 2023</p>
                                                        <p class="mt-1">By: Dr Travis Emanuel</p>
                                                        <button type="button" class="btn btn-success btn-label" data-bs-toggle="modal" data-bs-target="#myModal"><i class="ph-eye label-icon align-middle fs-lg me-2"></i> View prescription</button>
                                                        <!-- Default Modals -->
                                                        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                            <div class="modal-dialog modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel">93% of having sleeping sickness</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5 class="fs-base">
                                                                            Attended by: Dr AshaRose Migiro
                                                                        </h5>
                                                                        <p class="tetx-muted">12 Jan 2023</p>
                                                                        <p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                                                                        <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any moment. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates accusantium consectetur debitis? His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought.</p>
                                                                        <p class="text-muted">It wasn't a dream. His room, a proper human room although a little too small, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium iure eveniet commodi. lay peacefully between its four familiar walls.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                    </div>

                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->
                                                    </div>
                                                </li>

                                                <li class="mb-4">
                                                    <div class="d-flex">
                                                        <span class="medical-history size-3"><i class="mdi mdi-stethoscope"></i></span>
                                                        <h6 class="fs-md p-3">93% of having sleeping sickness</h6>
                                                    </div>
                                                    <div class="education-map">
                                                        <p class="text-muted mb-0">Attended on: 12 Jan 2023</p>
                                                        <p class="mt-1">By: Dr Travis Emanuel</p>
                                                        <button type="button" class="btn btn-success btn-label" data-bs-toggle="modal" data-bs-target="#myModal"><i class="ph-eye label-icon align-middle fs-lg me-2"></i> View prescription</button>
                                                        <!-- Default Modals -->
                                                        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                            <div class="modal-dialog modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel">93% of having sleeping sickness</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5 class="fs-base">
                                                                            Attended by: Dr AshaRose Migiro
                                                                        </h5>
                                                                        <p class="tetx-muted">12 Jan 2023</p>
                                                                        <p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                                                                        <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any moment. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates accusantium consectetur debitis? His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought.</p>
                                                                        <p class="text-muted">It wasn't a dream. His room, a proper human room although a little too small, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium iure eveniet commodi. lay peacefully between its four familiar walls.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                    </div>

                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end card-->

                                </div>
                                <!--end tab-pane-->

                                <div class="tab-pane fade" id="activities" role="tabpanel">
                                    <div class="card mt-3 pb-3">
                                        <div class="card-header mt-3">
                                            <h4 class="card-title mb-0">Daily journey AVG stats </h4>
                                        </div><!-- end card header -->

                                        <!-- To edit this component go to /assets/js/pages/apexcharts-jurnal.init.js -->
                                        <div class="card-body">
                                            <div id="column_chart" data-colors='["--tb-danger", "--tb-primary", "--tb-success", "--tb-purple", "--tb-info"]' class="apex-charts" dir="ltr"></div>
                                        </div><!-- end card-body -->
                                    </div>
                                    <!--end card-->

                                    <div class="card py-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Personal journey summary</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- Accordion Flush Example -->
                                            <div class="accordion accordion-flush mb-4">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading01">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse01" aria-expanded="false" aria-controls="flush-collapse01">
                                                            12 Jan 2023: What make you angry
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse01" class="accordion-collapse collapse show" aria-labelledby="flush-heading01" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">The renewal of your SlickText service happens on the anniversary of your original paid sign up date. Upgrading in the middle of your billing period will not change the billing date. Upgrading does however force an immediate, pro-rated charge to take place on your account.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading02">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse02" aria-expanded="false" aria-controls="flush-collapse02">
                                                            24 Feb 2023: Why do you feel fear
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse02" class="accordion-collapse collapse" aria-labelledby="flush-heading02" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">If you had signed up on a free account with Slicktext, then upgraded to a paid plan at a later date, your bill will renew based on the date you had upgraded to a paid plan. All invoices are able to be viewed under your plan options in your SlickText account.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading03">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse03" aria-expanded="false" aria-controls="flush-collapse03">
                                                            15 Dec 2023: What makes you feel longly
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse03" class="accordion-collapse collapse" aria-labelledby="flush-heading03" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">No, we cannot provide this information. Opting out from a list is an anonymous, private act. This prevents further harassment. Providing this information is considered bad practice, and further communication after they opt out would be considered against compliance.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading04">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse04" aria-expanded="false" aria-controls="flush-collapse04">
                                                            24 Feb 2023: Why do you feel fear
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse04" class="accordion-collapse collapse" aria-labelledby="flush-heading04" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">No, we cannot provide this information. Opting out from a list is an anonymous, private act. This prevents further harassment. Providing this information is considered bad practice, and further communication after they opt out would be considered against compliance.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading05">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse05" aria-expanded="false" aria-controls="flush-collapse05">
                                                            15 Dec 2023: What makes you feel longly
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse05" class="accordion-collapse collapse" aria-labelledby="flush-heading05" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">No, we cannot provide this information. Opting out from a list is an anonymous, private act. This prevents further harassment. Providing this information is considered bad practice, and further communication after they opt out would be considered against compliance.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-heading06">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse06" aria-expanded="false" aria-controls="flush-collapse06">
                                                            12 Jan 2023: What make you angry
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapse06" class="accordion-collapse collapse" aria-labelledby="flush-heading06" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">No, we cannot provide this information. Opting out from a list is an anonymous, private act. This prevents further harassment. Providing this information is considered bad practice, and further communication after they opt out would be considered against compliance.</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--end card-->
                                    <div class="hstack gap-2 justify-content-end">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                                <!--end tab-pane-->

                                <div class="tab-pane fade" id="documents" role="tabpanel">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="py-3">
                                                <h5 class="card-title mb-4">Documents</h5>
                                                <div class="vstack gap-3">
                                                    <div class="d-flex gap-2 align-items-center position-relative">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-sm border border rounded">
                                                                <div class="avatar-title bg-body-secondary text-secondary rounded fs-lg">
                                                                    <i class="bi bi-file-zip"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>Headscan.zip</h6>
                                                            <p class="text-muted mb-0">2.02MB</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <a href="pages-profile.html#!" class="icon-link icon-link-hover text-reset stretched-link fs-xl" style="--tb-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-download"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex gap-2 align-items-center position-relative">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-sm border border rounded">
                                                                <div class="avatar-title bg-body-secondary text-secondary rounded fs-lg">
                                                                    <i class="bi bi-filetype-txt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>Doctor report.txt</h6>
                                                            <p class="text-muted mb-0">1.49 MB</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <a href="pages-profile.html#!" class="icon-link icon-link-hover text-reset stretched-link fs-xl" style="--tb-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-download"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex gap-2 align-items-center position-relative">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-sm border border rounded">
                                                                <div class="avatar-title bg-body-secondary text-secondary rounded fs-lg">
                                                                    <i class="bi bi-image"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>Xray.png</h6>
                                                            <p class="text-muted mb-0">325 KB</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <a href="pages-profile.html#!" class="icon-link icon-link-hover text-reset stretched-link fs-xl" style="--tb-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-download"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex gap-2 align-items-center position-relative">
                                                        <div class="flex-shrink-0">
                                                            <div class="avatar-sm border border rounded">
                                                                <div class="avatar-title bg-body-secondary text-secondary rounded fs-lg">
                                                                    <i class="bi bi-file-pdf"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6>Headscan doc.pdf</h6>
                                                            <p class="text-muted mb-0">2.06 MB</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <a href="pages-profile.html#!" class="icon-link icon-link-hover text-reset stretched-link fs-xl" style="--tb-icon-link-transform: translate3d(0, -.125rem, 0);"><i class="bi bi-download"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-->
                                </div>
                                <!--end tab-pane-->

                                <div class="tab-pane" id="settings" role="tabpanel">
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
    <script src="assets/js/pages/apexcharts-jurnal.init.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>

    <!-- ckeditor -->
    <script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/form-editor.init.js"></script>

</body>

</html>