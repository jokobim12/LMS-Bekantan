<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
      // Tampilkan semua kelas
    public function index()
    {
        $kelas = Kelas::with(['pengajar', 'matakuliah'])->get();
        return response()->json($kelas);
    }

    // Simpan kelas baru
    public function store(Request $request)
    {
        $request->validate([
            'kelasId'    => 'required|string|max:12|unique:kelas,kelasId',
            'nama'       => 'nullable|string|max:100',
            'tahunAjaran'=> 'nullable|integer',
            'pengajarId' => 'required|exists:pengajars,pengajarId',
            'mkId'       => 'required|exists:matakuliah,mkId',
        ]);

        $kelas = Kelas::create($request->all());
        return response()->json($kelas, 201);
    }

    // Tampilkan detail kelas
    public function show($id)
    {
        $kelas = Kelas::with(['pengajar', 'matakuliah'])->findOrFail($id);
        return response()->json($kelas);
    }

    // Update kelas
    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);

        $request->validate([
            'nama'       => 'nullable|string|max:100',
            'tahunAjaran'=> 'nullable|integer',
            'pengajarId' => 'sometimes|required|exists:pengajars,pengajarId',
            'mkId'       => 'sometimes|required|exists:matakuliah,mkId',
        ]);

        $kelas->update($request->all());
        return response()->json($kelas);
    }

    // Hapus kelas
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return response()->json(null, 204);
    }
}
