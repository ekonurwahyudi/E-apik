<?php 
session_start();
include '../config.php';
$id = $_POST['id'];
$status = $_POST['status'];

mysqli_query($koneksi,"update ijin set ijin_status='$status' where ijin_id='$id'");
header("location:ijin.php");