@extends('layouts.masyarakat')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>

    <link rel="stylesheet" href="{{asset('user/card.css')}}" />

    <link rel="stylesheet" href="{{asset('home/style/navbar-footer.css')}}" />
    <link rel="stylesheet" href="{{asset('home/style/content.css')}}" />
    <link rel="stylesheet" href="{{asset('home/style/rumahaman.css')}}" />
    <link href=" {{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    

<link href=" {{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

<style>
      /* Tambahkan CSS responsif di sini */
      @media (max-width: 768px) {
        .title-rumah-aman {
          margin-bottom: 20px;
        }
        .detail-fasilitas {
          margin-bottom: 20px;
        }
      }
    </style>

 <!--Content-->
 <div class="container-rumah-aman">
      <img id="background-rumah-aman" src="{{ asset('home/background/fasilitas-1.png') }}" alt="" />
      <div class="content-rumah-aman">
        <section class="container">
          <div class="text-center">
            <h1 class="fw-bold text-green">RUMAH AMAN.</h1>
            <h1 class="fw-bold text-white">Tempat yang aman untuk Berlindung.</h1>
            <p class="text-white fw-light my-5">
              Rumah Aman merupakan salah satu fasilitas yang ada di Dinas Pemberdayaan Masyarakat Desa, Perempuan, dan Perlindungan Anak (DPMDPPA). Rumah Aman dibangun sebagai tempat untuk menerima korban yang merasa perlu untuk dilindungi
              atau sebagai tempat sementara untuk menjauhi masalah korban.
            </p>
          </div>
        </section>

        <section class="container mt-5">
          <h1 class="fw-bold text-center text-white mt-5">Fasilitas Rumah Aman</h1>
          <div class="container">
            <div class="row">
              <div class="col-sm text-center">
                <i class="bx bx-bed text-white" style="font-size: 30px;"></i>
                <p class="text-white">Kamar Tidur</p>
              </div>

              <div class="col-sm">
                  <i class="bx bx-bath text-white" style="font-size: 30px;"></i>
                <p class="text-white">Kamar Mandi</p>
              </div>

              <div class="col-sm">
                <i class="fas fa-utensils  text-white" style="font-size: 29px;"></i>
                <p class="text-white">Dapur</p>
              </div>

              <div class="col-sm">
                <i class="bx bx-home-heart text-white"  style="font-size: 30px;"></i>
                <p class="text-white">Keamanan</p>
              </div>
            </div>

            <p class="text-center text-white mt-5">
              Termasuk beberapa fasilitas yang dapat digunakan oleh penghuni Rumah Aman. Fasilitas yang diberikan berada dibawah pengawasan DPMDPPA Toba dan hanya dapat digunakan oleh penghuni Rumah Aman
            </p>
          </div>
        </section>

        <section class="container">
          <div>
            <h2 class="fw-bold text-white mt-5">Kamar Tidur</h2>
            <p class="text-white mb-5">
              Jumlah Kamar Tidur di dalam Rumah Aman ada 3. Masing-masing kamar sudah dilengkapi kamar mandi dalam dan perabotan seperti tempat tidur, bantal, selimut, lemari, meja, dan kursi. Masing-masing kamar dapat menampung 1 orang.
            </p>
          </div>

          <div>
            <h2 class="fw-bold text-white mt-5">Dapur</h2>
            <p class="text-white mb-5">Dapur Rumah Aman meiliki perabotan untuk masak-memasak seperti rak piring, piring, rice cooker, sendok, gelas, dan lain-lain.</p>
          </div>

          <div>
            <h2 class="fw-bold text-white mt-5">Kamar Mandi</h2>
            <p class="text-white mb-5">Rumah Aman menyediakan 2 jenis kamar mandi, yakni kamar mandi bersama dan kamar mandi dalam di setiap kamar.</p>
          </div>

          <div>
            <h2 class="fw-bold text-white mt-5">Keamanan</h2>
            <p class="text-white mb-5">Rumah Aman memberikan keamanan kepada korban yang akan tinggal di Rumah Aman yang akan dijaga oleh Pendamping DPMD-PPA pada pagi hingga sore hari dan oleh Satpam pada malam hari.</p>
          </div>
        </section>

        <section class="container text-center">
          <p class="fw-bold text-white">Hubungi Kami</p>
          <p class="text-white">Jl. Siliwangi No. 1 Kec. Balige Toba, Sumatera Utara 22312</p>
          <p class="text-white">082232435466</p>
        </section>
      </div>
    </div>
    </div>
    <!--Akhir Content-->


@endsection