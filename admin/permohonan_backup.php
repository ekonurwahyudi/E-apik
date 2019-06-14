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
						<h4 class="panel-title">Data Permohonan Cuti</h4>
						<div class="heading-elements">
							<a href="permohonan_cetak_semua.php" target="_BLANK" class="btn btn-sm btn-primary">CETAK LAPORAN CUTI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>															
									<th width="10%">Kode Surat Cuti</th>		
									<th width="10%">Tgl. Diajukan</th>		
									<th>Pegawai</th>		
									<th>Alasan</th>		
									<th width="10%">Mulai</th>							
									<th width="10%">Berakhir</th>							
									<th>Status</th>		
									<th width="10%">OPSI</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$no = 1; 
							$data = mysqli_query($koneksi,"select * from permohonan,pegawai where permohonan.pegawai=pegawai.id order by permohonan_id desc");		
							while($d=mysqli_fetch_array($data)){
								?>
								<tr>								
									<td><b><?php echo "CUTI00".$d['permohonan_id'];?></b></td>
									<td><?php echo date('d/m/Y',strtotime($d['tgl'])); ?></td>
									<td><?php echo $d['nama'] ?></td>
									<td><?php echo $d['alasan'] ?></td>
									<td><?php echo date('d/m/Y',strtotime($d['dari'])); ?></td>
									<td><?php echo date('d/m/Y',strtotime($d['sampai'])); ?></td>											
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

										<br/>
										<br/>

										<form action="permohonan_update.php" method="post">
											<input type="hidden" name="id" value="<?php echo $d['permohonan_id'] ?>">
											<select class="form-control" name="status" onchange="this.form.submit()">
												<option <?php if($d['status']=="0"){echo "selected='selected'";} ?> value="0">Menunggu Konfirmasi</option>
												<option <?php if($d['status']=="1"){echo "selected='selected'";} ?> value="1">Disetujui</option>
												<option <?php if($d['status']=="2"){echo "selected='selected'";} ?> value="2">Ditolak</option>
											</select>
										</form>

									</td>
									<td>			
										<?php if($d['status'] == "1"){ ?>																
										<a class="btn btn-primary btn-icon btn-xs" target="_blank" href="permohonan_cetak.php?id=<?php echo $d['permohonan_id'];?>">CETAK SURAT CUTI</a>
										<?php } ?>
									</td>
								</tr>
								<?php
							}
							?>
							</tbody>
						</table>
						</div>					
					</div>					
				</div>	

			</div>

		</div>		
	
	</div>
</div>

<?php include 'footer.php'; ?>