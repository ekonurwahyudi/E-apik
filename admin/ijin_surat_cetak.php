<!DOCTYPE html>
<html>
<head>
	<title>CETAK - E-APIK</title>
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




	<div style="padding: 20px;">
		<table style="width: 100%">
			<tr>
				<td style="width: 47%;border-bottom: 1px solid #000;">	

					<p>
						PENGADILAN NEGERI MEULABOH
						<br/>
						Jl. Dr.Sutomo No. 05 Johan Pahlawan Meulaboh Aceh Barat
					</p>	

					<table>
						<tr>
							<td>Telepon</td>
							<td>:</td>
							<td>(0655) 7005896-7005913</td>
						</tr>
						<tr>
							<td>Kode Pos</td>
							<td>:</td>
							<td>23611</td>
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
		$data = mysqli_query($koneksi,"select * from ijin where ijin_id='$id'");		
		while($d=mysqli_fetch_array($data)){
			?>
			
			<center style="text-transform: uppercase;">
				<u style="font-weight: bold;">SURAT IZIN KELUAR</u><br/>
				NOMOR : W15.U10/<?php echo $d['ijin_id'] ?>/KP.05.2/<?php echo date('m',strtotime($d['ijin_tanggal'])); ?>/<?php echo date('Y',strtotime($d['ijin_tanggal'])); ?>
			</center>

			<br/>
			<br/>

			Diberikan izin cuti kepada pegawai negeri sipil :
			<br/>
			<?php
			$us = $d['ijin_pegawai']; 
			if($d['ijin_pengaju']=="pegawai"){				
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
				Dengan ini memohon izin keluar, terhitung mulai jam <?php echo date('h:m',strtotime($d['ijin_jam_dari'])); ?> sampai dengan jam <?php echo date('h:m',strtotime($d['ijin_jam_sampai'])); ?>, dengan ketentuan sebagai berikut :<br/><br/>

				a. Sebelum keluar, wajib mempersiapkan pekerjaan.<br/>
				b. Setelah keluar, wajib melapor untuk absensi.<br><br/>

				Demikian Surat Izin Keluar ini dibuat untuk dapat dipergunakan sebagaimana mestinya.


				<br/>
				<div class="row">
					<div class="col-md-3 col-md-offset-9">
						<center>
							Meulaboh, <?php echo date('d-m-Y') ?><br/>						
							KETUA PENGADILAN NEGERI MEULABOH
							<br/>
							<br/>
							<br/>
							<?php 
							if($d['ijin_pengaju']=="pegawai"){
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
	</div>
	<script>
		this.window.print();
	</script>
</body>
</html>