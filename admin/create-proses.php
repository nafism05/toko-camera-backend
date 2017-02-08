<?php
//mulai proses tambah data


//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){

	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

	//jika tombol tambah benar di klik maka lanjut prosesnya
	$produk_name		= $_POST['produk_name'];
	$produk_harga		= $_POST['produk_harga'];

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$sql = "INSERT INTO produk VALUES(NULL, '$produk_name', '$produk_harga')";

	//jika query input sukses
	// if (mysqli_query($koneksi, $sql)) {
	// 	echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
	// 	echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
	// } else {
	// 	echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
	// 	echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
	// 	echo "Error: ".$sql.". ".mysqli_error($koneksi);
	// }





	if (mysqli_query($koneksi, $sql)) {
		if(mysqli_affected_rows($koneksi)>0){
			echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
			echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		}else{
			echo 'Tidak ada data yang di tambahkan! ';		//Pesan jika proses tambah gagal
			echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		}
	} else {
		echo "Error: ".$sql.". ".mysqli_error($koneksi);
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>
