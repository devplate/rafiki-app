<!doctype html>

<html lang="en" data-layout="vertical" data-layout-style="detached" data-sidebar="dark" data-sidebar-size="lg" data-preloader="enable" data-theme="default" data-bs-theme="light">

    <!-- head starts -->
    <?php include '../includes/head.php';?>
    <!-- head ends -->

    <body>

        <!-- layout-wrapper start -->
        <div id="layout-wrapper">

                <!-- left sidebar starts -->
                <?php include '../includes/sidebar.php';?>
                <!-- Left Sidebar End -->

                <!-- Vertical Overlay-->
                <div class="vertical-overlay"></div>
            
                <!-- Header starts -->
                <?php include '../includes/header.php';?>
                <!-- header ends -->

                <!-- notification models starts -->
                <?php include '../includes/notification-models.php';?>
                <!-- notification models ends -->

                <!-- Start right Content here -->
            <div class="main-content">

                <!-- footer starts -->
                <?php include '../includes/footer.php';?>
                <!-- footer ends -->

            </div>
            <!-- end main content-->

        </div>
            <!-- layout-wrapper ends -->


            <!--start back-to-top-->
            <?php include '../includes/back-button.php'; ?>
            <!--end back-to-top-->

            <!--preloader starts-->
            <?php include '../includes/preloader.php';?>
            <!-- preloader ends -->

            <!-- theme Settings starts -->
            <?php include '../includes/theme-settings.php';
            ?>
            <!-- theme settings ends -->

            <!-- javascript links starts  -->
            <?php include '../includes/javascripts.php';?>
            <!-- javascript links ends -->

    </body>

</html>