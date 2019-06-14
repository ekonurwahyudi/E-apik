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
		
		<center style="text-transform: uppercase;">
			<u style="font-weight: bold;">SURAT IZIN <?php echo $d['jenis']; ?></u><br/>
			NOMOR : W15.U10/<?php echo $d['permohonan_id'] ?>/KP.05.2/<?php echo date('m',strtotime($d['tgl'])); ?>/<?php echo date('Y',strtotime($d['tgl'])); ?>
		</center>

		<br/>
		<br/>

		Diberikan izin cuti kepada pegawai negeri sipil :
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
					<td style="width:200px">Nama</td>
					<td style="width: 50px;text-align: center;">:</td>
					<td><?php echo $u['nama'] ?></td>
				</tr>
				<tr>
					<td style="width:200px">NIP</td>
					<td style="width: 50px;text-align: center;">:</td>
					<td><?php echo $u['nip'] ?></td>
				</tr>
				<tr>
					<td style="width:200px">Pangkat/Golongan ruang</td>
					<td style="width: 50px;text-align: center;">:</td>
					<td><?php echo $u['pangkat'] ?> (<?php echo $u['golongan'] ?>)</td>
				</tr>
				<tr>
					<td style="width:200px">Jabatan</td>
					<td style="width: 50px;text-align: center;">:</td>
					<td><?php echo $u['jabatan'] ?></td>
				</tr>
				<tr>
					<td style="width:200px">Organisasi</td>
					<td style="width: 50px;text-align: center;">:</td>
					<td><?php echo $u['organisasi'] ?></td>
				</tr>
			</table>

			<br/>
			<br/>
			Selama <?php echo jumlah_hari($d['dari'],$d['sampai']); ?> hari kerja, terhitung mulai tanggal <?php echo date('d-m-Y',strtotime($d['dari'])); ?> sampai dengan tanggal <?php echo date('d-m-Y',strtotime($d['sampai'])); ?>, dengan ketentuan sebagai berikut :<br/><br/>

			a. Sebelum menjalankan cuti, wajib menyerahkan pekerjaan kepada atasan langsung.<br/>
			b. Setelah menjalankan cuti, wajib melaporkan diri kepada atasan langsungnya dan bekerja kembali sebagaimana mestinya.<br><br/>

			Demikian Surat Izin <?php echo $d['jenis']; ?> ini dibuat untuk dapat dipergunakan sebagaimana mestinya.


			<br/>
			<div class="row">
				<div class="col-md-3 col-md-offset-9">
					<center>
						Pelaihari, <?php echo date('d-m-Y') ?><br/>						
						KETUA PENGADILAN NEGERI PELAIHARI
						<br/>
						<br/>
						<br/>
						<?php 
						if($d['pengaju']=="pegawai"){
							$x = mysqli_query($koneksi,"select * from ketua where jenis_ketua='PN'");
						}else{
							$x = mysqli_query($koneksi,"select * from ketua where jenis_ketua='PT'");
						}						
						$xx = mysqli_fetch_assoc($x);
						?>
						<span style="border-bottom: 1px solid #000"><?php echo $xx['nama']; ?></span><br/>
						Nip. <?php echo $xx['nip']; ?>	
					</center>		
				</div>
			</div>
			
			





			<?php } ?>
			<?php
		}
		?>

		<br/>
		<br/>
		<br/>
		<br/>
		Tembusan disampaikan kepada :<br/>
		<Br/>
		1. Yang Mulia Ketua Mahkamah Agung R.I<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DI - JAKARTA<br/>
		2. Yth. Direktur Jenderal Badan Peradilan Umum Mahkamah Agung R.I<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DI - JAKARTA<br/>
		3. Yth. Ketua Pengadilan Tinggi Banjarmasin<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DI - BANJARMASIN<br/>
	</div>
	<script>
		this.window.print();
	</script>
</body>
</html>

































