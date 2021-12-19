<?php
    $target_dir = "uploads/"; // Lokasi folder tempat untuk menyimpan
    $target_file = $target_dir . basename($_FILES["gambar_contoh"]["name"]); // Nama file yang akan di simpan
    $error = false;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // Check extension dari file yang akan di upload

    // Proses check submit gambar
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["gambar_contoh"]["tmp_name"]); // Check ekstensi file
        if($check !== false) { // Jika ekstensi file adalah sebuah gambar
            echo "File is an image - " . $check["mime"] . "."; 
            $error = false; 
        } else { // Jika ekstensi file bukan sebuah gambar
            echo "File is not an image."; 
            $error = false; 
        } 
    }

    // Proses check apabila gambar yang di upload sudah ada, maka menampilkan notifikasi file sudah ada
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $error = true;
    }

    // Proses check ukuran size dari gambar yang akan di upload
    if ($_FILES["gambar_contoh"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $error = true; 
    }

    // Proses check tipe file yang diupload
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $error = true; 
    }

    // Proses penanganan kesalahan apa bila terjadi error
    if ($error == true) {
        echo "Sorry, your file was not uploaded."; 
    } else {
        if (move_uploaded_file($_FILES["gambar_contoh"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["gambar_contoh"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file."; 
        } 
    }
?>