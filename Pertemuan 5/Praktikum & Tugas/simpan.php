<?php
    include "koneksi.php"; // Memanggil fungsi yang ada pada file koneksi.php

    // Inisialisasi variabel untuk menampung data mahasiswa
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT into data(nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')"; // Perintah SQL untuk memasukan data mahasiswa kedalam tabel pada database
    $add = $conn->query($sql); // Melakukan koneksi pada database dan menjalankan perintah SQL

    if($add) {
        $conn->close();
        header("location:index.php");
        exit();
    } else {
        echo "Error : ".$conn->error;
        $conn->close();
        exit();
    }