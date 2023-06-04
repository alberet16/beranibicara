@extends('layouts.app')
<script>
  $( function() {
    $( "#tanggal_pengajuan" ).datepicker({                  
        maxDate: moment().add('d', 1).toDate(),
    });
  } );
  </script>
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
         
         <form action="{{ route('akun.update', $akun->id) }}" method="POST" enctype="multipart/form-data" > 
             @csrf
             @method('PUT')
          
              <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Name</strong>
                         <input readonly type="text" name="name" value="{{ $akun->name }}" class="form-control" placeholder="Name">
                     </div>
                 </div>
                

                
                <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Email</strong>
                         <input readonly type="text" name="email" value="{{ $akun->email }}" class="form-control" placeholder="email">
                     </div>
                     @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                 </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <label for="status">Status</label>
                <select class="form-control" id="type" name="type">
                    <option  value="{{ $akun->type }}">Edit Role</option>
                    @foreach ($type as $st)
                    <option value="{{ $st->type }}" autofocus value="{{old('type')}}">
                        {{ $st->keterangan}}
                    </option>
                    @endforeach
                </select>

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