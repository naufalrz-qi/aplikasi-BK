@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Presensi</h1>

    <div class="row mb-3">
        <div class="col-md-4">
            <form action="{{ route('presensi.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari...">
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                </div>
            </form>
        </div>
        <div class="col-md-8 text-end">
            <a href="{{ route('presensi.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Presensi
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Siswa</th>
                    <th>Hadir</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($presensi as $presensi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $presensi->tanggal }}</td>
                    <td>{{ $presensi->siswa->nama }}</td>
                    <td>{{ $presensi->hadir }}</td>
                    <td>{{ $presensi->waktu }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>
@endsection
