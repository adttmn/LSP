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
                <a href="">
                    <i class="bx bx-list-plus"></i>
                    <span class="link_name">DAFTAR</span>
                </a>
            </li>
            <li>
                <a href="Halaman.php">
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
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="text">Pencucian Mobil</span>
            </div>
        </nav>

        <!-- Form Input Data -->
        <div class="card-body">
            <form method="post" action="proses.php?aksi=tambah">
                <div class="form-group ms-4">
                    <label>Nama Customer</label>
                    <input type="text" name="nama_customer" value="" class="form-control" placeholder="Masukan Nama Anda ">
                </div>
                <div class="form-group ms-4">
                    <label> Paket </label>
                    <select name="nama_paket" id="nama_paket" value="" class="form-select">
                        <option>Pilih Paket</option>
                        <option value="Paket A">Paket A</option>
                        <option value="Paket B">Paket B</option>
                        <option value="Paket Reguler">Paket Reguler</option>
                        <option value="Paket Pembersihan">Paket Pembersihan</option>
                    </select>
                </div>
                <div class="form-group ms-4">
                    <label>Deskripsi</label>
                    <select name="deskripsi" id="deskripsi" value="" class="form-select" required>
                        <option>Pilih </option>
                        <option value="Wash + Jamur Kaca + Semir Ban + Vacuum">Wash + Jamur Kaca + Semir Ban + Vacuum</option>
                        <option value="Wash + Jamur kaca + Vacuum">Wash + Jamur kaca + Vacuum</option>
                        <option value="Wash + Pewangi Mobil">Wash + Pewangi Mobil</option>
                        <option value="Vacuum + Semir Ban">Vacuum + Semir Ban</option>
                    </select>
                </div>
                <div class="form-group ms-4">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" value="" class="form-select" required>
                        <option>Pilih </option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>


                <div class="form-group ms-4">
                    <label>No. Telepon</label>
                    <input type="text" id="notel" name="notelp" value="" class="form-control" placeholder=" Nomor Telepon Anda">
                </div>
                <div class="form-group ms-4">
                    <label>Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="" class="form-control" placeholder="Alamat Anda">
                </div>

                <div class="form-group ms-4">
                    <label>Harga</label>
                    <select name="harga" id="harga" value="" class="form-select">
                        <option>Pilih Harga </option>
                        <option value="500000">500.000</option>
                        <option value="400000">400.000</option>
                        <option value="300000">300.000</option>
                        <option value="250000">250.000</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success my-3 ms-4" name="simpan">Simpan</button>
            </form>
        </div>




    </section>

    <!-- <script src="file.js"></script> -->
    <script src="js/bootstrap.min.js"></script>

</html>