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
						<h4 class="panel-title">Data pegawai</h4>
						<div class="heading-elements">
							
						</div>
					</div>
					<div class="panel-body">
						<div class="datatable-scroll">
						<table class="table table-bordered table-hover table-striped" id="table-datatable">
							<thead>
								<tr>
									<th width="1%">No</th>						
									<th>NIP</th>		
									<th>Nama</th>		
									<th>Username</th>		
									<th>Jenis Kelamin</th>		
									<th>Pangkat</th>		
									<th>Golongan</th>											
									<th>Jabatan</th>											
								</tr>
							</thead>
							<tbody>
							<?php
							$no = 1; 
							$data = mysqli_query($koneksi,"select * from pegawai");		
							while($d=mysqli_fetch_array($data)){
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $d['nip'] ?></td>
									<td><?php echo $d['nama'] ?></td>
									<td><?php echo $d['username'] ?></td>
									<td><?php echo $d['jk'] ?></td>
									<td><?php echo $d['pangkat'] ?></td>	
									<td><?php echo $d['golongan'] ?></td>	
									<td><?php echo $d['jabatan'] ?></td>												
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