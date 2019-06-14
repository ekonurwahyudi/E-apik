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
						<h4 class="panel-title">Data Permohonan Cuti Pegawai</h4>
						<div class="heading-elements">
							
						</div>
					</div>
					<div class="panel-body">
						<p class="alert alert-info">Klik tombol catatan untuk membuat catatan cuti dari ketua.</p>
						<div class="datatable-scroll">
							<table class="table table-bordered table-hover table-striped" id="table-datatable">
								<thead>
									<tr>															
										<th>Kode Surat Cuti</th>		
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
										<th>Cuti</th>																																					
										<th>Status</th>		
										<th>OPSI</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1; 
									// jika yg login adalah ketua pn
									if($_SESSION['jenis_ketua']=="PN"){																	
										$data = mysqli_query($koneksi,"select * from permohonan,pegawai where permohonan.pegawai=pegawai.id and (permohonan.status='1' or permohonan.status='3' or permohonan.status='4') order by permohonan_id desc");		
									}else{										
										$data = mysqli_query($koneksi,"select * from permohonan,ketua where permohonan.pegawai=ketua.id and (permohonan.status='1' or permohonan.status='3' or permohonan.status='4') order by permohonan_id desc");		
									}

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
													echo "[Pegawai]<br/>";												
												}else{													
													echo "[Ketua PN]<br/>";													
												}
												?>	

												<b><?php echo $d['nama'] ?><br/></b>
												Nip. <?php echo $d['nip'] ?>
											</td>
											<td>
												
												Alasan : <?php echo $d['alasan'] ?><br/>
												Jenis : <?php echo $d['jenis'] ?>
											</td>										
											<!-- <td></td>											 -->
											<td>
												<?php
												if($d['status'] == "1"){
													echo "<span class='label label-default'>Menunggu konfirmasi ketua</span>";
												}else if($d['status'] == "3"){
													echo "<span class='label label-success'>Disetujui ketua</span>";
												}else if($d['status'] == "4"){
													echo "<span class='label label-danger'>Ditolak ketua</span>";
												}
												?>

												<br/>
												<br/>

												<form action="catatan_permohonan_konfir.php" method="post">
													<input type="hidden" name="id" value="<?php echo $d['permohonan_id'] ?>">
													<select name="status" onchange="this.form.submit()">
														<option <?php if($d['status']=="1"){echo "selected='selected'";} ?> value="1">Menunggu</option>
														<option <?php if($d['status']=="3"){echo "selected='selected'";} ?> value="3">Disetujui</option>													
														<option <?php if($d['status']=="4"){echo "selected='selected'";} ?> value="4">Ditolak</option>													
													</select>
												</form>

											</td>
											<td>	
												<!-- <?php if($d['status'] == "1"){ ?>	 										
												<a class="btn btn-primary btn-icon btn-xs" target="_blank" href="permohonan_cetak.php?id=<?php echo $d['permohonan_id'];?>">CETAK SURAT CUTI</a>

												<?php }else{ ?> -->

												<!-- <?php } ?>  -->
												<a class="btn btn-primary btn-icon btn-xs" href="catatan_permohonan_edit.php?id=<?php echo $d['permohonan_id'];?>">CATATAN</a>		
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