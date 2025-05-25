@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4 class="text-white">Edit Data Guru</h4>

    <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="text-white">Nama</label>
            <input type="text" name="nama" class="form-control bg-dark text-white"
                value="{{ old('nama', $guru->nama) }}" required>
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="text-white">NIP</label>
            <input type="text" name="nip" class="form-control bg-dark text-white"
                value="{{ old('nip', $guru->nip) }}">
            @error('nip')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="text-white">Mata Pelajaran</label>
            <input type="text" name="mapel" class="form-control bg-dark text-white"
                value="{{ old('mapel', $guru->mapel) }}" required>
            @error('mapel')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="text-white">Foto (biarkan kosong jika tidak diubah)</label>
            <input type="file" name="foto" class="form-control bg-dark text-white">
            @if ($guru->foto)
                <small class="text-white">Foto sekarang:</small><br>
                <img src="{{ asset('storage/' . $guru->foto) }}" width="100" class="mt-2">
            @endif
            @error('foto')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
