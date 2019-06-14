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
							<a href="permohonan.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<form action="permohonan_act.php" method="post">
								<table class="table">
									<tr>
										<th width="20%">Alasan Cuti</th>										
										<td><input type="text" class="form-control" name="alasan" required="required"></td>
									</tr>
									<tr>
										<th>Jenis Cuti</th>
										<td>
											<select name="jenis" class="form-control" required="required">
												<option value="">Pilih</option>
												<option value="Cuti Tahunan">Cuti Tahunan</option>
												<option value="Cuti Besar">Cuti Besar</option>
												<option value="Cuti Sakit">Cuti Sakit</option>
												<option value="Cuti Bersalin">Cuti Bersalin</option>
												<option value="Cuti karena alasan penting">Cuti karena alasan penting</option>
												<option value="Cuti di luar tanggungan negara">Cuti di luar tanggungan negara</option>
											</select>
										</td>
									</tr>	
									<tr>
										<th>Mulai Cuti</th>
										<td><input type="text" class="form-control tanggal" name="dari" required="required"></td>
									</tr>	
									<tr>
										<th>Cuti Sampai</th>
										<td><input type="text" class="form-control tanggal" name="sampai" required="required"></td>
									</tr>									
									<tr>
										<th></th>
										<td><input type="submit" value="Simpan" class="btn btn-primary btn-sm"></td>
									</tr>		
								</table>
							</form>
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