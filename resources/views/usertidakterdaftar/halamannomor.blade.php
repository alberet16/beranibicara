@extends('layouts.user')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,800">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href=" {{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('home/style/navbar-footer.css')}}" />
<link rel="stylesheet" href="{{asset('home/style/content.css')}}" />
<link href=" {{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<style>
  .small-button {
    padding: 5px;
    width: 30px;
    height: 32px;
    font-size: 15px;
    align-items: center;
    justify-content: center;
  }

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


    .call-button {
    background-color: red;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      
    }

</style>


</head>
<body>
    <div class="container-fluid contenedor ">
        <h1 class="text-center">Nomor</h1>
        <div class="row"> 
        <br><br>

        <div class="row"> 
                <br><br>
            <div class="row">
            <div class="col-lg-6 col-md-6 text-center">
            
            </div>

            <div class="col-lg-6 col-md-6 text-center">
                <form action="/nomor/searchnomor" method="GET">
                    <input type="text" class="search-bar" name="judul" placeholder="Search" />
                    <button class="small-button">
                <i class="bx bx-search-alt"></i>
            </button>
                </form>
            </div>
        </div>

        @if($indexkategorinomor->isEmpty())
            <h2 class="text-center">Belum Ada Data</h2>
        @else
             @foreach ($indexkategorinomor as $data)


           <div class= "col-md-4">
           <div style="width: 400px; border: 1px solid rgb(201, 201, 201); box-shadow: 2px 2px 9px rgb(167, 167, 167); border-radius: 10px;">
                <div>
                <div style="padding: 20px;">
                    <p class="fw-bold">{{ $data->judul }}</p>
                    <p>{{$data->nomor}}</p>
                    <p>{{$data->alamat}}</p>
                    <br><br>

                    <a href="tel:{{$data->nomor}}" class="call-button">Hubungi Sekarang</a>
                </div>
               
                </div>
        </div>
           </div>
              

            @endforeach   
        @endif

       
      
     </div>
     </div>
     <div class="fixed-bottom d-flex justify-content-end text-center" style="bottom: 2%; right: 0px;">
        <div class="button-urgent animasi rounded-circle d-flex justify-content-center align-items-center text-white fs-6">
           
            <a href="{{ url('/user/indexkategorinomor') }}" style="text-decoration: none; color: white;">
                <div
                    class="button-urgent animasi rounded-circle d-flex justify-content-center align-items-center text-white fs-6">
                    <i class="bi bi-telephone-fill" style="font-size: 20px; color: white;"></i>
                </div>
            </a>
            
        </div>
    </div>
 </div>
</body>
</html>


@endsection