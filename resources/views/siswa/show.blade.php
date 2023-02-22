@extends('layouts.app')

@section('content')
<body>
    <br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Detail Siswa</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <h5>Nama:</h5>
                </div>
                <div class="col-md-8">
                    <p>{{ $siswa->nama }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Alamat:</h5>
                </div>
                <div class="col-md-8">
                    <p>{{ $siswa->alamat }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Tanggal Lahir:</h5>
                </div>
                <div class="col-md-8">
                    <p>{{ $siswa->tanggal_lahir }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Jenis Kelamin:</h5>
                </div>
                <div class="col-md-8">
                    <p>{{ $siswa->jenis_kelamin }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Telepon:</h5>
                </div>
                <div class="col-md-8">
                    <p>{{ $siswa->telepon }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Email:</h5>
                </div>
                <div class="col-md-8">
                    <p>{{ $siswa->email }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
</body>
@endsection
