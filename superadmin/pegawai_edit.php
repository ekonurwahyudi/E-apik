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
							<?php
							$id = $_GET['id'];
							$data = mysqli_query($koneksi,"select * from pegawai where id='$id'");		
							while($d=mysqli_fetch_array($data)){
								?>
								<form action="pegawai_update.php" method="post">									
									<table class="table">
										<tr>
											<th>Nama</th>
											<td><input type="text" class="form-control" name="nama" required="required" value="<?php echo $d['nama']; ?>"></td>
										</tr>
										<tr>
											<th width="20%">NIP</th>
											<td>
												<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
												<input type="text" class="form-control" name="nip" required="required" value="<?php echo $d['nip']; ?>">
											</td>
										</tr>
										<tr>
											<th>Jenis Kelamin</th>
											<td>
												<select name="jk" class="form-control" required="required">
													<option value=""> - PILIH - </option>
													<option <?php if($d['jk']=="Pria"){echo "selected='selected'";} ?> value="Pria">Pria</option>
													<option <?php if($d['jk']=="Wanita"){echo "selected='selected'";} ?> value="Wanita">Wanita</option>
												</select>
											</td>
										</tr>
										<tr>
											<th>Pangkat</th>
											<td>
												<select class="form-control" name="pangkat" required="required">
													<option <?php if($d['pangkat']==""){echo "selected='selected'";} ?> value="">- Pilih</option>
													<option <?php if($d['pangkat']=="Pembina"){echo "selected='selected'";} ?> value="Pembina">Pembina</option>
													<option <?php if($d['pangkat']=="Penata"){echo "selected='selected'";} ?> value="Penata">Penata</option>
													<option <?php if($d['pangkat']=="Penata Muda"){echo "selected='selected'";} ?> value="Penata Muda">Penata Muda</option>
													<option <?php if($d['pangkat']=="Penata Tk. I"){echo "selected='selected'";} ?> value="Penata Tk. I">Penata Tk. I</option>
													<option <?php if($d['pangkat']=="Penata Muda Tk. I"){echo "selected='selected'";} ?> value="Penata Muda Tk. I">Penata Muda Tk. I</option>											
													<option <?php if($d['pangkat']=="Pengatur"){echo "selected='selected'";} ?> value="Pengatur">Pengatur</option>
													<option <?php if($d['pangkat']=="Pengatur Muda"){echo "selected='selected'";} ?> value="Pengatur Muda">Pengatur Muda</option>
												</select>										
											</td>
										</tr>
										<tr>
											<th>Golongan</th>
											<td>

												<select class="form-control" name="golongan" required="required">
													<option value="">- Pilih</option>
													<option <?php if($d['golongan']=="IV/a"){echo "selected='selected'";} ?> value="IV/a">IV/a</option>
													<option <?php if($d['golongan']=="III/d"){echo "selected='selected'";} ?> value="III/d">III/d</option>
													<option <?php if($d['golongan']=="III/c"){echo "selected='selected'";} ?> value="III/c">III/c</option>
													<option <?php if($d['golongan']=="III/b"){echo "selected='selected'";} ?> value="III/b">III/b</option>												
													<option <?php if($d['golongan']=="III/a"){echo "selected='selected'";} ?> value="III/a">III/a</option>
													<option <?php if($d['golongan']=="II/c"){echo "selected='selected'";} ?> value="II/c">II/c</option>
													<option <?php if($d['golongan']=="II/a"){echo "selected='selected'";} ?> value="II/a">II/a</option>
												</select>													
											</td>
										</tr>
										<tr>
											<th>Jabatan</th>
											<td>										
												<select name="jabatan" required="required" class="form-control">
													<option value="">-Pilih</option>
													<option <?php if($d['jabatan']=="Ketua"){echo "selected='selected'";} ?> value="Ketua">Ketua</option>
													<option <?php if($d['jabatan']=="Hakim"){echo "selected='selected'";} ?> value="Hakim">Hakim</option>
													<option <?php if($d['jabatan']=="Wakil Ketua"){echo "selected='selected'";} ?> value="Wakil Ketua">Wakil Ketua</option>
													<option <?php if($d['jabatan']=="Panitera"){echo "selected='selected'";} ?> value="Panitera">Panitera</option>
													<option <?php if($d['jabatan']=="Sekretaris"){echo "selected='selected'";} ?> value="Sekretaris">Sekretaris</option>
													<option <?php if($d['jabatan']=="Panitera Muda Hukum"){echo "selected='selected'";} ?> value="Panitera Muda Hukum">Panitera Muda Hukum</option>
													<option <?php if($d['jabatan']=="Panitera Muda Pidana"){echo "selected='selected'";} ?> value="Panitera Muda Pidana">Panitera Muda Pidana</option>
													<option <?php if($d['jabatan']=="Panitera Muda Perdata"){echo "selected='selected'";} ?> value="Panitera Muda Perdata">Panitera Muda Perdata</option>
													<option <?php if($d['jabatan']=="Panitera Pengganti"){echo "selected='selected'";} ?> value="Panitera Pengganti">Panitera Pengganti</option>
													<option <?php if($d['jabatan']=="Jurusita"){echo "selected='selected'";} ?> value="Jurusita">Jurusita</option>
													<option <?php if($d['jabatan']=="Kepala Sub Bagian Kepegawaian Organiasi dan Tata Laksana"){echo "selected='selected'";} ?> value="Kepala Sub Bagian Kepegawaian Organiasi dan Tata Laksana">Kepala Sub Bagian Kepegawaian Organiasi dan Tata Laksana</option>
													<option <?php if($d['jabatan']=="Kepala Sub Bagian Umum dan Keuangan"){echo "selected='selected'";} ?> value="Kepala Sub Bagian Umum dan Keuangan">Kepala Sub Bagian Umum dan Keuangan</option>
													<option <?php if($d['jabatan']=="Kepala Sub Bagian Perencanaan TI dan Pelaporan"){echo "selected='selected'";} ?> value="Kepala Sub Bagian Perencanaan TI dan Pelaporan">Kepala Sub Bagian Perencanaan TI dan Pelaporan</option>
													<option <?php if($d['jabatan']=="Staf Pengadministrasi Kepaniteraan Hukum"){echo "selected='selected'";} ?> value="Staf Pengadministrasi Kepaniteraan Hukum">Staf Pengadministrasi Kepaniteraan Hukum</option>
													<option <?php if($d['jabatan']=="Staf Pengadministrasi Kepaniteraan Perdata"){echo "selected='selected'";} ?> value="Staf Pengadministrasi Kepaniteraan Perdata">Staf Pengadministrasi Kepaniteraan Perdata</option>
													<option <?php if($d['jabatan']=="Staf Pengadministrasi Kepaniteraan Pidana"){echo "selected='selected'";} ?> value="Staf Pengadministrasi Kepaniteraan Pidana">Staf Pengadministrasi Kepaniteraan Pidana</option>
													<option <?php if($d['jabatan']=="Staf Pengadministrasi Subbag Perencanaan"){echo "selected='selected'";} ?> value="Staf Pengadministrasi Subbag Perencanaan">Staf Pengadministrasi Subbag Perencanaan</option>
													<option <?php if($d['jabatan']=="Teknologi Informasi dan Pelaporan"){echo "selected='selected'";} ?> value="Teknologi Informasi dan Pelaporan">Teknologi Informasi dan Pelaporan</option>
													<option <?php if($d['jabatan']=="Staf Pengadministrasi Subbag Umum Dan Keuangan"){echo "selected='selected'";} ?> value="Staf Pengadministrasi Subbag Umum Dan Keuangan">Staf Pengadministrasi Subbag Umum Dan Keuangan</option>
													<option <?php if($d['jabatan']=="Bendahara Pengeluaran"){echo "selected='selected'";} ?> value="Bendahara Pengeluaran">Bendahara Pengeluaran</option>
													<option <?php if($d['jabatan']=="Staf Petugas Keuangan"){echo "selected='selected'";} ?> value="Staf Petugas Keuangan">Staf Petugas Keuangan</option>
												</select>
											</td>
										</tr>
										<tr>
											<th>Organisasi</th>
											<td><textarea class="form-control" name="organisasi"><?php echo $d['organisasi']; ?></textarea></td>
										</tr>
										<tr>
											<th>Alamat</th>
											<td><input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>" required="required"></td>
										</tr>
										<tr>
											<th>Username</th>
											<td><input type="text" class="form-control" name="username" value="<?php echo $d['username']; ?>" required="required"></td>
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