@extends('layouts.masyarakat')

@section('content')
<!-- SweetAlert -->
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://momentjs.com/downloads/moment.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script>
  $( function() {
    $( "#rencana_temu" ).datepicker({                  
        
    });
  } );
  </script>

<link rel="stylesheet" href="{{asset('home/style/navbar-footer.css')}}" />
<link rel="stylesheet" href="{{asset('home/style/content.css')}}" />
<link rel="stylesheet" href="{{asset('home/style/style-laporan-masalah.css')}}" />

<div class="content">
      <div class="container">
        <div class="row">
          <!--Left Section-->
          <div class="col-lg left-section">
            <h1 class="title-left-section fw-bold" style="margin-bottom: 25px;">Booking<br>Pertemuan</h1>
            <h4 style="margin-bottom: 25px;">FORM BOOKING PERTEMUAN</h4>
            <p style="width: 450px;"> Dinas Pemberdayaan Masyarakat Desa, Perempuan, dan Perlindungan Anak (DPMDPPA) juga menyediakan layanan konsultasi/pertemuan dengan pihak yang ahli. Kamu dapat melakukan konsultasi mengenai masalah yang sedang kamu alami. Booking pertemuan sekarang juga !<br><span class="fw-medium">#BeraniBicara</span></p>
          </div>
          @if ($errors->any())
             <div class="alert alert-danger">
                 <strong>Whoops!</strong> Ada yang salah di data yang anda isi.<br><br>
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
          <!--Akhir Left Section-->
          <div class="col-lg right-section">
            <form action="{{ route('rumah.store') }}" enctype="multipart/form-data" method="POST">
              @csrf
              <div>
                <label for="nama" class="fw-medium">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required placeholder="Ketik di sini" autocomplete="off">
                 @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                    @enderror
              </div>
              <div>
                <label for="nomor_telepon" class="fw-medium">Nomor Telepon</label>
                <input type="tel"  name="nomor_telepon" id="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" required placeholder="Ketik di sini" autocomplete="off"> 
                  @error('nomor_telepon')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                    @enderror
              </div>
              <div>
                <label for="rencana_temu" class="fw-medium">Rencana Temu</label>
                <input type="text" class="form-control @error('rencana_temu') is-invalid @enderror" name="rencana_temu" id="rencana_temu" required placeholder="Ketik di sini" autocomplete="off">
                  @error('rencana_temu')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                          @enderror
              </div>
              <div>
                <label for="isi" class="fw-medium">Keperluan Temu</label>
                <textarea name="keperluan_temu" id="keperluan_temu" cols="30" rows="10" placeholder="Ketik Disini" class="form-control @error('keperluan_temu') is-invalid @enderror" name="keperluan_temu" id="keperluan_temu"></textarea>
                 @error('keperluan_temu')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                        @enderror
              </div>

              <!--Button-->
              <div class="container text-end">
                <button type="submit" class="btn btn-success">Kirim</button>
                <button type="reset" class="btn btn-danger">Batal</button>
              </div> 
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection