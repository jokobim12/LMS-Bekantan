<?php

namespace App\Http\Controllers;
use App\Models\ProgramStudi; 
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    // Tampilkan semua program studi
    public function index()
    {
        $programStudi = ProgramStudi::all();
        return response()->json($programStudi);
    }

    // Simpan program studi baru
    public function store(Request $request)
    {
        $request->validate([
            'prodiId' => 'required|string|max:12|unique:programstudi,prodiId',
            'nama'    => 'required|string|max:100',
        ]);

        $programStudi = ProgramStudi::create($request->all());

        return response()->json($programStudi, 201);
    }

    // Tampilkan detail program studi
    public function show($id)
    {
        $programStudi = ProgramStudi::findOrFail($id);
        return response()->json($programStudi);
    }

    // Update program studi
    public function update(Request $request, $id)
    {
        $programStudi = ProgramStudi::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:100',
        ]);

        $programStudi->update($request->all());

        return response()->json($programStudi);
    }

    // Hapus program studi
    public function destroy($id)
    {
        $programStudi = ProgramStudi::findOrFail($id);
        $programStudi->delete();

        return response()->json(null, 204);
    }
}
