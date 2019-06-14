<?php 

include '../config.php';
$id = $_POST['id'];
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

if($password == ""){
	mysqli_query($koneksi,"update pegawai set nama='$nama', nip='$nip', jk='$jk', pangkat='$pangkat', golongan='$golongan', jabatan='$jabatan', alamat='$alamat', organisasi='$organisasi' where id='$id'");	
}else{
	mysqli_query($koneksi,"update pegawai set nama='$nama', nip='$nip', jk='$jk', pangkat='$pangkat', golongan='$golongan', jabatan='$jabatan', alamat='$alamat', organisasi='$organisasi', username='$username', password='$password' where id='$id'");
}
header("location:pegawai.php");