<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<div class="content">
		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-8">
				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Tambah Data Admin</h4>
						<div class="heading-elements">
							<a href="admin.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<?php
							$id = $_GET['id'];
							$data = mysqli_query($koneksi,"select * from admin where id='$id'");
							while($d=mysqli_fetch_array($data)){
								?>
								<form action="admin_update.php" method="post">
									<table class="table">
										<tr>
											<th width="20%">NIP</th>
											<td>
												<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
												<input type="text" class="form-control" name="nip" required="required" value="<?php echo $d['nip']; ?>">
											</td>
										</tr>
										<tr>
											<th>Nama</th>
											<td><input type="text" class="form-control" name="nama" required="required" value="<?php echo $d['nama']; ?>"></td>
										</tr>
										<tr>
											<th>Jenis Kelamin</th>
											<td>
												<select name="jk" class="form-control">
													<option> - PILIH - </option>
													<option <?php if($d['jenis_kelamin']=="Pria"){echo "selected='selected'";} ?> value="Pria">Pria</option>
													<option <?php if($d['jenis_kelamin']=="Wanita"){echo "selected='selected'";} ?> value="Wanita">Wanita</option>
												</select>
											</td>
										</tr>
										<tr>
											<th>HP</th>
											<td><input type="text" class="form-control" name="hp" required="required" value="<?php echo $d['hp']; ?>"></td>
										</tr>
										<tr>
											<th>Alamat</th>
											<td><input type="text" class="form-control" name="alamat" required="required" value="<?php echo $d['alamat']; ?>"></td>
										</tr>
										<tr>
											<th>Username</th>
											<td><input type="text" class="form-control" name="username" required="required" value="<?php echo $d['username']; ?>"></td>
										</tr>
										<tr>
											<th>Password</th>
											<td>
												<input type="password" class="form-control" name="password">
												<small class="text-muted">Kosongkan jika tidak ingin mengganti password</small>
											</td>
										</tr>
										<tr>
											<th></th>
											<td><input type="submit" value="Simpan" class="btn btn-primary btn-sm"></td>
										</tr>		
									</table>
								</form>
								<?php } ?>
							</div>					
						</div>					
					</div>	
				</div>
			</div>		

		</div>
	</div>

	<?php include 'footer.php'; ?>