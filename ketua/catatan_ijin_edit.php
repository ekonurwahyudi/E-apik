<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<div class="content">
		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-12">
				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Buat Permohonan Izin Keluar</h4>
						<div class="heading-elements">
							<a href="catatan_ijin.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<?php 
							$id = $_GET['id'];
							$data = mysqli_query($koneksi,"select * from ijin where ijin_id='$id'");
							while($d=mysqli_fetch_array($data)){
								?>
								<form action="catatan_ijin_update.php" method="post">
									<table class="table">	
										<tr>
											<th width="20%">Pengaju</th>										
											<td>												
												<input type="text" class="form-control" required="required" value="<?php echo $d['ijin_pengaju']; ?>" disabled>
											</td>
										</tr>									
										<tr>
											<th width="20%">Alasan Izin Keluar</th>										
											<td>
												<input type="hidden" class="form-control" name="id" required="required" value="<?php echo $d['ijin_id']; ?>">
												<input type="text" class="form-control" name="alasan" required="required" value="<?php echo $d['ijin_alasan']; ?>" disabled>
											</td>
										</tr>											
										<tr>
											<th>Mulai Dari Jam</th>
											<td><input type="text" class="form-control tanggal" name="dari" required="required" value="<?php echo $d['ijin_jam_dari']; ?>" disabled></td>
										</tr>	
										<tr>
											<th>Sampai Jam</th>
											<td><input type="text" class="form-control tanggal" name="sampai" required="required" value="<?php echo $d['ijin_jam_sampai']; ?>" disabled></td>
										</tr>
										<tr>
											<th>Status</th>
											<td>
												<?php
												if($d['ijin_status'] == "0"){
													echo "<span class='label label-default'>Menunggu konfirmasi</span>";
												}else if($d['ijin_status'] == "1"){
													echo "<span class='label label-success'>Disetujui</span>";
												}else if($d['ijin_status'] == "2"){
													echo "<span class='label label-danger'>Ditolak</span>";
												}
												?>

											</td>
										</tr>	
										<tr>
											<th>Catatan Admin</th>
											<td><textarea class="form-control" name="ijin_admin" disabled><?php echo $d['ijin_admin']; ?></textarea></td>
										</tr>			
										<tr>
											<th>Catatan Ketua</th>
											<td><textarea class="form-control" name="ijin_ketua"><?php echo $d['ijin_ketua']; ?></textarea></td>
										</tr>								
										<tr>
											<th></th>
											<td><input type="submit" value="Simpan" class="btn btn-primary btn-sm"></td>
										</tr>		
									</table>
								</form>
								<?php } ?>
							</div>					
						</div>					
					</div>	

					<br/>
					<br/>
					<br/>
					<br/>


				</div>				
			</div>		

		</div>
	</div>

	<?php include 'footer.php'; ?>