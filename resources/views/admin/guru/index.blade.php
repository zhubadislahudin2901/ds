@extends('layouts.app')

@section('title', 'Data Guru')

@section('content')
    <div class="container">
        <h2>Data Guru</h2>
        <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Jabatan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gurus as $guru)
                    <tr>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->nip }}</td>
                        <td>{{ $guru->jabatan }}</td>
                        <td>
                            @if($guru->foto)
                                <img src="{{ asset('storage/' . $guru->foto) }}" width="60">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection