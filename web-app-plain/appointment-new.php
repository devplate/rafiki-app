<?php include 'connect/database.php';
?>

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
                                    <form class="needs-validation" method="get" action="connect/database.php" name="event-form" id="form-event" novalidate>
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
                                                        <input type="text" name="date" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
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
                                                                <input id="timepicker1" name="start" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select start time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">End Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker2" name="end" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select end time" readonly>
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
                                                    <select class="form-select d-none" name="patient" id="event-location" required>
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
                                                    <textarea class="form-control d-none" name="desc" id="event-description" placeholder="Enter a description" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Type</label>
                                                    <select class="form-select d-none" name="type" id="event-category" required>
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
                                            <button type="button" onclick="submitForm()" name="make_appointment" class="btn btn-success" id="btn-save-event">Create appointment</button>
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
    <script src="assets/js/pages/calendar.init.php"></script>

    <!-- javascript links ends -->


</body>

</html>
<script>
       

    function submitForm(){
        var formData= new FormData();
        var title = document.querySelector('input[name="title"]').value;
        var date = document.querySelector('input[name="date"]').value;
        var start = document.querySelector('input[name="start"]').value;
        var end = document.querySelector('input[name="end"]').value;
        var patient = document.querySelector('select[name="patient"]').value;
        var desc = document.querySelector('textarea[name="desc"]').value;
        var type = document.querySelector('select[name="type"]').value;

        formData.append("title",title);
        formData.append("date", date);
        formData.append("start", start);
        formData.append("end", end);
        formData.append("patient",patient);
        formData.append("desc",desc);
        formData.append("type",type);
        formData.append("make_appointment",1);

        fetch("https://www.rafikiapp.tz/web-app/connect/database.php",
        {
            method: "POST",
            body: formData
        }
        );

    }




    var start_date = document.getElementById("event-start-date"),
    timepicker1 = document.getElementById("timepicker1"),
    timepicker2 = document.getElementById("timepicker2");

function flatPickrInit() {
    var e = {
        enableTime: !0,
        noCalendar: !0
    };
    flatpickr(start_date, {
        enableTime: !1,
        mode: "range",
        minDate: "today",
        onChange: function(e, t, n) {
            1 < t.split("to").length ? document.getElementById("event-time").setAttribute("hidden", !0) : (document.getElementById("timepicker1").parentNode.classList.remove("d-none"), document.getElementById("timepicker1").classList.replace("d-none", "d-block"), document.getElementById("timepicker2").parentNode.classList.remove("d-none"), document.getElementById("timepicker2").classList.replace("d-none", "d-block"), document.getElementById("event-time").removeAttribute("hidden"))
        }
    });
    flatpickr(timepicker1, e), flatpickr(timepicker2, e)
}

function flatpicekrValueClear() {
    start_date.flatpickr().clear(), timepicker1.flatpickr().clear(), timepicker2.flatpickr().clear()
}

function eventClicked() {
    document.getElementById("form-event").classList.add("view-event"), document.getElementById("event-title").classList.replace("d-block", "d-none"), document.getElementById("event-category").classList.replace("d-block", "d-none"), document.getElementById("event-start-date").parentNode.classList.add("d-none"), document.getElementById("event-start-date").classList.replace("d-block", "d-none"), document.getElementById("event-time").setAttribute("hidden", !0), document.getElementById("timepicker1").parentNode.classList.add("d-none"), document.getElementById("timepicker1").classList.replace("d-block", "d-none"), document.getElementById("timepicker2").parentNode.classList.add("d-none"), document.getElementById("timepicker2").classList.replace("d-block", "d-none"), document.getElementById("event-location").classList.replace("d-block", "d-none"), document.getElementById("event-description").classList.replace("d-block", "d-none"), document.getElementById("event-start-date-tag").classList.replace("d-none", "d-block"), document.getElementById("event-timepicker1-tag").classList.replace("d-none", "d-block"), document.getElementById("event-timepicker2-tag").classList.replace("d-none", "d-block"), document.getElementById("event-location-tag").classList.replace("d-none", "d-block"), document.getElementById("event-description-tag").classList.replace("d-none", "d-block"), document.getElementById("btn-save-event").setAttribute("hidden", !0)
}

