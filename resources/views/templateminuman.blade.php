<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title', 'Ferdiansyah Yusuf Muhammad - 5026221152')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/fontawesome.js"></script>
  <script src="/js/solid.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2>Ferdiansyah Yusuf Muhammad - 5026221152</h2>
    <h3>@yield('header', 'Manajemen Minuman')</h3>

    @section('navigation')
    <nav>
        @yield('link1')
    </nav>
    @show

    <br/>

    <div>
        @yield('konten')
    </div>
</div>

</body>
</html>
