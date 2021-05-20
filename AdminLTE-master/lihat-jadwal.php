<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');

$periodeArr = [
  '2020/2021 - Genap',
  '2020/2021 - Ganjil',
  '2019/2020 - Genap',
  '2019/2020 - Ganjil',
  '2018/2019 - Genap',
  '2018/2019 - Ganjil',
  '2017/2018 - Genap',
  '2017/2018 - Ganjil'
];

// FILTER JADWAL
$filterBlok = null;
$filterAngkatan = null;
$filterPeriode = null;
$id_jadwal = null;

$query1 = "SELECT * FROM jadwal AS j
          INNER JOIN pengajar AS p ON p.id_pengajar = j.id_pengajar 
          INNER JOIN kelompok as kl ON kl.id_kelompok = j.id_kelompok";

if (isset($_POST['tampilkanJadwal'])) {
  $filterBlok = $_POST['id_blok'];
  $filterAngkatan = $_POST['filter_angkatan'];
  $filterPeriode = $_POST['filter_periode'];

  $query1 = "SELECT * FROM jadwal AS j
            INNER JOIN pengajar AS p ON p.id_pengajar = j.id_pengajar 
            INNER JOIN kelompok as kl ON kl.id_kelompok = j.id_kelompok 
            WHERE j.id_blok = $filterBlok AND j.angkatan = $filterAngkatan AND j.periode = '$filterPeriode'";
}

if (isset($_POST['tampilkanSemua'])) {
  $filterBlok = null;
  $filterAngkatan = null;
  $filterPeriode = null;
  $id_jadwal = null;
}

if (isset($_POST['jadwalDitolak'])) {
  $filterBlok = null;
  $filterAngkatan = null;
  $filterPeriode = null;
  $id_jadwal = null;

  $query1 = "SELECT * FROM jadwal AS j
  INNER JOIN pengajar AS p ON p.id_pengajar = j.id_pengajar 
  INNER JOIN kelompok as kl ON kl.id_kelompok = j.id_kelompok WHERE status = 2";
}

