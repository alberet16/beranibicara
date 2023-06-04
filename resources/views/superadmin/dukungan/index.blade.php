@extends('layouts.superadmin')

@section('content')


<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Dukungan</li>
          <li class="breadcrumb-item active">Kelola Dukungan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Dukungan</h5>
              <p>Kelola Kategori Dukungan</p>
              <a href="{{ route('kategoriDukungan.create') }}" class="btn btn-sm btn-success" type="submit" >Tambah</a>
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
                @foreach ($kategoriDukungan as $data)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->kategori}}</td>
                <td>
                <form action="{{ route('kategoriDukungan.destroy',$data->id) }}" method="POST">

                <a class="btn btn-warning" href="{{ route('kategoriDukungan.edit',$data->id) }}"> <i class="bx bxs-edit-alt"></i></a>


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
              {{ $kategoriDukungan->links('pagination::bootstrap-4', ['class' => 'my-custom-class'], ['class' => 'my-custom-link-class']) }}

              <hr>
            
            <!-- Acara -->

              <p>Kelola Acara</p>
              <a href="{{ route('superdukungan.create') }}" class="btn btn-sm btn-success" type="submit" >Tambah</a>
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
                @foreach ($superdukungan as $data)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->kategori}}</td>
                <td>
                <form action="{{ route('superdukungan.destroy',$data->id) }}" method="POST">

                <a class="btn btn-warning" href="{{ route('superdukungan.edit',$data->id) }}"> <i class="bx bxs-edit-alt"></i></a>
                <a class="btn btn-info" href="{{ route('superdukungan.show',$data->id) }}"> <i class="bx bxs-show"></i></a>


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