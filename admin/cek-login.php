<?php

    //cek login admin

    session_start();

    if(!isset($_SESSION['username'])){ //session belum didaftarkan
        header("Location: login.php"); //redirect ke halaman login
    }
 ?>
