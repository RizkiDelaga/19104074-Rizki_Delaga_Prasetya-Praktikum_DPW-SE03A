<?php
    include "koneksi.php"; // Memanggil fungsi yang ada pada file koneksi.php
    include "create_message.php"; // Memanggil fungsi yang ada pada file create_message.php

    // Inisialisasi variabel
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $gambar = $_POST['gambar'];

    // Update data mahasiswa
    if (isset($_POST['mahasiswa_id'])){
        $sql = "UPDATE data SET nama='$nama', kelas='$kelas', alamat='$alamat', gambar='$gambar' WHERE id=" . $_POST['mahasiswa_id'];
        $edit = $conn->query($sql);
        if ($edit){
            $conn->close();
            create_message('Ubah data berhasil','success','check');
            header("location:" . $_SERVER['HTTP_REFERER']);
            exit();
        }else{
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:" . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }else{ // Insert data mahasiswa
        $sql = "INSERT into data(nama, kelas, alamat, gambar) VALUES('$nama','$kelas','$alamat', '$gambar')";
        $add = $conn->query($sql);
        if ($add){
            $conn->close();
            create_message('Simpan data berhasil','success','check');
            header("location:" . $_SERVER['HTTP_REFERER']);
            exit();
        }else{
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:" . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
?>