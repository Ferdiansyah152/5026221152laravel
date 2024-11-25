<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CSS</title>
    <link rel="stylesheet" href="{{ asset('css/MyStyle.css') }}">
</head>
<body>
    <h1 style="color: blueviolet;">Hallo Selamat Datang</h1>
    <h1 class="headingmerah">Ini File Style2</h1>
    <p style="font-size: small; color: aqua;">Jurusan Sistem Informasi</p>
    <p class="parratakanan">Jurusan Sistem Informasi 2</p>
    <p class="partengah rcorners2">Jurusan Sistem Informasi 3</p>

    <a href="https://www.google.com/" target="_blank">Google</a>
    <a href="https://www.its.ac.id" target="_self">ITS</a>
    <a href="{{ url('Hello.html') }}">File Pertemuan 1</a>
</body>
</html>
