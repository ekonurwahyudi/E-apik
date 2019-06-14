<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<!-- Content area -->
	<div class="content">
		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-12">
				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Notifikasi</h4>
						<div class="heading-elements">
							
						</div>
					</div>
					<div class="panel-body">

						<br/>
						<br/>
						<br/>
						
						<?php 
						if($_SESSION['jenis_ketua']=="PN"){
							$data = mysqli_query($koneksi,"select * from ijin,pegawai where ijin.ijin_pegawai=pegawai.id and ijin.ijin_status='1' order by ijin_id desc");																					
						}else{
							$data = mysqli_query($koneksi,"select * from ijin,ketua where ijin.ijin_pegawai=ketua.id and ijin.ijin_status='1' order by ijin_id desc");																												
						}
						if(mysqli_num_rows($data)>0){
							while($d=mysqli_fetch_array($data)){
								?>

								<?php
								if($d['status'] == "1"){
									?>

									<div class="alert alert-info">Permohonan izin keluar oleh <b><?php echo $d['nama'] ?> [Ketua PN] Nip. <?php echo $d['nip'] ?></b> Pada <b><?php echo date('d/m/Y',strtotime($d['ijin_tanggal'])); ?></b> Telah disetujui oleh admin. dan sekarang <b>Menunggu konfirmasi dan catatan</b> ketua.</div>

									<?php
								}
								?>				

								<?php
							}
						}else{
							echo "Belum ada notifikasi.";
						}
						?>


					</div>					
				</div>	

			</div>

		</div>		

	</div>
</div>

<?php include 'footer.php'; ?>