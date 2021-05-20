<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
if (isset($_POST['update_password'])) {
  $passwordBaru = $_POST['password_baru'];
  $passwordKonf = $_POST['password_konf'];

  if ($passwordKonf == $passwordBaru) {
    $ubahPass = mysqli_query($koneksi, "UPDATE admin SET password = '$passwordBaru' WHERE id_admin = 1");
    if ($ubahPass) {
      // session_destroy();
      header('location:index.php');
    }
  }
}
?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include('navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include('sidebar.php') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #D9E1E8;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">Admin</h3>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>


            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <h4 class="profile-username text-left">Pengaturan Akun</h4>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <form action="profile.php" method="post" onsubmit="return validation()">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <!-- /.form-group -->

                        <label>Kata Sandi Baru</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                          </div>
                          <input name="password_baru" type="password" class="form-control" placeholder="Kata Sandi Baru">
                        </div>

                        <label>Konfirmasi Kata Sandi Baru</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                          </div>
                          <input name="password_konf" type="password" class="form-control" placeholder="Konfirmasi Kata Sandi Baru">
                        </div>


                        <div class="btn-group-toggle" style="width: 100px; float: right;">
                          <button type="submit" name="update_password" class="btn btn-block bg-gradient-primary btn-lg" data-toggle="modal" data-target="#modal-default">Submit</button>
                        </div>


                        <div class="modal fade" id="modal-default">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" style="text-align: center">
                                <h4 class="modal-title">Data Berhasil Disimpan</h4>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <a href="../pages/lihat-jadwal.php">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Kembali ke Lihat Jadwal</button>
                                </a>

                                <button type="submit" class="btn btn-primary">Lanjut Tambah Jadwal</button>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                            <!-- /.post -->
                          </div>

                          <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                  </form>
                </div>
                <!-- /.row -->
              </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer" style="background-color: #EBF6FF;">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
      </div>
      <strong>MedSch Web Admin</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>
<script type="text/javascript">
  function validation() {
    var newPass = document.getElementById("password_baru").value;
    var confPass = document.getElementById("password_konf").value;
    if (newPass == confPass) {
      return true;
    } else {
      alert('Password tidak cocok!');
      return false;
    }
  }
</script>

</html>