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
    {{-- Improvisasi --}}
    {{-- Membuat Navbar menggunakan bootstrap 5--}}
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

    {{-- Penjelasan bagain Improvisasi --}}
    <div class="container-fluid mt-3">
        <h3>Ini adalah bagian Improvisasi</h3>
        <p>dibuat menggunakan bootstrap 5</p>
    </div>

    <br>
    <hr>
    <br>

    {{-- Menampilkan text --}}
    <h1>Ini halaman beranda</h1>

    <?php echo "Halo dunia" ?> {{-- Menggunakan php biasa --}}

    <p>
        {{ "Halo dunia" }} {{-- Menggunakan blade --}}
    </p>

    {{-- Percabangan IF --}}
    <hr>
    <h1>Percabangan IF</h1>
    <?php if (1+1 == 3) { ?> {{-- Menggunakan php biasa --}}
        <p>
            {{ "Hasil = 2" }}
        </p>
    <?php } ?>

    @if (1+1 == 2) {{-- Menggunakan blade --}}
        <p>
            {{ "Hasil = 2" }}
        </p>
    @endif


    {{-- Looping FOR --}}
    <hr>
    <h1>Looping FOR</h1>
    <?php for ($i=0; $i < count($array); $i++) { ?> {{-- Menggunakan php biasa --}}
        <p>
            {{ $array[$i] }}
        </p>
    <?php } ?>

    @for($i=0; $i < count($array); $i++) {{-- Menggunakan blade --}}
            <p>
                {{ $array[$i] }}
            </p>
    @endfor

    {{-- Percabangan --}}
    <hr>
    <h1>Percabangan</h1>
    @if (1+1 == 2) {{-- Menggunakan blade --}}
        <p>
            {{ "Jawaban Benar" }}
        </p>
    @else
        {{ "Jawaban Salah" }}
    @endif

    <hr>
    @if ($nama == "Rizki") {{-- Menggunakan blade --}}
        <p>
            {{"Nama saya Rizki"}}
        </p>
    @elseif($nama == "Delaga")
        <p>
            {{"Nama saya Delaga"}}
        </p>
    @else
        <p>
            {{"Nama saya tidak diketahui"}}
        </p>
    @endif

    <hr>
    @switch($nilai) {{-- Menggunakan blade --}}
        @case(90)
        {{"Nilai anda A"}}
            @break
    @case(60)
        {{"Nilai anda B"}}
            @break
    @case(40)
        {{"Nilai anda c"}}
            @break
    @default
        {{"Nilai anda D"}}
    @endswitch

    <br><br>
</body>

</html>
