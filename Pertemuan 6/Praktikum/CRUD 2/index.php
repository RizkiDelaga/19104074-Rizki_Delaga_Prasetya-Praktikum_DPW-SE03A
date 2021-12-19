<?php
    // BAGIAN PRAKTIKUM
    include "koneksi.php"; // Memanggil fungsi yang ada pada file koneksi.php
    session_start(); // Memulai/menjalankan session
    $kelas = ['SE-03A','SE-03B']; // Array untuk pemilihan kelas
    $sql = "SELECT * FROM data"; // SQL untuk mengambil seluruh data pada tabel Data
    $data = $conn->query($sql); // Melakukan koneksi pada database dan menjalankan perintah SQL

    // BAGIAN TUGAS
    $sql = "SELECT id FROM data"; // SQL untuk mengambil seluruh data pada kolom 'id' pada tabel Data
    $sumDataMhs = mysqli_query($conn, $sql); // Melakukan koneksi pada database dan menjalankan perintah SQL
    $sumResult = mysqli_num_rows($sumDataMhs);  // menghitung banyaknya jumlah baris hasil pemanggilan fungsi mysql_query()
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CRUD PHP</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .sumDataMhs { /* Style untuk mengatur (DIV) sebagai wadah/tempat menampilkan jumlah data mahasiswa yang ada*/
            height: 30px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: rgb(143, 143, 143);
            border-radius: 20px;
            position: absolute;
            top: 0;
            right: 15px;
        }

        .sumResult {/* Style untuk mengatur font dan tata letaknya buat menampilkan jumlah data mahasiswa yang ada*/
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: 500;
            font-size: larger;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <?php include "read_message.php" ?></div>

                <!-- Form yang berfungsi untuk Input Data dengan menggunakan method Post -->
                <form action="simpan.php" method="post"> <!-- pada method POST tidak menampilkan nilai/data yang dikirim pada URL -->
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required> <!-- Input text yang digunakan untuk mengupload data nama mahasiswa ke database -->
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>

                        <!-- Bagian ini berfungsi untuk menampilkan data kelas yang tersedia pada array -->
                        <select name="kelas" class="form-control" required>
                            <option value="">Pilih</option>
                            <?php foreach($kelas as $kl) : ?> <!-- Option yang digunakan untuk memilih kelas mahasiswa yang akan dimasukan ke database -->
                            <option value="<?= $kl; ?>"><?= $kl; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required> <!-- Input text yang digunakan untuk mengupload data alamat mahasiswa ke database -->
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Submit</button> <!-- Button untuk submit data mahasiswa ke dalam database -->
                </form>
            </div>

            <div class="col-lg-6">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Mahasiswa</span>
                </h4>
                
                <!-- BAGIAN TUGAS -->
                <div class="sumDataMhs">    
                    <p class="sumResult"><?= $sumResult ?></p> <!-- Memanggil variabel yang berisi jumlah data mahasiswa yang ada -->
                </div>

                <!-- Bagian ini menampilkan data-data para mahasiswa yang sudah berhasil di inputkan kedalam database -->
                <?php foreach($data as $dt) : ?> <!-- Looping data mahasiswa yang ada -->
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?= $dt['nama']; ?></h4> <!-- Menampilkan nama mahasiswa yang ada di database -->
                            </div>
                            <div class="col-md-6">
                                <a class="float-right ml-3 text-danger" href="hapus_data.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close"> <!-- Hapus data mahasiswa -->
                                    <span class="fa fa-trash"></span>
                                </a>

                                <a class="float-right ml-3 text-success" href="update_form.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close"> <!-- Update data mahasiswa -->
                                    <span class="fa fa-edit"></span>
                                </a>

                                <p class="text-right"><?= $dt['kelas']; ?></p> <!-- Menampilkan kelas mahasiswa yang ada di database -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p><?= $dt['alamat']; ?></p> <!-- Menampilkan alamat mahasiswa yang ada di database -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?> <!-- End loop -->
            </div>
        </div>
    </div>

    <!-- JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>