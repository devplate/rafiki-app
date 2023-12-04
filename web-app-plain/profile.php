<?php 

include "connect/database.php";

$id = $_SESSION["user"]["id"];

$sql_statement = "SELECT doctor,hr FROM user WHERE id='$id'";
$result = $conn->query($sql_statement);
$doctor = 0;
$hr = 0;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        if($row["doctor"] > 0){
            $doctor = $row["doctor"];
        }elseif($row["hr"] > 0){
            $hr = $row["hr"];
        }
    }
}

$condition = "";
if ($doctor > 0) {
    $condition = "INNER JOIN doctor ON user.doctor = doctor.doctor_id RIGHT JOIN qualification ON doctor.qualification = qualification.qualification_id
     INNER JOIN emergency_contact ON doctor.emergency_contact = emergency_contact.contact_id ";
} elseif ($hr > 0) {
    $condition = "INNER JOIN human_resource ON user.hr = human_resource.hr_id";
}

$sql_statement = "SELECT *
    FROM user
    $condition
    WHERE id='$id'";


$result = $conn->query($sql_statement);
$data;
if ($result->num_rows == 1){
    while($row = $result->fetch_all()){
        $data = $row;
    }

}




?>


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

                    <div class="row">
                        <!--end col-->
                        <div class="col-xxl-3">
                            <div class="card overflow-hidden">
                                <div>
                                    <img src="assets/images/small/img-7.jpg" alt="" class="card-img-top profile-wid-img object-fit-cover" style="height: 200px;">
                                    <div>
                                        <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input d-none">
                                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light btn-sm position-absolute end-0 top-0 m-3">
                                            <i class="ri-image-edit-line align-bottom me-1"></i> Edit Cover Images
                                        </label>
                                    </div>
                                </div>
                                <div class="card-body pt-0 mt-n5">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto">
                                            <img src="<?php echo $_SESSION["user"]["logo"]; ?>" alt="" class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit position-absolute end-0 bottom-0">
                                                <input id="profile-img-file-input" type="file" class="profile-img-file-input d-none">
                                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body">
                                                        <i class="bi bi-camera"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5><?php echo $data[0][8]?> <?php echo $data[0][10]?><i class="bi bi-patch-check-fill align-baseline text-info ms-1"></i></h5>
                                            <p class="text-muted">ID: <?php echo $data[0][6]?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9">
                            <div class="d-flex align-items-center flex-wrap gap-2 mb-4">
                                <ul class="nav nav-pills arrow-navtabs nav-secondary gap-2 flex-grow-1 order-2 order-lg-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="pages-profile-settings.html#personalDetails" role="tab" aria-selected="true">
                                            Personal Details
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="pages-profile-settings.html#changePassword" role="tab" aria-selected="false" tabindex="-1">
                                            Changes Password
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="pages-profile-settings.html#education" role="tab" aria-selected="false" tabindex="-1">
                                            Education
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="pages-profile-settings.html#securityPrivacy" role="tab" aria-selected="false" tabindex="-1">
                                            Preferences
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Personal Details</h6>
                                        </div>
                                        <div class="card-body">
                                            <form action="connect/database.php" method="get">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label for="firstnameInput" class="form-label">First Name</label>
                                                            <input type="text" name="doctor_first_name" class="form-control" id="firstnameInput" placeholder="Enter your firstname" disabled value="<?php echo $data[0][8]?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label for="lastnameInput" class="form-label">Second Name</label>
                                                            <input type="text" name="doctor_second_name" class="form-control" id="lastnameInput" placeholder="Enter your second name" disabled value="<?php echo $data[0][9]?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label for="lastnameInput" class="form-label">Last Name</label>
                                                            <input type="text" name="doctor_last_name" class="form-control" id="lastnameInput" placeholder="Enter your last name" disabled value="<?php echo $data[0][10]?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="phonenumberInput" class="form-label">Primary Number</label>
                                                            <input type="text" name="doctor_phone_number" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" disabled value="<?php echo $data[0][11]?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="phonenumberInput" class="form-label">Alterative Number</label>
                                                            <input type="text" name="doctor_alt_phone_number" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="<?php echo $data[0][12]?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="emailInput" class="form-label">Email Address</label>
                                                            <input type="email" name="doctor_email" class="form-control" id="emailInput" placeholder="Enter your email" value="<?php echo $data[0][13]?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="birthDateInput" class="form-label">Birth of Date</label>
                                                            <input type="text" name="doctor_birth_date" class="form-control" data-provider="flatpickr" id="birthDateInput" disabled data-date-format="d M, Y" data-default-date="<?php echo $data[0][15]?>" placeholder="Select date">
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="designationInput" class="form-label">Nationality</label>
                                                            <input type="text" name="country" class="form-control" id="designationInput" disabled placeholder="Enter your nationality" value="<?php echo $data[0][16]?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="websiteInput1" class="form-label">National ID no.</label>
                                                            <input type="text" name="" class="form-control" id="websiteInput1" disabled placeholder="Enter your national Id no" value="<?php echo $data[0][17]?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label for="skillsInput" class="form-label">Languages</label>
                                                            <select class="form-control" name="doctor_languages" data-choices data-choices-text-unique-true multiple id="skillsInput">
                                                                <option value="English" selected>English</option>
                                                                <option value="Swahili">Swahili</option>
                                                                <option value="German">German</option>
                                                                <option value="France">France</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-4">
                                                            <label for="birthDateInput" class="form-label">Physical Address</label>
                                                            <input type="text" name="doctor_physical" class="form-control" id="emailInput" placeholder="Enter your physical address" value="<?php echo $data[0][19]?>">
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-lg-12">
                                                        <div class="mb-3 pb-2">
                                                            <label for="exampleFormControlTextarea" class="form-label">Biography</label>
                                                            <textarea name="doctor_bio" class="form-control" id="exampleFormControlTextarea" placeholder="Enter your Biography" rows="4"><?php echo $data[0][20]?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 mt-3 mb-4">
                                                        <p>Emergency contact</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-fname-input">First name </label>
                                                            <input type="text" name="contact_first_name" class="form-control" id="steparrow-gen-info-fname-input" value="<?php echo $data[0][32]?>" placeholder="Enter first name">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-sname-input">Second name </label>
                                                            <input type="text" name="contact_second_name" class="form-control" id="steparrow-gen-info-sname-input" value="<?php echo $data[0][33]?>" placeholder="Enter second name">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-lname-input">Last name </label>
                                                            <input type="text" name="contact_last_name" class="form-control" id="steparrow-gen-info-lname-input" value="<?php echo $data[0][34]?>" placeholder="Enter last name">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="cleave-hr-phone">Phone number </label>
                                                            <input type="text" name="contact_phone" class="form-control" id="cleave-hr-phone" value="<?php echo $data[0][35]?>" placeholder="+255 xxx xxx xxxx">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="cleave-hr-alt-phone">Alternative number </label>
                                                            <input type="text" name="alt_contact_phone" class="form-control" id="cleave-hr-alt-phone" value="<?php echo $data[0][36]?>" placeholder="+255 xxx xxx xxxx">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-lname-input">Relationship </label>
                                                            <select class="form-select" name="contact_relationship" id="state">
                                                                <option value="">Select</option>
                                                                <option value="Spouse">Spouse</option>
                                                                <option value="Sister/Brother" selected>Sister/Brother</option>
                                                                <option value="Collegue">Collegue</option>
                                                                <option value="Parent">Parent</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="change_profile" class="btn btn-primary">Update Profile</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                      
                                    <div class="tab-pane" id="changePassword" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Changes Password</h6>
                                        </div>
                                        <div class="card-body">
                                            <form action="connect/database.php" method="post">
                                                <div class="row g-2 justify-content-lg-between align-items-center">
                                                    <div class="col-lg-4">
                                                        <div class="auth-pass-inputgroup">
                                                            <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                            <div class="position-relative">
                                                                <input type="password" name="old_password" class="form-control password-input" id="oldpasswordInput" placeholder="Enter current password">
                                                                <button class="btn btn-link position-absolute top-0 end-0 text-decoration-none text-muted password-addon" type="button"><i class="ri-eye-fill align-middle"></i></button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="auth-pass-inputgroup">
                                                            <label for="password-input" class="form-label">New Password*</label>
                                                            <div class="position-relative">
                                                                <input type="password" name="new_password" class="form-control password-input" id="password-input" onpaste="return false" placeholder="Enter new password" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button"><i class="ri-eye-fill align-middle"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="auth-pass-inputgroup">
                                                            <label for="confirm-password-input" class="form-label">Confirm Password*</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control password-input" onpaste="return false" id="confirm-password-input" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button"><i class="ri-eye-fill align-middle"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a href="auth-resend-key.php" class="link-primary text-decoration-underline">Forgot Password ?</a>
                                                        <div class="">

                                                            <button type="submit" name="change_password" class="btn btn-success">Change Password</button>
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
                                            <div class="mt-4 mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
                                                <h5 class="card-title  mb-0">Login History</h5>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless align-middle mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th scope="col">Mobile</th>
                                                                    <th scope="col">IP Address</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Address</th>
                                                                    <th scope="col"><i class="ri-logout-box-r-line"></i></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><i class="bi bi-phone align-baseline me-1"></i> iPhone 12 Pro</td>
                                                                    <td>192.44.234.160</td>
                                                                    <td>18 Dec, 2023</td>
                                                                    <td>Los Angeles, United States</td>
                                                                    <td><a href="pages-profile-settings.html#" class="icon-link icon-link-hover">Logout <i class="bi bi-box-arrow-right"></i></a></td>

                                                                </tr>

                                                                <tr>
                                                                    <td><i class="bi bi-tablet align-baseline me-1"></i> Apple iPad Pro</td>
                                                                    <td>192.44.234.162</td>
                                                                    <td>03 Jan, 2023</td>
                                                                    <td>Phoenix, United States</td>
                                                                    <td><a href="pages-profile-settings.html#" class="icon-link icon-link-hover">Logout <i class="bi bi-box-arrow-right"></i></a></td>
                                                                </tr>

                                                                <tr>
                                                                    <td><i class="bi bi-phone align-baseline me-1"></i> Galaxy S21 Ultra 5G</td>
                                                                    <td>192.45.234.54</td>
                                                                    <td>25 Feb, 2023</td>
                                                                    <td>Washington, United States</td>
                                                                    <td><a href="pages-profile-settings.html#" class="icon-link icon-link-hover">Logout <i class="bi bi-box-arrow-right"></i></a></td>
                                                                </tr>

                                                                <tr>
                                                                    <td><i class="bi bi-laptop align-baseline me-1"></i> Dell Inspiron 14</td>
                                                                    <td>192.40.234.32</td>
                                                                    <td>16 Oct, 2022</td>
                                                                    <td>Phoenix, United States</td>
                                                                    <td><a href="pages-profile-settings.html#" class="icon-link icon-link-hover">Logout <i class="bi bi-box-arrow-right"></i></a></td>
                                                                </tr>

                                                                <tr>
                                                                    <td><i class="bi bi-phone align-baseline me-1"></i> iPhone 12 Pro</td>
                                                                    <td>192.44.326.42</td>
                                                                    <td>22 May, 2022</td>
                                                                    <td>Conneticut, United States</td>
                                                                    <td><a href="pages-profile-settings.html#" class="icon-link icon-link-hover">Logout <i class="bi bi-box-arrow-right"></i></a></td>

                                                                </tr>

                                                                <tr>
                                                                    <td><i class="bi bi-tablet align-baseline me-1"></i> Apple iPad Pro</td>
                                                                    <td>190.44.182.33</td>
                                                                    <td>19 Nov, 2023</td>
                                                                    <td>Los Angeles, United States</td>
                                                                    <td><a href="pages-profile-settings.html#" class="icon-link icon-link-hover">Logout <i class="bi bi-box-arrow-right"></i></a></td>

                                                                </tr>

                                                                <tr>
                                                                    <td><i class="bi bi-phone align-baseline me-1"></i> Galaxy S21 Ultra 5G</td>
                                                                    <td>194.44.235.87</td>
                                                                    <td>30 Aug, 2022</td>
                                                                    <td>Conneticut, United States</td>
                                                                    <td><a href="pages-profile-settings.html#" class="icon-link icon-link-hover">Logout <i class="bi bi-box-arrow-right"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="education" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Education</h6>
                                        </div>
                                        <div class="card-body">
                                        <ul class="list-unstyled mb-0">
                                                <li class="mb-4">
                                                    <div class="d-flex">
                                                        <span class="education size-3"><i class="ph-student"></i></span>
                                                        <h6 class="fs-md p-3"><?php echo $data[0][26]; ?></h6>
                                                    </div>
                                                    <div class="education-map">
                                                        <p class="text-muted mb-0"><?php echo $data[0][28]; ?></p>
                                                        <p class="mt-1"><?php echo $data[0][29]; ?> - <?php echo $data[0][30]; ?></p>
                                                    </div>
                                                </li>

                                                

                                            </ul>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="securityPrivacy" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0 mt-3">Preferences</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <label for="directMessage" class="form-check-label fs-md">Online</label>
                                                            <p class="text-muted">Make your status online to be visible by patients</p>
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
                                                            <p class="text-muted">Allow to attend patient with Anxiety</p>
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
                                                            <p class="text-muted">Allow to attend patient with Sex Dysfunction</p>
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
                                                            <p class="text-muted">Allow to attend patient with Substance Abuse</p>
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
                                                            <p class="text-muted">Allow to attend patient with Depression</p>
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
                                                            <p class="text-muted">Allow to attend patient with Stress</p>
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
                                                            <p class="text-muted">Allow to attend patient with Aggression</p>
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
                                    </div>
                                    <!--end tab-pane-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

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

    <!-- password-create init -->
    <script src="assets/js/pages/passowrd-create.init.js"></script>

    <!-- profile-setting init js -->
    <script src="assets/js/pages/profile-setting.init.js"></script>
    <!-- javascript links ends -->

</body>

</html>