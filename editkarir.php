<?php
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

// Ambil data untuk ditampilkan di form edit
$id_karir = htmlspecialchars($_GET['id_karir']);
$data = mysqli_query($koneksi, "SELECT * FROM tb_karir WHERE id_karir = '$id_karir'");
$row = mysqli_fetch_assoc($data);

// Proses pengeditan data jika ada pengiriman form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $performance = htmlspecialchars($_POST['performance']);
    $career_history = htmlspecialchars($_POST['career_history']);
    $rewards_punishments = htmlspecialchars($_POST['rewards_punishments']);
    $task_force = htmlspecialchars($_POST['task_force']);
    $training = htmlspecialchars($_POST['training']);
    $kinerja = htmlspecialchars($_POST['kinerja']);

    // Pastikan semua field diisi
    if (!empty($performance) && !empty($career_history) && !empty($rewards_punishments) && !empty($task_force) && !empty($training) && !empty($kinerja)) {
        // Update data ke database
        $sql = "UPDATE tb_karir SET 
                performance = '$performance',
                career_history = '$career_history',
                rewards_punishments = '$rewards_punishments',
                task_force = '$task_force',
                training = '$training',
                kinerja = '$kinerja'
                WHERE id_karir = '$id_karir'";
        
        if (mysqli_query($koneksi, $sql)) {
            header("Location: datakarir.php?status=updated");
            exit();
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "<script>alert('Semua field harus diisi.');</script>";
    }
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

    <title>Edit Data Karir</title>

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
</head>

<body>
    <div class="container mt-5">
        <?php if ($status == 'updated'): ?>
            <div class="alert alert-success" role="alert">
                Data Karir berhasil diperbarui!
            </div>
        <?php endif; ?>

        <h2>Edit Data Karir</h2>
        <form action="editkarir.php?id_karir=<?php echo urlencode($id_karir); ?>" method="post">
            <div class="form-group">
                <label for="performance">Pendidikan Formal:</label>
                <input type="text" class="form-control" id="performance" name="performance" value="<?php echo htmlspecialchars($row['performance']); ?>" required>
            </div>
            <div class="form-group">
                <label for="career_history">Training:</label>
                <input type="text" class="form-control" id="career_history" name="career_history" value="<?php echo htmlspecialchars($row['career_history']); ?>" required>
            </div>
            <div class="form-group">
                <label for="rewards_punishments">Sertifikasi:</label>
                <input type="text" class="form-control" id="rewards_punishments" name="rewards_punishments" value="<?php echo htmlspecialchars($row['rewards_punishments']); ?>" required>
            </div>
            <div class="form-group">
                <label for="task_force">Riwayat Karir:</label>
                <input type="text" class="form-control" id="task_force" name="task_force" value="<?php echo htmlspecialchars($row['task_force']); ?>" required>
            </div>
            <div class="form-group">
                <label for="training">Penghargaan & Tindakan Disiplin</label>
                <textarea class="form-control" id="training" name="training" required><?php echo htmlspecialchars($row['training']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="kinerja">Nilai Kinerja:</label>
                <textarea class="form-control" id="kinerja" name="kinerja" required><?php echo htmlspecialchars($row['kinerja']); ?></textarea>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="datakarir.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
