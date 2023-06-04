@extends('layouts.user')

@section('content')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://momentjs.com/downloads/moment.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script>
  $( function() {
    $( "#tanggal_terjadi" ).datepicker({                  
        maxDate: moment().add('d', 1).toDate(),
    });
  } );
  </script>


<link rel="stylesheet" href="{{asset('home/style/navbar-footer.css')}}" />
<link rel="stylesheet" href="{{asset('home/style/content.css')}}" />
<link rel="stylesheet" href="{{asset('home/style/style-laporan-masalah.css')}}" />

 <!--Content-->
 <div class="content">
      <div class="container">
        <div class="row">
          <!--Left Section-->
          <div class="col-lg left-section">
            <h1 class="title-left-section fw-bold" style="margin-bottom: 25px;">Booking<br>Pertemuan</h1>
            <h4 style="margin-bottom: 25px;">FORM BOOKING PERTEMUAN</h4>
            <p style="width: 450px;"> Dinas Pemberdayaan Masyarakat Desa, Perempuan, dan Perlindungan Anak (DPMDPPA) juga menyediakan layanan konsultasi/pertemuan dengan pihak yang ahli. Kamu dapat melakukan konsultasi mengenai masalah yang sedang kamu alami. Booking pertemuan sekarang juga !<br><span class="fw-medium">#BeraniBicara</span></p>
          </div>
          <!--Akhir Left Section-->
          <div class="col-lg right-section">
            <form action=''>
              <div>
                <label for="nama" class="fw-medium">Nama</label>
                <input type="text" id="nama" onclick="contoh()" readonly placeholder="Ketik di sini" autocomplete="off">
              </div>
              <div>
                <label for="telepon" class="fw-medium">Nomor Telepon</label>
                <input type="tel" id="telepon" onclick="contoh()" readonly placeholder="Ketik di sini" autocomplete="off"> 
              </div>
              <div>
                <label for="tanggal" class="fw-medium">Rencana Temu</label>
                <input type="date" id="tanggal" onclick="contoh() readonly placeholder="Ketik di sini" autocomplete="off">
              </div>
              <div>
                <label for="isi" class="fw-medium">Keperluan Temu</label>
                <textarea name="isi" id="isi" onclick="contoh() readonly cols="80" rows="10" placeholder="Ketik Disini"></textarea>
              </div>

              <!--Button-->
            
            </form>
            <div class="container text-end">
                <button type="submit" class="btn btn-success" onclick="contoh()">Kirim</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </div> 
          </div>
        </div>
      </div>
    </div>
    <!--Akhir Content-->

    <script type="text/javascript">

        function contoh() {

           swal({

                title: "Peringatan!",

                text: "Anda Harus Login Terlebih Dahulu Ya!!",

                button: true

            });

        }

    </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection