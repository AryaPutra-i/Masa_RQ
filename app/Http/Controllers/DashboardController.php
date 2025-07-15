<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PendaftaranProgram;
use App\Models\prestasi;

class DashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        return view('dashboard.index', compact('user'));
    }

    public function prestasi()
    {
        $user = Auth::user()->id;
        return view('dashboard.prestasi', compact('user'));
    }

    public function create_prestasi()
    {
        return view('dashboard.prestasiCreate');
    }

    public function store_prestasi(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date'
        ]);

        $prestasi = prestasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('dashboard');
    }

    public function detail(){
        $prestasi = prestasi::all();
        return view('dashboard.prestasi', compact('prestasi'));
    }

    public function edit($id){
        $prestasi = prestasi::find($id);
        return view('dashboard.prestasiEdit', compact('prestasi'));
    }

     public function update(Request $request, $id)
    {
        $prestasi = Prestasi::find($id);
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date'
        ]);

        $prestasi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal
        ]);
        return redirect()->route('dashboard');
    }

     public function destroy($id)
    {   

        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
