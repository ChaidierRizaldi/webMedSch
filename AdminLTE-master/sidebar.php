<head>
    <style>
        .notification {
            position: relative;
            display: inline-block;
        }

        .notification .badge {
            position: absolute;
            top: -10px;
            right: -6px;
            padding: 5px 10px;
            border-radius: 50%;
            background: red;
            color: white;
        }
    </style>
</head>
<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #84AECF;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
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
                <div class="notification">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT COUNT(status) AS jadwalDitolak FROM jadwal WHERE status = 2 ");
                    $data = mysqli_fetch_assoc($query);
                    if ($data['jadwalDitolak'] > 0) {
                    ?>
                        <span class="badge"><?= $data['jadwalDitolak'] ?></span>
                    <?php } ?>
                </div>

                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-week"></i>
                        <p>
                            Jadwal Kuliah
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="lihat-jadwal.php" class="nav-link notification">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <?php
                                if ($data['jadwalDitolak'] > 0) {
                                ?>
                                    <span class="badge" style="right: 70px; top: 10px;"><?= $data['jadwalDitolak'] ?></span>
                                <?php } ?>
                                <p>Lihat Jadwal</p>
                                <!-- <div class="notification"> -->

                                <!-- </div> -->
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