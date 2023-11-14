<?php

class database
{
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "db_pencucian_adit";


    function __construct()
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_select_db($con, $this->database);
    }



    function tampil_data()
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        $data = mysqli_query($con, "SELECT * FROM data_pencucian");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function customer()
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        $data = mysqli_query($con, "SELECT  * FROM tb_customer");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function paket()
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        $data = mysqli_query($con, "SELECT  * FROM tb_paket");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function input_pencucian($nama_customer, $nama_paket, $deskripsi, $jenis_kelamin, $notelp, $alamat, $harga)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_query($con, "INSERT INTO tb_customer VALUES('','$nama_customer','$jenis_kelamin','$notelp','$alamat')");
        mysqli_query($con, "INSERT INTO tb_paket VALUES('','$nama_paket','$deskripsi','$harga')");
    }




    // Khusus Tabel Customer
    function edit_customer($id_customer)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        $data = mysqli_query($con, "SELECT * FROM tb_customer WHERE id_customer= '$id_customer'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update_customer($id_customer, $nama_customer, $jenis_kelamin, $notelp, $alamat)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_query($con, "UPDATE tb_customer set nama_customer='$nama_customer',jenis_kelamin='$jenis_kelamin',notelp='$notelp',alamat='$alamat' where id_customer='$id_customer'");
    }
    function hapus_customer($id_customer)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_query($con, "DELETE FROM tb_customer WHERE id_customer='$id_customer'");
    }



    //Khusus Tabel Paket
    function edit_paket($id_paket)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        $data = mysqli_query($con, "SELECT * FROM tb_paket WHERE id_paket= '$id_paket'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update_paket($id_paket, $nama_paket, $deskripsi, $harga)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_query($con, "UPDATE tb_paket set nama_paket='$nama_paket', deskripsi='$deskripsi',harga='$harga' where id_paket='$id_paket'");
    }
    function hapus_paket($id_paket)
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_query($con, "DELETE FROM tb_paket WHERE id_paket='$id_paket'");
    }
}
$dbadit = new database();
