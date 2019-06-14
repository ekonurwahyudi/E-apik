<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<div class="content">
		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-8">
				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Buat permohonan cuti</h4>
						<div class="heading-elements">
							<a href="catatan_permohonan.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<?php 
							$id = $_GET['id'];
							$data = mysqli_query($koneksi,"select * from permohonan where permohonan_id='$id'");
							while($d=mysqli_fetch_array($data)){
								?>
								<form action="catatan_permohonan_update.php" method="post">
									<table class="table">	
										<tr>
											<th width="20%">Pengaju</th>										
											<td>												
												<input type="text" class="form-control" required="required" value="<?php echo $d['pengaju']; ?>" disabled>
											</td>
										</tr>									
										<tr>
											<th width="20%">Alasan Cuti</th>
											<td>
												<input type="hidden" class="form-control" name="id" required="required" value="<?php echo $d['permohonan_id']; ?>">
												<input type="text" class="form-control" name="alasan" required="required" value="<?php echo $d['alasan']; ?>" disabled>
											</td>
										</tr>
										<tr>
											<th>Jenis Cuti</th>
											<td>
												<select name="jenis" class="form-control" required="required" disabled>
													<option value="">Pilih</option>
													<option <?php if($d['jenis']=="Cuti Tahunan"){echo "selected='selected'";} ?> value="Cuti Tahunan">Cuti Tahunan</option>
													<option <?php if($d['jenis']=="Cuti Besar"){echo "selected='selected'";} ?> value="Cuti Besar">Cuti Besar</option>
													<option <?php if($d['jenis']=="Cuti Sakit"){echo "selected='selected'";} ?> value="Cuti Sakit">Cuti Sakit</option>
													<option <?php if($d['jenis']=="Cuti Bersalin"){echo "selected='selected'";} ?> value="Cuti Bersalin">Cuti Bersalin</option>
													<option <?php if($d['jenis']=="Cuti karena alasan penting"){echo "selected='selected'";} ?> value="Cuti karena alasan penting">Cuti karena alasan penting</option>
													<option <?php if($d['jenis']=="Cuti di luar tanggungan negara"){echo "selected='selected'";} ?> value="Cuti di luar tanggungan negara">Cuti di luar tanggungan negara</option>
												</select>
											</td>
										</tr>	
										<tr>
											<th>Mulai Cuti</th>
											<td><input type="text" class="form-control tanggal" name="dari" required="required" value="<?php echo $d['dari']; ?>" disabled></td>
										</tr>	
										<tr>
											<th>Cuti Sampai</th>
											<td><input type="text" class="form-control tanggal" name="sampai" required="required" value="<?php echo $d['sampai']; ?>" disabled></td>
										</tr>
										<tr>
											<th>Status</th>
											<td>
												<?php
												if($d['status'] == "0"){
													echo "<span class='label label-default'>Menunggu konfirmasi</span>";
												}else if($d['status'] == "1"){
													echo "<span class='label label-success'>Disetujui</span>";
												}else if($d['status'] == "2"){
													echo "<span class='label label-danger'>Ditolak</span>";
												}
												?>

											</td>
										</tr>	
										<tr>
											<th>Catatan Admin</th>
											<td><textarea class="form-control" name="cat_admin" disabled><?php echo $d['cat_admin']; ?></textarea></td>
										</tr>
										<tr>
											<th>Catatan Sisa Cuti</th>
											<td><textarea class="form-control" name="cat_sisa_cuti" disabled=""><?php echo $d['cat_sisa_cuti']; ?></textarea></td>
										</tr>
										<tr>
											<th>Catatan Pertimbangan</th>
											<td><textarea class="form-control" name="cat_pertimbangan" disabled=""><?php echo $d['cat_pertimbangan']; ?></textarea></td>
										</tr>	
										<tr>
											<th>Catatan Ketua</th>
											<td><textarea class="form-control" name="cat_ketua"><?php echo $d['cat_ketua']; ?></textarea></td>
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
				<div class="col-md-4">
					<div class="panel">
						<div class="panel-body">
							<h4>Catatan :</h4>
							Waktu cuti:<br/>						
							a.	Cuti tahunan : 12 hari<br/>
							b.	Cuti besar: 3 bulan<br/>
							c.	Cuti sakit: 14 hari<br/>
							d.	Cuti bersalin: 3 bulan<br/>
							e.	Cuti karena alasan penting: paling lama 2 bulan<br/>
							f.	Cuti di luar tanggungan negara: paling lama 3 tahun<br/>
						</div>
					</div>				
				</div>
			</div>		

		</div>
	</div>

	<?php include 'footer.php'; ?>