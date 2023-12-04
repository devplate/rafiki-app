<?php include 'connect/database.php';




$sql_statement = "
SELECT id,name FROM company
";
$result = $conn->query($sql_statement);

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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Upload patient list</h5>
                                </div>
                                <div class="card-body">
                                    <form action="connect/database.php" method="post" enctype="multipart/form-data">

                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="Property-type-input" class="form-label text-muted">Select company <span class="text-danger"> *</span></label>
                                                    <select class="form-select" data-choices id="country" name="company">
                                                        <option value="">Select company</option>
                                                        <?php  
                                                            if($result->num_rows > 0){
                                                                while($row = $result->fetch_assoc()){
                                                                    echo "
                                                                        <option value=\"".$row["id"]."\">".$row["name"]."</option>                                                                    
                                                                    ";
                                                                }
                                                            }
                                                          ?>                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label text-muted">Upload xcl file here <span class="text-danger"> *</span></label>
                                                    <input class="form-control" name="excel" type="file" id="formFile">
                                                </div>
                                            </div>   

                                            <div class="col-lg-12 mt-4 mb-2">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" name="excel_submit" class="btn btn-success"> <i class="bi bi-upload align-baseline me-1"> </i> Upload</button>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                    </form>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

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

        <!-- dropzone js -->
        <script src="assets/libs/dropzone/dropzone-min.js"></script>

        <!--real estate list init js -->
        <script src="assets/js/pages/real-estate-add-property.init.js"></script>

        <!-- ckeditor -->
        <script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/form-editor.init.js"></script>


        <!-- javascript links ends -->


</body>

</html>