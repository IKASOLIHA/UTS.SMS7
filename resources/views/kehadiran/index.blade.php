@extends('layouts.app')

@section('content')
<div class="container">
   <h2>Data Kehadiran</h2>
   <a href="{{ route('kehadiran.create') }}" class="btn btn-primary">Tambah Kehadiran</a>
   <table class="table table-bordered mt-3">
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
               <td>{{ $kehadiran->status }}</td>
               <td>
                   <a href="{{ route('kehadiran.edit', $kehadiran->id) }}" class="btn btn-warning">Edit</a>
                   <form action="{{ route('kehadiran.destroy', $kehadiran->id) }}" method="POST" style="display:inline;">
                       @csrf
                       @method('DELETE')
                       <button type="submit" class="btn btn-danger">Hapus</button>
                   </form>
               </td>
           </tr>
           @endforeach
       </tbody>
   </table>
</div>
@endsection
