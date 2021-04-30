<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
$kelompok = $_POST['idKelompok'];
$mhs = $_POST['idMhs'];
if (isset($kelompok) && isset($mhs)) {
  for ($i = 0; $i < count($kelompok); $i++) {
    $updateKelompok = "UPDATE mahasiswa SET id_kelompok = '$kelompok[$i]' WHERE id_mhs = '$mhs[$i]'";
    mysqli_query($koneksi, $updateKelompok);
  }
}
?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #EBF6FF;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="nav-icon fas fa-users-cog"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="profile.php" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/profile-setting.png" alt="User Avatar" class="img-size-50 mr-3">
                <div class="media-body">
                  <p class="text-sm">Profile</p>
                  <p class="text-sm text-muted"></p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="login.php" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/logout.png" alt="User Avatar" class="img-size-50 mr-3">
                <div class="media-body">
                  <p class="text-sm">Logout</p>
                  <p class="text-sm text-muted"></p>
                </div>
              </div>
              <!-- Message End -->
            </a>

          </div>
        </li>
        <!-- Notifications Dropdown Menu -->

      </ul>
    </nav>
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
              <h1>Assign Kelompok Mahasiswa</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Jadwal Kuliah</a></li>
                <li class="breadcrumb-item active">Assign Kelompok Mahasiswa</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <form action="assign-kelompok-mahasiswa.php" method="post">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">


                <div class="card">
                  <div class="card-header">
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Mahasiswa</th>
                          <th>NIM</th>
                          <th>Kelompok</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $queryMhs = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                        while ($mahasiswa = mysqli_fetch_assoc($queryMhs)) {
                        ?>
                          <tr>
                            <td width="50px"><?= $no++ ?></td>
                            <td><?= $mahasiswa['nama_lengkap'] ?></td>
                            <td width="200px"><?= $mahasiswa['nim'] ?></td>
                            <td width="150px">
                              <!-- select -->
                              <input type="hidden" name="idMhs[]" value="<?= $mahasiswa['id_mhs'] ?>">
                              <?php
                              $query = mysqli_query($koneksi, "SELECT * FROM kelompok");
                              ?>
                              <div class="form-group">
                                <select name="idKelompok[]" class="form-control">
                                  <?php
                                  while ($result = mysqli_fetch_assoc($query)) {
                                  ?>
                                    <option <?= $mahasiswa['id_kelompok'] == $result['id_kelompok'] ? 'selected' : '' ?> value="<?= $result['id_kelompok'] ?>"><?= $result['nama_kelompok'] ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Nama Mahasiswa</th>
                          <th>NIM</th>
                          <th>Kelompok</th>
                        </tr>
                      </tfoot>

                    </table>
                    <div class="btn-group-toggle" style="width: 100px; float: right; margin-top: 30px;">
                      <button type="submit" class="btn btn-block bg-gradient-primary btn-lg" data-toggle="modal" data-target="#modal-default" data-dismiss="modal">Submit</button>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </form>
        <!-- /.container-fluid -->
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
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable();
    });
  </script>
</body>

</html>