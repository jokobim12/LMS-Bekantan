<?php

namespace App\Http\Controllers;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    // Daftar program studi
    public function index()
    {
        $programStudi = ProgramStudi::latest()->paginate(10);
        return view('programstudi.index', compact('programStudi'));
    }

    // Form tambah
    public function create()
    {
        return view('programstudi.create');
    }

    // Simpan program studi baru
    public function store(Request $request)
    {
        $request->validate([
            'prodiId' => 'required|string|max:12|unique:programstudi,prodiId',
            'nama'    => 'required|string|max:100',
        ]);

        ProgramStudi::create($request->only(['prodiId','nama']));

        return redirect()
            ->route('programstudi.index')
            ->with('success', 'Program studi berhasil ditambahkan.');
    }

    // Detail program studi
    public function show($id)
    {
        $programStudi = ProgramStudi::findOrFail($id);
        return view('programstudi.show', compact('programStudi'));
    }

    // Form edit
    public function edit($id)
    {
        $programStudi = ProgramStudi::findOrFail($id);
        return view('programstudi.edit', compact('programStudi'));
    }

    // Update program studi
    public function update(Request $request, $id)
    {
        $programStudi = ProgramStudi::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:100',
        ]);

        $programStudi->update($request->only(['nama']));

        return redirect()
            ->route('programstudi.index')
            ->with('success', 'Program studi berhasil diperbarui.');
    }

    // Hapus program studi
    public function destroy($id)
    {
        $programStudi = ProgramStudi::findOrFail($id);
        $programStudi->delete();

        return redirect()
            ->route('programstudi.index')
            ->with('success', 'Program studi berhasil dihapus.');
    }
}
