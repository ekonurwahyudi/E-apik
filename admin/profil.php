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
						<h4 class="panel-title">Data Profil Saya</h4>						
					</div>
					<div class="panel-body">
						<div class="datatable-scroll">		
							<?php
							$no = 1; 
							$id = $_SESSION['id'];
							$data = mysqli_query($koneksi,"select * from admin where id='$id'");	
							while($d=mysqli_fetch_array($data)){
								?>					
							<table class="table table-bordered">
								<tr>
									<th width="15%">Nama</th>
									<td><?php echo $d['nama']; ?></td>
								</tr>
								<tr>
									<th width="15%">NIP</th>
									<td><?php echo $d['nip']; ?></td>
								</tr>
								<tr>
									<th width="15%">Jenis Kelamin</th>
									<td><?php echo $d['jenis_kelamin']; ?></td>
								</tr>
								<tr>
									<th width="15%">HP</th>
									<td><?php echo $d['hp']; ?></td>
								</tr>
								<tr>
									<th width="15%">Alamat</th>
									<td><?php echo $d['alamat']; ?></td>
								</tr>															
								<tr>
									<th width="15%">Username</th>
									<td><?php echo $d['username']; ?></td>
								</tr>
								<tr>
									<th width="15%">Password</th>
									<td><?php echo $d['password']; ?></td>
								</tr>
							</table>
							<?php } ?>
						</div>					
					</div>					
				</div>	

			</div>

		</div>		

	</div>
</div>

<?php include 'footer.php'; ?>