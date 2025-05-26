@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card bg-dark text-white">
        <div class="card-header">
            <h5>Edit Fasilitas</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('fasilitas.update', $fasilita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ $fasilita->nama }}"
                        class="form-control bg-dark text-white @error('nama') is-invalid @enderror">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" rows="4"
                        class="form-control bg-dark text-white @error('deskripsi') is-invalid @enderror">{{ $fasilita->deskripsi }}</textarea>
                    @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label>Gambar</label><br>
                    @if ($fasilita->gambar)
                        <img src="{{ asset('storage/' . $fasilita->gambar) }}" width="100" class="mb-2">
                    @endif
                    <input type="file" name="gambar"
                        class="form-control bg-dark text-white @error('gambar') is-invalid @enderror">
                    @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
