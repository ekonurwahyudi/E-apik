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
						<h4 class="panel-title">Data Permohonan Izin Ketua PN</h4>
						<div class="heading-elements">
							
						</div>
					</div>
					<div class="panel-body">
						<p class="alert alert-info">Klik tombol catatan untuk membuat catatan Izin dari ketua.</p>
						<div class="datatable-scroll">
							<table class="table table-bordered table-hover table-striped" id="table-datatable">
								<thead>
									<tr>															
										<th>Kode Surat Izin</th>		
										<th>Tanggal</th>		
										<th>
											<?php 
											if($_SESSION['jenis_ketua']=="PN"){																	
												echo "Pegawai";
											}else{										
												echo "Ketua PN";												
											}
											?>										
										</th>												
										<th>Alasan</th>	
										<th>Status</th>		
										<th>OPSI</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1; 
									// jika yg login adalah ketua pn
									if($_SESSION['jenis_ketua']=="PN"){																	
										$data = mysqli_query($koneksi,"select * from ijin,pegawai where ijin_pegawai=pegawai.id and (ijin_status='1' or ijin_status='3' or ijin_status='4') order by ijin_id desc");		
									}else{										
										$data = mysqli_query($koneksi,"select * from ijin,ketua where ijin_pegawai=ketua.id and (ijin_status='1' or ijin_status='3' or ijin_status='4') order by ijin_id desc");		
									}

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
													echo "[Pegawai]<br/>";												
												}else{													
													echo "[Ketua PN]<br/>";													
												}
												?>	

												<b><?php echo $d['nama'] ?><br/></b>
												Nip.<?php echo $d['nip'] ?>
											</td>
											<td>
												
												<?php echo $d['ijin_alasan'] ?><br/>
											</td>																					
											<td>
												<?php
												if($d['ijin_status'] == "1"){
													echo "<span class='label label-default'>Menunggu konfirmasi ketua</span>";
												}else if($d['ijin_status'] == "3"){
													echo "<span class='label label-success'>Disetujui ketua</span>";
												}else if($d['ijin_status'] == "4"){
													echo "<span class='label label-danger'>Ditolak ketua</span>";
												}
												?>

												<br/>
												<br/>

												<form action="catatan_ijin_konfir.php" method="post">
													<input type="hidden" name="id" value="<?php echo $d['ijin_id'] ?>">
													<select name="status" onchange="this.form.submit()">
														<option <?php if($d['ijin_status']=="1"){echo "selected='selected'";} ?> value="1">Menunggu</option>
														<option <?php if($d['ijin_status']=="3"){echo "selected='selected'";} ?> value="3">Disetujui</option>													
														<option <?php if($d['ijin_status']=="4"){echo "selected='selected'";} ?> value="4">Ditolak</option>													
													</select>
												</form>

											</td>
											<td>	
												<!-- <?php if($d['status'] == "1"){ ?>	 										
												<a class="btn btn-primary btn-icon btn-xs" target="_blank" href="permohonan_cetak.php?id=<?php echo $d['ijin_id'];?>">CETAK SURAT CUTI</a>

												<?php }else{ ?> -->

												<!-- <?php } ?>  -->
												<a class="btn btn-primary btn-icon btn-xs" href="catatan_ijin_edit.php?id=<?php echo $d['ijin_id'];?>">CATATAN</a>		
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