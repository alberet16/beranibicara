@extends('layouts.superadmin')

@section('content')


<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">supernomor Masalah</li>
          <li class="breadcrumb-item active">Pengaduan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Acara</h5>
              <p>Kelola Kategori Acara</p>
              <a href="{{ route('kategoriNomor.create') }}" class="btn btn-sm btn-success" type="submit" >Tambah</a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($kategoriNomor as $data)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->kategori}}</td>
                <td>
                <form action="{{ route('kategoriNomor.destroy',$data->id) }}" method="POST">

                <a class="btn btn-warning" href="{{ route('kategoriNomor.edit',$data->id) }}"> <i class="bx bxs-edit-alt"></i></a>


                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="bx bxs-trash"></i></button>
                  </form>


                </td>
              </tr>
        @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              {{ $kategoriNomor->links('pagination::bootstrap-4', ['class' => 'my-custom-class'], ['class' => 'my-custom-link-class']) }}

              <hr>
            
            <!-- Acara -->

              <p>Kelola Acara</p>
              <a href="{{ route('supernomor.create') }}" class="btn btn-sm btn-success" type="submit" >Tambah</a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                <th>No</th>
                <th>Judul</th>

                <th>Kategori</th>
                <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($supernomor as $data)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->kategori}}</td>
                <td>
                <form action="{{ route('supernomor.destroy',$data->id) }}" method="POST">

                <a class="btn btn-warning" href="{{ route('supernomor.edit',$data->id) }}"> <i class="bx bxs-edit-alt"></i></a>
                <a class="btn btn-info" href="{{ route('supernomor.show',$data->id) }}"> <i class="bx bxs-show"></i></a>


                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="bx bxs-trash"></i></button>
                  </form>


                </td>
              </tr>
        @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection