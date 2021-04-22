<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MedSch | Lihat Jadwal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

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
    <aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #84AECF;">
      <!-- Brand Logo -->
      <a href="dashboard.php" class="brand-link">
        <img src="dist/img/logo-skripsi.png" alt="AdminLTE Logo" class="brand-image ">
        <span class="brand-text font-weight-light">&nbsp; Web Version</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/profile-admin.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-calendar-week"></i>
                <p>
                  Jadwal Kuliah
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="lihat-jadwal.php" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Lihat Jadwal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="assign-kelompok-mahasiswa.php" class="nav-link">
                    <i class="nav-icon fas fa-user-friends"></i>
                    <p>Assign Kelompok</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="tambah-jadwal.php" class="nav-link">
                    <i class="nav-icon fas fa-calendar-plus"></i>
                    <p>Tambah Jadwal</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-address-book"></i>
                <p>
                  Daftar Dokter
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="lihat-dokter.php" class="nav-link">
                    <i class="nav-icon fas fa-list-ul"></i></span>
                    <p>Lihat Dokter</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="tambah-dokter.php" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i></span>
                    <p>Tambah Dokter</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>
      <!-- /.sidebar -->
    </aside>

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
                    <form action="">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="row">
                              <div style="text-align: center; padding: 6px">
                                <label>Periode</label>
                              </div>
                              <select class="form-control select2bs4 input-group-sm" style="width: 40%;">
                                <option selected="selected">2020/2021 - Genap</option>
                                <option>2020/2021 - Genap</option>
                                <option>2020/2021 - Ganjil</option>
                                <option>2019/2020 - Genap</option>
                                <option>2019/2020 - Ganjil</option>
                                <option>2018/2019 - Genap</option>
                                <option>2018/2019 - Ganjil</option>
                                <option>2017/2018 - Genap</option>
                                <option>2017/2018 - Ganjil</option>
                              </select>
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6">
                          <!-- /.form-group -->
                          <div style="float: right;">
                            <div class="form-group">
                              <div class="row">
                                <div style="padding: 6px; min-width: 80px">
                                  <label>Blok</label>
                                </div>
                                <select class="form-control select2bs4" style="width: 70%;">
                                  <option selected="selected">Blok 3.3 Masalah Pada Remaja</option>
                                  <option>Blok 3.3 Masalah Pada Remaja</option>
                                  <option>Blok 3.4 Masalah Pada Dewasa I</option>
                                  <option>Blok 3.5 Masalah pada Dewasa II</option>
                                  <option>Blok 4.1 Seribu Hari Pertama Kehidupan </option>
                                  <option>Blok 4.2 Kegawatdaruratn</option>
                                  <option>Blok 4.3 Komprehensif Klinik</option>
                                  <option>Blok 4.4 Kesehatan Masyarakat</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div style="padding: 6px; margin-right: 2px;">
                                  <label>Angkatan</label>
                                </div>
                                <select class="form-control select2bs4" style="width: 70%;">
                                  <option selected="selected">2017</option>
                                  <option>2018</option>
                                </select>
                              </div>
                            </div>
                          </div>


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
                          <th>Hari</th>
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
                        <tr>
                          <td>Senin</td>
                          <td>08.00 - 08.00<br />
                            09.00 - 09.50
                          </td>
                          <td>PA: Tumor pada, mata, hidung, dan kulit </td>
                          <td>Fakultas Kedokteran UII</td>
                          <td>1</td>
                          <td>Dokter Default</td>
                          <td>Siap belajar</td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit">Edit</button>
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-hapus">Hapus</button>
                            </div>

                            <div class="modal fade" id="modal-hapus">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" style="margin: auto;">Apakah Anda Yakin Untuk Menghapus Data Tersebut ?</h4>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                    <a href="lihat-jadwal.php">
                                      <button type="button" class="btn btn-primary">Ya</button>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="modal fade" id="modal-edit">
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <form action="#">
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
                                              <form action="">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                    <!-- Periode -->
                                                    <div class="form-group">
                                                      <label>Periode</label>
                                                      <select class="form-control select2bs4" style="width: 100%;">
                                                        <option selected="selected">2020/2021 - Genap</option>
                                                        <option>2020/2021 - Genap</option>
                                                        <option>2020/2021 - Ganjil</option>
                                                        <option>2019/2020 - Genap</option>
                                                        <option>2019/2020 - Ganjil</option>
                                                        <option>2018/2019 - Genap</option>
                                                        <option>2018/2019 - Ganjil</option>
                                                        <option>2017/2018 - Genap</option>
                                                        <option>2017/2018 - Ganjil</option>
                                                      </select>
                                                    </div>

                                                    <!-- Blok -->
                                                    <div class="form-group">
                                                      <label>Blok</label>
                                                      <select class="form-control select2bs4" style="width: 100%;">
                                                        <option selected="selected">Blok 3.3 Masalah Pada Remaja</option>
                                                        <option>Blok 3.3 Masalah Pada Remaja</option>
                                                        <option>Blok 3.4 Masalah Pada Dewasa I</option>
                                                        <option>Blok 3.5 Masalah pada Dewasa II</option>
                                                        <option>Blok 4.1 Seribu Hari Pertama Kehidupan </option>
                                                        <option>Blok 4.2 Kegawatdaruratn</option>
                                                        <option>Blok 4.3 Komprehensif Klinik</option>
                                                        <option>Blok 4.4 Kesehatan Masyarakat</option>
                                                      </select>
                                                    </div>

                                                    <!-- Angkatan -->
                                                    <div class="form-group">
                                                      <label>Angkatan</label>
                                                      <select class="form-control select2bs4">
                                                        <option selected="selected">2017</option>
                                                        <option>2018</option>
                                                      </select>
                                                    </div>

                                                    <!-- Hari, Tanggal, Tahun -->
                                                    <div class="form-group">
                                                      <label>Hari, Tanggal, Tahun</label>
                                                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Waktu -->
                                                    <div class="bootstrap-timepicker">
                                                      <div class="form-group">
                                                        <label>Waktu</label>
                                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                                          <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" />
                                                          <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="form-group">
                                                      <label>Mata Kuliah</label>
                                                      <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                        </div>
                                                        <input type="email" class="form-control" placeholder="Mata Kuliah">
                                                      </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <label>Ruang Kelas</label>
                                                    <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                      </div>
                                                      <input type="email" class="form-control" placeholder="Ruang Kelas">
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <div class="form-group">
                                                      <label for="exampleSelectRounded0">Sesi</label>
                                                      <select class="custom-select rounded-1" id="exampleSelectRounded0">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                      </select>
                                                    </div>

                                                    <div class="form-group">
                                                      <label>Dokter</label>
                                                      <select class="form-control select2bs4" style="width: 100%;">
                                                        <option selected="selected">2020/2021 - Genap</option>
                                                        <option>2020/2021 - Genap</option>
                                                        <option>2020/2021 - Ganjil</option>
                                                        <option>2019/2020 - Genap</option>
                                                        <option>2019/2020 - Ganjil</option>
                                                        <option>2018/2019 - Genap</option>
                                                        <option>2018/2019 - Ganjil</option>
                                                        <option>2017/2018 - Genap</option>
                                                        <option>2017/2018 - Ganjil</option>
                                                        <option>2020/2021 - Genap</option>
                                                        <option>2020/2021 - Ganjil</option>
                                                        <option>2019/2020 - Genap</option>
                                                        <option>2019/2020 - Ganjil</option>
                                                        <option>2018/2019 - Genap</option>
                                                        <option>2018/2019 - Ganjil</option>
                                                        <option>2017/2018 - Genap</option>
                                                        <option>2017/2018 - Ganjil</option>
                                                      </select>
                                                    </div>

                                                    <div class="form-group">
                                                      <label for="exampleSelectRounded0">Status</label>
                                                      <select class="custom-select rounded-1" id="exampleSelectRounded0">
                                                        <option>Siap Belajar</option>
                                                        <option>Pending</option>
                                                        <option>Batal</option>
                                                      </select>
                                                    </div>

                                                    <div class="btn-group-toggle" style="width: 100px; float: right;">
                                                      <button type="button" class="btn btn-block bg-gradient-primary btn-lg" data-toggle="modal" data-target="#modal-default" data-dismiss="modal">Submit</button>
                                                    </div>
                                                    <!-- /.modal -->

                                                    <!-- /.form-group -->
                                                    <!-- /.form-group -->
                                                  </div>
                                                </div>
                                                <!-- /.col -->
                                                <!-- /.col -->
                                            </div>
                                  </form>
                                  <!-- /.row -->
                                </div>


                                <!-- /.card -->
                              </div>
      </section>
    </div>

    </form>
  </div>

  <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  </td>
  </div>
  </tr>

  <tr>
    <td>Selasa</td>
    <td>10.00 - 10.50<br />
      11.00 - 11.50
    </td>
    <td>Tutorial Skenario 4</td>
    <td>Fakultas Kedokteran UII</td>
    <td>2</td>
    <td>Dokter Default</td>
    <td>Siap belajar</td>
    <td>
      <div class="btn-group">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit1">Edit</button>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-hapus">Hapus</button>
      </div>

      <div class="modal fade" id="modal-hapus">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="margin: auto;">Apakah Anda Yakin Untuk Menghapus Data Tersebut ?</h4>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <a href="lihat-jadwal.php">
                <button type="button" class="btn btn-primary">Ya</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-edit1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <form action="#">
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
                        <form action="">
                          <div class="row">
                            <div class="col-md-6">
                              <!-- Periode -->
                              <div class="form-group">
                                <label>Periode</label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                  <option selected="selected">2020/2021 - Genap</option>
                                  <option>2020/2021 - Genap</option>
                                  <option>2020/2021 - Ganjil</option>
                                  <option>2019/2020 - Genap</option>
                                  <option>2019/2020 - Ganjil</option>
                                  <option>2018/2019 - Genap</option>
                                  <option>2018/2019 - Ganjil</option>
                                  <option>2017/2018 - Genap</option>
                                  <option>2017/2018 - Ganjil</option>
                                </select>
                              </div>

                              <!-- Blok -->
                              <div class="form-group">
                                <label>Blok</label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                  <option selected="selected">Blok 3.3 Masalah Pada Remaja</option>
                                  <option>Blok 3.3 Masalah Pada Remaja</option>
                                  <option>Blok 3.4 Masalah Pada Dewasa I</option>
                                  <option>Blok 3.5 Masalah pada Dewasa II</option>
                                  <option>Blok 4.1 Seribu Hari Pertama Kehidupan </option>
                                  <option>Blok 4.2 Kegawatdaruratn</option>
                                  <option>Blok 4.3 Komprehensif Klinik</option>
                                  <option>Blok 4.4 Kesehatan Masyarakat</option>
                                </select>
                              </div>

                              <!-- Angkatan -->
                              <div class="form-group">
                                <label>Angkatan</label>
                                <select class="form-control select2bs4">
                                  <option selected="selected">2017</option>
                                  <option>2018</option>
                                </select>
                              </div>

                              <!-- Hari, Tanggal, Tahun -->
                              <div class="form-group">
                                <label>Hari, Tanggal, Tahun</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>

                              <!-- Waktu -->
                              <div class="bootstrap-timepicker">
                                <div class="form-group">
                                  <label>Waktu</label>
                                  <div class="input-group date" id="timepicker" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" />
                                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Mata Kuliah</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                  </div>
                                  <input type="email" class="form-control" placeholder="Mata Kuliah">
                                </div>
                              </div>
                              <!-- /.form-group -->
                              <label>Ruang Kelas</label>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                </div>
                                <input type="email" class="form-control" placeholder="Ruang Kelas">
                              </div>
                              <!-- /.form-group -->
                              <div class="form-group">
                                <label for="exampleSelectRounded0">Sesi</label>
                                <select class="custom-select rounded-1" id="exampleSelectRounded0">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Dokter</label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                  <option selected="selected">2020/2021 - Genap</option>
                                  <option>2020/2021 - Genap</option>
                                  <option>2020/2021 - Ganjil</option>
                                  <option>2019/2020 - Genap</option>
                                  <option>2019/2020 - Ganjil</option>
                                  <option>2018/2019 - Genap</option>
                                  <option>2018/2019 - Ganjil</option>
                                  <option>2017/2018 - Genap</option>
                                  <option>2017/2018 - Ganjil</option>
                                  <option>2020/2021 - Genap</option>
                                  <option>2020/2021 - Ganjil</option>
                                  <option>2019/2020 - Genap</option>
                                  <option>2019/2020 - Ganjil</option>
                                  <option>2018/2019 - Genap</option>
                                  <option>2018/2019 - Ganjil</option>
                                  <option>2017/2018 - Genap</option>
                                  <option>2017/2018 - Ganjil</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleSelectRounded0">Status</label>
                                <select class="custom-select rounded-1" id="exampleSelectRounded0">
                                  <option>Siap Belajar</option>
                                  <option>Pending</option>
                                  <option>Batal</option>
                                </select>
                              </div>

                              <div class="btn-group-toggle" style="width: 100px; float: right;">
                                <button type="button" class="btn btn-block bg-gradient-primary btn-lg" data-toggle="modal" data-target="#modal-default" data-dismiss="modal">Submit</button>
                              </div>
                              <!-- /.modal -->

                              <!-- /.form-group -->
                              <!-- /.form-group -->
                            </div>
                          </div>
                          <!-- /.col -->
                          <!-- /.col -->
                      </div>
            </form>
            <!-- /.row -->
          </div>


          <!-- /.card -->
        </div>
        </section>
      </div>

      </form>
      </div>

      <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </td>
    </div>
  </tr>

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