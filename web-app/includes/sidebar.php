<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box in-nav-logo">
        
        <a href="dashboard.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo/icon-dark.svg" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo/logo-dark.svg" alt="" height="40">
            </span>
        </a>

        <a href="dashboard.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo/icon-light.svg" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo/logo-light.svg" alt="" height="40">
            </span>
        </a>

        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>

    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link menu-link"> <i class="ph-gauge"></i> <span data-key="t-email">Dashboard</span> </a>
                </li>

                <!-- Company -->
                <li class="nav-item">
                    <a href="index.php#sidebarCompany" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCompany">
                        <i class="ph-house-line"></i> <span data-key="company">Company</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCompany">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="company-new.php" class="nav-link" data-key="add-company">Add Company</a>
                            </li>
                            <li class="nav-item">
                                <a href="companies.php" class="nav-link" data-key="companies">All Companies</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Doctor -->
                <li class="nav-item">
                    <a href="index.php#sidebarDoctor" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDoctor">
                    <i class="ph-user"></i> <span data-key="t-Doctor">Doctor</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDoctor">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="doctor-new.php" class="nav-link" data-key="t-products">Add Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a href="doctors.php" class="nav-link" data-key="t-products-grid">All Doctors</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Prescription -->
                <li class="nav-item">
                    <a href="index.php#sidebarPrescription" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPrescription">
                    <i class="bi bi-clipboard-plus"></i> <span data-key="t-Prescription">Prescription</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPrescription">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="prescription-new.php" class="nav-link" data-key="t-products">Add Prescription</a>
                            </li>
                            <li class="nav-item">
                                <a href="prescriptions.php" class="nav-link" data-key="t-products-grid">All Prescriptions</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Patient -->
                <li class="nav-item">
                    <a href="index.php#sidebarPatient" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPatient">
                        <i class="ph-user-plus"></i> <span data-key="t-Patient">Patient</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPatient">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="patient-new.php" class="nav-link" data-key="t-products">Add Patient</a>
                            </li>
                            <li class="nav-item">
                                <a href="patients-upload.php" class="nav-link" data-key="t-products-upload">Upload Patients</a>
                            </li>
                            <li class="nav-item">
                                <a href="patients.php" class="nav-link" data-key="t-products-grid">View all Patients</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Appointment -->
                <li class="nav-item">
                    <a href="index.php#sidebarAppointment" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAppointment">
                    <i class="ph-calendar"></i> <span data-key="t-Appointment">Appointment</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAppointment">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="appointment-new.php" class="nav-link" data-key="t-products">New appointment</a>
                            </li>
                            <li class="nav-item">
                                <a href="appointments.php" class="nav-link" data-key="t-products-grid">All appointments</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- <li class="nav-item">
                    <a href="appointment.php" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Appointment</span> </a>
                </li> -->

                <!-- Chat -->
                <li class="nav-item">
                    <a href="chat.php" class="nav-link menu-link"> <i class="ph-chats"></i> <span data-key="t-chat">Chat</span> </a>
                </li>

                <!-- Publications -->
                <li class="nav-item">
                    <a href="index.php#sidebarPublications" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPublications">
                        <i class="ph-newspaper"></i> <span data-key="t-Publication">Publication</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPublications">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="publication-new.php" class="nav-link" data-key="t-products">New publication</a>
                            </li>
                            <li class="nav-item">
                                <a href="publications.php" class="nav-link" data-key="t-products-grid">All publications</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Office -->
                <li class="nav-item">
                    <a href="office.php" class="nav-link menu-link"> <i class="ph-briefcase"></i> <span data-key="t-chat">Office</span> </a>
                </li>

                <!-- Customize -->
                <li class="nav-item">
                    <a class="nav-link btn menu-link" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                        <i class="bi bi-gear"></i> <span data-key="t-custom-ui">Personalize</span><span class="badge badge-pill bg-badge" data-key="t-custom">Custom</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>