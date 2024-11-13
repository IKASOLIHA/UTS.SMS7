@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Kehadiran Santri</h2>
        <a href="{{ route('kehadiran.create') }}" class="btn btn-success">Tambah Kehadiran</a>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Santri</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kehadirans as $kehadiran)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kehadiran->nama_santri }}</td>
                <td>{{ $kehadiran->tanggal }}</td>
                <td>
                    <span class="badge 
                        {{ $kehadiran->status == 'hadir' ? 'bg-success' : '' }}
                        {{ $kehadiran->status == 'izin' ? 'bg-primary' : '' }}
                        {{ $kehadiran->status == 'sakit' ? 'bg-warning' : '' }}
                        {{ $kehadiran->status == 'alpa' ? 'bg-danger' : '' }}">
                        {{ ucfirst($kehadiran->status) }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('kehadiran.edit', $kehadiran->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kehadiran.destroy', $kehadiran->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
