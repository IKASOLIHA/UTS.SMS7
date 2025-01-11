<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    public function index()
    {
        $kehadirans = Kehadiran::all();
        return view('kehadiran.index', compact('kehadirans'));
    }

    public function create()
    {
        return view('kehadiran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_santri' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required',
        ]);

        Kehadiran::create($request->all());
        return redirect()->route('kehadiran.index')->with('success', 'Data kehadiran berhasil ditambahkan.');
    }

    public function edit(Kehadiran $kehadiran)
    {
        return view('kehadiran.edit', compact('kehadiran'));
    }

    public function update(Request $request, Kehadiran $kehadiran)
    {
        $request->validate([
            'nama_santri' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required',
        ]);

        $kehadiran->update($request->all());
        return redirect()->route('kehadiran.index')->with('success', 'Data kehadiran berhasil diperbarui.');
    }

    public function destroy(Kehadiran $kehadiran)
    {
        $kehadiran->delete();
        return redirect()->route('kehadiran.index')->with('success', 'Data kehadiran berhasil dihapus.');
    }
}
