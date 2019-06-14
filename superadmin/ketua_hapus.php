<?php 

include '../config.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from ketua where id='$id'");
header("location:ketua.php");