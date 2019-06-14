<?php 
session_start();
include '../config.php';
$id = $_POST['id'];
$status = $_POST['status'];


mysqli_query($koneksi,"update permohonan set status='$status' where permohonan_id='$id'");
header("location:catatan_permohonan.php");