<?php include('cek-login.php'); ?>
<?php include('header.php'); ?>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Data Produk</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<!-- <h3>Data Produk</h3> -->



<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Data Produk
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php

						//iclude file koneksi ke database
						include('koneksi.php');

						$sql = "SELECT * FROM produk ORDER BY produk_id DESC";

						$result = mysqli_query($koneksi, $sql);
						if (!$result) { //gagal request data
							die('Error: '.mysqli_error($koneksi));
						}else{
							if (mysqli_num_rows($result) > 0) {
								//jika data tidak kosong, maka akan melakukan perulangan while
								//$no = 1;	//membuat variabel $no untuk membuat nomor urut
								while($data = mysqli_fetch_assoc($result)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database

									echo '<tr class="even gradeC">';
										//echo '<td>'.$no.'</td>';
										echo '<td>'.$data['produk_name'].'</td>';
										echo '<td>Rp '.$data['produk_harga'].'</td>';
										echo '<td><a href="update.php?id='.$data['produk_id'].'">Edit</a> / <a href="delete.php?id='.$data['produk_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
									echo '</tr>';

									//$no++;	//menambah jumlah nomor urut setiap row
								}

							} else {
								//jika data kosong, maka akan menampilkan row kosong
								echo '<tr class="even gradeC"><td colspan="6">Tidak ada data!</td></tr>';
							}
						}
						?>
					</tbody>
				</table>
				<!-- /.table-responsive -->
				<div class="col-lg-2">
					<a href="create.php" class="btn btn-default btn-primary btn-block">Tambah</a>
				</div>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->



<?php include('footer.php'); ?>
