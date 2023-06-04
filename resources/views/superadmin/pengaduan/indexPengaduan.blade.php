@extends('layouts.superadmin')

@section('content')
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

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
              <h5 class="card-title">Laporan Pengaduan</h5>
              <p>Kelola Pengaduan Masyarakat</p>
              <hr>
              <h4>Cetak Seluruh Laporan</h4>
              <a href="{{ route('cetakpdf.create') }}" class="btn btn-primary">Cetak Semua</a>
              <hr>
              <h4>Pilih Rentang Waktu Cetak Laporan</h4>
              <form action="/printselectedpengaduan/data/" method="GET">
                  <label for="start_date">Tanggal Mulai:</label>
                  <input type="date" id="start_date" name="start_date">

                  <label for="end_date">Tanggal Selesai:</label>
                  <input type="date" id="end_date" name="end_date">

                  <button type="submit" class="btn btn-primary">Cetak PDF</button>
              </form>
              <hr>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>Nomor Telepon</th>
                <th>Nama Korban</th>
                <th>Tanggal Terjadi</th>
                <th>Rumah Aman</th>
                <th>Status Pengaduan</th>
                <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($superadmin as $data)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_pelapor }}</td>
                <td>{{ $data->nomor_telepon }}</td>
                <td>{{ $data->nama_korban }}</td>
                <td>{{ $data->tanggal_terjadi }}</td>
                <td>{{ $data->rumah }}</td>
                <td><label class="label label-success">
                        {{$data->status_id == 1 ? 'Menunggu' : ($data->status_id == 2 ? 'Diproses' :($data->status_id == 3 ? 'Selesai' : ($data->status_id == 4 ? 'Ditolak' : 'Dibatalkan')))}}
                    </label>
                </td>
                <td>
                <form action="{{ route('superadmin.destroy',$data->id) }}" method="POST">

                <a class="btn btn-warning" href="{{ route('superadmin.edit',$data->id) }}"> <i class="bx bxs-edit-alt"></i></a>
                <a class="btn btn-info" href="{{ route('superadmin.show',$data->id) }}"> <i class="bx bx-show"></i></a>
                <a class="btn btn-secondary" href="{{ url('/printpengaduan/data/' . $data->id) }}"> <i class="bx bx-printer"></i></a>

                      @csrf
                      @method('DELETE')
                    
                      <button type="submit" class="btn btn-danger"><i class="ri-delete-bin-3-line"></i></button>
                  </form>


                </td>
              </tr>
        @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              {{ $superadmin->links('pagination::bootstrap-4', ['class' => 'my-custom-class'], ['class' => 'my-custom-link-class']) }}
            </div>
          </div>

        </div>
      </div>
    </section>
@endsection

