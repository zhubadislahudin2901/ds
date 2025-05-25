@extends('layouts.app')

@section('title', 'Data Berita')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Data Berita</h2>
            <a href="{{ route('berita.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Berita
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($beritas as $index => $berita)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $berita->judul }}</td>
                        <td>{{ $berita->created_at->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada berita</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection