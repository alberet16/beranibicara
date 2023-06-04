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
         
         <form action="{{ route('superpertemuan.update', $superpertemuan->id) }}" method="POST" enctype="multipart/form-data" > 
             @csrf
             @method('PUT')
          
              <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Name</strong>
                         <input type="text" name="name" value="{{ $superpertemuan->name }}" class="form-control" placeholder="Name">
                     </div>
                 </div>
                
                 <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" id="nomor_telepon" autofocus value="{{old('nomor_telepon', $superpertemuan->nomor_telepon)}}">
                            @error('nomor_telepon')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div>


                <div class="col-sm-6">
                                <label for="rencana_temu" class="form-label">Rencana Temu</label>
                                <input type="text" class="form-control @error('rencana_temu') is-invalid @enderror" value="{{ $superpertemuan->rencana_temu }}" name="rencana_temu" id="rencana_temu" autofocus value="{{old('rencana_temu')}}">
                                @error('rencana_temu')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Keperluan Temu</strong>
                         <input type="text" name="keperluan_temu" value="{{ $superpertemuan->keperluan_temu }}" class="form-control" placeholder="keperluan_temu">
                     </div>
                     @error('keperluan_temu')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                 </div>
                
                 <div class="col-10">
                <label for="status">Status</label>
                <select class="form-control" id="status_id" name="status_id">
                    <option value="{{ $superpertemuan->status_id }}" class="form-control" placeholder="keperluan_temu">Edit Status Request </option>
                    @foreach ($status as $st)
                    <option value="{{ $st->status_id }}" {{ old('status_id') == $st->status_id ? 'selected' : null}}>
                        {{ $st->status_pengaduan}}
                    </option>
                    @endforeach
                    @error('status_id')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                     @enderror
                </select>

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