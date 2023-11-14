<?php
session_start();

if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
  echo "<script>alert('Maaf, untuk mengakses anda harus login terlebih dahulu');
        document.location='login.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WEB Pencucian</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css" />
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <div class="sidebar">
    <div class="logo-details me-2">
      <i class="bx bxs-doughnut-chart"></i>
      <span class="logo_name me-2">Car Wash</span>
    </div>
    <ul class="nav_links">
      <li>
        <a href="daftar.php">
          <i class="bx bx-list-plus"></i>
          <span class="link_name">DAFTAR</span>
        </a>
      </li>
      <li>
        <a href="halaman.php">
          <i class="bx bx-menu"></i>
          <span class="link_name">DATA PENCUCIAN</span>
        </a>
      </li>
      <li>
        <a href="customer.php">
          <i class='bx bxs-data'></i>
          <span class="link_name">DATA Customer</span>
        </a>
      </li>
      <li>
        <a href="paket.php">
          <i class='bx bxs-data'></i>
          <span class="link_name">DATA Paket</span>
        </a>
      </li>
      <li>
        <a href="logout.php">
          <i class='bx bx-log-out'></i>
          <span class="link_name">Log Out</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- Home-content -->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="text">Pencucian Mobil</span>
      </div>
    </nav>
    <h2 class="ms-3 my- bg-light">Selamat Datang Admin, <b><?= $_SESSION['nama'] ?></b></h2>
  </section>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="coba.js"></script>
<script>
  AOS.init();
</script>

</html>