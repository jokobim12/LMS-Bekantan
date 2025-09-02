<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pengajar;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // Tampilkan semua kelas
    public function index()
    {
        $kelas = Kelas::with(['pengajar','matakuliah'])->latest()->paginate(10);
        return view('kelas.index', compact('kelas'));
    }

    // Form tambah kelas
    public function create()
    {
        $pengajar   = Pengajar::select('pengajarId','nama')->get();
        $matakuliah = MataKuliah::select('mkId','nama')->get();
        return view('kelas.create', compact('pengajar','matakuliah'));
    }

    // Simpan kelas baru
    public function store(Request $request)
    {
        $request->validate([
            'kelasId'     => 'required|string|max:12|unique:kelas,kelasId',
            'nama'        => 'nullable|string|max:100',
            'tahunAjaran' => 'nullable|integer',
            'pengajarId'  => 'required|exists:pengajars,pengajarId',
            'mkId'        => 'required|exists:matakuliah,mkId',
        ]);

        Kelas::create($request->only(['kelasId','nama','tahunAjaran','pengajarId','mkId']));

        return redirect()->route('kelas.index')->with('success','Kelas berhasil ditambahkan.');
    }

    // Tampilkan detail kelas
    public function show($id)
    {
        $kelas = Kelas::with(['pengajar','matakuliah'])->findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }

    // Form edit kelas
    public function edit($id)
    {
        $kelas      = Kelas::findOrFail($id);
        $pengajar   = Pengajar::select('pengajarId','nama')->get();
        $matakuliah = MataKuliah::select('mkId','nama')->get();
        return view('kelas.edit', compact('kelas','pengajar','matakuliah'));
    }

    // Update kelas
    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);

        $request->validate([
            'nama'        => 'nullable|string|max:100',
            'tahunAjaran' => 'nullable|integer',
            'pengajarId'  => 'sometimes|required|exists:pengajars,pengajarId',
            'mkId'        => 'sometimes|required|exists:matakuliah,mkId',
        ]);

        $kelas->update($request->only(['nama','tahunAjaran','pengajarId','mkId']));

        return redirect()->route('kelas.index')->with('success','Kelas berhasil diperbarui.');
    }

    // Hapus kelas
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success','Kelas berhasil dihapus.');
    }
}
