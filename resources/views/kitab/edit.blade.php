@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Edit Kitab</h1>
    <form action="{{ route('kitab.update', $kitab->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_kitab" class="form-label">Nama Kitab</label>
            <input type="text" name="nama_kitab" class="form-control" value="{{ $kitab->nama_kitab }}" required>
        </div>
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" value="{{ $kitab->penulis }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4">{{ $kitab->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
