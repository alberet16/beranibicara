@extends('layouts.app')

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
    $( "#tanggal" ).datepicker({                  
        maxDate: moment().add('d').toDate(),
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
                     <h2>Tambah Laporan Perjalan</h2>
                 </div>
                 <div class="pull-right">
                     <a class="btn btn-primary" href="{{ route('kadislaporan.index') }}"> Back</a>
                 </div>
             </div>
         </div>
          
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
         
         <form action="{{ route('kadislaporan.store')}}" method="POST" enctype="multipart/form-data" > 
             @csrf
          
              <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Nama</strong>
                         <input type="text" name="nama"  class="form-control" placeholder="Nama">
                     </div>
                 </div>

                 <div class="col-sm-6">
                                <label for="tanggal" class="form-label">Tanggal </label>
                                <input type="text" class="form-control @error('tanggal') is-invalid @enderror"  name="tanggal" id="tanggal" autofocus >
                                @error('tanggal')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Dasar</strong>
                         <input type="text" name="dasar"  class="form-control" placeholder="dasar">
                     </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Maksud</strong>
                         <input type="text" name="maksud"  class="form-control" placeholder="maksud">
                     </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Isi</strong>
                         <textarea rows="5" cols="33" name="isi"  class="form-control" placeholder="Isi"></textarea>
                     </div>
                 </div>
              
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Pelapor</strong>
                         <input type="text" name="pelapor"  class="form-control" placeholder="pelapor">
                     </div>
                 </div>
                
            </div>

                 
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                   <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
            </div>
          
         </form>
    
</body>
</html>

@endsection