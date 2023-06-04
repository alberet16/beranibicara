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
  <link href=" {{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <style>
  .small-button {
    padding: 5px;
    width: 30px;
    height: 32px;
    font-size: 15px;
    align-items: center;
    justify-content: center;
  }

  .box-button-urgent {
    height: 100px;
    width: 50px;
    right: 30px;
    bottom: 50px;
    position: fixed;
    z-index: 999;
}

.button-urgent {
    width: 50px;
    height: 50px;
}

.button-urgent:nth-child(1) {
    background-color: #a60707;
}

.button-urgent:last-child {
    background-color: ;
}
</style>
  
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">
      <div class="container">

        <a class="navbar-brand me-5" href="{{ url('/masyarakat/home') }}">
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
                <li><a class="dropdown-item" href="{{ url('/masyarakat/kategoridukungan') }}">Dukungan</a></li>
                <li><a class="dropdown-item" href="{{ url('/masyarakat/pendidikanseksual') }}">Pendidikan Seksual</a></li>
                <li><a class="dropdown-item" href="{{ url('/masyarakat/kategoriacara') }}">Acara</a></li>
                <li><a class="dropdown-item" href="{{ url('/masyarakat/berita') }}">Berita</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Penanganan</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('pengaduan.index') }}">Laporan Masalah</a></li>
                <li><a class="dropdown-item" href="{{ url('/masyarakat/indexrumah') }}">Rumah Aman</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="{{ route('rumah.index') }}">Pemulihan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="{{ url('/masyarakat/tentangkami') }}">Tentang Kami</a>
            </li>
            <li class="nav-item dropdown">
            <a href="#contact-section" class="nav-link dropdown-toggle me-3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome! {{ Auth::user()->name }}</a>
              <ul class= "dropdown-menu">
                                <li><a href="{{route('pengaduan.create')}}" class="dropdown-item">Riwayat Laporan Masalah</a></li>
                                <li><a href="{{ route('rumah.create') }}" class="dropdown-item">Riwayat Pertemuan</a></li>
                                <hr>
                              <li><a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form></li>
                  </ul>
             
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <!--Content-->
    <!--section 1-->

    @section('content')
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
    @yield ('content')
    <br><br><br><br><br><br><br><br><br><br><br>
    <div class="fixed-bottom d-flex justify-content-end text-center" style="bottom: 2%; right: 0px;">
        <div class="button-urgent animasi rounded-circle d-flex justify-content-center align-items-center text-white fs-6">
           
            <a href="{{ url('/masyarakat/kategorinomor') }}" style="text-decoration: none; color: white;">
                <div
                    class="button-urgent animasi rounded-circle d-flex justify-content-center align-items-center text-white fs-6">
                    <i class="bi bi-telephone-fill" style="font-size: 20px; color: white;"></i>
                </div>
            </a>
            
        </div>
    </div>
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
        <i class='fab fa-instagram' style='font-size:24px'></i>
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
