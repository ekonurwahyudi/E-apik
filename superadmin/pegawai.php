<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Content area -->
	<div class="content">

		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-12">
				<!-- Traffic sources -->
				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">Filter Data pegawai</h4>										
					</div>
					<div class="panel-body">
						<form action="pegawai_filter.php" method="get">							
							<table class="table">
								<tr>
									<th>Jabatan</th>
									<td>
										<select class="form-control" name="filter">
											<option value=""> - Pilih -  </option>
											<?php 
											$filter = mysqli_query($koneksi,"select distinct jabatan from pegawai");
											while($f = mysqli_fetch_array($filter)){
												?>
												<option value="<?php echo $f['jabatan']; ?>"><?php echo $f['jabatan']; ?></option>
												<?php 											
											} 
											?>
										</select>
									</td>
									<td>
										<input type="submit" value="FILTER" class="btn btn-primary">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<br/>
				<br/>
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Data pegawai</h4>
						<div class="heading-elements">
							<a href="pegawai_tambah.php" class="btn btn-sm btn-primary"><i class="icon-plus22"></i> TAMBAH</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="datatable-scroll">
						<table class="table table-bordered table-hover table-striped" id="table-datatable">
							<thead>
								<tr>
									<th width="1%">No</th>						
									<th>Nama</th>											
									<th>NIP</th>		
									<th>P/W</th>		
									<th>Pangkat</th>		
									<th>Golongan</th>		
									<th>Jabatan</th>		
									<th>Alamat</th>		
									<th>Organisasi</th>		
									<th>Username</th>										
									<th width="13%">OPSI</th>
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
									<td><?php echo $d['nama'] ?></td>
									<td><?php echo $d['nip'] ?></td>
									<td><?php echo $d['jk'] ?></td>
									<td><?php echo $d['pangkat'] ?></td>
									<td><?php echo $d['golongan'] ?></td>
									<td><?php echo $d['jabatan'] ?></td>
									<td><?php echo $d['alamat'] ?></td>
									<td><?php echo $d['organisasi'] ?></td>
									<td><?php echo $d['username'] ?></td>											
									<td>									
										<a class="btn border-teal text-teal btn-flat btn-icon btn-xs" href="pegawai_edit.php?id=<?php echo $d['id'];?>"><i class="icon-wrench3"></i></a>
										<a class="btn border-danger text-danger btn-flat btn-icon btn-xs" href="pegawai_hapus.php?id=<?php echo $d['id'];?>"><i class="icon-trash-alt"></i></a>
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