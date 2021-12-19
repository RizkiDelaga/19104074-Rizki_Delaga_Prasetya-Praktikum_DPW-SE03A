<?php
    include "koneksi.php";
    session_start();
    $kelas = ['SE-03A','SE-03B'];
    $sql = "SELECT * FROM data";
    $data = $conn->query($sql);
    $sql_mahasiswa = "SELECT * FROM data WHERE id=".$_GET['mahasiswa_id'];
    $data_mahasiswa = $conn->query($sql_mahasiswa);
    $view = $data_mahasiswa->fetch_array();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>CRUD PHP</title>

<style>
        .preview-section {
            border: 1px black solid;
            padding: 4px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .preview-text {
            font-style: italic;
            /* position: relative; */
            /* right: 495px; */
            /* bottom: 100px; */
            /* top:0; */
            /* top: 0; */
            clear: both;
            text-align: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gambar-mhs {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <?php include "read_message.php" ?>
            </div>
            <form action="simpan.php" method="post">
                <input type="hidden" name="mahasiswa_id" value="<?= $view['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" placeholder="Nama" class="form-control" value="<?= $view['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" class="form-control" required>
                        <option value="">Pilih</option>
                        <?php foreach($kelas as $kl) : ?>
                        <option value="<?= $kl; ?>" <?= ($kl == $view['kelas']) ? 'selected' : ''; ?>><?= $kl; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?= $view['alamat'] ?>" required>
                </div>

                <!-- Tugas Menambahkan Gambar -->
                <div class="form-group">
                    Upload Gambar:
                    <input type="file" name="gambar" id="gambar" accept="image/*" onchange="loadfile(event)" required>

                    <div class="preview-section mt-3 mb-3">

                        <img id="preview-img" alt="" height="200px">

                        <!-- <p class="preview-text">Preview</p> -->

                        <script type="text/javascript">
                            function loadfile(event) {
                                var output = document.getElementById('preview-img');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            }
                        </script>
                    </div>

                </div>

                <button type="submit" class="btn btn-success btn-block">Edit</button>
                <a href="index.php" class="btn btn-warning btn-block">Kembali</a>
            </form>
        </div>
        
        <div class="col-lg-6">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Data Mahasiswa</span>
            </h4>



            <!-- Bagian ini menampilkan data-data para mahasiswa yang sudah berhasil di inputkan kedalam database -->
            <?php foreach($data as $dt) : ?>
            <!-- Looping data mahasiswa yang ada -->
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 sm-2 gambar-mhs">
                            <img><?= $dt['gambar']; ?></img>
                        </div>
                        <div class="col-md-10 sm-10">
                            <div class="row">
                                <div class="col">
                                    <h4><?= $dt['nama']; ?></h4>
                                    <!-- Menampilkan nama mahasiswa yang ada di database -->
                                </div>
                                <div class="col">
                                    <a class="float-right ml-3 text-danger"
                                        href="hapus_data.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button"
                                        class="close">
                                        <span class="fa fa-trash"></span>
                                    </a>

                                    <a class="float-right ml-3 text-success"
                                        href="update_form.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button"
                                        class="close">
                                        <span class="fa fa-edit"></span>
                                    </a>

                                    <p class="text-right"><?= $dt['kelas']; ?></p>
                                    <!-- Menampilkan kelas mahasiswa yang ada di database -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p><?= $dt['alamat']; ?></p>
                                    <!-- Menampilkan alamat mahasiswa yang ada di database -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            <!-- End loop -->
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>