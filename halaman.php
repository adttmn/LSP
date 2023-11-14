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
    <title>Web Pencucian</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
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
                    <span class="link_name">Data Pencucian</span>
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
                <span class="text">Data Pencucian </span>
            </div>
        </nav>

        <!-- Form Halaman Data -->
        <div class="card-body">
            <a href="dasboard.php" class="btn btn-success">Kembali Ke Dasboard</a>
            <a href="daftar.php" class="btn btn-primary my-3">Tambah Data</a>


            <tr>

                <table id="example" class=" display table table-bordered table-striped " style="width:100%;">
                    <br>
                    <thead>

                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Customer</th>
                            <th>Nama Paket</th>
                            <th>Deskripsi</th>
                            <th>Jenis Kelamin</th>
                            <th>No. Telepon</th>
                            <th>Alamat</th>
                            <th>Harga</th>
                            <th>Opsi</th>

                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($dbadit->tampil_data() as $data) {
                    ?>
                        <tbody>

                            <tr class="text-center">
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama_customer'] ?></td>
                                <td><?= $data['nama_paket'] ?></td>
                                <td><?= $data['deskripsi'] ?></td>
                                <td><?= $data['jenis_kelamin'] ?></td>
                                <td><?= $data['notelp'] ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td><?= $data['harga'] ?></td>
                                <td>
                                    <a href="cetak.php" target="_blank" class="btn btn-success margin:0 5px;"><i class='bx bx-printer'></i>Cetak Data</a>
                                </td>
                                <!-- <td>
                                    <a href="edit.php?id_customer,id_pencucian=<?= $data['id_customer'], ['id_pencucian'] ?>&aksi=edit" class="btn btn-success"> Edit </a>

                                </td> -->
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
        </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>




    </section>

    <!-- <script src="file.js"></script> -->
    <script src="js/bootstrap.min.js"></script>

</html>