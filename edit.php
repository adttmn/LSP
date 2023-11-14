<?php
include 'function.php';
$dbadit = new database();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web LRCOM</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details me-2">
            <i class='bx bxs-doughnut-chart'></i>
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
                    <span class="link_name">DATA Pencucian</span>
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
            <!-- <li>
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Log Out</span>
                </a>
            </li> -->
        </ul>
    </div>
    <!-- Home-content -->
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="text">Pendataan Siswa Baru</span>
            </div>
        </nav>

        <!-- Form Input Data -->
        <div class="card-body">
            <form method="post" action="proses.php?aksi=update_customer">
                <?php
                foreach ($dbadit->edit_customer($_GET['id_customer']) as $data) {
                ?>
                    <input type="hidden" name="id_customer" value="<?= $data['id_customer'] ?>">
                    <div class="form-group ms-4">
                        <label>Nama Customer</label>
                        <input type="text" name="nama_customer" value="<?= $data['nama_customer']; ?>" class="form-control" placeholder="Masukan Nama Anda ">
                    </div>
                    <div class="form-group ms-4">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" value="" class="form-select" required>
                            <option><?= $data['jenis_kelamin']; ?> </option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group ms-4">
                        <label>No. Telepon</label>
                        <input type="text" id="notelp" name="notelp" value="<?= $data['notelp']; ?>" class="form-control" placeholder=" Nomor Telepon Anda">
                    </div>
                    <div class="form-group ms-4">
                        <label>Alamat</label>
                        <input type="text" id="alamat" name="alamat" value="<?= $data['alamat']; ?>" class="form-control" placeholder="Alamat Anda">
                    </div><button type="submit" class="btn btn-success my-3 ms-4" name="simpan">Simpan</button>
                <?php
                }
                ?>
            </form>
        </div>




    </section>

    <!-- <script src="file.js"></script> -->
    <script src="js/bootstrap.min.js"></script>

</html>