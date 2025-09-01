<?php

namespace App\Http\Controllers;
use App\Models\MataKuliah; 
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // Tampilkan semua mata kuliah
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return response()->json($matakuliah);
    }

    // Simpan mata kuliah baru
    public function store(Request $request)
    {
        $request->validate([
            'mkId'        => 'required|string|max:12|unique:matakuliah,mkId',
            'nama'        => 'required|string|max:100',
            'sksTeori'    => 'nullable|integer|min:0',
            'sksPraktikum'=> 'nullable|integer|min:0',
            'semester'    => 'nullable|integer|min:1|max:14',
        ]);

        $matakuliah = Matakuliah::create($request->all());

        return response()->json($matakuliah, 201);
    }

    // Tampilkan detail mata kuliah
    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return response()->json($matakuliah);
    }

    // Update mata kuliah
    public function update(Request $request, $id)
    {
        $matakuliah = Matakuliah::findOrFail($id);

        $request->validate([
            'nama'        => 'sometimes|required|string|max:100',
            'sksTeori'    => 'nullable|integer|min:0',
            'sksPraktikum'=> 'nullable|integer|min:0',
            'semester'    => 'nullable|integer|min:1|max:14',
        ]);

        $matakuliah->update($request->all());

        return response()->json($matakuliah);
    }

    // Hapus mata kuliah
    public function destroy($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->delete();

        return response()->json(null, 204);
    }
}
