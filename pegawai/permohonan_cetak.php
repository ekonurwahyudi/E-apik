<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI PERMOHONAN CUTI</title>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body style="padding: 20px">
	<?php 
	include '../config.php';
	?>


	<?php
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from permohonan,pegawai where permohonan.pegawai=pegawai.id and permohonan_id='$id'");		
	while($d=mysqli_fetch_array($data)){
		?>
		
		Panton Labu, <?php echo date('d-m-Y'); ?>
		<br/>
		<br/>
		Kepada Yth., <br/>
		Manager PT.PLN PERSERO Panton Labu <br/>
		Di Panton Labu <br/>
		<br/>
		Hal  : Surat Izin Cuti Kerja <br/>
		<br/>
		<br/>
		<br/>
		Dengan Hormat, <br/>
		<br/>
		Yang bertanda tangan di bawah ini,<br/>
		<br/>
		<table>
			<tr>
				<td width="20px">Nama</td>
				<td style="width: 30px;text-align: center;">:</td>
				<td><?php echo $d['nama'] ?></td>
			</tr>
			<tr>
				<td width="20px">Alamat</td>
				<td style="width: 30px;text-align: center;">:</td>
				<td><?php echo $d['alamat'] ?></td>
			</tr>
			<tr>
				<td width="20px">No. HP</td>
				<td style="width: 30px;text-align: center;">:</td>
				<td><?php echo $d['hp'] ?></td>
			</tr>
			<tr>
				<td width="20px">Jabatan</td>
				<td style="width: 30px;text-align: center;">:</td>
				<td>Pegawai</td>
			</tr>
		</table>
		<br/>

		Melalui surat ini Saya bermaksud untuk mengajukan cuti kerja, Dikarenakan <?php echo $d['alasan'] ?>. <br/>
		<br/>
		Demikian surat cuti kerja ini, Atas kebijaksanaan dari Bapak/Ibu, Saya mengucapkan terimakasih. <br/>
		<br/>
		Hormat Saya, <br/>
		<br/>
		Ttd.<br/>
		(<?php echo $d['nama']; ?>)

		<?php
	}
	?>



	<script>
		this.window.print();
	</script>
</body>
</html>

































