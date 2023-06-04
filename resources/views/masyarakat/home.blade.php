@extends('layouts.masyarakat')

@section('content')
@if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
<section>
      <img src="{{ asset('home/background/background-home-1.png') }}" alt="" > 
      <div class="text-center section-container">
        <h1 class="fw-bold title my-4">LAPORAN MASALAH</h1>
        <div class="description">
          <p class="mb-5 text-light">Laporkan dan dapatkan perlindungan untuk diri sendiri dan sesama!<br /><strong>#BeraniBicara</strong></p>
          <p class="fw-medium text-light">Masalah dapat dilaporkan melalui</p>
        </div>

        <div class="mx-auto button-lapor">
          <a href="{{ route('pengaduan.index') }}">          <button class="m-2 px-5 py-2 rounded-5 text-light fw-medium">Website</button></a>
          <a href="https://wa.me/6285735501035?text=Isi Pesan"><button class="m-2 px-5 py-2 rounded-5 text-light fw-medium">WhatsApp</button></a>
          <a href="tel:917387084384"><button class="m-2 px-5 py-2 rounded-5 text-light fw-medium">Telepon</button></a>
        </div>
      </div>
    </section>

    <!--section 2-->
    <section>
    <img src="{{ asset('home/background/background-home-2.png') }}" alt="" > 
      <div class="section-container-1">
        <h1 class="title title-1 my-4 align-baseline fw-semibold">RUMAH AMAN. <span class="text-light">Tempat yang aman untuk Berlindung.</span></h1>
        <div class="description">
          <p class="text-light">
            Rumah Aman merupakan salah satu fasilitas yang ada di Dinas Pemberdayaan Masyarakat Desa, Perempuan, dan Perlindungan Anak (DPMDPPA). Rumah Aman dibangun sebagai tempat untuk menerima korban yang merasa perlu untuk dilindungi
            atau sebagai tempat sementara untuk menjauhi masalah korban.
          </p>
          <a href="#"><button class="m-2 px-5 py-2 rounded-5 text-light fw-medium pelajari">Pelajari lebih Lanjut</button></a>
        </div>
      </div>
    </section>

    <!--Section 3-->
    <section>
    <img src="{{ asset('home/background/background-home-3.png') }}" alt="" > 
      <div class="section-container-1">
        <h1 class="title title-1 my-4 align-baseline fw-semibold">BOOKING PERTEMUAN.<span class="text-light">Lakukan konsultasi dengan pihak yang berwajib.</span></h1>
        <div class="description">
          <p class="text-light">
            Rumah Aman merupakan salah satu fasilitas yang ada di Dinas Pemberdayaan Masyarakat Desa, Perempuan, dan Perlindungan Anak (DPMDPPA). Rumah Aman dibangun sebagai tempat untuk menerima korban yang merasa perlu untuk dilindungi
            atau sebagai tempat sementara untuk menjauhi masalah korban.
          </p>
          <a href="{{ route('rumah.index') }}"><button class="m-2 px-5 py-2 rounded-5 text-light fw-medium pelajari">Pelajari lebih Lanjut</button></a>
        </div>
      </div>
    </section>

    <!--section 4-->
    <section>
      <div class="section-container-2">
        <h1 class="title title-artikel my-4 align-baseline fw-semibold">Artikel. <span class="text-dark-emphasis">Lakukan konsultasi dengan pihak yang berwajib.</span></h1>
        <div class="artikel-container">
          <div class="artikel">
            <div class="container-image">
            <img src="{{ asset('home/images/artikel-1.png') }}" alt="" > 
              <div class="artikel-description">
                <p class="jenis">Event</p>
                <p class="artikel-title fw-semibold">PEREMPUAN</p>
              </div>
              <a href="#">Selengkapnya ></a>
            </div>
          </div>

          <div class="artikel">
            <div class="container-image">
            <img src="{{ asset('home/images/artikel-2.png') }}" alt="" > 
              <div class="artikel-description">
                <p class="jenis">Berita</p>
                <p class="artikel-title fw-semibold">Polres Toba Amankan BEM Terduga Pelaku Pelecehan Seksual.</h4>
              </div>

              <a href="#">Selengkapnya ></a>
            </div>
          </div>

          <div class="artikel">
            <div class="container-image">
            <img src="{{ asset('home/images/artikel-3.png') }}" alt="" > 
              <div class="artikel-description">
                <p class="jenis">Sex Education</p>
                <p class="artikel-title fw-semibold">Dalam Hubungannya Cewek Harus Bisa Katakan Tidak untuk 8 Hal ini, Biar Tak Menyesal Nanti.</p>
              </div>

              <a href="#">Selengkapnya ></a>
            </div>
          </div>

          <div class="artikel">
            <div class="container-image">
            <img src="{{ asset('home/images/artikel-1.png') }}" alt="" > 
              <div class="artikel-description">
                <p class="jenis">Event</p>
                <p class="artikel-title fw-semibold">PEREMPUAN</p>
              </div>
              <a href="#">Selengkapnya ></a>
            </div>
          </div>

          <div class="artikel">
            <div class="container-image">
              <img src="{{ asset('home/images/artikel-2.png') }}" alt="" > 
              <div class="artikel-description">
                <p class="jenis">Berita</p>
                <p class="artikel-title fw-semibold">Polres Toba Amankan BEM Terduga Pelaku Pelecehan Seksual.</p>
              </div>
              <a href="#">Selengkapnya ></a>
            </div>
          </div>

          <div class="artikel">
            <div class="container-image">
            <img src="{{ asset('home/images/artikel-3.png') }}" alt="" > 
              <div class="artikel-description">
                <p class="jenis">Sex Education</p>
                <p class="artikel-title fw-semibold">Dalam Hubungannya Cewek Harus Bisa Katakan Tidak untuk 8 Hal ini, Biar Tak Menyesal Nanti.</p>
              </div>
              <a href="#">Selengkapnya ></a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
