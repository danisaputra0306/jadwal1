<?php
 include("class_jadwal.php");
 $data=new class_jadwal;
$data->delete($_GET['kd_matkul']);
header('location:index.php');
?>
