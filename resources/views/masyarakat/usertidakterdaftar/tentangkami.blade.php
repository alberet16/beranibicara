 @extends('layouts.masyarakat')

 @section('content')

 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>

    <link rel="stylesheet" href="{{asset('user/card.css')}}" />

    <link rel="stylesheet" href="{{asset('home/style/navbar-footer.css')}}" />
    <link rel="stylesheet" href="{{asset('home/style/content.css')}}" />
    <link rel="stylesheet" href="{{asset('home/style/tentangkami.css')}}" />
    <link href=" {{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    
    

<link href=" {{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
 </head>


 <body>
 <div class="main">
 @foreach($indextentangkami as $data)
      <!--Content-->
      <section class="background-relative">
      <img class="background-tentang-kami" src="{{ asset('home/background/tentang-kami.png') }}" alt="" />
      <div class="container text-center section-1">
        <p class="text-white">Berani Bicara bagian dari</p>
        <h2 class="fw-bold green-text">DINAS PEMBERDAYAAN MASYARAKAT DESA, PEREMPUAN DAN PERLINDUNGAN ANAK</h2>
      </div>
    </section>

    <section class="container">
      <h1 class="fw-bold text-center py-5">DINAS PEMBERDAYAAN MASYARAKAT DESA, PEREMPUAN DAN PERLINDUNGAN ANAK</h1>
      <p>
        {{ $data->penjelasan }}
      </p>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg p-5 text-center">
            <h3 class="fw-bold green-text">VISI</h3>
            <p class="text-white">{{ $data->visi }}</p>
          </div>

          <div class="col-lg p-5 text-center">
            <h3 class="fw-bold green-text">MISI</h3>
            <p class="text-white">{{ $data->misi }}</p>
          </div>

          <div class="background-black p-5">
            <div>
              <h3 class="fw-bold green-text">Berani Bicara</h3>
              <p class="text-white">
                Tindak kekerasan yang semakin meningkat menimbulkan rasa ketidaknyamanan bagi para perempuan dan anak, Oleh karena itu kami datang memberikan solusi dengan tujuan, membantu para perempuan dan anak yang tidak percaya diri
                ketika ingin bercerita mengenai kekerasan yang dihadapinya serta memberikan kemudahan kepada mereka yang ingin berkomunikasi dengan para ahli mengenai permasalahan mereka.
              </p>
            </div>

            <div class="berani-bicara">
              <img src="{{ asset('home/background/thumbnail.png') }}" alt="gambar-berani-bicara" />
            </div>
          </div>

          <div class="col-lg p-5">
            <h3 class="text-white fw-bold">Struktur Organisasi DPMDPPA</h3>
            <img src="/struktur/{{ $data->struktur }}" alt="struktur-organisasi" />
          </div>

          <div class="col-lg p-5">
            <h3 class="green-text fw-bold">FASILITAS</h3>
            <p class="text-white fw-medium">DPMDPPA Juga memberikan beberapa fasilitas yang dapat menunjang setiap kegiatan yang ada.</p>
            <a href="{{ url('/user/indexfasilitas') }}" class="text-white fw-light" id="pelajari-lebih-lanjut">Pelajari lebih lanjut > </a>
          </div>
        </div>
      </div>
    </section>

    <!--Akhir Content-->

    <!--Akhir Content-->
 </body>
 </html>
@endforeach

    @endsection