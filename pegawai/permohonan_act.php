<?php 
session_start();
include '../config.php';
$alasan = $_POST['alasan'];
$jenis = $_POST['jenis'];
$pengaju = "pegawai";
$dari = $_POST['dari'];
$sampai = $_POST['sampai'];

$pegawai = $_SESSION['id'];
$sekarang = date('Y-m-d');



$dt1 = date_create($dari);
$dt2 = date_create($sampai);
$hasil = $dt1->diff($dt2);

$jumlah_hari = $hasil->days;



// hari
$tahunan = 12;//14 hari
$besar = 90;//3 bulan
$sakit = 14;//14 hari
$bersalin = 90;
$alasan_penting = 60;
$diluar_tanggungan_negara = 1080;


switch ($jenis) {
	case 'Cuti Tahunan':
			$a = $tahunan;
	break;
	case 'Cuti Besar':
			$a = $besar;
	break;
	case 'Cuti Sakit':
			$a = $sakit;
	break;
	case 'Cuti Bersalin':
			$a = $bersalin;
	break;
	case 'Cuti karena alasan penting':
			$a = $alasan_penting;
	break;
	case 'Cuti di luar tanggungan negara':
			$a = $diluar_tanggungan_negara;
	break;
	default:
			$a=100;
	break;
}


if($jumlah_hari>$a){
	header("location:permohonan.php?alert=limit");
}else{


	mysqli_query($koneksi,"insert into permohonan values('','$sekarang','$pegawai','$jenis','$alasan','$dari','$sampai','0','$pengaju','','','','')");

	header("location:permohonan.php?alert=berhasil");


}
