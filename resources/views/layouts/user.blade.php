<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />

    <!--My CSS-->
    <link rel="stylesheet" href="{{asset('home/style-home.css')}}" />
    <link rel="stylesheet" href="{{asset('home/style/content.css')}}" />
    <link rel="stylesheet" href="{{asset('home/style/navbar-footer.css')}}" />

    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
  <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>


    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand me-5" href="{{ url('/') }}">
          <img src="{{ asset('home/logo/logo.png') }}" alt="Logo" height="35" class="d-inline-block align-text-top mx-auto" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pencegahan</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/user/indexkategoridukungan') }}">Dukungan</a></li>
                <li><a class="dropdown-item" href="{{ url('/user/indexpendidikanseksual') }}">Pendidikan Seksual</a></li>
                <li><a class="dropdown-item" href="{{ url('/user/indexkategoriacara') }}">Acara</a></li>
                <li><a class="dropdown-item" href="{{ url('/user/indexberita') }}">Berita</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Penanganan</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('user/indexpengaduan') }}">Laporan Masalah</a></li>
                <li><a class="dropdown-item" href="{{ url('user/indexrumah') }} ">Rumah Aman</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="{{ url('user/indexpertemuan') }}">Pemulihan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="{{ url('/user/indextentangkami') }}">Tentang Kami</a>
            </li>
            <li class="nav-item">
              @if (Route::has('login'))
              @Auth
              <a href="{{ url('masyarakat/home') }}" class="nav-link me-3">Kembali</a>
              @else
              <a href="{{route('login')}}" class="nav-link me-3">Login</a>
              @endauth
            @endif
             
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <!--Content-->
    <!--section 1-->

    @yield ('content')
    <br><br><br><br><br><br><br><br><br><br><br>

    <!--Akhir content-->

    <!--Footer-->
    <footer>
      <div class="footer">
        

        <div class="link-footer">
          <ul>
            <li><a href="#" class="text-center">Laporan Masalah</a></li>
            <li><a href="#" class="text-center">Booking Pertemuan</a></li>
            <li><a href="#" class="text-center">Rumah Aman</a></li>
            <li><a href="#" class="text-center">Artikel</a></li>
            <li><a href="#" class="text-center">Tentang Kami</a></li>
          </ul>
        </div>
      </div>

      <div class="social-media">
        <a href="#">
          <img src="icons/instagram.png" alt="" />
        </a>
        <a href="#">
          <img src="icons/facebook.png" alt="" />
        </a>
        <a href="#">
          <img src="icons/youtube.png" alt="" />
        </a>
        <a href="#">
          <img src="icons/mail.png" alt="" />
        </a>
      </div>

      <div class="end-footer">
        <p>Support by IT Del</p>
        <p>Copyright &copy; 2023 by Berani Bicara</p>
      </div>
    </footer>
    <!--Akhir Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
