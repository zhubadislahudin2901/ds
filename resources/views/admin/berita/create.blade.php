@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card bg-dark text-white">
            <div class="card-header">
                <h5>Tambah Berita</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="link_berita" class="form-label">Link Berita (opsional)</label>
                        <input type="text" class="form-control" name="link_berita" id="link_berita"
                            placeholder="https://example.com/berita-anda" value="{{ old('link_berita') }}">
                            @error('link_berita') 
    <div class="text-danger">{{ $message }}</div> 
@enderror

                    </div>

                    <div class="mb-3">
                        <label>Judul</label>
                        <input type="text" name="judul"
                            class="form-control bg-dark text-white @error('judul') is-invalid @enderror" required
                            value="{{ old('judul') }}">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal"
                            class="form-control bg-dark text-white @error('tanggal') is-invalid @enderror" required
                            value="{{ old('tanggal') }}">
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Gambar</label>
                        <input type="file" name="gambar"
                            class="form-control bg-dark text-white @error('gambar') is-invalid @enderror">
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Isi Berita</label>
                        <textarea name="isi" rows="5"
                            class="form-control bg-dark text-white @error('isi') is-invalid @enderror" required>{{ old('isi') }}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
