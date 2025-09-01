<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; 
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Tampilkan semua mahasiswa
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['user', 'programStudi'])->get();
        return response()->json($mahasiswa);
    }

    // Simpan mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'mhsId'        => 'required|string|max:12|unique:mahasiswa,mhsId',
            'nim'          => 'required|string|max:10',
            'namaLengkap'  => 'required|string|max:250',
            'noHp'         => 'required|string',
            'alamat'       => 'required|string',
            'jenisKelamin' => 'required|string|max:10',
            'tanggalLahir' => 'nullable|date',
            'tempatLahir'  => 'nullable|string|max:100',
            'angkatan'     => 'nullable|integer',
            'id'           => 'required|exists:users,id',
            'prodiId'      => 'required|exists:programstudi,prodiId',
        ]);

        $mahasiswa = Mahasiswa::create($request->all());
        return response()->json($mahasiswa, 201);
    }

    // Tampilkan detail mahasiswa
    public function show($id)
    {
        $mahasiswa = Mahasiswa::with(['user', 'programStudi'])->findOrFail($id);
        return response()->json($mahasiswa);
    }

    // Update mahasiswa
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $request->validate([
            'nim'          => 'sometimes|required|string|max:10',
            'namaLengkap'  => 'sometimes|required|string|max:250',
            'noHp'         => 'sometimes|required|string',
            'alamat'       => 'sometimes|required|string',
            'jenisKelamin' => 'sometimes|required|string|max:10',
            'tanggalLahir' => 'nullable|date',
            'tempatLahir'  => 'nullable|string|max:100',
            'angkatan'     => 'nullable|integer',
            'id'           => 'sometimes|required|exists:users,id',
            'prodiId'      => 'sometimes|required|exists:programstudi,prodiId',
        ]);

        $mahasiswa->update($request->all());
        return response()->json($mahasiswa);
    }

    // Hapus mahasiswa
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return response()->json(null, 204);
    }
}
