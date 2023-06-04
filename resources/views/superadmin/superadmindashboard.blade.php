@extends('layouts.superadmin')
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('index.html') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>
<div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>
    <div class="card-body">
        Selamat Datang BPH DPMDPPA!
    </div>
</div>

<div class="row">
    <!-- Pengaduan Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Pengaduan</h5>
                <hr>
                <div class="d-flex align-items-center justify-content-center">
                    <div class="ps-3">
                        <h6>{{ $pengaduanCount }} Pengaduan</h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Pengaduan Card -->

    <!-- Pertemuan Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Pertemuan</h5>
                <hr>
                <div class="d-flex align-items-center justify-content-center">
                    <div class="ps-3">
                        <h6>{{ $pertemuanCount }} Permintaan</h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Pertemuan Card -->
</div>


@endsection
