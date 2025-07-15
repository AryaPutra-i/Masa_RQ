<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nama_ortu' => 'required',
            'no_hp' => 'required',
        ]);

        Pendaftaran::create($request->all());

        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim!');
    }

    public function index()
    {
        $pendaftars = Pendaftaran::all();
        return view('pendaftaran.index', compact('pendaftars'));
    }

    // 👇 Letakkan method destroy() DI SINI
    public function destroy($id)
    {
        $pendaftar = Pendaftaran::findOrFail($id);
        $pendaftar->delete();

        return redirect()->route('pendaftaran.index')->with('success', 'Data pendaftar berhasil dihapus.');
    }
}
