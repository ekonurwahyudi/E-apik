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
						<h4 class="panel-title">Buat permohonan Izin Keluar</h4>
						<div class="heading-elements">
							<a href="ijin.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<form action="ijin_act.php" method="post">
								<table class="table">
									<tr>
										<th width="20%">Dari Jam</th>
										<td><input type="time" name="dari" class="form-control"></td>
									</tr>
									<tr>
										<th width="20%">Sampai Jam</th>
										<td><input type="time" class="form-control" name="sampai" required="required"></td>
									</tr>
									<tr>
										<th width="20%">Alasan Izin</th>										
										<td><input type="text" class="form-control" name="alasan" required="required"></td>
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
						Pengenalan Waktu:<br/>						
						a.	AM : Pagi Hari<br/>
						b.	PM: Siang Hari<br/>
					</div>
				</div>				
			</div>
		</div>	
	</div>
</div>

<?php include 'footer.php'; ?>
