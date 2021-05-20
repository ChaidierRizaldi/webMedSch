<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');

if (isset($_POST['edit_dokter'])) {
  $idDokter = $_POST['id_dokter'];
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $nidn = $_POST['nidn'];
  $bidang_kepakaran = $_POST['bidang_kepakaran'];
  $no_telp = $_POST['no_telp'];
  $email = $_POST['email'];

  $editDokter = mysqli_query($koneksi, "UPDATE pengajar 
                SET nama = '$nama', jabatan = '$jabatan', nidn = '$nidn', bidang_kepakaran = '$bidang_kepakaran',
                no_telp = '$no_telp', email = '$email' WHERE id_pengajar = '$idDokter'");
}

if (isset($_GET['idDokter'])) {
  $idDokter = $_GET['idDokter'];
  $delete = mysqli_query($koneksi, "DELETE FROM pengajar WHERE id_pengajar = '$idDokter'");
  var_dump($idDokter);
}
?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include('navbar.php') ?>
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
              <h1>Lihat Dokter</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Daftar Dokter</a></li>
                <li class="breadcrumb-item active">Lihat Dokter</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
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
                        <th>Nama Dokter</th>
                        <th>Jabatan</th>
                        <th>Bidang Kepakaran</th>
                        <th>NIDN</th>
                        <th>No. HP</th>
                        <th>Email</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      $query = mysqli_query($koneksi, "SELECT * FROM pengajar");
                      while ($result = mysqli_fetch_assoc($query)) {
                      ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $result['nama'] ?></td>
                          <td><?= $result['jabatan'] ?> </td>
                          <td><?= $result['bidang_kepakaran'] ?></td>
                          <td><?= $result['nidn'] ?></td>
                          <td><?= $result['no_telp'] ?></td>
                          <td><?= $result['email'] ?></td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit<?= $result['id_pengajar'] ?>">Edit</button>
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-hapus<?= $result['id_pengajar'] ?>">Hapus</button>
                            </div>


                            <!-- Modal Hapus -->
                            <div class="modal fade" id="modal-hapus<?= $result['id_pengajar'] ?>">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header" style="text-align: center">
                                    <h4 class="modal-title">Apakah Anda Yakin Untuk Menghapus Data Tersebut ?</h4>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                    <a href="lihat-dokter.php?idDokter=<?= $result['id_pengajar'] ?>">
                                      <button type="submit" name="hapus_dokter" class="btn btn-primary">Ya</button>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>


                            <!-- Modal Edit -->
                            <div class="modal fade" id="modal-edit<?= $result['id_pengajar'] ?>">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Edit Dokter <?= $result['nama'] ?></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <section class="content">
                                      <div class="container-fluid">
                                        <div class="card card-default">
                                          <!-- /.card-header -->
                                          <div class="card-body">
                                            <form method="POST" action="lihat-dokter.php">
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="col-md-6">

                                                    <!-- Nama Dokter -->
                                                    <label>Nama Dokter</label>
                                                    <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                      </div>
                                                      <input name="nama" type="text" class="form-control" placeholder="Nama Dokter" value="<?= $result['nama'] ?>">
                                                    </div>

                                                    <!-- Jabatan -->
                                                    <label>Jabatan</label>
                                                    <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                      </div>
                                                      <input name="jabatan" type="text" class="form-control" placeholder="Jabatan" value="<?= $result['jabatan'] ?>">
                                                    </div>

                                                    <!-- NIDN -->
                                                    <label>NIDN</label>
                                                    <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                      </div>
                                                      <input name="nidn" type="text" class="form-control" placeholder="NIDN" value="<?= $result['nidn'] ?>">
                                                    </div>
                                                  </div>


                                                  <div class="col-md-6">
                                                    <label>Bidang Kepakaran</label>
                                                    <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                      </div>
                                                      <input name="bidang_kepakaran" type="text" class="form-control" placeholder="Bidang Kepakaran" value="<?= $result['bidang_kepakaran'] ?>">
                                                    </div>
                                                    <!-- No. HP -->
                                                    <label>No. HP</label>
                                                    <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                      </div>
                                                      <input name="no_telp" type="text" class="form-control" placeholder="No. HP" value="<?= $result['no_telp'] ?>">
                                                    </div>

                                                    <!-- Email -->
                                                    <label>Email</label>
                                                    <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                      </div>
                                                      <input name="email" type="email" class="form-control" placeholder="Email" value="<?= $result['email'] ?>">
                                                    </div>
                                                    <input type="hidden" name="id_dokter" value="<?= $result['id_pengajar'] ?>">

                                                    <!-- Button -->
                                                    <div class="btn-group-toggle" style="width: 100px; float: right;">
                                                      <button name="edit_dokter" type="submit" class="btn btn-block bg-gradient-primary btn-lg" data-toggle="modal" data-target="#modal-default">Submit</button>
                                                    </div>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal-default">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">
                                                          <div class="modal-header" style="text-align: center">
                                                            <h4 class="modal-title" style="margin: auto">Data Berhasil Disimpan</h4>
                                                          </div>
                                                          <div class="modal-footer justify-content-between">
                                                            <a href="lihat-dokter.php">
                                                              <button type="button" class="btn btn-default">Kembali ke Lihat Dokter</button>
                                                            </a>
                                                            <a href="tambah-dokter.php">
                                                              <button type="button" class="btn btn-primary">Lanjut Tambah Dokter</button>
                                                            </a>
                                                          </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                      </div>
                                                      <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->

                                                    <!-- /.form-group -->
                                                    <!-- /.form-group -->
                                                  </div>
                                                </div>
                                                <!-- /.col -->
                                              </div>
                                            </form>
                                          </div>
                                          <!-- /.row -->
                                        </div>


                                        <!-- /.card -->
                                      </div>
                                    </section>
                                  </div>
                                </div>

                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                          </td>
                        </tr>
                      <?php } ?>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama Dokter</th>
                        <th>Jabatan</th>
                        <th>Bidang Kepakaran</th>
                        <th>NIDN</th>
                        <th>No. HP</th>
                        <th>Email</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
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