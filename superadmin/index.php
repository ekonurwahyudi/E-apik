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
							<div class="panel bg-teal-400">
								<div class="panel-body">
									<?php $semua=mysqli_query($koneksi,"select * from ijin"); ?>
									<h3 class="no-margin"><?php echo mysqli_num_rows($semua) . " Permohonan Izin Keluar"; ?></h3>
									Jumlah Permohonan Izin Keluar
									
								</div>

								<div class="container-fluid">
									<div id="members-online"></div>
								</div>
							</div>
							<!-- /members online -->

						</div>

						<div class="col-lg-4">

							<!-- Current server load -->
							<div class="panel bg-pink-400">
								<div class="panel-body">
									<?php $diterima=mysqli_query($koneksi,"select * from ijin where (ijin_status='1' or ijin_status='3')"); ?>
									<h3 class="no-margin"><?php echo mysqli_num_rows($diterima) . " Permohonan diterima"; ?></h3>
									Jumlah Permohonan Diterima
									
								</div>

								<div id="server-load"></div>
							</div>
							<!-- /current server load -->

						</div>

						<div class="col-lg-4">

							<!-- Today's revenue -->
							<div class="panel bg-blue-400">
								<div class="panel-body">									
									<?php $ditolak=mysqli_query($koneksi,"select * from ijin where (ijin_status='2' or ijin_status='4')"); ?>
									<h3 class="no-margin"><?php echo mysqli_num_rows($ditolak) . " Permohonan ditolak"; ?></h3>
									Jumlah Permohonan Ditolak								
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
							<h6 class="panel-title">Permohonan Izin Keluar</h6>							
						</div>

						<div class="panel-body">
							<div class="datatable-scroll">

								<div>
									<form action="index_filter.php" method="get">
										<table class="table">
											<tr>
												<th>Filter</th>
												<td>
													<select class="form-control" name="filter">
														<option value="">-Pilih</option>
														<option value="ijin">Permohonan</option>
														<option value="semua">Semua</option>
													</select>
												</td>
												<td>
													<input type="submit" value="Filter" class="btn btn-primary">
												</td>
											</tr>
										</table>
									</form>
								</div>
								<br/>
								<br/>
								<br/>

								<table class="table table-bordered table-hover table-striped" id="table-datatable">
									<thead>
										<tr>															
											<th>Kode Surat Izin</th>		
											<th>Tanggal</th>		
											<th>Pegawai</th>												
											<th>Alasan</th>																																					
											<th>Status</th>											
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1; 
										$data = mysqli_query($koneksi,"select * from ijin order by ijin_id desc");		
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



		</div>
		<!-- /content area -->

	</div>
	<!-- /main content -->

	<?php include 'footer.php'; ?>