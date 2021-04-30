<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
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

$queryInsert = "INSERT INTO jadwal (id_pengajar, id_kelompok, id_blok, tanggal, jam, mata_kuliah, ruang_kelas, status, sesi, periode, angkatan) 
                VALUE ('$idDokter', '$idKelompok', '$idBlok', '$tanggal', '$jam', '$mataKuliah', '$ruangKelas', '$status', '$sesi', '$periode', '$angkatan')";
$msg = mysqli_query($koneksi, $queryInsert);
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
        <div class="container-fluid" style="background-color: #D9E1E8;">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tambah Jadwal</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Jadwal Kuliah</a></li>
                <li class="breadcrumb-item active">Tambah jadwal</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <form action="tambah-jadwal.php" method="POST">
          <div class="container-fluid">


            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">

              <!-- /.card-header -->
              <div class="card-body">
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
                          <option value="<?= $blok['id_blok'] ?>"><?= $blok['nama_blok'] ?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <!-- Angkatan -->
                    <div class="form-group">
                      <label>Angkatan</label>
                      <select class="form-control select2bs4" name="angkatan">
                        <option value="17">2017</option>
                        <option value="18">2018</option>
                      </select>
                    </div>

                    <!-- Date -->
                    <div class="form-group">
                      <label>Hari, Tanggal, Tahun</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input name="tanggal" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>

                    <!-- time Picker -->
                    <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <label>Waktu</label>
                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                          <input name="jam" type="text" class="form-control datetimepicker-input" data-target="#timepicker" />
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
                          <option value="<?= $kelompok['id_kelompok'] ?>"><?= $kelompok['nama_kelompok'] ?></option>
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
                        <input name="mata_kuliah" type="text" class="form-control" placeholder="Mata Kuliah">
                      </div>
                    </div>
                    <!-- /.form-group -->
                    <label>Ruang Kelas</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                      </div>
                      <input name="ruang_kelas" type="text" class="form-control" placeholder="Ruang Kelas">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                      <label for="exampleSelectRounded0">Sesi</label>
                      <select name="sesi" class="custom-select rounded-1" id="exampleSelectRounded0">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Dokter</label>
                      <select name="pengajar" class="form-control select2bs4" style="width: 100%;">
                        <?php
                        $queryDokter = mysqli_query($koneksi, "SELECT * FROM pengajar WHERE role = 1");
                        while ($dokter = mysqli_fetch_assoc($queryDokter)) {
                        ?>
                          <option value="<?= $dokter['id_pengajar'] ?>"><?= $dokter['nama'] ?></option>
                        <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleSelectRounded0">Status</label>
                      <select name="status" class="custom-select rounded-1" id="exampleSelectRounded0">
                        <option value="0">Pending</option>
                        <option value="1">Siap Belajar</option>
                        <option value="2">Batal</option>
                      </select>
                    </div>

                    <div class="btn-group-toggle" style="width: 100px; float: right;">
                      <button type="button" class="btn btn-block bg-gradient-primary btn-lg" data-toggle="modal" data-target="#modal-default">Submit</button>
                    </div>


                    <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" style="margin: auto;">Apakah Data yang anda masukan sudah benar?</h4>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" name="tambah_jadwal" class="btn btn-primary">Ya</button>
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
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>


            <!-- /.card -->
          </div>
        </form>
      </section>
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
  <?php include('script.php') ?>
</body>

</html>