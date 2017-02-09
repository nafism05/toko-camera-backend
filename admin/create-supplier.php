<?php include('cek-login.php'); ?>
<?php include('header.php'); ?>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Tambah Supplier</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<!-- <h3>Tambah Data Siswa</h3> -->


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Tambah Produk
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">



				<div class="row">
					<div class="col-lg-6">
						<form role="form" action="create-proses-supplier.php" method="post">
							<div class="form-group">
								<label>Nama Supplier</label>
								<input type="text" name="supplier_name" class="form-control" autofocus>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="supplier_alamat" class="form-control">
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" name="supplier_telp" class="form-control">
							</div>
							<button type="submit" name="tambah" value="Tambah" class="btn btn-default btn-primary">Submit</button>
						</form>
					</div>
					<!-- /.col-lg-6 (nested) -->
				</div>
				<!-- /.row (nested) -->



			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->



<!-- <form action="create-proses.php" method="post">
	<table cellpadding="3" cellspacing="0">
		<tr>
			<td>NIS</td>
			<td>:</td>
			<td><input type="text" name="nis" required></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="nama" size="30" required></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td>
				<select name="kelas" required>
					<option value="">Pilih Kelas</option>
					<option value="X">X</option>
					<option value="XI">XI</option>
					<option value="XII">XII</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td>
				<select name="jurusan" required>
					<option value="">Pilih Jurusan</option>
					<option value="RPL">RPL</option>
					<option value="Multimedia">Multimedia</option>
					<option value="Akuntansi">Akuntansi</option>
					<option value="Perbankan">Perbankan</option>
					<option value="Pemasaran">Pemasaran</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="tambah" value="Tambah"></td>
		</tr>
	</table>
</form> -->

<?php include('footer.php'); ?>
