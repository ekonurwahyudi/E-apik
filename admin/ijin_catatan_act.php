<?php 
include '../config.php';
$id = $_POST['id'];
$ijin_admin = $_POST['ijin_admin'];

mysqli_query($koneksi,"update ijin set ijin_admin='$ijin_admin' where ijin_id='$id'");
header("location:ijin.php");