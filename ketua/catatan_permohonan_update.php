<?php 
include '../config.php';
$id = $_POST['id'];
$cat_ketua = $_POST['cat_ketua'];

mysqli_query($koneksi,"update permohonan set cat_ketua='$cat_ketua' where permohonan_id='$id'");
header("location:catatan_permohonan.php");