<?php 
session_start();
include '../config.php';
$pegawai = $_SESSION['id'];
$tanggal = date('Y-m-d');
$dari = $_POST['dari'].":00";
$sampai = $_POST['sampai'].":00";
$alasan = $_POST['alasan'];

mysqli_query($koneksi, "INSERT INTO ijin values('','$pegawai','$tanggal','$dari','$sampai','$alasan','pegawai','0','','')");
header("location:ijin.php");