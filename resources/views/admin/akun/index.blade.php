@extends('layouts.app')

@section('content')
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Akun Terdaftar</li>
          <li class="breadcrumb-item active">Kelola Akun Terdaftar</li>
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
              <h5 class="card-title">Booking Pertemuan</h5>
              <p>Kelola Permintaan Pertemuan</p>

              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table datatable">
                <thead>
                  <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($akun as $data)
              <tr>
                  <td>{{ $akun->firstItem() + $loop->index }}</td>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->email }}</td>
                  <td><label class="label label-success">
                        {{$data->type == 1 ? 'Masyarakat' : ($data->type == 2 ? 'Admin' :($data->type == 3 ? 'BPH'  : 'Dibatalkan'))}}
                    </label>
                </td>
                  <td>
                      <form action="{{ route('akun.destroy',$data->id) }}" method="POST">
                          <a class="btn btn-warning" href="{{ route('akun.edit',$data->id) }}"> <i class="bx bxs-edit-alt"></i></a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="ri-delete-bin-3-line"></i></button>
                      </form>
                  </td>
              </tr>
              @endforeach
              </table>
              {{ $akun->links('pagination::bootstrap-4', ['class' => 'my-custom-class'], ['class' => 'my-custom-link-class']) }}
              </div>
              
            </div>
            
          </div>
          
        </div>
        
      </div>
      
    </section>
@endsection