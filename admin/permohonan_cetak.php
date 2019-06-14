<!DOCTYPE html>
<html>
<head>
	<title>CETAK - APLIKASI PERMOHONAN CUTI</title>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body style="padding: 20px">
	<style type="text/css">
	body{
		font-family: Times new roman;
		font-size: 12pt;
	}
</style>
<?php 
include '../config.php';
?>
<?php 

function jumlah_hari($dari,$sampai){
	$dt1 = date_create($dari);
	$dt2 = date_create($sampai);
	$hasil = $dt1->diff($dt2);

	$jumlah_hari = $hasil->days;
	return $jumlah_hari;
}

?>



<div style="padding: 20px;">
	<table style="width: 100%">
		<tr>
			<td style="width: 47%;border-bottom: 1px solid #000;">	

				<p>
					PENGADILAN NEGERI PELAIHARI KELAS II
					<br/>
					Komplek Perkantoran Gagas Pelaihari
				</p>	

				<table>
					<tr>
						<td>Telepon</td>
						<td>:</td>
						<td>(0512) 21047-21048</td>
					</tr>
					<tr>
						<td>Kode Pos</td>
						<td>:</td>
						<td>7 0 8 1 4</td>
					</tr>
				</table>

			</td>

			<td style="width: 5%;"></td>

			<td style="width: 47%;border-bottom: 1px solid #000;">

				<p>LAMPIRAN II SURAT EDARAN KEPALA BADAN ADMINISTRASI KEPEGAWAIAN NEGARA</p>

				<table>
					<tr>
						<td>NOMOR</td>
						<td>:</td>
						<td>01/SE/1977</td>
					</tr>
					<tr>
						<td>TANGGAL</td>
						<td>:</td>
						<td>25 FEBRUARI 1977</td>
					</tr>
				</table>

			</td>
		</tr>
	</table>


	<br/>
	<br/>

	<?php
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from permohonan where permohonan_id='$id'");		
	while($d=mysqli_fetch_array($data)){
		?>
		<div class="row">
			<div class="col-md-4 col-md-offset-8">
				Panton Labu, <?php echo date('d-m-Y'); ?>
				<br/>
				<br/>
				KEPADA YTH : <br/>
				KETUA PENGADILAN NEGERI PELAIHARI<br/>
				Di - <br/>
				<span style="margin-left: 30px;border-bottom: 1px solid #000">PELAIHARI</span> <br/>
			</div>
		</div>

		<br/>
		<br/>
		<br/>
		Dengan Hormat, <br/>
		<br/>
		Yang bertanda tangan di bawah ini :<br/>
		<br/>
		<?php
		$us = $d['pegawai']; 
		if($d['pengaju']=="pegawai"){				
			$user = mysqli_query($koneksi,"select * from pegawai where id='$us'");				
		}else{
			$user = mysqli_query($koneksi,"select * from ketua where id='$us'");								
		}
		while($u=mysqli_fetch_array($user)){
			?>
			<table>
				<tr>
					<td width="20px">Nama</td>
					<td style="width: 30px;text-align: center;">:</td>
					<td><?php echo $u['nama'] ?></td>
				</tr>
				<tr>
					<td width="20px">NIP</td>
					<td style="width: 30px;text-align: center;">:</td>
					<td><?php echo $u['nip'] ?></td>
				</tr>
				<tr>
					<td width="20px">Pangkat/Golongan ruang</td>
					<td style="width: 30px;text-align: center;">:</td>
					<td><?php echo $u['pangkat'] ?> (<?php echo $u['golongan'] ?>)</td>
				</tr>
				<tr>
					<td width="20px">Jabatan</td>
					<td style="width: 30px;text-align: center;">:</td>
					<td><?php echo $u['jabatan'] ?></td>
				</tr>
				<tr>
					<td width="20px">Organisasi</td>
					<td style="width: 30px;text-align: center;">:</td>
					<td><?php echo $u['organisasi'] ?></td>
				</tr>
			</table>

			<br/>

			Dengan ini mengajukan permintaan <?php echo $d['jenis']; ?> selama <?php echo jumlah_hari($d['dari'],$d['sampai']); ?> kerja untuk cuti tahun <?php echo date('Y'); ?>, Terhitung mulai tanggal <?php echo date('d-m-Y',strtotime($d['dari'])); ?> s/d <?php echo date('d-m-Y',strtotime($d['sampai'])); ?>.<br/>
			Selama menjalankan cuti, alamat saya adalah :<br/><br/>
			&nbsp;&nbsp;&nbsp;- <?php echo $u['alamat']; ?>

			<br/>
			<br/>
			Demikianlah permintaan ini saya buat untuk dapat di pertimbangkan sebagaimana mestinya.<br/>
			<br/>
			<div class="row">
				<div class="col-md-3 col-md-offset-9">
					<center>
						Hormat Saya, <br/>
						<br/>
						<br/>
						<span style="border-bottom: 1px solid #000"><?php echo $u['nama']; ?></span><br/>
						Nip. <?php echo $u['nip']; ?>	
					</center>		
				</div>
			</div>
			
			



<!-- 
				<div class="row">
					<div class="col-md-6">
						CATATAN PEJABAT KEPEGAWAIAN<br/>
						Cuti yang telah diambil dalam tahun yang bersangkutan :
					</div>
					<div class="col-md-6">
						
					</div>
				</div>

			-->








			<?php } ?>
			<?php
		}
		?>




	</div>
	<script>
		this.window.print();
	</script>
</body>
</html>

































