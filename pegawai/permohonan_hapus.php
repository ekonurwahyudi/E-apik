<?php 

include '../config.php';
$id = $_GET['id'];

mysqli_query($koneksi,"delete from permohonan where permohonan_id='$id'");


header("location:permohonan.php");