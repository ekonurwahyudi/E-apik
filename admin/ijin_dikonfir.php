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
						<h4 class="panel-title">Data Permohonan Izin Keluar</h4>
						<div class="heading-elements">
							
						</div>
					</div>
					<div class="panel-body">
						<p class="alert alert-info">
							<b>DATA PERMOHONAN IZIN YANG SUDAH DI SETUJUI KETUA.</b>
						</p>
						<div class="datatable-scroll">
							<table class="table table-bordered table-hover table-striped" id="table-datatable">
								<thead>
									<tr>															
										<th>Kode Surat Izin Keluar</th>		
										<th>Tanggal</th>		
										<th>Pegawai</th>							
										<th>Alasan</th>							
										<th>Status</th>		
										<th>OPSI</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1; 
									$data = mysqli_query($koneksi,"select * from ijin where ijin_status='3' order by ijin_id desc");		
									while($d=mysqli_fetch_array($data)){
										?>
										<tr>								
											<td><b>W15.U10/<?php echo $d['ijin_id'] ?>/KP.05.2/<?php echo date('m',strtotime($d['ijin_tanggal'])); ?>/<?php echo date('Y',strtotime($d['ijin_tanggal'])); ?></b></td>									
											<td>
												Diajukan : <?php echo date('d/m/Y',strtotime($d['ijin_tanggal'])); ?><br/>
												Mulai : <?php echo date('H:m',strtotime($d['ijin_jam_dari'])); ?><br/>
												Sampai : <?php echo date('H:m',strtotime($d['ijin_jam_sampai'])); ?>
											</td>
											<td> 
												<?php
												if($d['ijin_pengaju']=="pegawai"){
													$xid = $d['ijin_pegawai'];
													$x = mysqli_query($koneksi,"select * from pegawai where id='$xid'");
													$xxx = mysqli_fetch_assoc($x);
													echo "[Pegawai]<br/>";
													echo "<b>".$xxx['nama']."</b><br/>";
													echo "<b>NIP.".$xxx['nip']."</b>";
												}else{
													$xid = $d['ijin_pegawai'];
													$x = mysqli_query($koneksi,"select * from ketua where id='$xid'");
													$xxx = mysqli_fetch_assoc($x);
													echo "[Ketua PN]<br/>";
													echo "<b>".$xxx['nama']."</b><br/>";
													echo "<b>NIP.".$xxx['nip']."</b>";
												}
												?>			
											</td>
											<td>
												
												<?php echo $d['ijin_alasan'] ?><br/>
											</td>										
											<!-- <td></td>											 -->
											<td>
												<?php
												if($d['ijin_status'] == "0"){
													echo "<span class='label label-default'>Menunggu konfirmasi</span>";
												}else if($d['ijin_status'] == "1"){
													echo "<span class='label label-success'>Disetujui</span>";
												}else if($d['ijin_status'] == "2"){
													echo "<span class='label label-danger'>Ditolak</span>";
												}else if($d['ijin_status'] == "3"){
													echo "<span class='label label-success'>Disetujui ketua</span>";
												}else if($d['ijin_status'] == "4"){
													echo "<span class='label label-danger'>Ditolak ketua</span>";
												}
												?>

												<br/>
												<br/>
												<?php if($d['ijin_status']!="3" && $d['ijin_status']!="4"){ ?>
												<form action="permohonan_update.php" method="post">
													<input type="hidden" name="id" value="<?php echo $d['ijin_id'] ?>">
													<select name="ijin_status" onchange="this.form.submit()">
														<option <?php if($d['ijin_status']=="0"){echo "selected='selected'";} ?> value="0">Menunggu</option>
														<option <?php if($d['ijin_status']=="1"){echo "selected='selected'";} ?> value="1">Disetujui</option>
														<option <?php if($d['ijin_status']=="2"){echo "selected='selected'";} ?> value="2">Ditolak</option>																												
													</select>
												</form>
												<?php } ?>

											</td>
											<td>	
												<a target="_blank" class="btn btn-primary btn-icon btn-xs" href="ijin_surat_cetak.php?id=<?php echo $d['ijin_id'];?>">CETAK SURAT IZIN</a>	
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