function editEvent(e) {
    var t = e.getAttribute("data-id");
    ("new-event" == t ? (document.getElementById("modal-title").innerHTML = "", document.getElementById("modal-title").innerHTML = "Create appointment", document.getElementById("btn-save-event").innerHTML = "Create appointment", eventTyped) : "edit-event" == t ? (e.innerHTML = "Cancel", e.setAttribute("data-id", "cancel-event"), document.getElementById("btn-save-event").innerHTML = "Update Event", e.removeAttribute("hidden"), eventTyped) : (e.innerHTML = "Edit", e.setAttribute("data-id", "edit-event"), eventClicked))()
}

function eventTyped() {
    document.getElementById("form-event").classList.remove("view-event"), document.getElementById("event-title").classList.replace("d-none", "d-block"), document.getElementById("event-category").classList.replace("d-none", "d-block"), document.getElementById("event-start-date").parentNode.classList.remove("d-none"), document.getElementById("event-start-date").classList.replace("d-none", "d-block"), document.getElementById("timepicker1").parentNode.classList.remove("d-none"), document.getElementById("timepicker1").classList.replace("d-none", "d-block"), document.getElementById("timepicker2").parentNode.classList.remove("d-none"), document.getElementById("timepicker2").classList.replace("d-none", "d-block"), document.getElementById("event-location").classList.replace("d-none", "d-block"), document.getElementById("event-description").classList.replace("d-none", "d-block"), document.getElementById("event-start-date-tag").classList.replace("d-block", "d-none"), document.getElementById("event-timepicker1-tag").classList.replace("d-block", "d-none"), document.getElementById("event-timepicker2-tag").classList.replace("d-block", "d-none"), document.getElementById("event-location-tag").classList.replace("d-block", "d-none"), document.getElementById("event-description-tag").classList.replace("d-block", "d-none"), document.getElementById("btn-save-event").removeAttribute("hidden")
}

function getTime(e) {
    if (null != (e = new Date(e)).getHours()) return e.getHours() + ":" + (e.getMinutes() ? e.getMinutes() : 0)
}

