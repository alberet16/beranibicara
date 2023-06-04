@extends('layouts.masyarakat')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>

     <br>
     <div class="container">
     <div class="row">
             <div class="col-lg-12 margin-tb">
                 <div class="pull-left">
                     <h2>Edit Data</h2>
                 </div>
             </div>
         </div>
          
         @if ($errors->any())
             <div class="alert alert-danger">
                 <strong>Whoops!</strong> There were some problems with your input.<br><br>
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
        <br><hr><br>
         <form action="{{ route('pengaduan.show', $pengaduan->id) }}" method="POST" enctype="multipart/form-data" > 
             @csrf
             @method('PUT')
            <h5><strong>Pelapor</strong></h5>
              <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>NIK</strong>
                         <input type="text" name="nik_pelapor" readonly value="{{ $pengaduan->nik_pelapor }}" class="form-control" placeholder="Name">
                         @error('nik_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                    @enderror
                        </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Nama Lengkap</strong>
                         <input type="text" name="nama_pelapor" readonly value="{{ $pengaduan->nama_pelapor }}" class="form-control" placeholder="Name">
                         @error('nama_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror 
                        </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                            <strong>Nomor Telepon</strong>
                            <input type="text" readonly class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" id="nomor_telepon" autofocus value="{{old('nomor_telepon', $pengaduan->nomor_telepon)}}">
                            @error('nomor_telepon')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div>

                    
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Usia</strong>
                         <input type="text" name="usia_pelapor" readonly value="{{ $pengaduan->usia_pelapor }}" class="form-control" placeholder="Name">
                         @error('usia_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror 
                       </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Alamat</strong>
                         <input type="text" name="alamat_pelapor" readonly value="{{ $pengaduan->alamat_pelapor }}" class="form-control" placeholder="Name">
                         @error('alamat_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                        </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Jenis Kelamin</strong>
                         <select class="form-control" readonly name="jenis_kelamin_pelapor">
                                <option value="{{ $pengaduan->jenis_kelamin_pelapor }}">{{ $pengaduan->jenis_kelamin_pelapor }}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                         </select>
                         @error('jenis_kelamin_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                     </div>
                     <br>
                 </div>

                 <br><hr><br>
                 <h5><strong>Korban</strong></h5>


                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>NIK</strong>
                         <input type="text" name="nik_korban" readonly value="{{ $pengaduan->nik_korban }}" class="form-control" placeholder="Name">
                         @error('nik_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                        </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Nama Lengkap</strong>
                         <input type="text" name="nama_korban" readonly value="{{ $pengaduan->nama_korban }}" class="form-control" placeholder="Name">
                         @error('nama_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                        </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Nomor Telepon</strong>
                         <input type="text" name="nomor_telepon_korban" readonly value="{{ $pengaduan->nomor_telepon_korban }}" class="form-control" placeholder="Name">
                         @error('nomor_telepon_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                        </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Usia</strong>
                         <input type="text" name="usia_korban" readonly value="{{ $pengaduan->usia_korban }}" class="form-control" placeholder="Name">
                         @error('usia_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                        </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Jenis Kelamin</strong>
                         <select class="form-control" readonly name="jenis_kelamin_korban">
                                <option value="{{ $pengaduan->jenis_kelamin_korban }}">{{ $pengaduan->jenis_kelamin_pelapor }}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                         </select>
                         @error('jenis_kelamin_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                     </div>
                     <br>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Status Perkawinan</strong>
                         <select class="form-control" readonly name="status_perkawinan">
                                <option value="{{ $pengaduan->status_perkawinan }}" >{{ $pengaduan->status_perkawinan }}</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Cerai">Cerai</option>
                         </select>
                         @error('status_perkawinan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                     </div>
                     <br>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Tindakan Kekerasan</strong>
                         <select class="form-control" readonly name="tindakan_kekerasan">
                                <option value="{{ $pengaduan->tindakan_kekerasan }}" >{{ $pengaduan->tindakan_kekerasan }}</option>
                                <option value="KDRT">KDRT</option>
                                <option value="Hak Kuasa Asuh">Hak Kuasa Asuh</option>
                                <option value="Fisik">Fisik</option>
                                <option value="Psikis">Psikis</option>
                                <option value="Ekspolitasi">Eksploitasi</option>
                                <option value="Penelantaran">Penelantaran</option>
                                <option value="Seksual">Seksual</option>
                         </select>
                         @error('status_perkawinan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                     </div>
                     <br>
                 </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Alamat Kejadian</strong>
                         <input type="text" readonly name="alamat_kejadian" value="{{ $pengaduan->alamat_kejadian }}" class="form-control" placeholder="Alamat">
                     </div>
                 </div>

                 <div class="col-sm-6">
                                <strong>Tanggal Terjadi</strong>
                                <input type="text" readonly class="form-control @error('tanggal_terjadi') is-invalid @enderror" value="{{ $pengaduan->tanggal_terjadi }}" name="tanggal_terjadi" id="tanggal_terjadi" autofocus value="{{old('tanggal_terjadi')}}">
                                @error('tanggal_terjadi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Deskripsi Kejadian</strong>
                         <textarea rows="5" cols="33" name="deskripsi" readonly  value="{{ $pengaduan->deskripsi }}"  class="form-control"  placeholder="Keterangan">{{ $pengaduan->deskripsi }}</textarea>
                     </div>
                 </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Penggunaan Rumah Aman</strong>
                        <small>
                        *Jika merasa tidak aman di tempat tinggal anda, anda dapat menggunakan Rumah Aman.
                        Namun, untuk penggunaan Rumah Aman akan dilihat dari kondisi kasus Anda.
                        </small><br>
                        <select class="form-control" readonly name="rumah">
                            <option selected  value="{{ $pengaduan->rumah }}">{{ $pengaduan->rumah }}</option>
                        </select>
                             @error('rumah')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                              @enderror
                              <br><br>
                    </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Bukti Kekerasan:</strong>
                         <img src="/image/{{ $pengaduan->image }}" width="300px">
                     </div>
                 </div>
                
                 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                   <a class="btn btn-danger" href="{{ route('pengaduan.index') }}">Kembali</a>
                 </div>
             </div>
             </form>
     </div>
        
        
    
</body>
</html>

@endsection