@extends('layouts.superadmin')

@section('content')


<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Berita</li>
          <li class="breadcrumb-item active">Kelola Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

              <p>Kelola Berita</p>
              <a href="{{ route('superberitum.create') }}" class="btn btn-sm btn-success" type="submit" >Tambah</a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($superberitum as $data)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->judul }}</td>
                <td>
                <form action="{{ route('superberitum.destroy',$data->id) }}" method="POST">

                <a class="btn btn-warning" href="{{ route('superberitum.edit',$data->id) }}"> <i class="bx bxs-edit-alt"></i></a>
                <a class="btn btn-info" href="{{ route('superberitum.show',$data->id) }}"> <i class="bx bxs-show"></i></a>


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