@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h4 class="text-white">Edit Visi & Misi</h4>

        <form action="{{ route('visi-misi.update', $visiMisi->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="text-white">Visi</label>
                <textarea name="visi" class="form-control bg-dark text-white" rows="3"
                    required>{{ old('visi', $visiMisi->visi) }}</textarea>
                @error('visi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="text-white">Misi</label>
                <textarea name="misi" class="form-control bg-dark text-white" rows="5"
                    required>{{ old('misi', $visiMisi->misi) }}</textarea>
                @error('misi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection