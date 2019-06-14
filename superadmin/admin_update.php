<?php 

include '../config.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$username = $_POST['username'];
$password = $_POST['password'];
$jk = $_POST['jk'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];

if($password == ""){
	mysqli_query($koneksi,"update admin set nama='$nama', nip='$nip', username='$username', jenis_kelamin='$jk', hp='$hp', alamat='$alamat' where id='$id'");
}else{
	mysqli_query($koneksi,"update admin set nama='$nama', nip='$nip', username='$username', password='$password', jenis_kelamin='$jk', hp='$hp', alamat='$alamat' where id='$id'");
}
header("location:admin.php");