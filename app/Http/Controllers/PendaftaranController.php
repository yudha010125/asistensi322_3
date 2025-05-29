<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftaranController extends Controller
{
    // Tampilkan halaman form pendaftaran
    public function index()
    {
        return view('pendaftaran');
    }

    // Simpan data pendaftar baru (langsung ke DB)
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:10',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
        ]);

        Pendaftar::create($request->all());

        return redirect('/')->with('success', 'Pendaftaran berhasil!');
    }

    // Tampilkan daftar pendaftar (langsung dari DB)
    public function list()
    {
        $pendaftars = Pendaftar::all();
        return view('daftar_pendaftar', compact('pendaftars'));
    }
}
