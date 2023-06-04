@extends('layouts.masyarakat')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <script>
  $( function() {
    $( "#tanggal_terjadi" ).datepicker({                  
        maxDate: moment().add('d', 1).toDate(),
    });
  } );
  </script>
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
</head>
<body>

     
     <div class="container">
     <br>
         <div class="row">
            
             <div class="col-lg-12 margin-tb">
                 <div class="pull-left">
                     <h2>Edit Permintaan Pertemuan</h2>
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
         
         <form action="{{ route('rumah.update', $rumah->id) }}" method="POST" enctype="multipart/form-data" > 
             @csrf
             @method('PUT')
          
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Name</strong>
                         <input type="text" name="name" value="{{ $rumah->name }}" class="form-control" placeholder="Name">
                     </div>
                 </div>
                



                 <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" id="nomor_telepon" autofocus value="{{old('nomor_telepon', $rumah->nomor_telepon)}}">
                            @error('nomor_telepon')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Keperluan</strong>
                         <input type="text" name="keperluan_temu" value="{{ $rumah->keperluan_temu }}" class="form-control" placeholder="Keperluan">
                     </div>
                 </div>


                 <div class="col-sm-6">
                                <label for="tanggal_terjadi" class="form-label">Rencana Temu</label>
                                <input type="text" class="form-control @error('rencana_temu') is-invalid @enderror" value="{{ $rumah->rencana_temu }}" name="rencana_temu" id="rencana_temu" autofocus value="{{old('rencana_temu')}}">
                                @error('rencana_temu')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                    </div>
                <br>
                 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                   <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('pengaduan.index') }}"><button class="btn btn-danger">Kembali</button></a>
                 </div>
             </div>
          
         </form>
    
</body>
</html>
</div>


@endsection