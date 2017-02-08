<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){

	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

	//jika tombol tambah benar di klik maka lanjut prosesnya
	$produk_id			= $_POST['produk_id'];
	$produk_name		= $_POST['produk_name'];
	$produk_harga		= $_POST['produk_harga'];

	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	//$update = mysql_query("UPDATE siswa SET siswa_nis='$nis', siswa_nama='$nama', siswa_kelas='$kelas', siswa_jurusan='$jurusan' WHERE siswa_id='$id'") or die(mysql_error());
    $sql = "UPDATE produk SET produk_name='$produk_name', produk_harga='$produk_harga' WHERE produk_id='$produk_id'";


	//jika query update sukses
	if(mysqli_query($koneksi, $sql)){

		if(mysqli_affected_rows($koneksi)>0){

			echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
			echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman

		}else{

			echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
			echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman

		}

	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>
