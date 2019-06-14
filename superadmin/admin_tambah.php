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
							<form action="admin_act.php" method="post">
								<table class="table">
									<tr>
										<th width="20%">NIP</th>
										<td><input type="text" class="form-control" name="nip" required="required"></td>
									</tr>
									<tr>
										<th>Nama</th>
										<td><input type="text" class="form-control" name="nama" required="required"></td>
									</tr>
									<tr>
										<th>Jenis Kelamin</th>
										<td>
											<select name="jk" class="form-control">
												<option> - PILIH - </option>
												<option value="Pria">Pria</option>
												<option value="Wanita">Wanita</option>
											</select>
										</td>
									</tr>
									<tr>
										<th>HP</th>
										<td><input type="text" class="form-control" name="hp" required="required"></td>
									</tr>
									<tr>
										<th>Alamat</th>
										<td><input type="text" class="form-control" name="alamat" required="required"></td>
									</tr>
									<tr>
										<th>Username</th>
										<td><input type="text" class="form-control" name="username" required="required"></td>
									</tr>
									<tr>
										<th>Password</th>
										<td><input type="password" class="form-control" name="password" required="required"></td>
									</tr>
									<tr>
										<th></th>
										<td><input type="submit" value="Simpan" class="btn btn-primary btn-sm"></td>
									</tr>		
								</table>
							</form>
						</div>					
					</div>					
				</div>	
			</div>
		</div>		
	
	</div>
</div>

<?php include 'footer.php'; ?>