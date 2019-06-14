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
						<h4 class="panel-title">Data Admin</h4>
						<div class="heading-elements">
							<a href="admin_tambah.php" class="btn btn-sm btn-primary"><i class="icon-plus22"></i> TAMBAH</a>
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
									<th>HP</th>		
									<th>Alamat</th>		
									<th width="13%">OPSI</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$no = 1; 
							$data = mysqli_query($koneksi,"select * from admin");		
							while($d=mysqli_fetch_array($data)){
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $d['nip'] ?></td>
									<td><?php echo $d['nama'] ?></td>
									<td><?php echo $d['username'] ?></td>
									<td><?php echo $d['jenis_kelamin'] ?></td>
									<td><?php echo $d['hp'] ?></td>									
									<td><?php echo $d['alamat'] ?></td>			
									<td>									
										<a class="btn border-teal text-teal btn-flat btn-icon btn-xs" href="admin_edit.php?id=<?php echo $d['id'];?>"><i class="icon-wrench3"></i></a>
										<a class="btn border-danger text-danger btn-flat btn-icon btn-xs" href="admin_hapus.php?id=<?php echo $d['id'];?>"><i class="icon-trash-alt"></i></a>
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