@extends('layouts.app')

@section('title', 'Visi & Misi')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Data Visi & Misi</h2>
            {{-- Form Search --}}
            <form action="{{ route('visi-misi.index') }}" method="GET" class="d-flex me-3">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari visi..."
                    value="{{ request('search') }}">
                <button class="btn btn-outline-light" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
            <a href="{{ route('visi-misi.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(request('search'))
            <p class="text-light">Hasil pencarian untuk: <strong>{{ request('search') }}</strong></p>
        @endif

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->visi }}</td>
                        <td>{{ $item->misi }}</td>
                        <td>
                            <a href="{{ route('visi-misi.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('visi-misi.destroy', $item->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Data tidak ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection