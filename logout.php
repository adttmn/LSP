<?php


session_start();
unset($_SESSION['username']);
unset($_SESSION['nama']);
unset($_SESSION['password']);
unset($_SESSION['level']);

session_destroy();
echo "<script>alert('Anda telah Logout, Silahkan Login terlebih dahulu');
    document:location='login.php'
</script>";
