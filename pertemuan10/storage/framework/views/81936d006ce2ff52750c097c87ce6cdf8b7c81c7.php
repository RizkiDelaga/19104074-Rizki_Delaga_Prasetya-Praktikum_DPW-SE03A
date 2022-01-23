<?php
    $array = [1,2,3,4,5];

    $nama = "Rizki";

    $nilai = 60;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RizkiDelaga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav" >
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Apps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">More</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Contact Me</a></li>
                            <li><a class="dropdown-item" href="#">Tips & Trick</a></li>
                            <li><a class="dropdown-item" href="#">Things to do</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container-fluid mt-3">
        <h3>Ini adalah bagian Improvisasi</h3>
        <p>dibuat menggunakan bootstrap 5</p>
    </div>

    <br>
    <hr>
    <br>

    
    <h1>Ini halaman beranda</h1>

    <?php echo "Halo dunia" ?> 

    <p>
        <?php echo e("Halo dunia"); ?> 
    </p>

    
    <hr>
    <h1>Percabangan IF</h1>
    <?php if (1+1 == 3) { ?> 
        <p>
            <?php echo e("Hasil = 2"); ?>

        </p>
    <?php } ?>

    <?php if(1+1 == 2): ?> 
        <p>
            <?php echo e("Hasil = 2"); ?>

        </p>
    <?php endif; ?>


    
    <hr>
    <h1>Looping FOR</h1>
    <?php for ($i=0; $i < count($array); $i++) { ?> 
        <p>
            <?php echo e($array[$i]); ?>

        </p>
    <?php } ?>

    <?php for($i=0; $i < count($array); $i++): ?> 
            <p>
                <?php echo e($array[$i]); ?>

            </p>
    <?php endfor; ?>

    
    <hr>
    <h1>Percabangan</h1>
    <?php if(1+1 == 2): ?> 
        <p>
            <?php echo e("Jawaban Benar"); ?>

        </p>
    <?php else: ?>
        <?php echo e("Jawaban Salah"); ?>

    <?php endif; ?>

    <hr>
    <?php if($nama == "Rizki"): ?> 
        <p>
            <?php echo e("Nama saya Rizki"); ?>

        </p>
    <?php elseif($nama == "Delaga"): ?>
        <p>
            <?php echo e("Nama saya Delaga"); ?>

        </p>
    <?php else: ?>
        <p>
            <?php echo e("Nama saya tidak diketahui"); ?>

        </p>
    <?php endif; ?>

    <hr>
    <?php switch($nilai): 
        case (90): ?>
        <?php echo e("Nilai anda A"); ?>

            <?php break; ?>
    <?php case (60): ?>
        <?php echo e("Nilai anda B"); ?>

            <?php break; ?>
    <?php case (40): ?>
        <?php echo e("Nilai anda c"); ?>

            <?php break; ?>
    <?php default: ?>
        <?php echo e("Nilai anda D"); ?>

    <?php endswitch; ?>

    <br><br>
</body>

</html>
<?php /**PATH C:\Users\ASUS\Desktop\Praktikum DPW\PraktikumDesaindanPemrogramanWeb-main\pertemuan10\resources\views/beranda.blade.php ENDPATH**/ ?>