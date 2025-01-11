@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Kitab</h1>
        <a href="{{ route('kitab.create') }}" class="btn btn-primary mb-3">Tambah Kitab</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kitab</th>
                    <th>Penulis</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kitabs as $kitab)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kitab->nama_kitab }}</td>
                        <td>{{ $kitab->penulis }}</td>
                        <td>{{ $kitab->deskripsi }}</td>
                        <td>
                            <a href="{{ route('kitab.edit', $kitab->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('kitab.destroy', $kitab->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
