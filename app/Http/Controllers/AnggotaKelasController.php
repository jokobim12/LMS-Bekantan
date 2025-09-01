<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKelas;
use Illuminate\Http\Request;

class AnggotaKelasController extends Controller
{
    // Ambil semua anggota kelas
    public function index()
    {
        $anggota = AnggotaKelas::with(['user', 'kelas'])->get();
        return response()->json($anggota);
    }

    // Simpan anggota kelas baru
    public function store(Request $request)
    {
        $request->validate([
            'anggotaKelasId' => 'required|string|max:12|unique:anggotakelas,anggotaKelasId',
            'id'             => 'nullable|exists:users,id',
            'kelasId'        => 'nullable|exists:kelas,kelasId',
        ]);

        $anggota = AnggotaKelas::create($request->all());
        return response()->json($anggota, 201);
    }

    // Tampilkan detail anggota kelas
    public function show($id)
    {
        $anggota = AnggotaKelas::with(['user', 'kelas'])->findOrFail($id);
        return response()->json($anggota);
    }

    // Update anggota kelas
    public function update(Request $request, $id)
    {
        $anggota = AnggotaKelas::findOrFail($id);

        $request->validate([
            'id'      => 'nullable|exists:users,id',
            'kelasId' => 'nullable|exists:kelas,kelasId',
        ]);

        $anggota->update($request->all());
        return response()->json($anggota);
    }

    // Hapus anggota kelas
    public function destroy($id)
    {
        $anggota = AnggotaKelas::findOrFail($id);
        $anggota->delete();

        return response()->json(null, 204);
    }
}
