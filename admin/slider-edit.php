<?php
require('config/dbcon.php');
session_start();
if (!isset($_SESSION['admin']) && !isset($_SESSION['user']) || (trim($_SESSION['admin']) == '') && (trim($_SESSION['user']) == '')) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit Slider | Admin Panel</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.ico">
    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->


                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="index.php?link=logout" name="logout" class="dropdown-item">
                            <i class="fas fa-bell mr-2"></i> Logout
                            <span class="float-right text-muted text-sm"></span>
                        </a>
                </li>
                <?php
                if (isset($_GET['link'])) {
                    $_SESSION['link'] = $_GET['link'];
                    session_destroy();
                    header('location:login.php');
                }
                ?>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'includes/adminSideBar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">

                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12">
                            <?php
                            if (isset($_SESSION['status'])) {
                                echo '<h4>' . $_SESSION['status'] . '</h4>';
                                unset($_SESSION['status']);
                            }

                            ?>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Update Slider Image
                                    </h3>
                                    <a href="slider.php" class="btn btn-primary btn-sm btn-danger float-right">Back</a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php
                                            if (isset($_GET['slider_id'])) {
                                                $slider_id = $_GET['slider_id'];
                                                $query = "SELECT * FROM slider WHERE id='$slider_id'";
                                                $query_run = mysqli_query($con, $query);
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    foreach ($query_run as $row) {
                                            ?>
                                                        <form action="slider-db.php" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <input type="hidden" name="portfolio_id" value="<?= $row['id'] ?>" id="">
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="">Image</label>
                                                                        <input accept=".jpg,.jpeg,.gif,.png" type="file" name="image" value="" class="form-control" />
                                                                        <input accept=".jpg,.jpeg,.gif,.png" type="hidden" name="image_old" value="<?= $row['image'] ?>" class="form-control" />
                                                                    </div>


                                                                    <div class="col-md-12 mb-3">
                                                                        <button type="submit" name="updateSlider" class="btn btn-info">Update Slider Image</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    <?php
                                                    }
                                                } else {

                                                    ?>
                                                    <tr>
                                                        <td class="text-center">No Slider Image Found </td>
                                                    </tr><?php
                                                        }
                                                    }
                                                            ?>
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

    <!-- /.content-wrapper -->
    <?php include 'footer.php'; ?>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->

    <!-- Sparkline -->

    <!-- JQVMap -->

    <!-- jQuery Knob Chart -->
    <!-- daterangepicker -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- Summernote -->
    <!-- overlayScrollbars -->

    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- Summernote JS - CDN Link -->
    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#your_summernote1").summernote({
                placeholder: 'Description',
                tabsize: 2,
                height: 200,
            });


            $('.dropdown-toggle1').dropdown();
            $("#your_summernote2").summernote({
                placeholder: 'Description',
                tabsize: 2,
                height: 200,
            });


            $('.dropdown-toggle2').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

</body>

</html>