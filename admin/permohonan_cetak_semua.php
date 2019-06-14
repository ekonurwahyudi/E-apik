<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI PERMOHONAN CUTI</title>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php 
	include '../config.php';
	?>
	<center>
		<h2>LAPORAN CUTI PEGAWAI</h2>		
	</center>
	<br/>
	<table class="table table-bordered">
		<thead>
			<tr>															
				<th width="1%">No.</th>		
				<th width="10%">Kode Surat Cuti</th>		
				<th width="10%">Tgl. Diajukan</th>		
				<th>Pegawai</th>		
				<th>Alasan</th>		
				<th width="10%">Mulai</th>							
				<th width="10%">Berakhir</th>							
				<th>Status</th>						
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1; 
			$data = mysqli_query($koneksi,"select * from permohonan,pegawai where permohonan.pegawai=pegawai.id order by permohonan_id desc");		
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>								
					<td><?php echo $no++; ?></td>
					<td><b><?php echo "CUTI00".$d['permohonan_id'];?></b></td>
					<td><?php echo date('d/m/Y',strtotime($d['tgl'])); ?></td>
					<td><?php echo $d['nama'] ?></td>
					<td><?php echo $d['alasan'] ?></td>
					<td><?php echo date('d/m/Y',strtotime($d['dari'])); ?></td>
					<td><?php echo date('d/m/Y',strtotime($d['sampai'])); ?></td>											
					<td>
						<?php
						if($d['status'] == "0"){
							echo "Menunggu konfirmasi";
						}else if($d['status'] == "1"){
							echo "Disetujui";
						}else if($d['status'] == "2"){
							echo "Ditolak";
						}
						?>

					</td>					
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>

	<script>
		this.window.print();
	</script>
</body>
</html>