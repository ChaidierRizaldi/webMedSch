<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MedSch | Tambah Jadwal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
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
                      <option selected="selected"></option>
                      <option>Blok 3.1 Kehamilan Dan Masalah Reproduksi</option>
                      <option>Blok 3.2 Masalah Pada Anak</option>
                      <option>Blok 3.3 Masalah Pada Remaja</option>
                      <option>Blok 3.4 Masalah Pada Dewasa I</option>
                      <option>Blok 3.5 Masalah pada Dewasa II</option>
                      <option>Blok 4.1 Seribu Hari Pertama Kehidupan </option>
                      <option>Blok 4.2 Kegawatdaruratan</option>
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

                  <!-- Date -->
                  <div class="form-group">
                    <label>Hari, Tanggal, Tahun</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
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
                      <input type="text" class="form-control" placeholder="Mata Kuliah">
                    </div>
                  </div>
                  <!-- /.form-group -->
                  <label>Ruang Kelas</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" class="form-control" placeholder="Mata Kuliah">
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
                    <button type="button" class="btn btn-block bg-gradient-primary btn-lg" data-toggle="modal" data-target="#modal-default">Submit</button>
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
              <!-- /.col -->
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>


          <!-- /.card -->
        </div>
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="plugins/dropzone/min/dropzone.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#reservationdate').datetimepicker({
        format: 'L'
      });

      //Date and time picker
      $('#reservationdatetime').datetimepicker({
        icons: {
          time: 'far fa-clock'
        }
      });

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function(start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })

      $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function() {
        myDropzone.enqueueFile(file)
      }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
      myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
  </script>
</body>

</html>