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
						$id = $_SESSION['id'];	
						$data = mysqli_query($koneksi,"select * from ijin where ijin.ijin_pegawai='$id' order by ijin_id desc");
						if(mysqli_num_rows($data)>0){
							while($d=mysqli_fetch_array($data)){
								?>

								<?php if($d['ijin_status']=="0"){ ?>          
								<div class="alert alert-info">Permohonan izin keluar <b><?php echo $d['ijin_alasan'] ?></b> anda yang terhitung dari jam <b><?php echo date('h:i',strtotime($d['ijin_jam_dari'])); ?></b> sampai jam <b><?php echo date('h:i',strtotime($d['ijin_jam_sampai'])); ?></b> masih <b>menunggu konfirmasi admin.</b></div>
								<?php }else if($d['ijin_status']=="1"){ ?>          
								<div class="alert alert-success">Permohonan izin keluar <b><?php echo $d['ijin_alasan'] ?></b> anda yang terhitung dari tgl <b><?php echo date('h:i',strtotime($d['ijin_jam_dari'])); ?></b> sampai tgl <b><?php echo date('h:i',strtotime($d['ijin_jam_sampai'])); ?></b> telah <b>disetujui admin dan menunggu konfirmasi dan catatan ketua</b></div>
								<?php }else if($d['ijin_status']=="2"){ ?>          
								<div class="alert alert-danger">Permohonan izin keluar <b><?php echo $d['ijin_alasan'] ?></b> anda yang terhitung dari tgl <b><?php echo date('h:i',strtotime($d['ijin_jam_dari'])); ?></b> sampai tgl <b><?php echo date('h:i',strtotime($d['ijin_jam_sampai'])); ?></b> telah <b>ditolak oleh admin.</b></div>
								<?php }else if($d['ijin_status']=="3"){ ?>          
								<div class="alert alert-success">Permohonan izin keluar <b><?php echo $d['ijin_alasan'] ?></b> anda yang terhitung dari tgl <b><?php echo date('h:i',strtotime($d['ijin_jam_dari'])); ?></b> sampai tgl <b><?php echo date('h:i',strtotime($d['ijin_jam_sampai'])); ?></b> telah <b>di konfirmasi oleh ketua.</b></div>							
								<?php }else if($d['ijin_status']=="4"){ ?>          
								<div class="alert alert-danger">Permohonan izin keluar <b><?php echo $d['ijin_alasan'] ?></b> anda yang terhitung dari tgl <b><?php echo date('h:i',strtotime($d['ijin_jam_dari'])); ?></b> sampai tgl <b><?php echo date('h:i',strtotime($d['ijin_jam_sampai'])); ?></b> telah <b>ditolak oleh ketua</b></div>
								<?php } ?>								

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