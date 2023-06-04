@extends('layouts.user')

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
    <h1 class="text-left">Acara</h1>
    <p style="color:black">
    DPMDPPA memiliki beberapa event rutin maupun tidak rutin yang dimana bertujuan untuk mengedukasi masyarakat setempat mengenai kekerasan terhadap peremuan maupun anak. Baca dan pelajari lebih lanjut event apa yang akan di selenggarakan dalam wakti dekat !
    </p>

    <div class="row">
    <div class="col-lg-6 col-md-6 text-center">
      
    </div>

    <div class="col-lg-6 col-md-6 text-left">
        <form action="/acara/search" method="GET">
            <input type="text" class="search-bar" name="kategori" placeholder="Search" />
            <button class="small-button">
                <i class="bx bx-search-alt"></i>
            </button>
        </form>
    </div>
    </div>

        <div class="row"> 
        @if($indexkategoriacara->isEmpty())
            <h2 class="text-center">Belum Ada Data</h2>
        @else
             <!-- @foreach ($indexkategoriacara as $data)


             <div class="col-lg-4 col-md-4  container_foto ">
            <a href="{{ url('/acara/all/' . $data->id) }}">
                <article class="text-left">
                    <h2>{{$data->kategori}}</h2>
                </article>
                <img src="/kategori/{{ $data->image }}" alt="">
                </a>
            </div>
              

            @endforeach    -->
            <div class="row">
  @foreach ($indexkategoriacara as $data)
  <div class="col-12 col-md-4 mb-4">
  <a href="{{ url('/acara/all/' . $data->id) }}">
    <div class="card text-white card-has-bg click-col" style="background-image:url('/kategori/{{ $data->image }}');">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <br><br><br><br><br><br><br><br><br>
          <h6 class="my-0 text-white d-block text-center">{{$data->kategori}}</h6>
        </div>
</a>
        <div class="card-footer">
          <div class="media">
            <div class="media-body">
            </div>
          </div>
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
           
            <a href="{{ url('/user/indexkategorinomor') }}" style="text-decoration: none; color: white;">
                <div
                    class="button-urgent animasi rounded-circle d-flex justify-content-center align-items-center text-white fs-6">
                    <i class="bi bi-telephone-fill" style="font-size: 20px; color: white;"></i>
                </div>
            </a>
            
        </div>
    </div>
 </div>
 </div>
 <style>
    

.card{
  border: none;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
 overflow:hidden;
 border-radius:20px;
 min-height:450px;
   box-shadow: 0 0 12px 0 rgba(0,0,0,0.2);

 @media (max-width: 768px) {
  min-height:350px;
}

@media (max-width: 420px) {
  min-height:300px;
}

 &.card-has-bg{
 transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  background-size:120%;
  background-repeat:no-repeat;
  background-position: center center;
  &:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: inherit;
    -webkit-filter: grayscale(1);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
  filter: grayscale(100%);}

  &:hover {
    transform: scale(0.98);
     box-shadow: 0 0 5px -2px rgba(0,0,0,0.3);
    background-size:130%;
     transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);

    .card-img-overlay {
      transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
      background: rgb(35,79,109);
     background: linear-gradient(0deg, rgba(4,69,114,0.5) 0%, rgba(4,69,114,1) 100%);
     }
  }
}
 .card-footer{
  background: none;
   border-top: none;
    .media{
     img{
       border:solid 3px rgba(255,255,255,0.3);
     }
   }
 }
 /* .card-meta{color:#26bd44}
 .card-body{ 
   transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
} */
 /* &:hover {
   .card-body{
     margin-top:30px;
     transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
   }
 cursor: pointer;
 transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
} */
 .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
 background: rgb(35,79,109);
background: linear-gradient(0deg, rgba(35,79,109,0.3785889355742297) 0%, rgba(69,95,113,1) 100%);
}
}
@media (max-width: 767px){
  
}
</style>
</body>
</html>


@endsection