function tConvert(e) {
    var e = e.split(":"),
        t = e[0],
        e = e[1],
        n = 12 <= t ? "PM" : "AM";
    return (t = (t %= 12) || 12) + ":" + (e < 10 ? "0" + e : e) + " " + n
}
document.addEventListener("DOMContentLoaded", function() {
    flatPickrInit();
    var g = new bootstrap.Modal(document.getElementById("event-modal"), {
            keyboard: !1
        }),
        d = (document.getElementById("event-modal"), document.getElementById("modal-title")),
        i = document.getElementById("form-event"),
        v = null,
        p = document.getElementsByClassName("needs-validation"),
        e = new Date,
        t = e.getDate(),
        n = e.getMonth(),
        e = e.getFullYear(),
        a = FullCalendar.Draggable,
        l = document.getElementById("external-events"),
        y = [{
            id: 1,
            title: "World Braille Day",
            start: "2022-01-04",
            className: "bg-info-subtle",
            allDay: !0
        }, {
            id: 2,
            title: "World Leprosy Day",
            start: "2022-01-30",
            className: "bg-info-subtle",
            allDay: !0
        }, {
            id: 3,
            title: "International Mother Language Day",
            start: "2022-02-21",
            className: "bg-info-subtle",
            allDay: !0
        }, {
            id: 4,
            title: "International Women's Day",
            start: "2022-03-08",
            className: "bg-info-subtle",
            allDay: !0
        }, {
            id: 5,
            title: "World Thinking Day",
            start: "2022-02-22",
            className: "bg-info-subtle",
            allDay: !0
        }, {
            id: 6,
            title: "International Mother Language Day",
            start: "2022-03-21",
            className: "bg-info-subtle",
            allDay: !0
        }, {
            id: 7,
            title: "World Water Day",
            start: "2022-03-22",
            className: "bg-info-subtle",
            allDay: !0
        }, {
            id: 8,
            title: "World Health Day",
            start: "2022-04-07",
            className: "bg-info-subtle",
            allDay: !0
        }, {
            id: 9,
            title: "International Special Librarians Day",
            start: "2022-04-16",
            className: "bg-info-subtle",
            allDay: !0
        }, {
            id: 10,
            title: "Earth Day",
            start: "2022-04-22",
            className: "bg-info-subtle",
            allDay: !0
        },
        <?php      
        $doc_id = $_SESSION["user"]["doctor"];
        $sql_statement = "SELECT * FROM appointment WHERE doctor = '$doc_id'";
        $results = $conn->query($sql_statement);
        if($results->num_rows > 0){
            while($row = $results->fetch_assoc()){
                echo "
                {
                    id: ".$row["id"].",
                    title: \"".$row["title"]."\",
                    start: new Date(\"".$row["date"]."\"),
                    className: \"bg-primary-subtle\",
                    location: \"San Francisco, US\",
                    allDay: !0,
                    extendedProps: {
                        department: \"All Day Event\"
                    },
                    description: \"".$row["description"]."\"
                },
                ";
            }
        }
        ?>      
        ],
        e = (new a(l, {
            itemSelector: ".external-event",
            eventData: function(e) {
                return {
                    id: Math.floor(11e3 * Math.random()),
                    title: e.innerText,
                    allDay: !0,
                    start: new Date,
                    className: e.getAttribute("data-class")
                }
            }
        }), document.getElementById("calendar"));

    function o(e) {
        document.getElementById("form-event").reset(), document.getElementById("btn-delete-event").setAttribute("hidden", !0), g.show(), i.classList.remove("was-validated"), i.reset(), v = null, d.innerText = "Create appointment", newEventData = e, document.getElementById("edit-event-btn").setAttribute("data-id", "new-event"), document.getElementById("edit-event-btn").click(), document.getElementById("edit-event-btn").setAttribute("hidden", !0)
    }

    function r() {
        return 768 <= window.innerWidth && window.innerWidth < 1200 ? "timeGridWeek" : window.innerWidth <= 768 ? "listMonth" : "dayGridMonth"
    }
    var c = new Choices("#event-category", {
            searchEnabled: !1
        }),
        b = new FullCalendar.Calendar(e, {
            timeZone: "local",
            editable: !0,
            droppable: !0,
            selectable: !0,
            navLinks: !0,
            initialView: r(),
            themeSystem: "bootstrap",
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
            },
            windowResize: function(e) {
                var t = r();
                b.changeView(t)
            },
            eventResize: function(t) {
                var e = y.findIndex(function(e) {
                    return e.id == t.event.id
                });
                y[e] && (y[e].title = t.event.title, y[e].start = t.event.start, y[e].end = t.event.end || null, y[e].allDay = t.event.allDay, y[e].className = t.event.classNames[0], y[e].description = t.event._def.extendedProps.description || "", y[e].location = t.event._def.extendedProps.location || "")
            },
            eventClick: function(e) {
                document.getElementById("edit-event-btn").removeAttribute("hidden"), document.getElementById("btn-save-event").setAttribute("hidden", !0), document.getElementById("edit-event-btn").setAttribute("data-id", "edit-event"), document.getElementById("edit-event-btn").innerHTML = "Edit", eventClicked(), flatPickrInit(), flatpicekrValueClear(), g.show(), i.reset(), v = e.event, document.getElementById("modal-title").innerHTML = "", document.getElementById("event-location-tag").innerHTML = void 0 === v.extendedProps.location ? "No patient selected" : v.extendedProps.location, document.getElementById("event-description-tag").innerHTML = void 0 === v.extendedProps.description ? "No Description" : v.extendedProps.description, document.getElementById("event-title").value = v.title, document.getElementById("event-location").value = void 0 === v.extendedProps.location ? "No patient selected" : v.extendedProps.location, document.getElementById("event-description").value = void 0 === v.extendedProps.description ? "No Description" : v.extendedProps.description, document.getElementById("eventid").value = v.id, v.classNames[0] && (c.destroy(), (c = new Choices("#event-category", {
                    searchEnabled: !1
                })).setChoiceByValue(v.classNames[0]));

                function t(e) {
                    var t = "" + ((e = new Date(e)).getMonth() + 1),
                        n = "" + e.getDate();
                    return [e.getFullYear(), t = t.length < 2 ? "0" + t : t, n = n.length < 2 ? "0" + n : n].join("-")
                }
                var e = v.start,
                    n = v.end,
                    a = null == n ? str_dt(e) : str_dt(e) + " to " + str_dt(n),
                    e = null == n ? t(e) : t(e) + " to " + t(n),
                    n = (flatpickr(start_date, {
                        defaultDate: e,
                        altInput: !0,
                        altFormat: "j F Y",
                        dateFormat: "Y-m-d",
                        mode: "range",
                        onChange: function(e, t) {
                            1 < t.split("to").length ? document.getElementById("event-time").setAttribute("hidden", !0) : (document.getElementById("timepicker1").parentNode.classList.remove("d-none"), document.getElementById("timepicker1").classList.replace("d-none", "d-block"), document.getElementById("timepicker2").parentNode.classList.remove("d-none"), document.getElementById("timepicker2").classList.replace("d-none", "d-block"), document.getElementById("event-time").removeAttribute("hidden"))
                        }
                    }), document.getElementById("event-start-date-tag").innerHTML = a, getTime(v.start)),
                    e = getTime(v.end);
                n == e ? (document.getElementById("event-time").setAttribute("hidden", !0), flatpickr(document.getElementById("timepicker1"), {
                    enableTime: !0,
                    noCalendar: !0,
                    dateFormat: "H:i"
                }), flatpickr(document.getElementById("timepicker2"), {
                    enableTime: !0,
                    noCalendar: !0,
                    dateFormat: "H:i"
                })) : (document.getElementById("event-time").removeAttribute("hidden"), flatpickr(document.getElementById("timepicker1"), {
                    enableTime: !0,
                    noCalendar: !0,
                    dateFormat: "H:i",
                    defaultDate: n
                }), flatpickr(document.getElementById("timepicker2"), {
                    enableTime: !0,
                    noCalendar: !0,
                    dateFormat: "H:i",
                    defaultDate: e
                }), document.getElementById("event-timepicker1-tag").innerHTML = tConvert(n), document.getElementById("event-timepicker2-tag").innerHTML = tConvert(e)), newEventData = null, d.innerText = v.title, document.getElementById("btn-delete-event").removeAttribute("hidden")
            },
            dateClick: function(e) {
                o(e)
            },
            events: y,
            eventReceive: function(e) {
                e = {
                    id: parseInt(e.event.id),
                    title: e.event.title,
                    start: e.event.start,
                    allDay: e.event.allDay,
                    className: e.event.classNames[0]
                };
                y.push(e)
            },
            eventDrop: function(t) {
                var e = y.findIndex(function(e) {
                    return e.id == t.event.id
                });
                y[e] && (y[e].title = t.event.title, y[e].start = t.event.start, y[e].end = t.event.end || null, y[e].allDay = t.event.allDay, y[e].className = t.event.classNames[0], y[e].description = t.event._def.extendedProps.description || "", y[e].location = t.event._def.extendedProps.location || "")
            }
        });
    setTimeout(() => {
        b.render()
    }, 0), i.addEventListener("submit", function(e) {
        e.preventDefault();
        var t, n, e = document.getElementById("event-title").value,
            a = document.getElementById("event-category").value,
            d = document.getElementById("event-start-date").value.split("to"),
            i = new Date(d[0].trim()),
            l = d[1] ? new Date(d[1].trim()) : "",
            o = null,
            r = document.getElementById("event-location").value,
            c = document.getElementById("event-description").value,
            s = document.getElementById("eventid").value,
            m = !1,
            u = (1 < d.length ? ((o = new Date(d[1])).setDate(o.getDate() + 1), d = new Date(d[0]), m = !0) : (t = d, u = document.getElementById("timepicker1").value.trim(), n = document.getElementById("timepicker2").value.trim(), d = new Date(d + "T" + u), o = new Date(t + "T" + n)), y.length + 1);
        !1 === p[0].checkValidity() ? p[0].classList.add("was-validated") : (v ? (v.setProp("id", s), v.setProp("title", e), v.setProp("classNames", [a]), v.setStart(i), v.setEnd(l), v.setAllDay(m), v.setExtendedProp("description", c), v.setExtendedProp("location", r), t = y.findIndex(function(e) {
            return e.id == v.id
        }), y[t] && (y[t].title = e, y[t].start = i, y[t].end = l, y[t].allDay = m, y[t].className = a, y[t].description = c, y[t].location = r), b.render()) : (b.addEvent(n = {
            id: u,
            title: e,
            start: d,
            end: o,
            allDay: m,
            className: a,
            description: c,
            location: r
        }), y.push(n)), g.hide())
    }), document.getElementById("btn-delete-event").addEventListener("click", function(e) {
        if (v) {
            for (var t = 0; t < y.length; t++) y[t].id == v.id && (y.splice(t, 1), t--);
            v.remove(), v = null, g.hide()
        }
    }), document.getElementById("btn-new-event").addEventListener("click", function(e) {
        flatpicekrValueClear(), flatPickrInit(), o(), document.getElementById("edit-event-btn").setAttribute("data-id", "new-event"), document.getElementById("edit-event-btn").click(), document.getElementById("edit-event-btn").setAttribute("hidden", !0)
    })
});
var str_dt = function(e) {
    var e = new Date(e),
        t = "" + ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"][e.getMonth()],
        n = "" + e.getDate(),
        e = e.getFullYear();
    return t.length < 2 && (t = "0" + t), [(n = n.length < 2 ? "0" + n : n) + " " + t, e].join(",")
};
</script>