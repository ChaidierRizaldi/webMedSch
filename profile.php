<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
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
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <!-- /.form-group -->
                      <label>Kata Sandi Lama</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="password" class="form-control" placeholder="Kata Sandi Lama">
                      </div>

                      <label>Kata Sandi Baru</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="password" class="form-control" placeholder="Kata Sandi Baru">
                      </div>

                      <label>Konfirmasi Kata Sandi Baru</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="pasword" class="form-control" placeholder="Konfirmasi Kata Sandi Baru">
                      </div>


                      <div class="btn-group-toggle" style="width: 100px; float: right;">
                        <button type="button" class="btn btn-block bg-gradient-primary btn-lg" data-toggle="modal" data-target="#modal-default">Submit</button>
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

                              <button type="button" class="btn btn-primary">Lanjut Tambah Jadwal</button>
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

</html>