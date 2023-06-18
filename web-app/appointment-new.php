<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

<!-- head starts -->
<?php include 'includes/head.php'; ?>
<link href="assets/libs/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />

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

                    <div class="calendar-wrapper d-xl-flex gap-4">

                        <div class="w-100">
                            <div class="card card-h-100">
                                <div class="">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="card mb-5 calendar-event-card">
                            <div class="card-body">
                                <button class="btn btn-primary w-100 mb-4" id="btn-new-event"><i class="mdi mdi-plus"></i> Create appointment</button>
                                <div class="mb-4">
                                    <div id="external-events">
                                        <p class="text-muted">Drag and drop appointment type or click in the calendar</p>
                                        <div class="external-event fc-event" data-class="bg-success-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 text-success me-2"></i>Diagnosis consultancy
                                        </div>
                                        <div class="external-event fc-event" data-class="bg-info-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 text-info me-2"></i>Health index consultancy
                                        </div>
                                        <div class="external-event fc-event" data-class="bg-warning-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 text-warning me-2"></i>Health progress report
                                        </div>
                                        <div class="external-event fc-event" data-class="bg-danger-subtle">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 text-danger me-2"></i>General consultancy
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="mb-3">Recent appointments</h5>
                                    <div class="px-3 mx-n3 mb-3" data-simplebar style="height: 400px">
                                        <div class="acitivity-timeline acitivity-main">
                                            <div class="acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">James Price</h6>
                                                    <p class="text-muted mb-2">Health index consultancy </p>
                                                    <small class="mb-0 text-muted">05:57 AM Today</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Natasha Komba</h6>
                                                    <p class="text-muted mb-2">Diagnosis consultancy</p>
                                                    <small class="mb-0 text-muted">25 Dec, 2022 : 05:00 PM</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Digitate Amani</h6>
                                                    <p class="text-muted mb-2">Diagnosis consultancy</p>
                                                    <small class="mb-0 text-muted">25 Dec, 2022 : 05:00 PM</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Diana Mtinga</h6>
                                                    <p class="text-muted mb-2">Diagnosis consultancy</p>
                                                    <small class="mb-0 text-muted">25 Dec, 2022 : 05:00 PM</small>
                                                </div>
                                            </div>
                                            
                                            <div class="acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-5.jpg.png" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Asha migiro</h6>
                                                    <p class="text-muted mb-2">General consultancy</p>
                                                    <small class="mb-0 text-muted"><span class="text-danger">2 days left</span> on 05:00PM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-->
                            </div>
                        </div> <!-- end col-->
                    </div>
                    <!--end row-->

                    <div style='clear:both'></div>

                    <!-- Add New Event MODAL -->
                    <div class="modal fade" id="event-modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header p-3 bg-info-subtle">
                                    <h5 class="modal-title" id="modal-title">Event</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                        <div class="text-end">
                                            <a href="#" class="btn btn-sm btn-subtle-primary" id="edit-event-btn" data-id="edit-event" onclick="editEvent(this)" role="button">Edit</a>
                                        </div>
                                        <div class="event-details">
                                            <div class="d-flex mb-2">
                                                <div class="flex-grow-1 d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <i class="ri-calendar-event-line text-muted fs-lg"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag"></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-time-line text-muted fs-lg"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="d-block fw-semibold mb-0"><span id="event-timepicker1-tag"></span> - <span id="event-timepicker2-tag"></span></h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ph-user-plus text-muted fs-lg"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="d-block fw-semibold mb-0"> <span id="event-location-tag"></span></h6>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-discuss-line text-muted fs-lg"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="d-block text-muted mb-0" id="event-description-tag"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row event-form">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Appointment title</label>
                                                    <input class="form-control d-none" placeholder="Enter appointment title" type="text" name="title" id="event-title" required value="">
                                                    <div class="invalid-feedback">Please provide a valid appointment title</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Appointment date</label>
                                                    <div class="input-group d-none">
                                                        <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12" id="event-time">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Start Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker1" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select start time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">End Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker2" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select end time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div><!--END col-->
                                                </div><!--end row-->
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="event-location" class="form-label">Patient</label>
                                                    <select class="form-select d-none" name="event-location" id="event-location" required>
                                                        <option selected value="">Select patient</option>
                                                        <option value="Daniel Kolenda">Daniel Kolenda</option>
                                                        <option value="Aisha Muhammed">Aisha Muhammed</option>
                                                        <option value="Maiko Temba">Maiko Temba</option>
                                                        <option value="Halima Mdee">Halima Mdee</option>
                                                        <option value="Said Masoud">Said Masoud</option>
                                                    </select>
                                                    <!-- <div>
                                                        <input type="text" class="form-control d-none" name="event-location" id="event-location" placeholder="Select patient">
                                                    </div> -->
                                                </div>
                                            </div><!--end col-->
                                            <input type="hidden" id="eventid" name="eventid" value="">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control d-none" id="event-description" placeholder="Enter a description" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Type</label>
                                                    <select class="form-select d-none" name="category" id="event-category" required>
                                                        <option value="bg-danger-subtle">Danger</option>
                                                        <option value="bg-success-subtle">Success</option>
                                                        <option value="bg-primary-subtle">Primary</option>
                                                        <option value="bg-info-subtle">Info</option>
                                                        <option value="bg-dark-subtle">Dark</option>
                                                        <option value="bg-warning-subtle">Warning</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid event category</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-subtle-danger" id="btn-delete-event"><i class="ri-close-line align-bottom"></i> Delete</button>
                                            <button type="submit" class="btn btn-success" id="btn-save-event">Create appointment</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
                    </div> <!-- end modal-->
                    <!-- end modal-->

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

    <!-- calendar min js -->
    <script src="assets/libs/fullcalendar/index.global.min.js"></script>

    <!-- Calendar init -->
    <script src="assets/js/pages/calendar.init.js"></script>

    <!-- javascript links ends -->


</body>

</html>