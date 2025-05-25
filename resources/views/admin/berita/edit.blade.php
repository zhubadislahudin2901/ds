@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4 class="text-white">Edit Berita</h4>

    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="text-white">Judul</label>
            <input type="text" name="judul" class="form-control bg-dark text-white"
                value="{{ old('judul', $berita->judul) }}" required>
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="text-white">Tanggal</label>
            <input type="date" name="tanggal" class="form-control bg-dark text-white"
                value="{{ old('tanggal', $berita->tanggal) }}" required>
            @error('tanggal')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="text-white">Gambar (biarkan kosong jika tidak diubah)</label>
            <input type="file" name="gambar" class="form-control bg-dark text-white">
            @if ($berita->gambar)
                <small class="text-white">Gambar sekarang:</small><br>
                <img src="{{ asset('storage/' . $berita->gambar) }}" width="100" class="mt-2">
            @endif
            @error('gambar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="text-white">Isi</label>
            <textarea name="isi" class="form-control bg-dark text-white" rows="5" required>{{ old('isi', $berita->isi) }}</textarea>
            @error('isi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
