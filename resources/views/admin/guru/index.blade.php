@extends('layouts.app')

@section('title', 'Data Guru')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Data Guru</h2>

            {{-- Form Search --}}
            <form action="{{ route('guru.index') }}" method="GET" class="d-flex me-3">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari nama guru..."
                    value="{{ request('search') }}">
                <button class="btn btn-outline-light" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>

            <a href="{{ route('guru.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Guru
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
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($gurus as $guru)
                    <tr>
                        <td>{{ $gurus->firstItem() + $loop->index }}</td>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->nip ?? '-' }}</td>
                        <td>
                            @if ($guru->foto)
                                <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto" width="60">
                            @else
                                <span class="text-secondary">Tidak ada</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus guru ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data guru</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-3">
            {{ $gurus->appends(request()->query())->links() }}
        </div>
    </div>
@endsection