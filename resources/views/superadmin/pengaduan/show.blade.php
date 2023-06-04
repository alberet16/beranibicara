@extends('layouts.superadmin')

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

     
     
         <div class="row">
             <div class="col-lg-12 margin-tb">
                 <div class="pull-left">
                     <h2>Lihat Data Pengaduan</h2>
                 </div>
             </div>
         </div>
          <hr>
         @if ($errors->any())
             <div class="alert alert-danger">
                 <strong>Whoops!</strong> Ada kesalahan pada data yang anda masukkan.<br><br>
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
         
         <form action="{{ route('superadmin.show', $superadmin->id) }}" method="POST" enctype="multipart/form-data" > 
             @csrf
             @method('PUT')
            <h5><strong>Pelapor:</strong></h5>
              <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>NIK</strong>
                         <input type="text" name="nik_pelapor" readonly value="{{ $superadmin->nik_pelapor }}" class="form-control" placeholder="Name">
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
                         <input type="text" name="nama_pelapor" readonly value="{{ $superadmin->nama_pelapor }}" class="form-control" placeholder="Name">
                         @error('nama_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror 
                        </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                            <strong>Nomor Telepon</strong>
                            <input type="text" readonly class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" id="nomor_telepon" autofocus value="{{old('nomor_telepon', $superadmin->nomor_telepon)}}">
                            @error('nomor_telepon')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    </div>
                    
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Usia</strong>
                         <input type="text" name="usia_pelapor" readonly value="{{ $superadmin->usia_pelapor }}" class="form-control" placeholder="Name">
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
                         <input type="text" name="alamat_pelapor" readonly value="{{ $superadmin->alamat_pelapor }}" class="form-control" placeholder="Name">
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
                                <option value="{{ $superadmin->jenis_kelamin_pelapor }}">{{ $superadmin->jenis_kelamin_pelapor }}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                         </select>
                         @error('jenis_kelamin_pelapor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                     </div>
                 </div>

                 <br><hr><br>
                 <h5><strong>Korban:</strong></h5>


                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>NIK</strong>
                         <input type="text" name="nik_korban" readonly value="{{ $superadmin->nik_korban }}" class="form-control" placeholder="Name">
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
                         <input type="text" name="nama_korban" readonly value="{{ $superadmin->nama_korban }}" class="form-control" placeholder="Name">
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
                         <input type="text" name="nomor_telepon_korban" readonly value="{{ $superadmin->nomor_telepon_korban }}" class="form-control" placeholder="Name">
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
                         <input type="text" name="usia_korban" readonly value="{{ $superadmin->usia_korban }}" class="form-control" placeholder="Name">
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
                                <option value="{{ $superadmin->jenis_kelamin_korban }}">{{ $superadmin->jenis_kelamin_pelapor }}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                         </select>
                         @error('jenis_kelamin_korban')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                  @enderror
                     </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Status Perkawinan</strong>
                         <select class="form-control" readonly name="status_perkawinan">
                                <option value="{{ $superadmin->status_perkawinan }}" >{{ $superadmin->status_perkawinan }}</option>
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
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Tindakan Kekerasan</strong>
                         <select class="form-control" readonly name="tindakan_kekerasan">
                                <option value="{{ $superadmin->tindakan_kekerasan }}" >{{ $superadmin->tindakan_kekerasan }}</option>
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
                 </div>


                <br><hr><br>

                    <h5><strong>Keterangan Lainnya:</strong></h5>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Alamat Kejadian</strong>
                         <input type="text" name="alamat_kejadian" readonly value="{{ $superadmin->alamat_kejadian }}" class="form-control" placeholder="Alamat">
                     </div>
                 </div>

                 <div class="col-sm-6">
                                <strong>Tanggal Terjadi</strong>
                                <input type="text" readonly class="form-control @error('tanggal_terjadi') is-invalid @enderror" value="{{ $superadmin->tanggal_terjadi }}" name="tanggal_terjadi" id="tanggal_terjadi" autofocus value="{{old('tanggal_terjadi')}}">
                                @error('tanggal_terjadi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Deskripsi Kejadian</strong>
                         <input type="text" readonly name="deskripsi" value="{{ $superadmin->deskripsi }}" class="form-control" placeholder="Deskripsi">
                     </div>
                 </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Rumah</strong>
                        <small>
                        *Jika merasa tidak aman di tempat tinggal anda, anda dapat menggunakan Rumah Aman.
                        Namun, untuk penggunaan Rumah Aman akan dilihat dari kondisi kasus Anda.
                        </small><br>
                        <select class="form-control" readonly name="rumah">
                            <option selected  value="{{ $superadmin->rumah }}">{{ $superadmin->rumah }}</option>
                            <option value="Ya">Ya, Saya Butuh!</option>
                            <option value="Tidak">Tidak Perlu</option>
                        </select>
                             @error('rumah')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                              @enderror
                    </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Bukti:</strong>
                         <img src="/image/{{ $superadmin->image }}" width="300px">
                     </div>
                 </div>
                
                 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                   <a class="btn btn-danger" href="{{ route('pengaduan.index') }}"> Back</a>
                 </div>
             </div>
          
         </form>
    
</body>
</html>


@endsection