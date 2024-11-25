<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1 Replika Linktree</title>
  <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <style>
      body {
      background: linear-gradient(180deg, #c92c1b, #a71b1b,#8d1a1a);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      max-width: 400px;
      text-align: center;
    }

    .btn-custom {
      width: 100%;
      margin-bottom: 15px;
      font-size: 18px;
      padding: 15px;
      border-radius: 30px;
      background-color: transparent;
      color: white;
      text-transform: uppercase;
      border: 2px solid white;
      transition: all 0.3s ease-in-out;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
    }

    .btn-custom img{
      position: relative;
      width: 40px;
      height: 40px;
      margin-right: 20px;
    }

    .btn-custom:hover {
      background-color: rgba(255, 255, 255, 0.2);
      background-color: whitesmoke;
    }

    .Profile-Pict {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 20px;
    }

    .Profile-Name {
      color: whitesmoke;
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .Tagline {
      color: whitesmoke;
      font-size: 18px;
      margin-bottom: 30px;
    }

    .Tiktok {
        color: whitesmoke;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .Tokped {
        color: whitesmoke;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .AOS{
        color: whitesmoke;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .NAMA{
        color: whitesmoke;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="{{ asset('https://ugc.production.linktr.ee/2b51f9a0-3fdf-450c-948c-8bd6bd420dfc_LOGO-IGW-STORE-18.jpeg?io=true&size=avatar-v3_0') }}" alt="Profile Image" class="Profile-Pict">
    <h1 class="Profile-Name">@igamerworld</h1>
    <h2 class="Tagline">100% Gaming Store - 100% Gaming Consultant - 100% Gaming Specialist</h2>
    <h3 class="Tiktok">RAMAIKAN TIKTOK KITA YA!</h3>

    <a href="https://www.tiktok.com/@igamerworldofficial?is_from_webapp=1&sender_device=pc" class="btn btn-custom"><img src="{{ asset('https://static.vecteezy.com/system/resources/previews/016/716/450/original/tiktok-icon-free-png.png') }}" alt="Tiktok">Tiktok</a>

    <h4 class="Tokped">TOKOPEDIA</h4>
    <a href="https://tokopedia.link/E9790cf0NMb" class="btn btn-custom">IGW SURABAYA</a>
    <a href="https://tokopedia.link/l9EEFig0NMb" class="btn btn-custom">IGW BEKASI</a>
    <a href="https://tokopedia.link/8MX8iqk0NMb" class="btn btn-custom">IGW JAKARTA</a>

    <h5 class="AOS">ALWAYS ON SALE</h5>
    <a href="https://www.tokopedia.com/igwsurabaya/etalase/vga-rtx-40-series" class="btn btn-custom">GEFORCE RTX 4000 SERIES</a>
    <a href="https://www.tokopedia.com/igamerworldofficial/etalase/clearance-sale-steelseries-qck-limited-edition" class="btn btn-custom">JAKARTA! CLEARANCE SALE QCK LIMITED EDITION</a>
    <a href="https://www.tokopedia.com/igwsurabaya/etalase/clearance-sale-selama-persediaan-masih-ada" class="btn btn-custom">SURABAYA! CLEARANCE SALE</a>

    <h6 class="NAMA">Ferdiansyah Y.M-5026221152</h6>
  </div>
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
