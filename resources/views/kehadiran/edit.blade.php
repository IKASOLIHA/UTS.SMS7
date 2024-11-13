@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Kehadiran</h2>
    <form action="{{ route('kehadiran.update', $kehadiran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Santri:</label>
            <input type="text" name="nama_santri" class="form-control" value="{{ $kehadiran->nama_santri }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $kehadiran->tanggal }}" required>
        </div>
        <div class="form-group">
            <label>Status:</label>
            <select name="status" class="form-control" required>
                <option value="hadir" {{ $kehadiran->status == 'hadir' ? 'selected' : '' }}>Hadir</option>
                <option value="izin" {{ $kehadiran->status == 'izin' ? 'selected' : '' }}>Izin</option>
                <option value="sakit" {{ $kehadiran->status == 'sakit' ? 'selected' : '' }}>Sakit</option>
                <option value="alpa" {{ $kehadiran->status == 'alpa' ? 'selected' : '' }}>Alpa</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
        <a href="{{ route('kehadiran.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>
@endsection
