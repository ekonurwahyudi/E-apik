<?php 
include '../config.php';
$id = $_GET['id'];

mysqli_query($koneksi,"delete from ijin where ijin_id='$id'");
header("location:ijin.php");