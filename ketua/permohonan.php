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
						<h4 class="panel-title">Data permohonan cuti saya</h4>
						<div class="heading-elements">
							<a href="permohonan_tambah.php" class="btn btn-sm btn-primary"><i class="icon-plus22"></i> TAMBAH</a>
						</div>
					</div>
					<div class="panel-body">

						<?php
						if(isset($_GET['alert'])){
							if($_GET['alert']=="berhasil"){
								echo "<div class='alert alert-success'>Permohonan cuti berhasil terkirim. silahkan <b>tunggu konfirmasi dari admin</b>.</div>";
							}else if($_GET['alert']=="limit"){
								echo "<div class='alert alert-danger'>Permohonan cuti gagal terkirim. silahkan <b>periksa jumlah hari yang dimasukkan</b>.</div>";
							}
						}
						?>

						<div class="datatable-scroll">
							<table class="table table-bordered table-hover table-striped" id="table-datatable">
								<thead>
									<tr>															
										<th>Kode Surat Cuti</th>		
										<th>Tgl. Diajukan</th>		
										<th>Alasan</th>													
										<th>Jenis Cuti</th>													
										<th width="10%">Mulai</th>		
										<th width="10%">Berakhir</th>												
										<th width="10%">Status</th>		
										<th width="10%">OPSI</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1; 
									$id = $_SESSION['id'];
									// if($_SESSION['jenis_ketua']=="PN"){
									// 	$ketua = 'ketua pn';										
									// }else{
									// 	$ketua='ketua pt';
									// }
									$data = mysqli_query($koneksi,"select * from permohonan where permohonan.pegawai='$id' and permohonan.pengaju='ketua pn' order by permohonan_id desc");		
									while($d=mysqli_fetch_array($data)){
										?>
										<tr>									
											<td><b>W15.U10/<?php echo $d['permohonan_id'] ?>/KP.05.2/<?php echo date('m',strtotime($d['tgl'])); ?>/<?php echo date('Y',strtotime($d['tgl'])); ?></b></td>																						
											<td><?php echo date('d/m/Y',strtotime($d['tgl'])); ?></td>
											<td><?php echo $d['alasan'] ?></td>																						
											<td><?php echo $d['jenis'] ?></td>																						
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
												}else if($d['status'] == "3"){
													echo "<span class='label label-success'>Disetujui ketua</span>";
												}else if($d['status'] == "4"){
													echo "<span class='label label-danger'>Ditolak ketua</span>";
												}
												?>
											</td>											
											<td>	
												<?php
												if($d['status'] == "0"){
													?>
													<a class="btn border-danger text-danger btn-flat btn-icon btn-xs" href="permohonan_hapus.php?id=<?php echo $d['permohonan_id'];?>"><i class="icon-trash-alt"></i></a>
													<?php
												}else if($d['status'] == "1"){
													?>
													<!-- <a class="btn border-danger text-danger btn-flat btn-icon btn-xs" target="_blank" href="permohonan_cetak.php?id=<?php echo $d['permohonan_id'];?>">CETAK SURAT CUTI</a> -->
													<?php
												}
												?>																				
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