<?php
//mulai proses tambah data


//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){

	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');

	//lakukan insertdata disini

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>
