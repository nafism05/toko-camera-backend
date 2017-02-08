<?php

//login proses admin

session_start();

include('koneksi.php');


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user_name='$username' AND user_password='$password' AND user_level='admin'";

    if($result = mysqli_query($koneksi, $sql)){

        $rowcount = mysqli_num_rows($result);
        if($rowcount>0){
            $_SESSION['username'] = $username;
            header("Location: index.php");
        }else{
            echo '<h1>Username atau Kata Sandi Salah!</h1>';
            echo '<a href="login.php">Kembali</a>';
        }
    } else {
        die('Error: '.mysqli_error($koneksi));
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>
