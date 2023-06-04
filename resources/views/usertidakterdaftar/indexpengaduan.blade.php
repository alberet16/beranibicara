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

<div class="content">
  <div class="container">      
     
    <!--General Section-->
    <div class="text-center">
      <h1 class="title-left-section fw-bold" style="margin-bottom: 25px;">Laporan Masalah</h1>
    
      <p style="margin-top:-10px">Tunjukkan Suaramu, dapatkan perlindungan dan mulai melindungi sesama!<br><span class="fw-medium">#BeraniBicara</span></p>
      <div class="mx-auto button-lapor">
        <h2 class="fw-bold">LAPORAN CEPAT!</h1>
        <a href="https://wa.me/6285735501035?text=Isi Pesan"> <button class="m-2 px-5 py-2 rounded-5 text-light fw-medium button-cepat"  >Melalui Whatsapp</button></a>
        <a href="tel:917387084384"> <button class="m-2 px-5 py-2 rounded-5 text-light fw-medium button-cepat">Melalui Telepon</button></a>
      </div>
    </div>

<br>
    
    <!--Akhir Left Section-->
    <div class="row p-3" style="border: 1px solid rgb(172, 171, 171); border-radius: 5px;">
    <h3 style=" margin-bottom: 25px;" class="text-center fw-bold">FORM LAPORAN MASALAH</h4>
      <div class="col-lg left-section">
        <form action=''>
          <h5>Pelapor:</h5>
            <!-- Pelapor -->
          <div>
            <label for="nama" class="fw-mediumtn">NIK</label>
            <input type="text" id="nik_pelapor" onclick="contoh()" readonly name="nik_pelapor" required placeholder="Tidak wajib diisi" autocomplete="off" class="form-control @error('nik_pelapor') is-invalid @enderror">
                @error('nik_pelapor')
            <div class="invalid-feedback">
              {{$message}}
            </div>
               @enderror
          </div>

          <div>
            <label for="nama" class="fw-mediumtn">Nama Lengkap</label>
            <input type="text" id="nama_pelapor" onclick="contoh()" readonly name="nama_pelapor" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('nama_pelapor') is-invalid @enderror">
                @error('nama_pelapor')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div>
            <label for="telepon" class="fw-medium">Nomor Telepon</label>
            <input type="tel" name="nomor_telepon" onclick="contoh()" readonly id="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" required placeholder="Ketik di sini" autocomplete="off"> 
              @error('nomor_telepon')
            <div class="invalid-feedback">
              {{$message}}
            </div>
              @enderror
          </div>
          <div>
            <label for="nama" class="fw-mediumtn">Usia</label>
            <input type="text" id="usia_pelapor" onclick="contoh()" readonly name="usia_pelapor" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('usia_pelapor') is-invalid @enderror">
                @error('usia_pelapor')
            <div class="invalid-feedback">
              {{$message}}
             </div>
              @enderror
          </div>

          <div>
            <label for="nama" class="fw-mediumtn">Alamat Pelapor</label>
                <input type="text" id="alamat_pelapor" onclick="contoh()" readonly name="alamat_pelapor" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('alamat_pelapor') is-invalid @enderror">
                @error('alamat_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

              <div>
                <label for="nama" class="fw-mediumtn">Jenis Kelamin</label>
                <select class="form-control" readonly onclick="contoh()" name="jenis_kelamin_pelapor">
                  <option value="" disabled selected>Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

              <br><hr><br>
              <!-- Korban -->
            <div class="col-lg right-section">
              <h5>Korban:</h5>
              <div>
                <label for="nama" class="fw-mediumtn">NIK</label>
                <input type="text" id="nik_korban" onclick="contoh()" readonly name="nik_korban" required placeholder="Tidak wajib diisi" autocomplete="off" class="form-control @error('nik_korban') is-invalid @enderror">
                @error('nik_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

              <div>
                <label for="nama" class="fw-mediumtn">Nama Lengkap</label>
                <input type="text" id="nama_korban" onclick="contoh()" readonly name="nama_korban" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('nama_korban') is-invalid @enderror">
                @error('nama_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>
              <div>
                <label for="telepon" class="fw-medium">Nomor Telepon</label>
                <input type="tel" name="nomor_telepon_korban" onclick="contoh()" readonly id="nomor_telepon_korban" class="form-control @error('nomor_telepon_korban') is-invalid @enderror" required placeholder="Ketik di sini" autocomplete="off"> 
                @error('nomor_telepon_korban')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                  @enderror
              </div>

              
              <div>
                <label for="nama" class="fw-mediumtn">Usia</label>
                <input type="text" id="usia_korban" onclick="contoh()" readonly name="usia_korban" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('usia_korban') is-invalid @enderror">
                @error('usia_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

             
              <div>
                <label for="nama" class="fw-mediumtn">Jenis Kelamin</label>
                <select class="form-control" readonly onclick="contoh()" name="jenis_kelamin_korban">
                  <option value="" disabled selected>Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

              <div>
                <label for="nama" class="fw-mediumtn">Status Perkawinan</label>
                <select class="form-control" readonly name="status_perkawinan">
                  <option value="" disabled selected>Pilih</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Cerai">Cerai</option>
                </select>
                @error('jenis_kelamin_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

              <div>
                <label for="nama" class="fw-mediumtn">Tindakan Kekerasan</label>
                <select class="form-control" readonly name="tindakan_kekerasan">
                  <option value="" disabled selected>Pilih</option>
                    <option value="KDRT">KDRT</option>
                    <option value="Hak Kuasa Asuh">Hak Kuasa Asuh</option>
                    <option value="Fisik">Fisik</option>
                    <option value="Psikis">Psikis</option>
                    <option value="Ekspolitasi">Eksploitasi</option>
                    <option value="Penelantaran">Penelantaran</option>
                    <option value="Seksual">Seksual</option>
                </select>
                @error('tindakan_kekerasan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>


              <div>
                <label for="nama" class="fw-mediumtn">Alamat Kejadian</label>
                <input type="text" id="alamat_kejadian" onclick="contoh()" readonly name="alamat_kejadian" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('alamat_kejadian') is-invalid @enderror">
                @error('alamat_kejadian')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>


              <div>
                <label for="tanggal_terjadi" class="fw-medium">Tanggal Terjadi</label>
                <input type="text" id="tanggal_terjadi" onclick="contoh()" readonly class="form-control @error('tanggal_terjadi') is-invalid @enderror" name="tanggal_terjadi" required placeholder="Ketik di sini" autocomplete="off" name="tanggal_terjadi" id="tanggal_terjadi">
                @error('tanggal_terjadi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
              </div>
              <div>
                <label for="deskripsi" class="fw-medium">Deskripsi Kejadian</label>
                <textarea name="deskripsi" id="deskripsi" onclick="contoh()" readonly cols="30" rows="10" placeholder="Ketik Disini" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                  @enderror
              </div>
          
              <div>
                <label for="rumah" class="fw-medium">Rumah</label>
                <small style=" color: #8B0000;">
                 <b>
                 *Apakah anda merasa tidak aman di tempat tinggal anda? Jika ya, silahkan untuk menekan tombol ya!
                 </b>
                </small><br>
                <select class="form-control" onclick="contoh()" readonly name="rumah">
                  <option readonly value="" disabled selected>Pilih</option>
                    <option readonly value="Ya, Butuh">Ya, Saya Butuh!</option>
                    <option readonly value="Tidak Perlu">Tidak Perlu</option>
                </select>
                @error('rumah')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                              @enderror
              </div>
              <div>
                <label for="isi" readonly class="fw-medium">Tambahkan bukti foto jika ada</label>
                <input type="file" readonly onclick="contoh()" id="image" name="image" autocomplete="off" class="form-control @error('image') is-invalid @enderror">

                @error('image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
              </div>

              <!--Button-->
        
          </div>
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

                text: "Anda Harus Login Terlebih Dahulu Ya!! Stay Safe <3",

                button: true

            });

        }

    </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endsection