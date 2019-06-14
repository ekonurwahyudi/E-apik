<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP</title>
</head>
<body>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		table{
			margin: 20px auto;
			border-collapse: collapse;
		}
		table th,
		table td{
			border: 1px solid #3c3c3c;
			padding: 3px 8px;
		}
		a{
			background: blue;
			color: #fff;
			padding: 8px 10px;
			text-decoration: none;
			border-radius: 2px;
		}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?>


	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Dari Jam</th>
			<th>Sampai Jam</th>
			<th>Alasan</th>
			<th>Pengaju</th>
			<th>Status</th>
			<th>Catatan Admin</th>
			<th>Catatan Kepala</th>
		</tr>
		<?php 
		include '../config.php';
		$dari = $_GET['dari'];
		$sampai = $_GET['sampai'];

		if($dari=="" && $sampai==""){
			header("location:ijin.php?pesan=gagal");
		}else{
			$data = mysqli_query($koneksi,"select * from ijin,pegawai where ijin_tanggal between '$dari' and '$sampai' and ijin_pegawai=id");
			$no = 1;
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['ijin_tanggal']; ?></td>
					<td><?php echo $d['ijin_jam_dari']; ?></td>
					<td><?php echo $d['ijin_jam_sampai']; ?></td>
					<td><?php echo $d['ijin_alasan']; ?></td>
					<td><?php echo $d['ijin_pengaju']; ?></td>
					<td>
						<?php
						if($d['ijin_status'] == "0"){
							echo "Menunggu konfirmasi";
						}else if($d['ijin_status'] == "1"){
							echo "Disetujui";
						}else if($d['ijin_status'] == "2"){
							echo "Ditolak";
						}else if($d['ijin_status'] == "3"){
							echo "Disetujui ketua";
						}else if($d['ijin_status'] == "4"){
							echo "Ditolak ketua";
						}
						?>
					</td>
					<td><?php echo $d['ijin_admin']; ?></td>
					<td><?php echo $d['ijin_ketua']; ?></td>
				</tr>
				<?php 
			}

		}
		
		?>
	</table>
</body>
</html>