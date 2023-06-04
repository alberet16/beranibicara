@extends('layouts.superadmin')

@section('content')
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Rencana Temu</li>
          <li class="breadcrumb-item active">Request Rencana Temu</li>
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
                <th>Nomor Telepon</th>
                <th>Rencana Temu</th>
                <th>Keperluan Temu</th>
                <th>Status Pengaduan</th>
                <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($superpertemuan as $data)
              <tr>
                  <td>{{ $superpertemuan->firstItem() + $loop->index }}</td>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->nomor_telepon }}</td>
                  <td>{{ $data->rencana_temu }}</td>
                  <td>{{ $data->keperluan_temu }}</td>
                  <td><label class="label label-success">
                        {{$data->status_id == 1 ? 'Menunggu' : ($data->status_id == 2 ? 'Diproses' :($data->status_id == 3 ? 'Selesai' : ($data->status_id == 4 ? 'Ditolak' : 'Dibatalkan')))}}
                    </label>
                </td>
                  <td>
                      <form action="{{ route('superpertemuan.destroy',$data->id) }}" method="POST">
                          <a class="btn btn-warning" href="{{ route('superpertemuan.edit',$data->id) }}"> <i class="bx bxs-edit-alt"></i></a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="ri-delete-bin-3-line"></i></button>
                      </form>
                  </td>
              </tr>
              @endforeach
              </table>
              {{ $superpertemuan->links('pagination::bootstrap-4', ['class' => 'my-custom-class'], ['class' => 'my-custom-link-class']) }}
              </div>
              
            </div>
            
          </div>
          
        </div>
        
      </div>
      
    </section>
@endsection