// UPDATE JADWAL
if (isset($_POST['update_jadwal'])) {
  $id_jadwal = $_POST['idJadwal'];
  $idKelompok = $_POST['kelompok'];
  $periode = $_POST['periode'];
  $idBlok = $_POST['blok'];
  $angkatan = $_POST['angkatan'];
  $date = str_replace('/', '-', $_POST['tanggal']);
  $tanggal = date('Y/m/d');
  $jam = $_POST['jam'];
  $mataKuliah = $_POST['mata_kuliah'];
  $ruangKelas = $_POST['ruang_kelas'];
  $sesi = $_POST['sesi'];
  $idDokter = $_POST['pengajar'];
  $status = $_POST['status'];
  $idJadwal = $_POST['id_jadwal'];

  $updateJadwal = mysqli_query($koneksi, "UPDATE jadwal 
                        SET id_kelompok = '$idKelompok', periode = '$periode', id_blok = '$idBlok',
                        angkatan = '$angkatan', tanggal = '$tanggal', jam = '$jam', mata_kuliah = '$mataKuliah',
                        ruang_kelas = '$ruangKelas', sesi = '$sesi', id_pengajar = '$idDokter', status = '$status'
                        WHERE id_jadwal = '$idJadwal'");

  // var_dump($updateJadwal);
}
// HAPUS JADWAL
if (isset($_GET['id_jadwal'])) {
  mysqli_query($koneksi, "DELETE FROM jadwal WHERE id_jadwal = '$id_jadwal'");
  $id_jadwal = '';
}

?>

<head>
  <link rel="stylesheet" type="text/css" href="dist/css/style.css">
</head>

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
              <h1>Lihat Jadwal</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Jadwal Kuliah</a></li>
                <li class="breadcrumb-item active">Lihat Jadwal</li>
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


                  <div class="card-body">
                    <form action="lihat-jadwal.php" method="POST">
                      <div class="row">
                        <div class="col-md-7">
                          <div class="form-group">
                            <div class="row">
                              <div style="text-align: center; padding: 6px">
                                <label>Periode</label>
                              </div>
                              <select name="filter_periode" class="form-control select2bs4 input-group-sm" style="width: 40%;">
                                <option value="0">Pilih Periode</option>
                                <?php
                                foreach ($periodeArr as $value) {
                                ?>
                                  <option <?= $value == $filterPeriode ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
                                <?php } ?>
                              </select>
                            </div>

                            <div class="row">
                              <div style="padding: 6px; min-width: 66px">
                                <label>Blok</label>
                              </div>
                              <select name="id_blok" class="form-control select2bs4" style="width: 40%;">
                                <option value="0">Pilih Blok</option>
                                <?php
                                $queryBlok = mysqli_query($koneksi, "SELECT * FROM blok");
                                while ($blok = mysqli_fetch_assoc($queryBlok)) {
                                ?>
                                  <option <?= $filterBlok == $blok['id_blok'] ? 'selected' : '' ?> value="<?= $blok['id_blok'] ?>"><?= $blok['nama_blok'] ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                        </div>


                        <div class="col-md-5">
                          <!-- /.form-group -->
                          <!-- <div style="float: right;"> -->
                          <div class="form-group" style="float: right">
                            <div class="row">
                              <div style="padding: 6px; margin-right: 2px;">
                                <label>Angkatan</label>
                              </div>
                              <select name="filter_angkatan" class="form-control select2bs4" style="width: 60%;">
                                <option value="0">Pilih Angkatan</option>
                                <option <?= $filterAngkatan == 17 ? 'selected' : '' ?> value="17">2017</option>
                                <option <?= $filterAngkatan == 18 ? 'selected' : '' ?> value="18">2018</option>
                              </select>
                            </div>
                            <div>
                              <button name="tampilkanSemua" type="submit" class="btn btn-primary">Tampilkan Semua</button>
                              <button name="tampilkanJadwal" type="submit" class="btn btn-primary">Tampilkan Filter</button>

                              <button name="jadwalDitolak" type="submit" class="btn btn-danger notification">
                                <?php
                                $query = mysqli_query($koneksi, "SELECT COUNT(status) AS jadwalDitolak FROM jadwal WHERE status = 2 ");
                                $data = mysqli_fetch_assoc($query);
                                if ($data['jadwalDitolak'] > 0) {
                                ?>
                                  <span class="badge"><?= $data['jadwalDitolak'] ?></span>
                                <?php } ?></span>Jadwal Ditolak</button>
                            </div>
                          </div>
                          <!-- </div> -->
                          <!-- /.modal -->

                          <!-- /.form-group -->
                          <!-- /.form-group -->
                        </div>
                      </div>
                      <!-- /.col -->
                      <!-- /.col -->
                    </form>
                  </div>



                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <div class="input-group">

                      <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>Waktu</th>
                          <th>Matakuliah</th>
                          <th>Ruang Kelas</th>
                          <th>Sesi</th>
                          <th>Dokter</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $queryJadwal = mysqli_query($koneksi, $query1);
                        while ($jadwal = mysqli_fetch_assoc($queryJadwal)) {
                        ?>
                          <tr>
                            <td><?= $jadwal['tanggal'] ?></td>
                            <td><?= $jadwal['jam'] ?>
                            </td>
                            <td><?= $jadwal['mata_kuliah'] ?></td>
                            <td><?= $jadwal['ruang_kelas'] ?></td>
                            <td><?= $jadwal['sesi'] ?></td>
                            <td><?= $jadwal['nama'] ?></td>
                            <td><?php if ($jadwal['status'] == '0') {
                                  echo 'Pending';
                                } else if ($jadwal['status'] == '1') {
                                  echo 'Siap Belajar';
                                } else {
                                  echo 'Ditolak';
                                } ?></td>
                            <td>
                              <div class="btn-group">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit<?= $jadwal['id_jadwal'] ?>">Edit</button>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-hapus<?= $jadwal['id_jadwal'] ?>">Hapus</button>
                              </div>

                              <div class="modal fade" id="modal-hapus<?= $jadwal['id_jadwal'] ?>">
                                <!-- <input type="hidden" name="id_jadwal" value="<?= $jadwal['id_jadwal'] ?>"> -->
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title" style="margin: auto;">Apakah Anda Yakin Untuk Menghapus Data Tersebut ?</h4>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                      <a href="lihat-jadwal.php?idJadwal=<?= $jadwal['id_jadwal'] ?>">
                                        <button type="button" class="btn btn-primary">Ya</button>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="modal fade" id="modal-edit<?= $jadwal['id_jadwal'] ?>">
                                <div class="modal-dialog modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Edit Jadwal</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <section class="content">
                                        <div class="container-fluid">


                                          <!-- SELECT2 EXAMPLE -->
                                          <div class="card card-default">

                                            <!-- /.card-header -->
                                            <div class="card-body">
                                              <form action="lihat-jadwal.php" method="POST">
                                                <div class="row">
                                                  <div class="col-md-6">

                                                    <!-- Periode -->
                                                    <div class="form-group">
                                                      <label>Periode</label>
                                                      <select name="periode" class="form-control select2bs4" style="width: 100%;">
                                                        <option value="2020/2021 - Genap" selected="selected">2020/2021 - Genap</option>
                                                        <option value="2020/2021 - Ganjil">2020/2021 - Ganjil</option>
                                                        <option value="2019/2020 - Genap">2019/2020 - Genap</option>
                                                        <option value="2019/2020 - Ganjil">2019/2020 - Ganjil</option>
                                                        <option value="2018/2019 - Genap">2018/2019 - Genap</option>
                                                        <option value="2018/2019 - Ganjil">2018/2019 - Ganjil</option>
                                                        <option value="2017/2018 - Genap">2017/2018 - Genap</option>
                                                        <option value="2017/2018 - Ganjil">2017/2018 - Ganjil</option>
                                                      </select>
                                                    </div>


                                                    <!-- Blok -->
                                                    <div class="form-group">
                                                      <label>Blok</label>
                                                      <select name="blok" class="form-control select2bs4" style="width: 100%;">
                                                        <?php $queryBlok = mysqli_query($koneksi, "SELECT * FROM blok");
                                                        while ($blok = mysqli_fetch_assoc($queryBlok)) {
                                                        ?>
                                                          <option value="<?= $blok['id_blok'] ?>" <?= $jadwal['id_blok'] == $blok['id_blok'] ? 'selected' : '' ?>><?= $blok['nama_blok'] ?></option>
                                                        <?php } ?>
                                                      </select>
                                                    </div>

                                                    <!-- Angkatan -->
                                                    <div class="form-group">
                                                      <label>Angkatan</label>
                                                      <select class="form-control select2bs4" name="angkatan">
                                                        <option <?= $jadwal['angkatan'] == 17 ? 'selected' : '' ?> value="17">2017</option>
                                                        <option <?= $jadwal['angkatan'] == 18 ? 'selected' : '' ?> value="18">2018</option>
                                                      </select>
                                                    </div>

                                                    <!-- Date -->
                                                    <div class="form-group">
                                                      <label>Hari, Tanggal, Tahun</label>
                                                      <input name="tanggal" type="date" class="form-control" value="<?= str_replace('/', '-', $jadwal['tanggal']) ?>" />
                                                    </div>

                                                    <!-- time Picker -->
                                                    <div class="bootstrap-timepicker">
                                                      <div class="form-group">
                                                        <label>Waktu</label>
                                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                                          <input name="jam" type="text" class="form-control datetimepicker-input" data-target="#timepicker" value="<?= $jadwal['jam'] ?>" />
                                                          <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleSelectRounded0">Kelompok</label>
                                                      <select name="kelompok" class="custom-select rounded-1" id="exampleSelectRounded0">
                                                        <?php
                                                        $queryKelompok = mysqli_query($koneksi, "SELECT * FROM kelompok");
                                                        while ($kelompok = mysqli_fetch_assoc($queryKelompok)) {
                                                        ?>
                                                          <option value="<?= $kelompok['id_kelompok'] ?>" <?= $jadwal['id_kelompok'] == $kelompok['id_kelompok'] ? 'selected' : '' ?>><?= $kelompok['nama_kelompok'] ?></option>
                                                        <?php } ?>
                                                      </select>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label>Mata Kuliah</label>
                                                      <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                        </div>
                                                        <input name="mata_kuliah" type="text" class="form-control" placeholder="Mata Kuliah" value="<?= $jadwal['mata_kuliah'] ?>">
                                                      </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <label>Ruang Kelas</label>
                                                    <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                      </div>
                                                      <input name="ruang_kelas" type="text" class="form-control" placeholder="Ruang Kelas" value="<?= $jadwal['ruang_kelas'] ?>">
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">

                                                      <label for="exampleSelectRounded0">Sesi</label>
                                                      <select name="sesi" class="custom-select rounded-1" id="exampleSelectRounded0">
                                                        <?php
                                                        $sesiArr = ['1', '2', '3', '4'];
                                                        foreach ($sesiArr as $value) {
                                                        ?>
                                                          <option <?= $value == $jadwal['sesi'] ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
                                                        <?php } ?>
                                                      </select>
                                                    </div>

                                                    <div class="form-group">
                                                      <label>Dokter</label>
                                                      <select name="pengajar" class="form-control select2bs4" style="width: 100%;">
                                                        <?php
                                                        $queryDokter = mysqli_query($koneksi, "SELECT * FROM pengajar WHERE role = 1");
                                                        while ($dokter = mysqli_fetch_assoc($queryDokter)) {
                                                        ?>
                                                          <option value="<?= $dokter['id_pengajar'] ?>" <?= $jadwal['id_pengajar'] == $dokter['id_pengajar'] ? 'selected' : '' ?>><?= $dokter['nama'] ?></option>
                                                        <?php } ?>
                                                      </select>
                                                    </div>

                                                    <div class="form-group">
                                                      <label for="exampleSelectRounded0">Status</label>
                                                      <select name="status" class="custom-select rounded-1" id="exampleSelectRounded0">
                                                        <?php
                                                        $statusArr = ['0' => 'Pending', '1' => 'Siap Belajar', '2' => 'Ditolak'];
                                                        foreach ($statusArr as $key => $value) {
                                                          var_dump($value)
                                                        ?>
                                                          <option <?= $key == $jadwal['status'] ? 'selected' : '' ?> value="<?= $key ?>"><?= $value ?></option>
                                                        <?php } ?>
                                                        <!-- <option value="0">Pending</option>
                                                        <option value="1">Siap Belajar</option>
                                                        <option value="2">Batal</option> -->
                                                      </select>
                                                    </div>
                                                    <div class="form-group">

                                                      <label for="exampleSelectRounded0">Note</label>
                                                      <input class="form-control" type="textarea" name="note" disabled value="<?= $jadwal['note'] ?>">
                                                    </div>
                                                    <input type="hidden" name="id_jadwal" value="<?= $jadwal['id_jadwal'] ?>">

                                                    <div class="btn-group-toggle" style="width: 100px; float: right;">
                                                      <button type="submit" name="update_jadwal" class="btn btn-block bg-gradient-primary btn-lg" data-toggle="modal" data-target="#modal-default">Submit</button>
                                                    </div>


                                                    <div class="modal fade" id="modal-default">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h4 class="modal-title" style="margin: auto;">Data Berhasil Disimpan</h4>
                                                          </div>
                                                          <div class="modal-footer justify-content-between">
                                                            <a href="lihat-jadwal.php">
                                                              <button type="button" class="btn btn-default">Kembali ke Lihat Jadwal</button>
                                                            </a>
                                                            <a href="tambah-jadwal.php">
                                                              <button type="button" class="btn btn-primary">Lanjut Tambah Jadwal</button>
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
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </section>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- /.modal -->
                            </td>
                          </tr>
                        <?php } ?>
                      <tfoot>
                        <tr>
                          <th>Hari</th>
                          <th>Waktu</th>
                          <th>Matakuliah</th>
                          <th>Ruang Kelas</th>
                          <th>Sesi</th>
                          <th>Dokter</th>
                          <th>Status</th>
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