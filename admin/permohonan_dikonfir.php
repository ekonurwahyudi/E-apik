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
							
						</div>
					</div>
					<div class="panel-body">
						<p class="alert alert-info">
							<b>DATA PERMOHONAN CUTI YANG SUDAH DI SETUJUI KETUA.</b>
						</p>
						<div class="datatable-scroll">
							<table class="table table-bordered table-hover table-striped" id="table-datatable">
								<thead>
									<tr>															
										<th>Kode Surat Cuti</th>		
										<th>Tanggal</th>		
										<th>Pegawai</th>
										<th>Cuti</th>							
										<th>Status</th>		
										<th>OPSI</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1; 
									$data = mysqli_query($koneksi,"select * from permohonan where permohonan.status='3' order by permohonan_id desc");		
									while($d=mysqli_fetch_array($data)){
										?>
										<tr>								
											<td><b>W15.U10/<?php echo $d['permohonan_id'] ?>/KP.05.2/<?php echo date('m',strtotime($d['tgl'])); ?>/<?php echo date('Y',strtotime($d['tgl'])); ?></b></td>									
											<td>
												Diajukan : <?php echo date('d/m/Y',strtotime($d['tgl'])); ?><br/>
												Mulai : <?php echo date('d/m/Y',strtotime($d['dari'])); ?><br/>
												Sampai : <?php echo date('d/m/Y',strtotime($d['sampai'])); ?>
											</td>
											<td> 
												<?php
												if($d['pengaju']=="pegawai"){
													$xid = $d['pegawai'];
													$x = mysqli_query($koneksi,"select * from pegawai where id='$xid'");
													$xxx = mysqli_fetch_assoc($x);
													echo "[Pegawai]<br/>";
													echo "<b>".$xxx['nama']."</b><br/>";
													echo "<b>".$xxx['nip']."</b>";
												}else{
													$xid = $d['pegawai'];
													$x = mysqli_query($koneksi,"select * from ketua where id='$xid'");
													$xxx = mysqli_fetch_assoc($x);
													echo "[Ketua PN]<br/>";
													echo "<b>".$xxx['nama']."</b><br/>";
													echo "<b>".$xxx['nip']."</b>";
												}
												?>			
											</td>
											<td>
												
												Alasan : <?php echo $d['alasan'] ?><br/>
												Jenis : <?php echo $d['jenis'] ?>
											</td>										
											<!-- <td></td>											 -->
											<td>
												<?php
												if($d['status'] == "0"){
													echo "<span class='label label-default'>Menunggu konfirmasi</span>";
												}else if($d['status'] == "1"){
													echo "<span class='label label-success'>Disetujui</span>";
												}else if($d['status'] == "2"){
													echo "<span class='label label-danger'>Ditolak</span>";
												}else if($d['status'] == "3"){
													echo "<span class='label label-success'>Disetujui ketua</span>";
												}else if($d['status'] == "4"){
													echo "<span class='label label-danger'>Ditolak ketua</span>";
												}
												?>

												<br/>
												<br/>
												<?php if($d['status']!="3" && $d['status']!="4"){ ?>
												<form action="permohonan_update.php" method="post">
													<input type="hidden" name="id" value="<?php echo $d['permohonan_id'] ?>">
													<select name="status" onchange="this.form.submit()">
														<option <?php if($d['status']=="0"){echo "selected='selected'";} ?> value="0">Menunggu</option>
														<option <?php if($d['status']=="1"){echo "selected='selected'";} ?> value="1">Disetujui</option>
														<option <?php if($d['status']=="2"){echo "selected='selected'";} ?> value="2">Ditolak</option>																												
													</select>
												</form>
												<?php } ?>

											</td>
											<td>													
												<a target="_blank" class="btn btn-primary btn-icon btn-xs" href="permohonan_cetak.php?id=<?php echo $d['permohonan_id'];?>">CETAK PERMOHONAN CUTI</a><br/>		<br/>	
												<a target="_blank" class="btn btn-primary btn-icon btn-xs" href="permohonan_surat_cetak.php?id=<?php echo $d['permohonan_id'];?>">CETAK SURAT CUTI</a>	
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