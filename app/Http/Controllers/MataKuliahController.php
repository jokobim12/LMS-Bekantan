<?php

namespace App\Http\Controllers;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // Daftar semua mata kuliah
    public function index()
    {
        $matakuliah = MataKuliah::latest()->paginate(10);
        return view('matakuliah.index', compact('matakuliah'));
    }

    // Form tambah
    public function create()
    {
        return view('matakuliah.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'mkId'         => 'required|string|max:12|unique:matakuliah,mkId',
            'nama'         => 'required|string|max:100',
            'sksTeori'     => 'required|integer|min:0',
            'sksPraktikum' => 'required|integer|min:0',
            'semester'     => 'required|integer|min:1|max:14',
        ]);

        MataKuliah::create($request->only(['mkId','nama','sksTeori','sksPraktikum','semester']));

        return redirect()->route('matakuliah.index')->with('success','Mata kuliah berhasil ditambahkan.');
    }

    // Detail
    public function show($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }

    // Form edit
    public function edit($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $matakuliah = MataKuliah::findOrFail($id);

        $request->validate([
            'nama'         => 'required|string|max:100',
            'sksTeori'     => 'required|integer|min:0',
            'sksPraktikum' => 'required|integer|min:0',
            'semester'     => 'required|integer|min:1|max:14',
        ]);

        $matakuliah->update($request->only(['nama','sksTeori','sksPraktikum','semester']));

        return redirect()->route('matakuliah.index')->with('success','Mata kuliah berhasil diperbarui.');
    }

    // Hapus data
    public function destroy($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success','Mata kuliah berhasil dihapus.');
    }
}
