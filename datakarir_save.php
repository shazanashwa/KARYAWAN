<?php
session_start();
include 'koneksi.php';

// Periksa apakah form disubmit
if (isset($_POST['simpan'])) {
    // Mengambil data dari form
    $id_karir = mysqli_real_escape_string($koneksi, $_POST['id_karir']);
    $performance = mysqli_real_escape_string($koneksi, $_POST['performance']);
    $career_history = mysqli_real_escape_string($koneksi, $_POST['career_history']);
    $rewards_punishments = mysqli_real_escape_string($koneksi, $_POST['rewards_punishments']);
    $task_force = mysqli_real_escape_string($koneksi, $_POST['task_force']);
    $training = mysqli_real_escape_string($koneksi, $_POST['training']);
    $kinerja = mysqli_real_escape_string($koneksi, $_POST['kinerja']);

    // Cek apakah data dengan ID Karir sudah ada
    $sql = "SELECT * FROM tb_karir WHERE id_karir = '$id_karir'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Data dengan NIP = $id_karir sudah ada');</script>";
        echo "<script>window.location.href = 'datakarir.php';</script>";
    } else {
        // Insert data baru
        $query = "INSERT INTO tb_karir (id_karir, performance, career_history, rewards_punishments, task_force, training, kinerja) 
                  VALUES ('$id_karir', '$performance', '$career_history', '$rewards_punishments', '$task_force', '$training', '$kinerja')";

        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Data berhasil disimpan');</script>";
            header("location: datakarir.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
} else {
    echo "<script>alert('Terjadi kesalahan. Form tidak valid.');</script>";
    echo "<script>window.location.href = 'datakarir.php';</script>";
}
?>
