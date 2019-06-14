<?php 
session_start();
include '../config.php';
$ketua = $_SESSION['id'];
$tanggal = date('Y-m-d');
$dari = $_POST['dari'].":00";
$sampai = $_POST['sampai'].":00";
$alasan = $_POST['alasan'];

mysqli_query($koneksi, "INSERT INTO ijin values('','$ketua','$tanggal','$dari','$sampai','$alasan','ketua pn','0','','')");
header("location:ijin.php");