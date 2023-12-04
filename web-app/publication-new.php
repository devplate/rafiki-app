<?php include "connect/database.php";?>
<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

<!-- head starts -->
<?php include 'includes/head.php'; ?>

<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

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
                                    <h5 class="card-title mb-0">Publish</h5>
                                </div>
                                <div class="card-body">
                                    <form action="connect/database.php" method="post" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="Property-title-input" class="form-label">Property title<span class="text-danger">*</span></label>
                                                    <input type="text" name="title" id="Property-title-input" class="form-control" placeholder="Enter property title" required>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Upload cover image<span class="text-danger">*</span></label>
                                                    <input type="file" name="cover_image" class="form-control"  id="cover_image">
                                                </div>
                                            </div> 
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Upload content (.docx for articles)<span class="text-danger">*</span></label>
                                                    <input type="file" name="content" class="form-control"  id="content">
                                                </div>
                                            </div>    

                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="Property-type-input" class="form-label">Post category<span class="text-danger">*</span></label>

                                                    <select name="category" class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                                        <option value="">Select post category</option>
                                                        <option value="General posts">General posts</option>
                                                        <option value="Anxiety">Anxiety</option>
                                                        <option value="Sex dysfuntion">Sex dysfuntion</option>
                                                        <option value="Depression">Depression</option>
                                                        <option value="Stress">Stress</option>
                                                        <option value="Aggression">Aggression</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 mb-4">
                                                <div class="mt-3">
                                                    <label for="Property-type-input" class="form-label">Descriptions<span class="text-danger">*</span></label>
                                                    </div><!-- end card header -->
                                                    <textarea name="editor1" id="editor1"></textarea>
                                                    <textarea name="desc" style="display: none;"></textarea>

                                            </div>
                                            <!-- end col -->

                                            <div class="mb-4">
                                            <label for="Property-type-input" class="form-label mb-3">Select post type<span class="text-danger">*</span></label>
                                            <div class="row">
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-check">
                                                    <input type="radio" name="type" value="article" class="form-check-input" id="additionalFeatures">
                                                    <label class="form-check-label" for="additionalFeatures">Article post</label>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-check">
                                                    <input type="radio" name="type" value="video" class="form-check-input" id="additionalFeatures2">
                                                    <label class="form-check-label" for="additionalFeatures2">Video post</label>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-check">
                                                    <input type="radio" name="type" value="audio" class="form-check-input" id="additionalFeatures3">
                                                    <label class="form-check-label" for="additionalFeatures3">Audio post</label>
                                                </div>
                                            </div><!--end col-->
                                            </div>
                                            </div>

                                            <div class="col-lg-12 mb-2">
                                                <div class="hstack gap-3 justify-content-end">
                                                    <button type="button" class="btn btn-primary"><i class="bi bi-repeat align-baseline me-1"></i> Save to draft</button>
                                                    <button type="submit" value="12" name="post_publication" class="btn btn-primary"><i class="bi bi-clipboard2-check align-baseline me-1"></i> Publish now</button>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                    </form>
                                    <script>
                                        CKEDITOR.instances.editor1.on('change', function () {
                                            var editorData = CKEDITOR.instances.editor1.getData();
                                            document.querySelector('textarea[name="editor_data"]').value = editorData;
                                        });
                                    </script>
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
        
         <script>
            CKEDITOR.replace('editor1');
        </script>


</body>

</html>
