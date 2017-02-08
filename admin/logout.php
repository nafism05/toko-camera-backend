<?php

    session_start();

    unset($_SESSION['username']); //unset session
    header("Location: login.php"); //redirect ke halaman login


 ?>
