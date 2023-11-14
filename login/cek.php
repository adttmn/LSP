<?php

include 'Connect.php';



$pass = md5($_POST['password']);
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $pass);
$level = mysqli_escape_string($conn, $_POST['level']);

//cek username yang terdaftar
$cek_user = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '$username' and level ='$level' ");
$user_valid = mysqli_fetch_array($cek_user);

if ($user_valid) {


    //jika Password sesuai atau tidak
    if ($password == $user_valid['password']) {

        //jika password sesuai
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama'] = $user_valid['nama'];
        $_SESSION['level'] = $user_valid['level'];

        //pengujian pilih
        if ($level == "Admin") {
            header('location:dasboard.php');
        }
    } else {
        echo "<script>alert('Maaf, Login anda Gagal, Username anda tidak terdaftar');
        document.location='login.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login anda Gagal, Password anda tidak sesuai');
        document.location='login.php'</script>";
}
