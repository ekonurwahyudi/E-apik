	<?php include 'header.php'; ?>
	<!-- Main content -->
	<div class="content-wrapper">

		<!-- Content area -->
		<div class="content">
			
			<!-- Dashboard content -->
			<div class="row">
				<div class="col-lg-12">
					
					<!-- Quick stats boxes -->
					<div class="row">
						<div class="col-lg-4">

							<!-- Members online -->
							<div class="panel bg-blue-400">
								<div class="panel-body">
									<?php 
									$id = $_SESSION['id'];
									$permohonan=mysqli_query($koneksi,"select * from ijin where ijin_pegawai='$id'"); 
									?>
									<h3 class="no-margin"><?php echo mysqli_num_rows($permohonan) . " Permohonan"; ?></h3>
									Jumlah permohonan Izin saya
									
								</div>

								<div class="container-fluid">
									<div id="members-online"></div>
								</div>
							</div>
							<!-- /members online -->

						</div>

						<div class="col-lg-4">

							<!-- Current server load -->
							<div class="panel bg-teal-400">
								<div class="panel-body">									
									<?php 
									$diterima=mysqli_query($koneksi,"select * from ijin where ijin_pegawai='$id' and ijin_status='3'"); 
									?>
									<h3 class="no-margin"><?php echo mysqli_num_rows($diterima) . " Permohonan"; ?></h3>
									Jumlah permohonan disetujui
								</div>

								<div id="server-load"></div>
							</div>
							<!-- /current server load -->

						</div>

						<div class="col-lg-4">

							<!-- Today's revenue -->
							<div class="panel bg-pink-400">
								<div class="panel-body">									
									<?php 
									$ditolak=mysqli_query($koneksi,"select * from ijin where ijin_pegawai='$id' and (ijin_status='4' or ijin_status='2')"); 
									?>
									<h3 class="no-margin"><?php echo mysqli_num_rows($ditolak) . " Permohonan"; ?></h3>
									Jumlah permohonan ditolak								
								</div>

								<div id="today-revenue"></div>
							</div>
							<!-- /today's revenue -->

						</div>
					</div>
					<!-- /quick stats boxes -->			

				</div>

				<div class="col-lg-12">					
					<!-- Daily sales -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h6 class="panel-title">Riwayat Izin Keluar</h6>							
						</div>

						<div class="panel-body">
							
							<div class="datatable-scroll">
								<table class="table table-bordered table-hover table-striped" id="table-datatable">
									<thead>
										<tr>															
											<th>Kode Surat Izin Keluar</th>		
											<th>Tanggal</th>																					
											<th>Alasan</th>																																					
											<th>Status</th>											
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1; 
										$id = $_SESSION['id'];
										$data = mysqli_query($koneksi,"select * from ijin where ijin.ijin_pegawai='$id' order by ijin_id desc");		
										while($d=mysqli_fetch_array($data)){
											?>
											<tr>								
												<td><b>W15.U10/<?php echo $d['ijin_id'] ?>/KP.05.2/<?php echo date('m',strtotime($d['ijin_tanggal'])); ?>/<?php echo date('Y',strtotime($d['ijin_tanggal'])); ?></b></td>									
												<td>
													Diajukan : <?php echo date('d/m/Y',strtotime($d['ijin_tanggal'])); ?><br/>
													Mulai : <?php echo date('H:i',strtotime($d['ijin_jam_dari'])); ?><br/>
													Sampai : <?php echo date('H:i',strtotime($d['ijin_jam_sampai'])); ?>
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
					<!-- /daily sales -->


				</div>
			</div>
			<!-- /dashboard content -->


			<!-- Footer -->
			<div class="footer text-muted">
				<!-- &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a> -->
			</div>
			<!-- /footer -->

		</div>
		<!-- /content area -->

	</div>
	<!-- /main content -->

	<?php include 'footer.php'; ?>