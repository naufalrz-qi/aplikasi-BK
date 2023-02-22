@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Presensi') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('presensi.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="siswa_id" class="col-md-4 col-form-label text-md-right">{{ __('Siswa') }}</label>

                                <div class="col-md-6">
                                    <select id="siswa_id" name="siswa_id" class="form-control @error('siswa_id') is-invalid @enderror">
                                        <option value="">-- Pilih Siswa --</option>
                                        @foreach($siswa as $siswa)
                                            <option value="{{ $siswa->id }}" {{ old('siswa_id') == $siswa->id ? 'selected' : '' }}>{{ $siswa->nama }}</option>
                                        @endforeach
                                    </select>

                                    @error('siswa_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="keterangan" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                                <div class="col-md-6">
                                    <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autocomplete="keterangan" autofocus>

                                    @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hadir" class="col-md-4 col-form-label text-md-right">{{ __('Hadir') }}</label>

                                <div class="col-md-6">
                                    <select id="hadir" name="hadir" class="form-control @error('hadir') is-invalid @enderror">
                                        <option value="HADIR" {{ old('hadir') == 'HADIR' ? 'selected' : '' }}>HADIR</option>
                                        <option value="TIDAK" {{ old('hadir') == 'TIDAK' ? 'selected' : '' }}>TIDAK</option>
                                    </select>

                                    @error('hadir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Simpan') }}
                                    </button>
                                    <a href="{{ route('presensi.index') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
