@extends('layouts.user')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>

    <link rel="stylesheet" href="{{asset('user/card.css')}}" />
    <link rel="stylesheet" href="{{asset('home/style/fasilitas.css')}}" />

    <link rel="stylesheet" href="{{asset('home/style/navbar-footer.css')}}" />
    <link rel="stylesheet" href="{{asset('home/style/content.css')}}" />
    <link href=" {{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    
    

<link href=" {{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">


</head>
<body>
   <!--Awal Content-->
   <div class="main">
      <section class="section-fasilitas text-center">
        <div>
          <h1 class="judul fw-bold">FASILITAS</h1>
          <p>DPMDPPA Juga memberikan beberapa fasilitas yang dapat<br />menunjang setiap kegiatan yang ada.</p>
        </div>
      </section>

      <section class="text-center container section-fasilitas">
        <h1 style="margin-top: 300px">Nikmati Berbagai Fasilitas DPMDPPA</h1>

        <div class="section-image-1">
          <div class="left">
            <img src=" {{ asset('home/background/fasilitas-1.png') }}" alt="" />
          </div>
          <div class="right">
            <img class="top" src="{{ asset('home/background/fasilitas-2.png') }}" style="margin-bottom: 4px" alt="" />
            <img class="bottom" src="{{ asset('home/background/fasilitas-3.png') }}" alt="" />
          </div>
        </div>

        <div class="section-image-2">
          <img src="{{ asset('home/background/fasilitas-4.png') }}" alt="" />
        </div>

        <div class="section-image-3">
          <img style="margin-right: 1%" src="{{ asset('home/background/fasilitas-5.png') }}" alt="" />
          <img src="{{ asset('home/background/fasilitas-6.png') }}" alt="" />
        </div>
        <div></div>
        <div></div>
      </section>
    </div>
</body>
</html>


@endsection