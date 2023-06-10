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

                <div class="chat-wrapper d-lg-flex gap-1 p-1 mb-3">
                        <div class="chat-wrapper-menu p-3 d-flex flex-column rounded">
                            <div class="mb-3 position-relative d-none d-lg-block">
                                <a href="apps-chat.html#!"><img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded"></a>
                                <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                            </div>
                            <ul class="chat-menu list-unstyled text-center nav nav-pills justify-content-center">
                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" title="Chats">
                                    <a href="apps-chat.html#pills-chats" data-bs-toggle="pill" class="nav-link active"><i class="bi bi-chat-dots"></i></a>
                                </li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" title="Contacts">
                                    <a href="apps-chat.html#pills-contacts" data-bs-toggle="pill" class="nav-link"><i class="bi bi-people"></i></a>
                                </li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" title="Calls">
                                    <a href="apps-chat.html#pills-calls" data-bs-toggle="pill" class="nav-link"><i class="bi bi-telephone"></i></a>
                                </li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" title="Bookmark">
                                    <a href="apps-chat.html#pills-bookmark" data-bs-toggle="pill" class="nav-link"><i class="bi bi-star"></i></a>
                                </li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover" title="Attachment">
                                    <a href="apps-chat.html#pills-attachment" data-bs-toggle="pill" class="nav-link"><i class="bi bi-file-earmark-richtext"></i></a>
                                </li>
                            </ul>
                            <div class="mt-auto text-center d-none d-lg-block">
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="apps-chat.html#">Action</a></li>
                                        <li><a class="dropdown-item" href="apps-chat.html#">Another action</a></li>
                                        <li><a class="dropdown-item" href="apps-chat.html#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="chat-leftsidebar">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pills-chats">
                                    <div class="p-4">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-4">Chats</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" title="Add Contact">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-subtle-primary btn-sm">
                                                        <i class="ri-add-line align-bottom"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-box">
                                            <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                                            <i class="ri-search-2-line search-icon"></i>
                                        </div>
                                    </div> <!-- .p-4 -->
                            
                                    <div class="chat-room-list" data-simplebar>
                                        <div class="chat-message-list">
                                            <ul class="list-unstyled chat-list chat-user-list" id="userList"></ul>
                                        </div>
                                    
                                        <div class="d-flex align-items-center px-4 mt-4 pt-4 mb-2">
                                            <div class="flex-grow-1">
                                                <h4 class="mb-0 fs-xs text-muted text-uppercase">Channels</h4>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" title="Create group">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-subtle-success btn-sm">
                                                        <i class="ri-add-line align-bottom"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="chat-message-list">
                                            <ul class="list-unstyled chat-list chat-user-list mb-0" id="channelList">
                                            </ul>
                                        </div>
                                        <!-- End chat-message-list -->
                                    </div>
                                    <!-- end tab contact -->
                                </div>
                                <!-- end tab pane -->
                                <div class="tab-pane fade" id="pills-contacts">
                                    <div >
                                        <div class="p-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <h5 class="mb-4">Contacts</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom" title="Add Contact">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-subtle-primary btn-sm">
                                                            <i class="ri-add-line align-bottom"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-box">
                                                <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                                                <i class="ri-search-2-line search-icon"></i>
                                            </div>
                                        </div> <!-- .p-4 -->
                                        <div>
                                            <div class="chat-room-list" data-simplebar>
                                                <div class="sort-contact">            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab pane -->
                                <div class="tab-pane fade" id="pills-calls">
                                    <div>
                                        <div class="px-4 pt-4">
                                            <h5 class="mb-4">Calls</h5>
                                        </div>
                                        <div class="chat-message-list chat-call-list" data-simplebar>
                                            <ul class="list-unstyled chat-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img flex-shrink-0 me-2">
                                                            <div class="avatar-xxs">
                                                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <a href="apps-chat.html#!" class="p-0"><p class="fw-medium text-truncate mb-0">Warren Hickey</p></a>
                                                            <div class="text-muted fs-xs text-truncate"><i class="bi bi-arrow-down-left text-success"></i> 22 Feb, 06:49PM</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <h5 class="mb-0 fs-xs text-muted">01:10</h5>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-link p-0 fs-lg stretched-link shadow-none">
                                                                        <i class="bi bi-camera-video align-middle"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img flex-shrink-0 me-2">
                                                            <div class="avatar-xxs">
                                                                <span class="avatar-title rounded-circle bg-primary fs-xxs">AW</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <a href="apps-chat.html#!" class="p-0"><p class="fw-medium text-truncate mb-0">Angela Walls</p></a>
                                                            <div class="text-muted fs-xs text-truncate"><i class="bi bi-arrow-down-left text-success"></i> 22 Feb, 03:23PM</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <h5 class="mb-0 fs-xs text-muted">02:34</h5>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-link p-0 fs-lg stretched-link shadow-none">
                                                                        <i class="bi bi-camera-video align-middle"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img flex-shrink-0 me-2">
                                                            <div class="avatar-xxs">
                                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <a href="apps-chat.html#!" class="p-0"><p class="fw-medium text-truncate mb-0">Thomas Lane</p></a>
                                                            <div class="text-muted fs-xs text-truncate"><i class="bi bi-arrow-up-right text-danger"></i> 22 Feb, 10:31AM</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <h5 class="mb-0 fs-xs text-muted">01:40</h5>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-link p-0 fs-lg stretched-link shadow-none">
                                                                        <i class="bi bi-telephone align-middle"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img flex-shrink-0 me-2">
                                                            <div class="avatar-xxs">
                                                                <span class="avatar-title rounded-circle bg-primary fs-xxs">AC</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <a href="apps-chat.html#!" class="p-0"><p class="fw-medium text-truncate mb-0">Elisa Smith</p></a>
                                                            <div class="text-muted fs-xs text-truncate"><i class="bi bi-arrow-down-left text-success"></i> 21 Feb, 07:05PM</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <h5 class="mb-0 fs-xs text-muted">03:51</h5>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-link p-0 fs-lg stretched-link shadow-none">
                                                                        <i class="bi bi-telephone align-middle"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img flex-shrink-0 me-2">
                                                            <div class="avatar-xxs">
                                                                <span class="avatar-title rounded-circle bg-primary fs-xxs">OB</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <a href="apps-chat.html#!" class="p-0"><p class="fw-medium text-truncate mb-0">Ola Black</p></a>
                                                            <div class="text-muted fs-xs text-truncate"><i class="bi bi-arrow-up-right text-danger"></i> 21 Feb, 05:15PM</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <h5 class="mb-0 fs-xs text-muted">05:15</h5>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-link p-0 fs-lg stretched-link shadow-none">
                                                                        <i class="bi bi-camera-video align-middle"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img flex-shrink-0 me-2">
                                                            <div class="avatar-xxs">
                                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <a href="apps-chat.html#!" class="p-0"><p class="fw-medium text-truncate mb-0">Victoria McBride</p></a>
                                                            <div class="text-muted fs-xs text-truncate"><i class="bi bi-arrow-down-left text-success"></i> 21 Feb, 10:30AM</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <h5 class="mb-0 fs-xs text-muted">00:42</h5>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-link p-0 fs-lg stretched-link shadow-none">
                                                                        <i class="bi bi-telephone align-middle"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img flex-shrink-0 me-2">
                                                            <div class="avatar-xxs">
                                                                <img src="assets/images/users/avatar-5.jpg.png" class="rounded-circle img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <a href="apps-chat.html#!" class="p-0"><p class="fw-medium text-truncate mb-0">Carla Scott</p></a>
                                                            <div class="text-muted fs-xs text-truncate"><i class="bi bi-arrow-up-right text-danger"></i> 20 Feb, 05:20PM</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <h5 class="mb-0 fs-xs text-muted">04:02</h5>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-link p-0 fs-lg stretched-link shadow-none">
                                                                        <i class="bi bi-camera-video align-middle"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img flex-shrink-0 me-2">
                                                            <div class="avatar-xxs">
                                                                <span class="avatar-title rounded-circle bg-primary fs-xxs">WS</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <a href="apps-chat.html#!" class="p-0"><p class="fw-medium text-truncate mb-0">Waldo Smith</p></a>
                                                            <div class="text-muted fs-xs text-truncate"><i class="bi bi-arrow-down-left text-success"></i> 20 Feb, 01:40PM</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <h5 class="mb-0 fs-xs text-muted">02:34</h5>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-link p-0 fs-lg stretched-link shadow-none">
                                                                        <i class="bi bi-camera-video align-middle"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img flex-shrink-0 me-2">
                                                            <div class="avatar-xxs">
                                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <a href="apps-chat.html#!" class="p-0"><p class="fw-medium text-truncate mb-0">Mary Parker</p></a>
                                                            <div class="text-muted fs-xs text-truncate"><i class="bi bi-arrow-up-right text-danger"></i> 19 Feb, 11:29AM</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <h5 class="mb-0 fs-xs text-muted">10:09</h5>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-link p-0 fs-lg stretched-link shadow-none">
                                                                        <i class="bi bi-telephone align-middle"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="chat-user-img flex-shrink-0 me-2">
                                                            <div class="avatar-xxs">
                                                                <img src="assets/images/users/avatar-8.jpg" class="rounded-circle img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <a href="apps-chat.html#!" class="p-0"><p class="fw-medium text-truncate mb-0">Judith Morrow</p></a>
                                                            <div class="text-muted fs-xs text-truncate"><i class="bi bi-arrow-down-left text-success"></i> 18 Feb, 02:05PM</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div>
                                                                    <h5 class="mb-0 fs-xs text-muted">07:15</h5>
                                                                </div>
                                                                <div>
                                                                    <button type="button" class="btn btn-link p-0 fs-lg stretched-link shadow-none">
                                                                        <i class="bi bi-telephone align-middle"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <!-- end tab pane -->
                                <div class="tab-pane fade" id="pills-bookmark">
                                    <div>
                                        <div class="px-4 pt-4">
                                            <h5 class="mb-4">Bookmark</h5>
                                        </div>
                                        <div class="chat-message-list chat-bookmark-list" data-simplebar>
                                            <ul class="list-unstyled chat-list">
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                                <i class="bi bi-file-earmark-richtext"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="mb-1"><a href="apps-chat.html#" class="text-truncate p-0">design-phase-1-approved.pdf</a></h5>
                                                            <p class="text-muted text-truncate fs-xs mb-0">12.5 MB</p>
                                                        </div>
            
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="dropdown">
                                                                <a class="fs-md text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Open <i class="bi bi-file-earmark ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Edit <i class="bi bi-pencil ms-2 text-muted"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                                <i class="bi bi-pin-angle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="mb-1"><a href="apps-chat.html#" class="text-truncate p-0">Bg Pattern</a></h5>
                                                            <p class="text-muted text-truncate fs-xs mb-0">https://bgpattern.com/</p>
                                                        </div>
            
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="dropdown">
                                                                <a class="fs-md text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Open <i class="bi bi-file-earmark ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Edit <i class="bi bi-pencil ms-2 text-muted"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                                <i class="bi bi-image"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="mb-1"><a href="apps-chat.html#" class="text-truncate p-0">Image-001.jpg</a></h5>
                                                            <p class="text-muted text-truncate fs-xs mb-0">4.2 MB</p>
                                                        </div>
            
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="dropdown">
                                                                <a class="fs-md text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Open <i class="bi bi-file-earmark ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Edit <i class="bi bi-pencil ms-2 text-muted"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                                <i class="bi bi-pin-angle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="mb-1"><a href="apps-chat.html#" class="text-truncate p-0">Images</a></h5>
                                                            <p class="text-muted text-truncate fs-xs mb-0">https://images123.com/</p>
                                                        </div>
            
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="dropdown">
                                                                <a class="fs-md text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Open <i class="bi bi-file-earmark ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Edit <i class="bi bi-pencil ms-2 text-muted"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                                <i class="bi bi-pin-angle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="mb-1"><a href="apps-chat.html#" class="text-truncate p-0">Bg Gradient</a></h5>
                                                            <p class="text-muted text-truncate fs-xs mb-0">https://bggradient.com/</p>
                                                        </div>
            
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="dropdown">
                                                                <a class="fs-md text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Open <i class="bi bi-file-earmark ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Edit <i class="bi bi-pencil ms-2 text-muted"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                                <i class="bi bi-image"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="mb-1"><a href="apps-chat.html#" class="text-truncate p-0">Image-012.jpg</a></h5>
                                                            <p class="text-muted text-truncate fs-xs mb-0">3.1 MB</p>
                                                        </div>
            
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="dropdown">
                                                                <a class="fs-md text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Open <i class="bi bi-file-earmark ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Edit <i class="bi bi-pencil ms-2 text-muted"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                                <i class="bi bi-file-earmark-richtext"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="mb-1"><a href="apps-chat.html#" class="text-truncate p-0">analytics dashboard.zip</a></h5>
                                                            <p class="text-muted text-truncate fs-xs mb-0">6.7 MB</p>
                                                        </div>
            
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="dropdown">
                                                                <a class="fs-md text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Open <i class="bi bi-file-earmark ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Edit <i class="bi bi-pencil ms-2 text-muted"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                                <i class="bi bi-image"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="mb-1"><a href="apps-chat.html#" class="text-truncate p-0">Image-031.jpg</a></h5>
                                                            <p class="text-muted text-truncate fs-xs mb-0">4.2 MB</p>
                                                        </div>
            
                                                        <div class="flex-shrink-0 ms-3">
                                                            <div class="dropdown">
                                                                <a class="fs-md text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Open <i class="bi bi-file-earmark ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Edit <i class="bi bi-pencil ms-2 text-muted"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab pane -->
                                <div class="tab-pane fade" id="pills-attachment">
                                    <div>
                                        <div class="px-4 pt-4">
                                            <h5 class="mb-4">Attachment</h5>
                                        </div>
                                        
                                        <div class="chat-bookmark-list px-4" data-simplebar>
                                            <div class="card p-2 border mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                        <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                            <i class="bi bi-file-earmark-richtext"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="fs-sm fw-medium text-truncate mb-1">design-phase-1-approved.pdf</h5>
                                                        <p class="text-muted fs-xs mb-0">12.5 MB</p>
                                                    </div>
    
                                                    <div class="flex-shrink-0 ms-3">
                                                        <div class="d-flex gap-2">
                                                            <div>
                                                                <a href="apps-chat.html#" class="text-muted px-1">
                                                                    <i class="bi bi-download"></i>
                                                                </a>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a class="text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Share <i class="bi bi-share ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Bookmark <i class="bi bi-bookmarks text-muted ms-2"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="card p-2 border mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                        <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                            <i class="bx bx-image"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="fs-sm fw-medium text-truncate mb-1">Image-1.jpg</h5>
                                                        <p class="text-muted fs-xs mb-0">4.2 MB</p>
                                                    </div>
    
                                                    <div class="flex-shrink-0 ms-3">
                                                        <div class="d-flex gap-2">
                                                            <div>
                                                                <a href="apps-chat.html#" class="text-muted px-1">
                                                                    <i class="bi bi-download"></i>
                                                                </a>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a class="text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Share <i class="bi bi-share ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Bookmark <i class="bi bi-bookmarks text-muted ms-2"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="card p-2 border mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                        <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                            <i class="bx bx-image"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="fs-sm fw-medium text-truncate mb-1">Image-2.jpg</h5>
                                                        <p class="text-muted fs-xs mb-0">3.1 MB</p>
                                                    </div>
    
                                                    <div class="flex-shrink-0 ms-3">
                                                        <div class="d-flex gap-2">
                                                            <div>
                                                                <a href="apps-chat.html#" class="text-muted px-1">
                                                                    <i class="bi bi-download"></i>
                                                                </a>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a class="text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Share <i class="bi bi-share ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Bookmark <i class="bi bi-bookmarks text-muted ms-2"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="card p-2 border mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-xs ms-1 me-3">
                                                        <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                            <i class="bi bi-file-earmark-richtext"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="fs-sm fw-medium text-truncate mb-1">Landing-A.zip</h5>
                                                        <p class="text-muted fs-xs mb-0">6.7 MB</p>
                                                    </div>
    
                                                    <div class="flex-shrink-0 ms-3">
                                                        <div class="d-flex gap-2">
                                                            <div>
                                                                <a href="apps-chat.html#" class="text-muted px-1">
                                                                    <i class="bi bi-download"></i>
                                                                </a>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a class="text-muted px-1" href="apps-chat.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Share <i class="bi bi-share ms-2 text-muted"></i></a>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Bookmark <i class="bi bi-bookmarks text-muted ms-2"></i></a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="apps-chat.html#">Delete <i class="bi bi-trash3 ms-2 text-muted"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end tab-pane -->
                            </div>
                            <!-- end tab content -->
                        </div>
                        <!-- end chat leftsidebar -->

                        <!-- Start User chat -->
                        <div class="user-chat w-100 overflow-hidden">
                            <div class="d-none flex-column justify-content-between h-100 video-content">
                                <div class="p-3 user-chat-topbar border-bottom border-2">
                                    <div class="row align-items-center justify-content-between flex-nowrap">
                                        <div class="col-sm-4 col">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                    <a href="javascript: void(0);" class="user-chat-remove fs-lg p-1"><i class="ri-arrow-left-s-line align-bottom"></i></a>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                                            <span class="user-status"></span>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="text-truncate mb-1 fs-lg"><a class="text-reset username" data-bs-toggle="offcanvas" href="apps-chat.html#userProfileCanvasExample" aria-controls="userProfileCanvasExample">Lisa Parker</a></h5>
                                                            <p class="text-truncate text-muted fs-md mb-0 userStatus"><small>Creative Desginer</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-auto">
                                            <div class="text-end">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inviteMembersModal"><i class="bi bi-plus d-block d-sm-none"></i> <span class="ms-1 d-none d-sm-block">Add Participant</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end chat user head -->
                                <div class="p-3 chat-conversation" data-simplebar>
                                    <div class="row g-3">
                                        <div class="col-lg-9">
                                            <div class="position-relative">
                                                <a href="apps-chat.html#!">
                                                    <img src="assets/images/chat-user.jpeg" alt="" class="object-fit-cover w-100 rounded" height="515">
                                                </a>
                                                <div class="btn-group position-absolute top-0 end-0 bg-white bg-opacity-50 p-1 m-3" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn-close"></button>
                                                </div>
                                                <div class="badge bg-danger d-inline-block position-absolute bottom-0 end-0 m-3 fs-lg fw-normal">
                                                    <span id="outputt" class="timerClock" value="00:00:00">00:00:00</span>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-3">
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div class="position-relative">
                                                        <a href="apps-chat.html#!">
                                                            <img src="assets/images/users/avatar-5.jpg.png" alt="" class="w-100 object-fit-cover rounded" height="250">
                                                        </a>
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="position-relative">
                                                        <a href="apps-chat.html#!">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="w-100 object-fit-cover rounded" height="250">
                                                        </a>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                                
                                <div class="p-3 chat-input-section border-top border-2">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-center">
                                                <button class="btn btn-subtle-secondary fs-lg btn-icon rounded-circle"><i class="ph-video-camera-slash"></i></button>
                                                <button class="btn btn-danger fs-lg btn-icon rounded-circle call-disconnect"><i class="ph-phone-disconnect"></i></button>
                                                <button class="btn btn-subtle-secondary fs-lg btn-icon rounded-circle"><i class="ph-microphone-slash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-content d-lg-flex">
                                <!-- start chat conversation section -->
                                <div class="w-100 overflow-hidden position-relative">
                                    <!-- conversation user -->
                                    <div class="position-relative">
                    
                                        <div class="position-relative" id="users-chat">
                                            <div class="p-3 user-chat-topbar border-bottom border-2">
                                                <div class="row align-items-center flex-nowrap">
                                                    <div class="col-sm-4 col">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                                <a href="javascript: void(0);" class="user-chat-remove fs-lg p-1"><i class="ri-arrow-left-s-line align-bottom"></i></a>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                                                        <span class="user-status"></span>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate mb-1 fs-lg"><a class="text-reset username" data-bs-toggle="offcanvas" href="apps-chat.html#userProfileCanvasExample" aria-controls="userProfileCanvasExample">Lisa Parker</a></h5>
                                                                        <p class="text-truncate text-muted fs-md mb-0 userStatus"><small>Online</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 col-auto">
                                                        <ul class="list-inline user-chat-nav text-end mb-0">
                                                            <li class="list-inline-item m-0">
                                                                <div class="dropdown">
                                                                    <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bi bi-search"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                                        <div class="p-2">
                                                                            <div class="search-box">
                                                                                <input type="text" class="form-control bg-light border-light" autocomplete="off" placeholder="Search here..." onkeyup="searchMessages()" id="searchMessage">
                                                                                <i class="ri-search-2-line search-icon"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                    
                                                            <li class="list-inline-item d-none d-lg-inline-block m-0">
                                                                <button type="button" class="btn btn-ghost-secondary fs-lg btn-icon video-icon">
                                                                    <i class="bi bi-camera-video"></i>
                                                                </button>
                                                            </li>

                                                            <li class="list-inline-item d-none d-lg-inline-block m-0">
                                                                <button type="button" class="btn btn-ghost-secondary fs-lg btn-icon" data-bs-toggle="offcanvas" data-bs-target="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">
                                                                    <i class="bi bi-telephone"></i>
                                                                </button>
                                                            </li>
                    
                                                            <li class="list-inline-item m-0">
                                                                <div class="dropdown">
                                                                    <button class="btn btn-ghost-secondary fs-lg btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item d-block d-lg-none user-profile-show" href="apps-chat.html#"><i class="ri-user-2-fill align-bottom text-muted me-2"></i> View Profile</a>
                                                                        <a class="dropdown-item" href="apps-chat.html#"><i class="ri-inbox-archive-line align-bottom text-muted me-2"></i> Archive</a>
                                                                        <a class="dropdown-item" href="apps-chat.html#"><i class="ri-mic-off-line align-bottom text-muted me-2"></i> Muted</a>
                                                                        <a class="dropdown-item" href="apps-chat.html#"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                    
                                            </div>
                                            <!-- end chat user head -->
                                            <div class="chat-conversation p-3 p-lg-4" id="chat-conversation" data-simplebar>
                                                <div id="elmLoader">
                                                    <div class="spinner-border text-primary avatar-sm" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled chat-conversation-list" id="users-conversation">
                    
                                                </ul>
                                                <!-- end chat-conversation-list -->
                                            </div>
                                            <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoard" role="alert">
                                                Message copied
                                            </div>
                                        </div>
                    
                                        <div class="position-relative" id="channel-chat">
                                            <div class="p-3 user-chat-topbar border-bottom border-2">
                                                <div class="row align-items-center flex-nowrap">
                                                    <div class="col-sm-4 col">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                                <a href="javascript: void(0);" class="user-chat-remove fs-lg p-1"><i class="ri-arrow-left-s-line align-bottom"></i></a>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <h5 class="text-truncate mb-0 fs-lg"><a class="text-reset username" data-bs-toggle="offcanvas" href="apps-chat.html#userProfileCanvasExample" aria-controls="userProfileCanvasExample">Lisa Parker</a></h5>
                                                                        <p class="text-truncate text-muted fs-md mb-0 userStatus"><small>24 Members</small></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 col-auto">
                                                        <ul class="list-inline user-chat-nav text-end mb-0">
                                                            <li class="list-inline-item m-0">
                                                                <div class="dropdown">
                                                                    <button class="btn btn-ghost-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bi bi-search"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                                        <div class="p-2">
                                                                            <div class="search-box">
                                                                                <input type="text" class="form-control bg-light border-light"  autocomplete="off" placeholder="Search here..." onkeyup="searchMessages()" id="searchMessage">
                                                                                <i class="ri-search-2-line search-icon"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                    
                                                            <li class="list-inline-item d-none d-lg-inline-block m-0">
                                                                <button type="button" class="btn btn-ghost-secondary btn-icon" data-bs-toggle="offcanvas" data-bs-target="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">
                                                                    <i class="bi bi-info-circle"></i>
                                                                </button>
                                                            </li>
                    
                                                            <li class="list-inline-item m-0">
                                                                <div class="dropdown">
                                                                    <button class="btn btn-ghost-secondary fs-lg btn-icon" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item d-block d-lg-none user-profile-show" href="apps-chat.html#"><i class="ri-user-2-fill align-bottom text-muted me-2"></i> View Profile</a>
                                                                        <a class="dropdown-item" href="apps-chat.html#"><i class="ri-inbox-archive-line align-bottom text-muted me-2"></i> Archive</a>
                                                                        <a class="dropdown-item" href="apps-chat.html#"><i class="ri-mic-off-line align-bottom text-muted me-2"></i> Muted</a>
                                                                        <a class="dropdown-item" href="apps-chat.html#"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                    
                                            </div>
                                            <!-- end chat user head -->
                                            <div class="chat-conversation p-3 p-lg-4" id="chat-conversation" data-simplebar>
                                                <ul class="list-unstyled chat-conversation-list" id="channel-conversation">
                                                </ul>
                                                <!-- end chat-conversation-list -->
                    
                                            </div>
                                            <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoardChannel" role="alert">
                                                Message copied
                                            </div>
                                        </div>
                    
                                        <!-- end chat-conversation -->
                    
                                        <div class="chat-input-section p-3 p-lg-4 border-top border-2">
                    
                                            <form id="chatinput-form" enctype="multipart/form-data">
                                                <div class="row g-0 align-items-center">
                                                    <div class="col-auto">
                                                        <div class="chat-input-links me-2">
                                                            <div class="links-list-item">
                                                                <button type="button" class="btn btn-link text-decoration-none emoji-btn" id="emoji-btn">
                                                                    <i class="bx bx-smile align-middle"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="col">
                                                        <div class="chat-input-feedback">
                                                            Please Enter a Message
                                                        </div>
                                                        <input type="text" class="form-control chat-input bg-light border-light" id="chat-input" placeholder="Type your message..." autocomplete="off">
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="chat-input-links ms-2">
                                                            <div class="links-list-item">
                                                                <button type="submit" class="btn btn-dark chat-send waves-effect waves-light">
                                                                    <i class="ph-paper-plane-right align-middle"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                </div>
                                            </form>
                                        </div>
                    
                                        <div class="replyCard">
                                            <div class="card mb-0">
                                                <div class="card-body py-3">
                                                    <div class="replymessage-block mb-0 d-flex align-items-start">
                                                        <div class="flex-grow-1">
                                                            <h5 class="conversation-name"></h5>
                                                            <p class="mb-0"></p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button type="button" id="close_toggle" class="btn btn-sm btn-link mt-n2 me-n3 fs-lg">
                                                                <i class="bx bx-x align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end chat-wrapper -->

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

    <!-- glightbox js -->
    <script src="assets/libs/glightbox/js/glightbox.min.js"></script>
    
    <!-- fgEmojiPicker js -->
    <script src="assets/libs/fg-emoji-picker/fgEmojiPicker.js"></script>
    
    <!-- chat init js -->
    <script src="assets/js/pages/chat.init.js"></script>

    <!-- javascript links ends -->


</body>

</html>