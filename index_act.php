<?php 
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$akses = $_POST['akses'];

if($akses == "superadmin"){
	$cek = mysqli_query($koneksi,"select * from superadmin where username='$username' and password='$password'");
	$d = mysqli_fetch_array($cek);
	if(mysqli_num_rows($cek) > 0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $d['id'];
		$_SESSION['nama'] = $d['nama'];
		$_SESSION['status'] = "superadmin_login";
		header("location:superadmin/");
	}else{
		header("location:index.php?alert=gagal");
	}
}else if($akses=="admin"){
	$cek = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
	$d = mysqli_fetch_array($cek);
	if(mysqli_num_rows($cek) > 0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $d['id'];
		$_SESSION['nama'] = $d['nama'];
		$_SESSION['status'] = "admin_login";
		header("location:admin/");
	}else{
		header("location:index.php?alert=gagal");
	}
}else if($akses=="ketua"){
	$cek = mysqli_query($koneksi,"select * from ketua where username='$username' and password='$password'");
	$d = mysqli_fetch_array($cek);
	if(mysqli_num_rows($cek) > 0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $d['id'];
		$_SESSION['nama'] = $d['nama'];
		$_SESSION['jenis_ketua'] = $d['jenis_ketua'];
		$_SESSION['status'] = "ketua_login";
		header("location:ketua/");
	}else{
		header("location:index.php?alert=gagal");
	}
}else if($akses=="pegawai"){
	$cek = mysqli_query($koneksi,"select * from pegawai where username='$username' and password='$password'");
	$d = mysqli_fetch_array($cek);
	if(mysqli_num_rows($cek) > 0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $d['id'];
		$_SESSION['nama'] = $d['nama'];
		$_SESSION['status'] = "pegawai_login";
		header("location:pegawai/");
	}else{
		header("location:index.php?alert=gagal");
	}
}


?>