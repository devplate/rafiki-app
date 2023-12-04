<?php include 'connect/database.php';



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

                    <div class="col-xl-12">
                        <div class="card pb-3">
                            <div class="card-header">
                            </div><!-- end card header -->
                            <div class="card-body form-steps">
                                <form action="connect/database.php" method="post" enctype="multipart/form-data">

                                    <!-- menu section -->
                                    <div class="step-arrow-nav mb-4">
                                        <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true">Company details</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false">Office details</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false">Finish</button>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Company details -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                                            <div>

                                                <div class="text-center mt-5 mb-5">
                                                    <div class="profile-user position-relative d-inline-block mx-auto mb-3">
                                                        <img src="assets/images/users/user-dummy-img.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image">
                                                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                            <input id="profile-img-file-input" type="file" name="profile-img-file-input" class="profile-img-file-input" accept="image/png, image/jpeg">
                                                            <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                                <span class="avatar-title rounded-circle bg-light text-body">
                                                                    <i class="ri-camera-fill"></i>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <p class="fs-md">Company logo <span class="text-danger">*</span></p>

                                                </div>

                                                <!-- row 1 -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-name-input">Company name <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="company_name" class="form-control" id="steparrow-gen-info-name-input" placeholder="Enter company name">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- row 5 -->
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="mb-4">
                                                            <label for="state" class="form-label">No of Employees <span class="text-danger">*</span></label>
                                                            <input type="number" data-value name="employee_number" class="form-control" id="steparrow-gen-info-name-input" placeholder="Employee number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-reg-input">Registration no. <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="company_reg_number" class="form-control" id="steparrow-gen-info-reg-input" placeholder="Enter reg no.">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-email-input">Email address <span class="text-danger">*</span></label>
                                                            <input type="email" data-value name="email_company" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter email address">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- row 2 -->
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="cleave-phone">Phone number <span class="text-danger">*</span></label>
                                                            <input type="text" data-value name="phone_number_company" class="form-control" id="cleave-phone" placeholder="+255 xxx xxx xxxx">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="cleave-alt-phone">Alternative number</label>
                                                            <input type="text" data-value name="alt_phone_number_company" class="form-control" id="cleave-alt-phone" placeholder="+255 xxx xxx xxxx">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- row 3 -->
                                                <div class="row">
                                                   
                                                    <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-email-input">Website <span class="text-danger">*</span></label>
                                                            <input type="url" data-value name="website_company" class="form-control" id="steparrow-gen-info-email-input" placeholder="http://yourcompany.com">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- row 6 -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-email-input">Postal Address <span class="text-danger">*</span></label>
                                                            <input type="email" data-value name="postal_company" class="form-control" id="steparrow-gen-info-email-input" placeholder="P.O.Box xxxx, Dar es Salaam">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="steparrow-gen-info-email-input">Physical address <span class="text-danger">*</span></label>
                                                            <input type="email" data-value name="physical_company" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter physical address">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <button type="button" class="btn btn-success btn-label right ms-auto no-border-radius nexttab nexttab" data-nexttab="steparrow-description-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Next</button>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->


                                        <!-- Office details -->
                                        <div class="tab-pane fade" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">

                                            <div class="row">
                                                <div class="col-lg-12 mt-3 mb-4">
                                                    <p>HR Details</p>
                                                    <hr>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-fname-input">First name <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="first_name_hr" class="form-control" id="steparrow-gen-info-fname-input" placeholder="Enter first name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-sname-input">Second name <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="second_name_hr" class="form-control" id="steparrow-gen-info-sname-input" placeholder="Enter second name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-lname-input">Last name <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="last_name_hr" class="form-control" id="steparrow-gen-info-lname-input" placeholder="Enter last name">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="cleave-hr-phone">Phone number <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="phone_number_hr" class="form-control" id="cleave-hr-phone" placeholder="+255 xxx xxx xxxx">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="cleave-hr-alt-phone">Alternative number </label>
                                                        <input type="text" data-value name="alt_phone_number_hr" class="form-control" id="cleave-hr-alt-phone" placeholder="+255 xxx xxx xxxx">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-lname-input">Email address <span class="text-danger">*</span></label>
                                                        <input type="email" data-value name="email_hr" class="form-control" id="steparrow-gen-info-lname-input" placeholder="Enter email address">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-lname-input">Physical address <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="physical_hr" class="form-control" id="steparrow-gen-info-lname-input" placeholder="Enter physical address">
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- department start -->
                                            <div class="row mt-4">
                                                <div class="col-lg-12">
                                                    <p>Departments</p>
                                                    <hr>
                                                </div>

                                                <!-- department section -->
                                                <div class="row">
                                                    <div class="col-xl-4">
                                                        <p class="mb-3">Note</p>
                                                        <p class="text-muted">On the department description you can give a short note about duties and how many members under the department</p>
                                                    </div><!--end col-->
                                                    <div class="col-xl-8">
                                                        <div id="newlink">
                                                            <div id="1">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label for="degreeTitle" class="form-label">Degree Title <span class="text-danger">*</span></label>
                                                                            <input type="text" data-value name="degree_dept" class="form-control" id="degreeTitle" placeholder="Degree title">
                                                                        </div>
                                                                    </div><!--end col-->

                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                                                            <textarea class="form-control" data-value name="description_dept" id="description" rows="3" placeholder="Enter description"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                        <div id="newForm" style="display: none;">

                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="hstack gap-2">
                                                                <a href="javascript:new_link()" class="btn btn-primary no-border-radius">Add department</a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div><!--end col-->
                                                </div><!--end col-->
                                            </div>
                                            <!-- department end -->


                                            <!-- Insurance start -->
                                            <div class="row mt-4">
                                                <div class="col-lg-12">
                                                    <p>Insurance details</p>
                                                    <hr>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="steparrow-gen-info-cname-input">Insurance company <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="insuarance_name" class="form-control" id="steparrow-gen-info-cname-input" placeholder="Enter company name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-4">
                                                        <label for="cleave-date" class="form-label">Expired date <span class="text-danger">*</span></label>
                                                        <input type="text" data-value name="insuarance_expiry" class="form-control" placeholder="DD-MM-YYYY" id="cleave-date">
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Insurance end -->



                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <button type="button" class="btn btn-light btn-label no-border-radius previestab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-lg me-2"></i> Back </button>
                                                <button type="button" onclick="submitForm()" value="Finish" data-value name="company_submit" class="btn btn-success btn-label right ms-auto no-border-radius nexttab nexttab" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Finish</button>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->

                                        <div class="tab-pane fade" id="pills-experience" role="tabpanel">
                                            <div class="text-center">

                                                <div class="avatar-md mt-5 mb-4 mx-auto">
                                                    <div class="avatar-title bg-light text-success display-4 rounded-circle">
                                                        <i class="ri-checkbox-circle-fill"></i>
                                                    </div>
                                                </div>
                                                <h5>Well Done !</h5>
                                                <p class="text-muted">You have Successfully create a company</p>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->
                                </form>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

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

    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>

    <!-- cleave.js -->
    <script src="assets/libs/cleave.js/cleave.min.js"></script>

    <!-- form masks init -->
    <script src="assets/js/pages/form-masks.init.js"></script>

    <!-- javascript links ends -->

    <!-- Learning instructor create init js -->
    <script src="assets/js/pages/learning-instructor-create.init.js"></script>


