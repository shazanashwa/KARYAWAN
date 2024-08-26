<?php
require_once("koneksi.php");

$performance = '200';
$career_history = 'mutasixce';
$rewards_punishments = 'xdcev';
$task_force = 'cer';
$training = 'ewf';

$sql = "INSERT INTO tb_karir (performance, career_history, rewards_punishments, task_force, training) VALUES ('$performance', '$career_history', '$rewards_punishments', '$task_force', '$training')";

if (mysqli_query($koneksi, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
