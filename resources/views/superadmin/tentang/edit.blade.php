@extends('layouts.superadmin ')

@section('content')

<section class="section">
      <div class="row">
        <div class="col-lg-12">


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
         
         <form action="{{ route('supertentang.update', $supertentang->id) }}" method="POST" enctype="multipart/form-data" > 
             @csrf
             @method('PUT')
          
              <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Visi</strong>
                         <textarea rows="5" cols="33" name="visi" value="{{ $supertentang->visi }}" class="form-control" placeholder="Visi">{{ $supertentang->visi }}</textarea>
                        
                     </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Misi</strong>
                         <textarea rows="5" cols="33" name="misi" value="{{ $supertentang->misi }}" class="form-control" placeholder="Misi">{{ $supertentang->misi }}</textarea>
                     </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Penjelasan</strong>
                         <textarea rows="5" cols="33" name="penjelasan" value="{{ $supertentang->penjelasan }}" class="form-control" placeholder="Penjelasan">{{ $supertentang->penjelasan }}</textarea>
                     </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Struktur</strong>
                         <input type="file" name="struktur" class="form-control" placeholder="struktur">
                         <img src="/struktur/{{ $supertentang->struktur }}" width="300px">
                     </div>
                 </div>
                

               

                 
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                   <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
            </div>
          
         </form>

        </div>
      </div>
    </section>
@endsection