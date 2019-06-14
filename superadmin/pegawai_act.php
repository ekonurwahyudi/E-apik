<?php 

include '../config.php';
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$jk = $_POST['jk'];
$pangkat = $_POST['pangkat'];
$golongan = $_POST['golongan'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$organisasi = $_POST['organisasi'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi,"insert into pegawai values('','$nama','$nip','$jk','$pangkat','$golongan','$jabatan','$alamat','$organisasi','$username','$password')");
header("location:pegawai.php");