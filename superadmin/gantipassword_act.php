<?php 
session_start();
include '../config.php';
$pass = $_POST['pass'];
$id = $_SESSION['id'];

mysqli_query($koneksi,"update superadmin set password='$pass' where id='$id'");
header("location:index.php");