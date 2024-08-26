<?php
error_reporting(0);
require_once("koneksi.php");
session_start();

// Cek sesi pengguna
if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

// Cek status pengiriman form
$status = '';
if (isset($_GET['status'])) {
    $status = htmlspecialchars($_GET['status']);
}

// Proses data karyawan jika ada pengiriman form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['simpan'])) {
    $id_karyawan = $_POST['id_karyawan'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $tmp_tgl_lahir = $_POST['tmp_tgl_lahir'];
    $jenkel = $_POST['jenkel'];
    $agama = $_POST['agama'];
    $department = $_POST['department'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $jabatan = $_POST['jabatan'];

    // Simpan foto jika ada
    $foto = '';
    if (!empty($_FILES['foto']['name'])) {
        $foto = basename($_FILES['foto']['name']);
        $target = 'uploads/' . $foto;
        move_uploaded_file($_FILES['foto']['tmp_name'], $target);
    }

    // Simpan data ke database
    $sql = "INSERT INTO tb_karyawan (id_karyawan, username, password, nama, tmp_tgl_lahir, jenkel, agama, department, tgl_masuk, jabatan, foto) 
            VALUES ('$id_karyawan', '$username', '$password', '$nama', '$tmp_tgl_lahir', '$jenkel', '$agama', '$department', '$tgl_masuk', '$jabatan', '$foto')";
    
    if (mysqli_query($koneksi, $sql)) {
        header("Location: datakaryawan.php?status=success");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Karyawan</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="css/theme.css" rel="stylesheet" media="all">

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda
                            </a>
                        </li>
                        <li>
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan
                            </a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data User
                            </a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan
                            </a>
                        </li>
                        <li>
                            <a href="datakarir.php">
                                <i class="far fa-suitcase"></i>Data Karir</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h2>Admin</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda
                            </a>
                        </li>
                        <li class="active">
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan
                            </a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data User
                            </a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan
                            </a>
                        </li>
                        <li>
                            <a href="datakarir.php">
                                <i class="far fa-suitcase"></i>Data Karir</a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="prospenkar.php" method="POST">
                                <input class="au-input au-input--xl" autocomplete="off" type="text" name="cari" placeholder="Cari ID atau nama karyawan" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php if ($status == 'success'): ?>
                            <div class="alert alert-success" role="alert">
                                Data karyawan berhasil disimpan!
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="table-responsive table--no-card m-b-30">
                                <form action="datakaryawan.php" enctype="multipart/form-data" method="post">
                                    <table class="table table-borderless table-striped table-earning">
                                        <tbody>
                                            <tr>
                                                <td>NIP</td>
                                                <td>
                                                    <input type="text" class="form-control" maxlength="9" required="" name="id_karyawan" autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td>
                                                    <input type="text" class="form-control" required="" name="username" autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    <input type="password" class="form-control" required="" name="password" autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pekerja</td>
                                                <td><input type="text" class="form-control" required="" name="nama" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td><input type="text" class="form-control" required="" name="tmp_tgl_lahir" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>
                                                    <select class="form-control" required="" name="jenkel">
                                                        <option>-- Pilih --</option>
                                                        <option>Laki-laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td>
                                                    <select class="form-control" required="" name="agama">
                                                        <option>-- Pilih --</option>
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Katholik</option>
                                                        <option>Hindu</option>
                                                        <option>Buddha</option>
                                                        <option>KongHuCu</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Department</td>
                                                <td><textarea class="form-control" required="" name="department" autocomplete="off"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Bergabung</td>
                                                <td><input type="text" class="form-control" maxlength="18" required="" name="tgl_masuk" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>Jabatan</td>
                                                <td>
                                                    <select class="form-control" name="jabatan" required="">
                                                        <?php
                                                        include 'koneksi.php';
                                                        $sql = "SELECT * FROM tb_jabatan";
                                                        $hasil = mysqli_query($koneksi, $sql);
                                                        while ($data = mysqli_fetch_array($hasil)) {
                                                            echo "<option value='" . htmlspecialchars($data['jabatan']) . "'>" . htmlspecialchars($data['jabatan']) . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Foto</td>
                                                <td><input type="file" name="foto" required=""></td>
                                            </tr>
                                            <tr>
                                                <td><button type="submit" name="simpan" class="btn btn-primary">Simpan</button></td>
                                                <td><input type="reset" name="" value="Batal" class="btn btn-danger"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                                 </div>
                                </form>
                                    </div>
                        </div>
                        <?php

                        $query1 = "SELECT * FROM tb_karyawan ORDER BY id_karyawan";
                        $pola = 'asc';
                        $polabaru = 'asc';

                        if (isset($_GET['orderby'])) {
                            $orderby = $_GET['orderby'];
                            $pola = $_GET['pola'];

                            $query1 = "SELECT * FROM tb_karyawan ORDER BY $orderby $pola";
                            mysqli_query($koneksi, $query1);
                            $polabaru = $pola == 'asc' ? 'desc' : 'asc';
                        }
                        ?>
                        <div class="row">
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama Pekerja</th>
                                            <th>Tanggal lahir</th>
                                            <th class="text-right">Jenis Kelamin</th>
                                            <th class="text-right">Agama</th>
                                            <th>Department</th>
                                            <th>Tanggal Bergabung</th>
                                            <th>Jabatan</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'paging.php';
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" <?php if ($halaman > 1) { echo "href='?halaman=$Previous'"; } ?>>Previous</a>
                            </li>
                            <?php
                            for ($x = 1; $x <= $total_halaman; $x++) {
                                echo "<li class='page-item'><a class='page-link' href='?halaman=$x'>$x</a></li>";
                            }
                            ?>
                            <li class="page-item">
                                <a class="page-link" <?php if ($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                            </li>
                        </ul>

                        <div class="row">
                            <div class="col-lg-6">
                        </div>
                        <div class="col-lg-6">
                        </div>
                        <div class="col-md-12">
                        </div>
                    </div>
                    <div class="row-m-t-30">
                        <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>

</html>