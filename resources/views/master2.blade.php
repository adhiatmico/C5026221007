<html lang="en">
<head>
  <title> @yield('judulhalaman')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">5026221007 Arumi Adhiatmico Setiawan</a>

        <!-- Links -->
        <ul class="navbar-nav">
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/chat" id="navbardrop" data-toggle="dropdown">
              Chat
            </a>

            <div class="dropdown-menu">
              <a class="dropdown-item" href="/pegawai">Pegawai</a>
              <a class="dropdown-item" href="/nilaikuliah">NilaiKuliah</a>
              <a class="dropdown-item" href="/keranjangbelanja">KeranjangBelanja</a>
              <a class="dropdown-item" href="/keranjangbelanja">Kursi</a>
              <a class="dropdown-item" href="/kursi">Kursi</a>
              <a class="dropdown-item" href="/chat">Chat</a>


            </div>
          </li>
        </ul>
      </nav>
<div class="container-fluid">
@yield('konten')

@include('footer')
</div>

</body>
</html>
