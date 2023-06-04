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
    <link href=" {{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    
    

<link href=" {{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

    <style>
          .box-button-urgent {
    height: 100px;
    width: 50px;
    right: 30px;
    bottom: 50px;
    position: fixed;
    z-index: 999;
}

.button-urgent {
    width: 50px;
    height: 50px;
}

.button-urgent:nth-child(1) {
    background-color: #a60707;
}

.button-urgent:last-child {
    background-color: ;
}
    </style>


</head>
<body>
<div class="container">
@if ($indexpendidikan)
        <div class="container">

        <!--Content-->
        <div class="container content">
        <h1>{{ $indexpendidikan->judul }}</h1>
        <p class="fw-medium">Dibuat pada {{ $indexpendidikan->created_at }}</p>

        <div class="text-center py-5">
        <img src="/image/{{ $indexpendidikan->image }}" width="500px" alt="" />
        </div>
        <p>
        {{ $indexpendidikan->keterangan }}
        </p>
        </div>

        <!--Akhir Content-->
        </div>
@else
    <p>Data not found.</p>
@endif

<div class="fixed-bottom d-flex justify-content-end text-center" style="bottom: 2%; right: 0px;">
        <div class="button-urgent animasi rounded-circle d-flex justify-content-center align-items-center text-white fs-6">
           
            <a href="{{ url('/masyarakat/indexkategorinomor') }}" style="text-decoration: none; color: white;">
                <div
                    class="button-urgent animasi rounded-circle d-flex justify-content-center align-items-center text-white fs-6">
                    <i class="bi bi-telephone-fill" style="font-size: 20px; color: white;"></i>
                </div>
            </a>
            
        </div>
    </div>
 </div>
 </div>
</body>
</html>


@endsection