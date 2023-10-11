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
  <title>Index | Admin Panel</title>
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
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
      <!-- Modal -->
      <div class="modal fade" id="AddUserData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Register</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="register-db.php" method="POST">
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="Name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="Email" class="form-control" placeholder="Email Id" required>
                </div>

                <div class="form-group">
                  <label for="">Assign User Level</label>
                  <select name="usertype" class="form-control" required>
                    <option>Select Type of User</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="Password" class="form-control" placeholder="Password" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="addUser" class="btn btn-primary">Save</button>
              </div>
          </div>
          </form>
        </div>
      </div>
      <!-- Modal End -->
      <!-- Delete User -->
      <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="register-db.php" method="POST">
              <div class="modal-body">
                <input type="hidden" name="delete_id" class="delete_user_id">
                <p>
                  Are You sure. You want to delete this data?
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" name="deleteUser" class="btn btn-primary">Yes,Delete!</button>
              </div>
          </div>
          </form>
        </div>
      </div>

      <!-- Content Header (Page header) -->
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
                  <h3 class="card-title">Registered User
                  </h3>
                  <a href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#AddUserData">Add User</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Roles</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query = "SELECT * FROM users";
                      $query_run = mysqli_query($con, $query);
                      if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                      ?>
                          <tr>
                            <td><?php echo ($row['id']); ?></td>
                            <td><?php echo ($row['Name']); ?></td>
                            <td><?php echo ($row['Email']); ?></td>
                            <td><?php echo ($row['Password']); ?></td>
                            <td><?php echo ($row['usertype']); ?></td>
                            <td>
                              <a href="register-edit.php?user_id=<?php echo ($row['id']); ?>" class="btn btn-info btn-sm">Edit</a>
                              <button type="button" value="<?php echo ($row['id']); ?>" class="btn btn-danger btn-sm deletebtn">Delete</button>
                            </td>
                          </tr>
                        <?php
                        }
                      } else {
                        ?>
                        <tr>
                          <td>No Record Found</td>
                        </tr><?php


                            } ?>

</body>
</table>
</div>
</div>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>

</div>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
  $(document).ready(function() {
    $('.deletebtn').click(function(e) {
      e.preventDefault();
      var user_id = $(this).val();
      $('.delete_user_id').val(user_id);
      // console.log(user_id);
      $('#deleteData').modal('show')
    });
  });
</script>

<!-- /.content-wrapper -->
<?php include 'includes/footer.php'; ?>

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

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

</body>

</html>