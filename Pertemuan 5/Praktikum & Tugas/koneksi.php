<?php
    // Inisialisasi variabel
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "php_crud";

    $conn = new mysqli($host,$user,$pass,$dbname); // Pendeklarasian koneksi untuk database

    // Pengecekan database
    if($conn->connect_error) {
        die('Koneksi Gagal : '. $conn->connect_error);
    }
?>