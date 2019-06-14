<?php 
include '../config.php';
$id = $_POST['id'];
$cat_admin = $_POST['cat_admin'];
$cat_pertimbangan = $_POST['cat_pertimbangan'];
$cat_sisa_cuti = $_POST['cat_sisa_cuti'];

mysqli_query($koneksi,"update permohonan set cat_admin='$cat_admin', cat_sisa_cuti='$cat_sisa_cuti', cat_pertimbangan='$cat_pertimbangan' where permohonan_id='$id'");
header("location:permohonan.php");