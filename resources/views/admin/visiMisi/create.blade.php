@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card bg-dark text-white">
            <div class="card-header">
                <h5>Tambah Visi & Misi</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('visi-misi.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label>Visi</label>
                        <textarea name="visi" rows="3"
                            class="form-control bg-dark text-white @error('visi') is-invalid @enderror"
                            required>{{ old('visi') }}</textarea>
                        @error('visi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Misi</label>
                        <textarea name="misi" rows="5"
                            class="form-control bg-dark text-white @error('misi') is-invalid @enderror"
                            required>{{ old('misi') }}</textarea>
                        @error('misi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection