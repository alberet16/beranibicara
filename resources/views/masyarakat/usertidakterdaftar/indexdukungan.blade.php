@extends('layouts.masyarakat')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>



    <link rel="stylesheet" href="{{asset('home/style/navbar-footer.css')}}" />
    <link rel="stylesheet" href="{{asset('home/style/content.css')}}" />
    <link href=" {{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    
    

<link href=" {{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">


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
</style>
</head>
<body>
    <div class="container">
    <div class="container-fluid contenedor ">
        <h1 class="text-left" >Dukungan</h1>
        <p>
        Setiap orang memiliki permasalahan yang berbeda - beda, sehingga setiap permasalahan dapat di selesaikan sesuai dengan tipe permasalahannya. Jelajahi dan baca beberapa artikel sesuai dengan masalah kamu!  
        </p>
        <div class="row"> 
        <br><br>
    <div class="row">
    <div class="col-lg-6 col-md-6 text-center">
      
    </div>

    <div class="col-lg-6 col-md-6 text-center">
        <form action="/masyarakat/dukungan/searchdukungan" method="GET">
            <input type="text" class="search-bar" name="judul" placeholder="Search" />
            <button class="small-button">
                <i class="bx bx-search-alt"></i>
            </button>
        </form>
    </div>
</div>

        @if($indexkategoridukungan->isEmpty())
            <h2 class="text-center">Belum Ada Data</h2>
        @else
        <div class="row">
             @foreach ($indexkategoridukungan as $data)

           <div class= "col-md-4" style="">
           <div class="card-deck pb-3">
                <div class="card">
                    <img src="/image/{{ $data->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$data->judul}}</h5>
                   <small>{{ $data->created_at }}</small>
                    <p><a href="{{ url('/masyarakat/dukungan/data/' . $data->id) }}">Baca Selengkapnya</a></p>
                    </div>
                </div>
           </div>
           </div> 
           
              

            @endforeach  
            </div> 
        @endif

       
      
     </div>
     </div>

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