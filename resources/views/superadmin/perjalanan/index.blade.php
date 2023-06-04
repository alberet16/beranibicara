@extends('layouts.superadmin')

@section('content')


<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Laporan Masalah</li>
          <li class="breadcrumb-item active">Pengaduan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Laporan Perjalanan</h5>
              <p>Kelola Laporan Perjalanan</p>
              <a href="{{ route('laporan.create') }}" class="btn btn-sm btn-success" type="submit" >Tambah</a>
              <a href="{{ route('cetakpdf.create') }}" class="btn btn-primary">Cetak PDF</a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                <th>No</th>
                <th>Nama </th>
                <th>Tanggal</th>
                <th>Dasar</th>
                <th>Maksud</th>
                <th>Pelapor</th>
                <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($perjalanan as $data)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->tanggal }}</td>
                <td>{{ $data->dasar }}</td>
                <td>{{ $data->maksud }}</td>
                <td>{{ $data->pelapor }}</td>
                <td>
                <form action="{{ route('laporan.destroy',$data->id) }}" method="POST">

                <a class="btn btn-warning" href="{{ route('laporan.edit',$data->id) }}"> <i class="bx bxs-edit-alt"></i></a>
                <a class="btn btn-info" href="{{ route('laporan.show',$data->id) }}"> <i class="bx bxs-show"></i></a>


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
              {{ $perjalanan->links('pagination::bootstrap-4', ['class' => 'my-custom-class'], ['class' => 'my-custom-link-class']) }}
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection