<?php

// menghubungkan php dengan koneksi database
include 'function.php';
$dbadit = new database();


$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $dbadit->input_pencucian($_POST['nama_customer'], $_POST['nama_paket'], $_POST['deskripsi'], $_POST['jenis_kelamin'], $_POST['notelp'], $_POST['alamat'], $_POST['harga']);
    header("location:halaman.php");
}


//Khusus Customer
$aksi = $_GET['aksi'];
if ($aksi == "update_customer") {
    $dbadit->update_customer($_POST['id_customer'], $_POST['nama_customer'], $_POST['jenis_kelamin'], $_POST['notelp'], $_POST['alamat']);
    header("location:customer.php");
} elseif ($aksi == "hapus_customer") {
    $dbadit->hapus_customer($_GET['id_customer']);
    header("location:customer.php");
}


//Khusus Paket
$aksi = $_GET['aksi'];
if ($aksi == "update_paket") {
    $dbadit->update_paket($_POST['id_paket'], $_POST['nama_paket'], $_POST['deskripsi'], $_POST['harga']);
    header("location:paket.php");
} elseif ($aksi == "hapus_paket") {
    $dbadit->hapus_paket($_GET['id_paket']);
    header("location:paket.php");
}
