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

// Proses data karir jika ada pengiriman form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['simpan'])) {
    $id_karir = htmlspecialchars($_POST['id_karir']);
    $performance = htmlspecialchars($_POST['performance']);
    $career_history = htmlspecialchars($_POST['career_history']);
    $rewards_punishments = htmlspecialchars($_POST['rewards_punishments']);
    $task_force = htmlspecialchars($_POST['task_force']);
    $training = htmlspecialchars($_POST['training']);
    $kinerja = htmlspecialchars($_POST['kinerja']);     

    // Pastikan semua field diisi
    if (!empty($id_karir) && !empty($performance) && !empty($career_history) && !empty($rewards_punishments) && !empty($task_force) && !empty($training) && !empty($kinerja)) {
        // Gunakan prepared statements untuk keamanan
        $stmt = $koneksi->prepare("INSERT INTO tb_karir (id_karir, performance, career_history, rewards_punishments, task_force, training, kinerja) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssss", $id_karir, $performance, $career_history, $rewards_punishments, $task_force, $training, $kinerja);
        
        if ($stmt->execute()) {
            header("Location: datakarir.php?status=success");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "<script>alert('Semua field harus diisi.');</script>";
    }
}

// Proses penghapusan data jika ada permintaan
if (isset($_GET['id_karir'])) {
    $id_karir = htmlspecialchars($_GET['id_karir']);
    $stmt = $koneksi->prepare("DELETE FROM tb_karir WHERE id_karir = ?");
    $stmt->bind_param("i", $id_karir);
    
    if ($stmt->execute()) {
        header("Location: datakarir.php?status=deleted");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>Data Karir</title>

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
                        <li class="active">
                            <a href="datakarir.php">
                                <i class="far fa-suitcase"></i>Data Karir
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
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
                        <li class="active">
                            <a href="datakarir.php">
                                <i class="far fa-suitcase"></i>Data Karir
                            </a>
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
                            <!-- Header content here if needed -->
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
                                Data Karir berhasil disimpan!
                            </div>
                        <?php elseif ($status == 'deleted'): ?>
                            <div class="alert alert-success" role="alert">
                                Data Karir berhasil dihapus!
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="table-responsive table--no-card m-b-30">
                                <form action="datakarir.php" enctype="multipart/form-data" method="post">
                                    <table class="table table-borderless table-striped table-earning">
                                        <tbody>
                                            <tr>
                                                <td>NIP</td>
                                                <td>
                                                    <input type="text" class="form-control" maxlength="9" required name="id_karir" autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pendidikan Formal</td>
                                                <td>
                                                    <select class="form-control" name="performance" required>
                                                        <option value="">Pilih Tahun</option>
                                                        <option value="2">2 Tahun</option>
                                                        <option value="3">3 Tahun</option>
                                                        <option value="4">4 Tahun</option>
                                                        <option value="5">5 Tahun</option>
                                                        <option value="6">6 Tahun</option>
                                                        <option value="7">7 Tahun</option>
                                                        <option value="8">8 Tahun</option>
                                                        <option value="9">9 Tahun</option>
                                                        <option value="10">10 Tahun</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Training</td>
                                                <td>
                                                    <select class="form-control" name="career_history" required>
                                                        <option value="">Pilih Tahun</option>
                                                        <option value="2">2 Tahun</option>
                                                        <option value="3">3 Tahun</option>
                                                        <option value="4">4 Tahun</option>
                                                        <option value="5">5 Tahun</option>
                                                        <option value="6">6 Tahun</option>
                                                        <option value="7">7 Tahun</option>
                                                        <option value="8">8 Tahun</option>
                                                        <option value="9">9 Tahun</option>
                                                        <option value="10">10 Tahun</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sertifikasi</td>
                                                <td>
                                                    <select class="form-control" name="rewards_punishments" required>
                                                        <option value="">Pilih Tahun</option>
                                                        <option value="2">2 Tahun</option>
                                                        <option value="3">3 Tahun</option>
                                                        <option value="4">4 Tahun</option>
                                                        <option value="5">5 Tahun</option>
                                                        <option value="6">6 Tahun</option>
                                                        <option value="7">7 Tahun</option>
                                                        <option value="8">8 Tahun</option>
                                                        <option value="9">9 Tahun</option>
                                                        <option value="10">10 Tahun</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Riwayat Karir</td>
                                                <td>
                                                    <select class="form-control" name="task_force" required>
                                                        <option value="">Pilih Tahun</option>
                                                        <option value="2">2 Tahun</option>
                                                        <option value="3">3 Tahun</option>
                                                        <option value="4">4 Tahun</option>
                                                        <option value="5">5 Tahun</option>
                                                        <option value="6">6 Tahun</option>
                                                        <option value="7">7 Tahun</option>
                                                        <option value="8">8 Tahun</option>
                                                        <option value="9">9 Tahun</option>
                                                        <option value="10">10 Tahun</option>
                                                    </select>
                                                </td>
                                            <tr>
                                                <td>Penghargaan & Tindakan Disiplin</td>
                                                <td>
                                                    <select class="form-control" name="training" required>
                                                        <option value="">Pilih Tahun</option>
                                                        <option value="2">2 Tahun</option>
                                                        <option value="3">3 Tahun</option>
                                                        <option value="4">4 Tahun</option>
                                                        <option value="5">5 Tahun</option>
                                                        <option value="6">6 Tahun</option>
                                                        <option value="7">7 Tahun</option>
                                                        <option value="8">8 Tahun</option>
                                                        <option value="9">9 Tahun</option>
                                                        <option value="10">10 Tahun</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nilai Kinerja</td>
                                                <td>
                                                    <select class="form-control" name="kinerja" required>
                                                        <option value="">Pilih Tahun</option>
                                                        <option value="2">2 Tahun</option>
                                                        <option value="3">3 Tahun</option>
                                                        <option value="4">4 Tahun</option>
                                                        <option value="5">5 Tahun</option>
                                                        <option value="6">6 Tahun</option>
                                                        <option value="7">7 Tahun</option>
                                                        <option value="8">8 Tahun</option>
                                                        <option value="9">9 Tahun</option>
                                                        <option value="10">10 Tahun</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><button type="submit" name="simpan" class="btn btn-primary">Simpan</button></td>
                                                <td><input type="reset" value="Batal" class="btn btn-danger"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>

                        <?php
                        // Query untuk mengambil data karir
                        $query1 = "SELECT * FROM tb_karir ORDER BY id_karir ASC";
                        $result = mysqli_query($koneksi, $query1);
                        ?>

                        <div class="row">
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Pendidikan Formal</th>
                                            <th>Training</th>
                                            <th>Sertifikasi</th>
                                            <th>Riwayat Karir</th>
                                            <th>Penghargaan & Tindakan Disiplin</th>
                                            <th>Nilai Kinerja</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row['id_karir']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['performance']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['career_history']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['rewards_punishments']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['task_force']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['training']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['kinerja']) . "</td>";
                                        echo "<td>
                                                <a href='editkarir.php?id_karir=" . urlencode($row['id_karir']) . "' class='btn btn-primary'>Ubah</a>
                                                <a href='datakarir.php?id_karir=" . urlencode($row['id_karir']) . "' class='btn btn-danger'>Hapus</a>
                                                <a href='lihatkarir.php?id_karir=" . urlencode($row['id_karir']) . "' class='btn btn-warning'>Lihat</a>
                                              </td>";
                                        echo "</tr>";
                                    }
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
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->
    </div>

    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
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
    <script src="js/main.js"></script>
</body>
</html>
