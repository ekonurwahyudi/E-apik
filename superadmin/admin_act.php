<?php 

include '../config.php';
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$username = $_POST['username'];
$password = $_POST['password'];
$jk = $_POST['jk'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"insert into admin values('','$nama','$nip','$username','$password','$jk','$hp','$alamat')");
header("location:admin.php");