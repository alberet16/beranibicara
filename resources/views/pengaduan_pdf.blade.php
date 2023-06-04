<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pengaaduan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
		<br/>
		<table class='table table-bordered' style="font-size: 9px;">
			<thead>
				<tr>
				<th>No</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>E-mail</th>
                <th>Nomor Telepon</th>
                <th>Gambar</th>
                <th>Tanggal Terjadi</th>
                <th>Alamat</th>
                <th>Deskripsi</th>
                <th>Status Pengaduan</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($cetakpdf as $p)
				<tr>
					<td>{{ $i++ }}</td>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->nomor_telepon }}</td>
                    <td>{{ $p->image }}</td>
                    <td>{{ $p->tanggal_terjadi }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->deskripsi }}</td>
                    <td><label class="label label-success">
                    {{$p->status_id == 1 ? 'Menunggu' : ($p->status_id == 2 ? 'Diproses' :($p->status_id == 3 ? 'Selesai' : ($p->status_id == 4 ? 'Ditolak' : 'Dibatalkan')))}}
                </label>
            </td>
				</tr>
				@endforeach
			</tbody>
		</table>
 
	
 
</body>
</html>

