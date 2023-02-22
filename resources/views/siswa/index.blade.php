@extends('layouts.app')
@section('content')
<body>

    <head>
        <title>Data Siswa</title>
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="mt-4 mb-4 text-center">Data Siswa</h1>
            <div class="row mb-4">
                <div class="col-md-12">
                    <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="siswa-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Agama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->alamat }}</td>
                                <td>{{ $s->jenis_kelamin }}</td>
                                <td>{{ $s->tanggal_lahir }}</td>
                                <td>{{ $s->email }}</td>
                                <td>{{ $s->telepon }}</td>
                                <td>{{ $s->agama }}</td>
                                <td>
                                    <a href="{{ route('siswa.show', $s->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('siswa.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="{{ asset('front/js/jquery.min.js') }}"></script>
        <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#siswa-table').DataTable();
            } );
        </script>
    </body>

@endsection
