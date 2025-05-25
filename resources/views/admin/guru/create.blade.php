@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card bg-dark text-white">
            <div class="card-header">
                <h5>Tambah Guru</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama"
                            class="form-control bg-dark text-white @error('nama') is-invalid @enderror" required>
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label>NIP (Opsional)</label>
                        <input type="text" name="nip"
                            class="form-control bg-dark text-white @error('nip') is-invalid @enderror">
                        @error('nip') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Mata Pelajaran</label>
                        <input type="text" name="mapel"
                            class="form-control bg-dark text-white @error('mapel') is-invalid @enderror" required>
                        @error('mapel') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Foto</label>
                        <input type="file" name="foto"
                            class="form-control bg-dark text-white @error('foto') is-invalid @enderror">
                        @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
