<!-- resources/views/uts_pweb.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, 'Times New Roman';
            line-height: 1.6;
        }
        .navbar {
            background-color: #2c3e50;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #ecf0f1 !important;
        }
        .section-heading {
            padding-top: 50px;
            padding-bottom: 20px;
            color: #34495e;
        }
        .footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px 0;
        }
        .form-control:focus {
            border-color: #2980b9;
            box-shadow: none;
        }
        .text-justify {
            text-align: justify;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: auto;
            height: 100%;
            top: 0;
            bottom: 0;
            color: #333;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            width: 2rem;
            height: 2rem;
        }
        .carousel-control-prev {
            left: -50px;
        }
        .carousel-control-next {
            right: -50px;
        }
        .carousel-indicators {
            display: none;
        }
        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .card-body {
            flex-grow: 1;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Kabupaten Lumajang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-primary text-white text-center py-5" style="background-image: url('https://lumajangkab.go.id/uploads/banner/pj_bupatii.png'); background-size: cover; background-position: center;">
        <div class="container" style="padding-top: 150px;">
            <h1 style="color: black;">Selamat Datang di Kabupaten Lumajang</h1>
            <p class="lead" style="color: black;">Website resmi untuk informasi terkini dan layanan masyarakat</p>
        </div>
    </header>

    <!-- Layanan -->
    <section id="services" class="container py-5 bg-light">
        <h2 class="section-heading text-center">Layanan Kami</h2>
        <div class="row">
            @foreach ([
                ['url' => 'https://bpjs-kesehatan.go.id/#/', 'img' => 'https://cdn.icon-icons.com/icons2/2299/PNG/512/giving_medical_help_care_healthcare_hand_wash_icon_141641.png', 'title' => 'Layanan Kesehatan', 'desc' => 'Penyediaan fasilitas kesehatan seperti puskesmas dan rumah sakit untuk masyarakat umum.'],
                ['url' => 'https://dispenduk.lumajangkab.go.id/', 'img' => 'https://layanan.acehtengahkab.go.id/uploads/blogs/kependudukan.png', 'title' => 'Layanan Kependudukan', 'desc' => 'Proses pengurusan KTP, KK, akta kelahiran, dan layanan administrasi lainnya.'],
                ['url' => 'https://jdih.lumajangkab.go.id/', 'img' => 'https://kemenagmojokerto.id/wp-content/uploads/2022/10/pengaduan.png', 'title' => 'Layanan Pengaduan', 'desc' => 'Saluran pengaduan untuk masyarakat terkait masalah pelayanan publik atau keluhan lainnya.']
            ] as $service)
            <div class="col-md-4">
                <a href="{{ $service['url'] }}" class="text-decoration-none text-dark" target="_blank">
                    <div class="card text-center">
                        <img src="{{ $service['img'] }}" alt="{{ $service['title'] }}" class="card-img-top img-fluid mx-auto mt-3" style="width: 70px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service['title'] }}</h5>
                            <p class="card-text">{{ $service['desc'] }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Berita -->
    <style>
        .img-news {
          width: 100%;
          height: 200px;
          object-fit: cover;
      }
      </style>
      <section id="news" class="container py-5">
        <h2 class="section-heading text-center">Berita Lumajang Terbaru</h2>
        <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#newsCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#newsCarousel" data-bs-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="https://portalberita.lumajangkab.go.id/main/baca/aXGOfJJw" class="text-decoration-none text-dark" target="_blank">
                                <div class="card">
                                    <img src="https://portalberita.lumajangkab.go.id/files/berita/IMG-20241015-WA0010.jpg" class="card-img-top img-news" alt="Berita 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Pentingnya Deteksi Dini TBC: RSUD dr. Haryoto Ajak Masyarakat Berperan Aktif</h5>
                                        <p class="card-text">RSUD dr. Haryoto Lumajang meresmikan layanan TBC Resistan Obat (TBC RO) untuk meningkatkan akses pengobatan dan mendukung deteksi dini serta pencegahan TBC di masyarakat.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://portalberita.lumajangkab.go.id/main/baca/aXGOfJJu" class="text-decoration-none text-dark" target="_blank">
                                <div class="card">
                                    <img src="https://portalberita.lumajangkab.go.id/files/berita/WhatsApp_Image_2024-10-15_at_11_27_27_(1).jpeg" class="card-img-top img-news" alt="Berita 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Diskusi Interaktif Jadi Metode Efektif Mendalami Makna Cinta Tanah Air bagi Pelajar</h5>
                                        <p class="card-text">SDN Wonorejo 01 mengadakan kegiatan Wawasan Kebangsaan dengan diskusi interaktif untuk mendalami cinta tanah air dan peran generasi muda</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://portalberita.lumajangkab.go.id/main/baca/aXGOfJJr" class="text-decoration-none text-dark" target="_blank">
                                <div class="card">
                                    <img src="https://portalberita.lumajangkab.go.id/files/berita/WhatsApp_Image_2024-10-15_at_10_49_21.jpeg" class="card-img-top" alt="Berita 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Pj. Bupati: Pemkab Berkewajiban Informasikan Penyelenggaraan Pelayanan Publik kepada Masyarakat</h5>
                                        <p class="card-text">Pj. Bupati Lumajang, Indah Wahyuni, menegaskan pentingnya keterbukaan informasi publik dalam pelayanan masyarakat pada Monitoring dan Evaluasi Keterbukaan Informasi Publik Tahun 2024.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="https://portalberita.lumajangkab.go.id/main/baca/aXGOfJFx" class="text-decoration-none text-dark" target="_blank">
                                <div class="card">
                                    <img src="https://portalberita.lumajangkab.go.id/files/berita/Desain_tanpa_judul_20241013_075454_0000.png" class="card-img-top" alt="Berita 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Penurunan Angka Kemiskinan di Lumajang Capai 1,18% dalam Lima Tahun</h5>
                                        <p class="card-text">Pj. Bupati Lumajang, Indah Wahyuni, mengumumkan penurunan angka kemiskinan sebesar 2.770 jiwa pada Maret 2024.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://portalberita.lumajangkab.go.id/main/baca/aXGOfJFu" class="text-decoration-none text-dark" target="_blank">
                                <div class="card">
                                    <img src="https://portalberita.lumajangkab.go.id/files/berita/IMG-20241012-WA00371.jpg" class="card-img-top" alt="Berita 5">
                                    <div class="card-body">
                                        <h5 class="card-title">Pj. Bupati Lumajang Terima Penghargaan Pemda Terbaik dalam Pengendalian Penyakit Hewan Menular Strategis</h5>
                                        <p class="card-text">Pj. Bupati Lumajang, Indah Wahyuni, menerima penghargaan PHMS dalam Upacara Hari Jadi ke-79 Provinsi Jawa Timur atas keberhasilan vaksinasi PMK sebanyak 948.910 dosis.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="https://portalberita.lumajangkab.go.id/main/baca/aXGOfJBp" class="text-decoration-none text-dark" target="_blank">
                                <div class="card">
                                    <img src="https://portalberita.lumajangkab.go.id/files/berita/IMG-20241009-WA0040.jpg" class="card-img-top" alt="Berita 6">
                                    <div class="card-body">
                                        <h5 class="card-title">Kabupaten Lumajang Makin Hijau, Lima Wilayah Diakui sebagai Kelurahan dan Desa Berseri</h5>
                                        <p class="card-text">Kabupaten Lumajang meraih lima penghargaan Desa/Kelurahan Berseri dalam peringatan Hari Lingkungan Hidup se-Dunia 2024, termasuk kategori Mandiri untuk Desa Kaliboto Kidul.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
      </section>

    <!-- Galeri -->
    <section id="gallery" class="container py-5 bg-light">
        <h2 class="section-heading text-center">Galeri</h2>
        <div class="row text-center">
            <div class="col-md-3">
                <figure>
                    <img src="https://portalberita.lumajangkab.go.id/files/berita/WhatsApp_Image_2024-10-17_at_00_55_16.jpeg" class="img-fluid img-thumbnail" alt="Foto 1" style="width: 100%; height: 200px; object-fit: cover;">
                    <figcaption>Rakor Forkopimda se-Jawa Timur</figcaption>
                </figure>
            </div>
            <div class="col-md-3">
                <figure>
                    <img src="https://portalberita.lumajangkab.go.id/files/berita/20241014_140616.jpg" class="img-fluid img-thumbnail" alt="Foto 2" style="width: 100%; height: 200px; object-fit: cover;">
                    <figcaption>Pengelolaan Berimbang Bromo Tengger Semeru</figcaption>
                </figure>
            </div>
            <div class="col-md-3">
                <figure>
                    <img src="https://portalberita.lumajangkab.go.id/files/berita/WhatsApp_Image_2024-10-01_at_10_09_58.jpeg" class="img-fluid img-thumbnail" alt="Foto 3" style="width: 100%; height: 200px; object-fit: cover;">
                    <figcaption>Hari Kesaktian Pancasila</figcaption>
                </figure>
            </div>
            <div class="col-md-3">
                <figure>
                    <img src="https://portalberita.lumajangkab.go.id/files/berita/IMG-20240928-WA0005.jpg" class="img-fluid img-thumbnail" alt="Foto 4" style="width: 100%; height: 200px; object-fit: cover;">
                    <figcaption>Tirtosari View</figcaption>
                </figure>
            </div>
        </div>
      </section>

    <!-- Tentang -->
    <section id="about" class="container py-5">
        <h2 class="section-heading text-center">Tentang Kami</h2>
        <p class="text-center text-justify">Kami adalah platform yang menyediakan informasi seputar Kabupaten Lumajang, yang terkenal dengan keindahan alamnya serta warisan budaya dan sejarah yang kaya. Kami bertujuan untuk memperkenalkan potensi wisata, tradisi, dan nilai-nilai luhur masyarakat Lumajang melalui beragam konten menarik.</p>
    </section>

    <!-- Kontak -->
    <section id="contact" class="container py-5">
        <h2 class="section-heading text-center">Kontak Kami</h2>
        <form id="contactForm">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 Kabupaten Lumajang. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            let name = document.getElementById('name');
            let email = document.getElementById('email');
            let message = document.getElementById('message');

            if (!name.value || !email.value || !message.value) {
                alert("Mohon isi semua kolom.");
                e.preventDefault();
            } else {
                alert("Pesan berhasil dikirim.");
            }
        });
    </script>
</body>
</html>
