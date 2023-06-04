@extends('layouts.masyarakat')

@section('content')

<style>
  table {
    margin: auto;
    font-family: "Arial";
    font-size: 12px;
 
}
.table {
    border-collapse: collapse;
    font-size: 13px;
}
.table th,
.table td {
    border-bottom: 1px solid #cccccc;
    border-left: 1px solid #cccccc;
    padding: 9px 21px;
}
.table th,
.table td:last-child {
    border-right: 1px solid #cccccc;
}
.table td:first-child {
    border-top: 1px solid #cccccc;
}
caption {
    caption-side: top;
    margin-bottom: 10px;
    font-size: 16px;
}
 
/* Table Header */
.table thead th {
    background-color: #2ECD71;
    color: #FFFFFF;
}
 
/* Table Body */
.table tbody td {
    color: #353535;
}
.table tbody tr:nth-child(odd) td {
    background-color: #f5fff9;
}
.table tbody tr:hover th,
.table tbody tr:hover td {
    background-color: #f0f0f0;
    transition: all .2s;
}
 
/*Tabel Responsive 1*/
.table-container {
    overflow: auto;
}
</style>
<!-- SweetAlert -->
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<br>
<div class="container">
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Riwayat Permintaan Pertemuan</h4>
          </div>
            <a href="{{ route('pengaduan.index') }}" class="btn btn-sm btn-success" type="submit" >Tambah</a>
            <hr>

            <div class="table-container">
            <table class="table">

            @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <h2>{{ $message }}</h2>
                    </div>
                @endif
     
        
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Nomor Telepon</th>
                <th>Rencana Temu</th>
                <th>Keperluan</th>
                <th>Status Permintaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
   
      <tbody>
    @foreach ($rumah as $data)
        <tr>
          <td>{{ $loop->iteration }}</td>
        
            <td>{{ $data->name }}</td>
            <td>{{ $data->nomor_telepon }}</td>
            <td>{{ $data->rencana_temu }}</td>
            <td>{{ $data->keperluan_temu }}</td>
            <td><label class="label label-success">
                    {{$data->status_id == 1 ? 'Menunggu' : ($data->status_id == 2 ? 'Diproses' :($data->status_id == 3 ? 'Selesai' : ($data->status_id == 4 ? 'Ditolak' : 'Dibatalkan')))}}
                </label>
            </td>
            <td>
            <a class="btn btn-primary" href="{{ route('rumah.edit',$data->id) }}">Edit</a>
            <form action="/rumah/cancel/{{$data->id}}" class="form-inline" onsubmit="return confirm('Kamu Yakin?');" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input type="hidden" name="status_id" value="{{ $data->status_id }}">
                            @if ($data->status_id == 1)
                            <button class=" btn btn-danger">Batalkan</button>
                            @endif
            </form>
           
            </td>
        </tr>
        </tbody>
        @endforeach
       
    </table>
  </div>
    {{ $rumah->links('pagination::bootstrap-4', ['class' => 'my-custom-class'], ['class' => 'my-custom-link-class']) }}

          </div>
          
        </div>
        </div>
@endsection