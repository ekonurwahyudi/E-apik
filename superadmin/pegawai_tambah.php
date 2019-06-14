<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">
	<div class="content">
		<!-- Main charts -->
		<div class="row">
			<div class="col-lg-8 col-md-offset-2">
				<!-- Traffic sources -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Tambah Data pegawai</h4>
						<div class="heading-elements">
							<a href="pegawai.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<form action="pegawai_act.php" method="post">
								<table class="table">									
									<tr>
										<th>Nama</th>
										<td><input type="text" class="form-control" name="nama" required="required"></td>
									</tr>
									<tr>
										<th width="20%">NIP</th>
										<td><input type="text" class="form-control" name="nip" required="required"></td>
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
										<th>Pangkat</th>
										<td>
											<select class="form-control" name="pangkat" required="required">
												<option value="">- Pilih</option>
												<option value="Pembina">Pembina</option>
												<option value="Penata">Penata</option>
												<option value="Penata Muda">Penata Muda</option>
												<option value="Penata Tk. I">Penata Tk. I</option>
												<option value="Penata Muda Tk. I">Penata Muda Tk. I</option>											
												<option value="Pengatur">Pengatur</option>
												<option value="Pengatur Muda">Pengatur Muda</option>
											</select>										
										</td>
									</tr>
									<tr>
										<th>Golongan</th>
										<td>
											
											<select class="form-control" name="golongan" required="required">
												<option value="">- Pilih</option>
												<option value="IV/a">IV/a</option>
												<option value="III/d">III/d</option>
												<option value="III/c">III/c</option>
												<option value="III/b">III/b</option>												
												<option value="III/a">III/a</option>
												<option value="II/c">II/c</option>
												<option value="II/a">II/a</option>
											</select>													
										</td>
									</tr>
									<tr>
										<th>Jabatan</th>
										<td>										
											<select name="jabatan" required="required" class="form-control">
												<option value="">-Pilih</option>
												<option value="Ketua">Ketua</option>
												<option value="Hakim">Hakim</option>
												<option value="Wakil Ketua">Wakil Ketua</option>
												<option value="Panitera">Panitera</option>
												<option value="Sekretaris">Sekretaris</option>
												<option value="Panitera Muda Hukum">Panitera Muda Hukum</option>
												<option value="Panitera Muda Pidana">Panitera Muda Pidana</option>
												<option value="Panitera Muda Perdata">Panitera Muda Perdata</option>
												<option value="Panitera Pengganti">Panitera Pengganti</option>
												<option value="Jurusita">Jurusita</option>
												<option value="Kepala Sub Bagian Kepegawaian Organiasi dan Tata Laksana">Kepala Sub Bagian Kepegawaian Organiasi dan Tata Laksana</option>
												<option value="Kepala Sub Bagian Umum dan Keuangan">Kepala Sub Bagian Umum dan Keuangan</option>
												<option value="Kepala Sub Bagian Perencanaan TI dan Pelaporan">Kepala Sub Bagian Perencanaan TI dan Pelaporan</option>
												<option value="Staf Pengadministrasi Kepaniteraan Hukum">Staf Pengadministrasi Kepaniteraan Hukum</option>
												<option value="Staf Pengadministrasi Kepaniteraan Perdata">Staf Pengadministrasi Kepaniteraan Perdata</option>
												<option value="Staf Pengadministrasi Kepaniteraan Pidana">Staf Pengadministrasi Kepaniteraan Pidana</option>
												<option value="Staf Pengadministrasi Subbag Perencanaan">Staf Pengadministrasi Subbag Perencanaan</option>
												<option value="Teknologi Informasi dan Pelaporan">Teknologi Informasi dan Pelaporan</option>
												<option value="Staf Pengadministrasi Subbag Umum Dan Keuangan">Staf Pengadministrasi Subbag Umum Dan Keuangan</option>
												<option value="Bendahara Pengeluaran">Bendahara Pengeluaran</option>
												<option value="Staf Petugas Keuangan">Staf Petugas Keuangan</option>
											</select>
										</td>
									</tr>
									<tr>
										<th>Organisasi</th>
										<td><textarea class="form-control" name="organisasi"></textarea></td>
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