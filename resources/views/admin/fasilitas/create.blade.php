@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card bg-dark text-white">
        <div class="card-header">
            <h5>Tambah Fasilitas</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Nama Fasilitas</label>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="form-control bg-dark text-white @error('nama') is-invalid @enderror" required>
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" rows="4"
                        class="form-control bg-dark text-white @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label>Gambar</label>
                    <input type="file" name="gambar"
                        class="form-control bg-dark text-white @error('gambar') is-invalid @enderror">
                    @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