</body>

</html>
<script>
function submitForm(){ 
    
    const formData = new FormData();
    const fileInput = document.querySelector('input[name="profile-img-file-input"]');

    formData.append('fileInput',fileInput.files[0]);
   
    var first_name_hr                 = document.querySelector('input[name="first_name_hr"]').value; 
    var second_name_hr                  = document.querySelector('input[name="second_name_hr"]').value; 
    var last_name_hr                  = document.querySelector('input[name="last_name_hr"]').value; 
    var phone_number_hr                 = document.querySelector('input[name="phone_number_hr"]').value; 
    var alt_phone_number_hr                  = document.querySelector('input[name="alt_phone_number_hr"]').value; 
    var email_hr                  = document.querySelector('input[name="email_hr"]').value; 
    var physical_hr                  = document.querySelector('input[name="physical_hr"]').value; 
    var degree_dept                 = document.querySelector('input[name="degree_dept"]').value; 
    var description_dept                 = document.querySelector('textarea[name="description_dept"]').value; 
    var insuarance_name                 = document.querySelector('input[name="insuarance_name"]').value; 
    var insuarance_expiry                 = document.querySelector('input[name="insuarance_expiry"]').value; 
    var company_name                  = document.querySelector('input[name="company_name"]').value; 
    var employee_number                  = document.querySelector('input[name="employee_number"]').value; 
    var company_reg_number                  = document.querySelector('input[name="company_reg_number"]').value; 
    var email_company                  = document.querySelector('input[name="email_company"]').value; 
    var phone_number_company                 = document.querySelector('input[name="phone_number_company"]').value; 
    var alt_phone_number_company                 = document.querySelector('input[name="alt_phone_number_company"]').value; 
    var website_company                 = document.querySelector('input[name="website_company"]').value; 
    var postal_company                 = document.querySelector('input[name="postal_company"]').value; 
    var physical_company                 = document.querySelector('input[name="physical_company"]').value; 

    formData.append('company_name',company_name );
    formData.append('employee_number',employee_number          );
    formData.append('company_reg_number',company_reg_number       );
    formData.append('email_company',email_company            );
    formData.append('phone_number_company',phone_number_company     );
    formData.append('alt_phone_number_company',alt_phone_number_company );
    formData.append('website_company',website_company          );
    formData.append('postal_company',postal_company           );
    formData.append('physical_company',physical_company         );
    formData.append('first_name_hr',first_name_hr            );
    formData.append('second_name_hr',second_name_hr           );
    formData.append('last_name_hr',last_name_hr             );
    formData.append('phone_number_hr',phone_number_hr          );
    formData.append('alt_phone_number_hr',alt_phone_number_hr      );
    formData.append('email_hr',email_hr                 );
    formData.append('physical_hr',physical_hr              );
    formData.append('degree_dept',degree_dept              );
    formData.append('description_dept',description_dept         );
    formData.append('insuarance_name',insuarance_name          );
    formData.append('insuarance_expiry',insuarance_expiry        );
    formData.append('company_submit', 1);

    let url = "";
        fetch(url.concat("https://www.rafikiapp.tz/web-app/connect/database.php"), 
        {
            method: "POST",
            body: formData            
        });


}    
    
      
    
</script>