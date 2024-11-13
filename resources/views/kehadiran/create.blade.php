@extends('layouts.app')

@section('content')
<div class="container">
   <h2>Tambah Kehadiran</h2>
   <form action="{{ route('kehadiran.store') }}" method="POST">
       @csrf
       <div class="form-group">
           <label>Nama Santri:</label>
           <input type="text" name="nama_santri" class="form-control" required>
       </div>
       <div class="form-group">
           <label>Tanggal:</label>
           <input type="date" name="tanggal" class="form-control" required>
       </div>
       <div class="form-group">
           <label>Status:</label>
           <select name="status" class="form-control" required>
               <option value="hadir">Hadir</option>
               <option value="izin">Izin</option>
               <option value="sakit">Sakit</option>
               <option value="alpa">Alpa</option>
           </select>
       </div>
       <button type="submit" class="btn btn-primary mt-2">Simpan</button>
   </form>
</div>
@endsection
