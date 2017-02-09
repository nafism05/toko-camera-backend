<?php include('cek-login.php'); ?>
<?php include('header.php'); ?>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Data Suppliers</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<!-- <h3>Data Produk</h3> -->



<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Data Suppliers
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Nama Supplier</th>
							<th>Alamat</th>
							<th>Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php

						//iclude file koneksi ke database
						include('koneksi.php');

						//letakkan coding read data disini
						?>
					</tbody>
				</table>
				<!-- /.table-responsive -->
				<div class="col-lg-2">
					<a href="create-supplier.php" class="btn btn-default btn-primary btn-block">Tambah</a>
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
