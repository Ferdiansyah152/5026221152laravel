<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CSS</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: beige;
            font-size: 40px;
        }
        a:link {
            text-decoration: none;
            color: blue;
        }

        a:visited {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            font-size: larger;
            color: red;
            text-decoration: underline;
        }

        .headingmerah {
            color: red;
        }

        .parratakanan {
            text-align: right;
        }

        .partengah {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="color: blueviolet;">Hallo Selamat Datang</h1>
    <h1 class="headingmerah">Hallo Selamat Datang Juga</h1>
    <p style="font-size: small; color: aqua;">Jurusan Sistem Informasi</p>
    <p class="parratakanan">Jurusan Sistem Informasi</p>
    <p class="partengah">Jurusan Sistem Informasi</p>

    <a href="https://www.google.com/" target="_blank">Google</a>
    <a href="https://www.its.ac.id" target="_self">ITS</a>
    <a href="{{ url('Hello.html') }}">File Pertemuan 1</a>
</body>
</html>
