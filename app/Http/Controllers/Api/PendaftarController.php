<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftar;

class PendaftarController extends Controller
{
    public function index()
    {
        $pendaftars = Pendaftar::all();
        return response()->json($pendaftars);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
        ]);

        $pendaftar = Pendaftar::create($request->all());

        return response()->json([
            'message' => 'Pendaftar berhasil ditambahkan',
            'data' => $pendaftar
        ], 201);
    }
}
