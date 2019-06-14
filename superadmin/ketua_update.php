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
$ketua = $_POST['ketua'];

if($password == ""){
	mysqli_query($koneksi,"update ketua set nama='$nama', nip='$nip', jk='$jk', pangkat='$pangkat', golongan='$golongan', jabatan='$jabatan', alamat='$alamat', organisasi='$organisasi', jenis_ketua='$ketua' where id='$id'");	
}else{
	mysqli_query($koneksi,"update ketua set nama='$nama', nip='$nip', jk='$jk', pangkat='$pangkat', golongan='$golongan', jabatan='$jabatan', alamat='$alamat', organisasi='$organisasi', username='$username', password='$password', jenis_ketua='$ketua' where id='$id'");
}
header("location:ketua.php");