@extends('layouts.app')
@section('title', 'Visi & Misi')
@section('content')
    <div class="container">
        <h2>Data Visi & Misi</h2>
        <a href="{{ route('visi-misi.create') }}" class="btn btn-success mb-3">Tambah</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->visi }}</td>
                        <td>{{ $item->misi }}</td>
                        <td>
                            <a href="{{ route('visi-misi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('visi-misi.destroy', $item->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Hapus data?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection