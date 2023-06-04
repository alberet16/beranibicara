@extends('layouts.superadmin')

@section('content')
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tentang Kami</li>
          <li class="breadcrumb-item active">Kelola Tentang Kami</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                        @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <h2>{{ $message }}</h2>
                    </div>
                @endif
              <h5 class="card-title">Kelola Tentang DPMDPPA</h5>
              <p>Disini anda mengelola informasi tentang DPMDPPA</p>

              <!-- Table with stripped rows -->
              @foreach ($supertentang as $data)
            
              <table class="table table-borderless">
                <tr>
                  <td>Visi</td>
                  <td>:</td>
                  <td> <textarea  class="form-control" cols="30" rows="5" readonly>{{ $data->visi }}</textarea></td>
                </tr>

                <tr>
                  <td>Misi</td>
                  <td>:</td>
                  <td><textarea  class="form-control" cols="30" rows="5" readonly>{{ $data->misi }}</textarea></td>
                </tr>

                <tr>
                  <td>Penjelasan</td>
                  <td>:</td>
                  <td><textarea  class="form-control" cols="30" rows="5" readonly>{{ $data->penjelasan }}</textarea></td>
                </tr>
                <tr>
                  <td>Gambar</td>
                  <td>:</td>
                  <td><img src="/struktur/{{ $data->struktur }}" width="150px"></td>
                </tr>
                <tr>
                <a class="btn btn-warning" href="{{ route('supertentang.edit',$data->id) }}"> <i class="bx bxs-edit-alt"></i></a>
                </tr>
              </table>
                 
              @endforeach
              
              {{ $supertentang->links('pagination::bootstrap-4', ['class' => 'my-custom-class'], ['class' => 'my-custom-link-class']) }}
              
              </div>
              
            
          </div>
          
        </div>
        
      </div>
      
    </section>
@endsection