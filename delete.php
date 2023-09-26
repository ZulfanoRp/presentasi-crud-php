<?php
include 'config.php';
$id_mahasiswa = $_GET['id'];

$datas = mysqli_query($conn, "DELETE FROM tb_mahasiswa WHERE id_mahasiswa ='$id_mahasiswa'") or die(mysqli_error($conn));

header('Location: index.php');
exit();
?>