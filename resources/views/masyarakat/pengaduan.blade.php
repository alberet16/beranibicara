@extends('layouts.masyarakat')

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
          
         
    <div class="container">
    <div class="row p-3" style="border: 1px solid rgb(172, 171, 171); border-radius: 5px;"> 
    <h3 style=" margin-bottom: 25px;" class="text-center fw-bold">FORM LAPORAN MASALAH</h4>
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
            <form action="{{ route('pengaduan.store') }}" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="container">
                <div class="row">
                  <div class="col-lg">
              <h5>Pelapor:</h5>
              <!-- Pelapor -->
              <div>
                <label for="nama" class="fw-mediumtn">NIK</label>
                <input type="text" id="nik_pelapor" name="nik_pelapor" placeholder="Tidak wajib diisi" autocomplete="off" class="form-control @error('nik_pelapor') is-invalid @enderror">
                @error('nik_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

              <div>
                <label for="nama" class="fw-mediumtn">Nama Lengkap</label>
                <input type="text" id="nama_pelapor" name="nama_pelapor" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('nama_pelapor') is-invalid @enderror">
                @error('nama_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>
              <div>
                <label for="telepon" class="fw-medium">Nomor Telepon</label>
                <input type="tel" name="nomor_telepon" id="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" required placeholder="Ketik di sini" autocomplete="off"> 
                @error('nomor_telepon')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                  @enderror
              </div>

              
              <div>
                <label for="nama" class="fw-mediumtn">Usia</label>
                <input type="number" id="usia_pelapor" name="usia_pelapor" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('usia_pelapor') is-invalid @enderror">
                @error('usia_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

              <div>
                <label for="nama" class="fw-mediumtn">Alamat Pelapor</label>
                <input type="text" id="alamat_pelapor" name="alamat_pelapor" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('alamat_pelapor') is-invalid @enderror">
                @error('alamat_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

              <div>
                <label for="nama" class="fw-mediumtn">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin_pelapor">
                  <option value="" disabled selected>Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div><br>
          </div>

              <br><hr><br>
              <div class="col-lg">
                <div>
              <!-- Korban -->
              <h5>Korban:</h5>
              <div>
                <label for="nama" class="fw-mediumtn">NIK</label>
                <input type="number" id="nik_korban" name="nik_korban" placeholder="Tidak wajib diisi" autocomplete="off" class="form-control @error('nik_korban') is-invalid @enderror">
                @error('nik_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

              <div>
                <label for="nama" class="fw-mediumtn">Nama Lengkap</label>
                <input type="text" id="nama_korban" name="nama_korban" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('nama_korban') is-invalid @enderror">
                @error('nama_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>
              <div>
                <label for="telepon" class="fw-medium">Nomor Telepon</label>
                <input type="tel" name="nomor_telepon_korban" id="nomor_telepon_korban" class="form-control @error('nomor_telepon_korban') is-invalid @enderror" required placeholder="Ketik di sini" autocomplete="off"> 
                @error('nomor_telepon_korban')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                  @enderror
              </div>

              
              <div>
                <label for="nama" class="fw-mediumtn">Usia</label>
                <input type="number" id="usia_korban" name="usia_korban" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('usia_korban') is-invalid @enderror">
                @error('usia_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>

             
              <div>
                <label for="nama" class="fw-mediumtn">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin_korban">
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
                <select class="form-control" name="status_perkawinan">
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
                <select class="form-control" name="tindakan_kekerasan">
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
                <input type="text" id="alamat_kejadian" name="alamat_kejadian" required placeholder="Ketik di sini" autocomplete="off" class="form-control @error('alamat_kejadian') is-invalid @enderror">
                @error('alamat_kejadian')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
              </div>


              <div>
                <label for="tanggal_terjadi" class="fw-medium">Tanggal Terjadi</label>
                <input type="text" id="tanggal_terjadi" class="form-control @error('tanggal_terjadi') is-invalid @enderror" name="tanggal_terjadi" required placeholder="Ketik di sini" autocomplete="off" name="tanggal_terjadi" id="tanggal_terjadi">
                @error('tanggal_terjadi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
              </div>
              <div>
                <label for="deskripsi" class="fw-medium">Deskripsi Kejadian</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Ketik Disini" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
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
                <select class="form-control" name="rumah">
                  <option value="" disabled selected>Pilih</option>
                    <option value="Ya, Butuh">Ya, Saya Butuh!</option>
                    <option value="Tidak Perlu">Tidak Perlu</option>
                </select>
                @error('rumah')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                              @enderror
              </div>
              <div>
                <label for="isi" class="fw-medium">Tambahkan bukti foto jika ada</label>
                <input type="file" id="image" name="image" autocomplete="off" class="form-control @error('image') is-invalid @enderror">

                @error('image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
              </div>
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
    </div>
@endsection