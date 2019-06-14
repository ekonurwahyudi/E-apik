<?php 
include '../config.php';
$id = $_POST['id'];
$ijin_ketua = $_POST['ijin_ketua'];

mysqli_query($koneksi,"update ijin set ijin_ketua='$ijin_ketua' where ijin_id='$id'");
header("location:catatan_ijin.php");