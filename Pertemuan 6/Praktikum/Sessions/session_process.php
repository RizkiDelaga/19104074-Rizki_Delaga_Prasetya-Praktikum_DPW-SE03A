<?php
    session_start(); // Memulai session
    if(isset($_GET['process'])){
        if($_GET['process']=='hapus_semua_session'){ // Untuk menghapus seluruh session
        session_start();
        session_destroy();
        header("location:session_read.php");
        }
        elseif($_GET['process']=='hapus_session1'){ // Untuk menghapus session 1
        session_start();
        unset($_SESSION['session_tersimpan1']);
        header("location:session_read.php");
        }
        elseif($_GET['process']=='hapus_session2'){ // Untuk menghapus session 2
        session_start();
        unset($_SESSION['session_tersimpan2']);
        header("location:session_read.php");
        } 
    } elseif(isset($_POST)){ // Untuk menyimpan session dari kolom inputan
        session_start();
        $_SESSION['session_tersimpan1'] = $_POST['kolom_input_session1'];
        $_SESSION['session_tersimpan2'] = $_POST['kolom_input_session2'];
        header("location:session_read.php");
    }
?>