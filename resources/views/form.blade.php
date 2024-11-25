<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function showalert() {
      alert("Selamat Anda Mendapat Undian 1 Milyar !");
    }

    function validateform() {
      var nrp = document.getElementById("nrpku");

      if (nrp.value.length !== 10) {
        alert("NRP Harus 10 Digit");
        nrp.focus();
        return false;
      }

      if (isNaN(nrp.value)) {
        alert("NRP Harus Angka!");
        nrp.focus();
        return false;
      }
    }
  </script>
</head>

<body>
  <div class="container">
    <form action="https://www.google.co.id" method="get" onsubmit="return validateform();">
      <div class="input-group mb-3">
        <span class="input-group-text">NRP</span>
        <input type="text" class="form-control" placeholder="10 Digit NRP" name="nrp" id="nrpku">
      </div>

      <div class="mb-3">
        <span class="input-group-text">Nama</span>
        <input type="text" class="form-control" placeholder="Isikan Nama Lengkap" id="nama">
      </div>

      <div class="mb-3">
        <span class="input-group-text">Umur</span>
        <input type="text" class="form-control" placeholder="Isikan Umur" name="umur" id="umur">
      </div>

      <input type="reset" class="btn btn-warning" value="Reset">
      <input type="submit" class="btn btn-success" value="Kirim">
      <input type="button" class="btn btn-link" value="Alert" onclick="showalert();">
    </form>
  </div>
</body>
</html>
