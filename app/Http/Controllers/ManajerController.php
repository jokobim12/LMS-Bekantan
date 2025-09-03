<?php

namespace App\Http\Controllers;

use App\Models\Manajer;
use Illuminate\Http\Request;

class ManajerController extends Controller
{
    /**
     * Tampilkan semua data manajer (hanya untuk role manajer / admin).
     */
    public function index()
    {
        $manajers = Manajer::all();
        return view('manajer.index', compact('manajers'));
    }

    /**
     * Tampilkan form tambah manajer.
     */
    public function create()
    {
        return view('manajer.create');
    }

    /**
     * Simpan data manajer baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'managerId' => 'required|string|max:12|unique:manajers',
            'nik' => 'required|string|max:16|unique:manajers',
            'nama' => 'required|string|max:250',
            'noHp' => 'required|string|max:12',
            'alamat' => 'required|string',
            'pendidikanTerakhir' => 'nullable|string|max:50',
            'userId' => 'required|exists:users,userId',
        ]);

        Manajer::create($request->all());

        return redirect()->route('manajer.index')->with('success', 'Data manajer berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail profil manajer.
     */
    public function show($id)
    {
        $manajer = Manajer::findOrFail($id);
        return view('manajer.show', compact('manajer'));
    }

    /**
     * Tampilkan form edit data manajer.
     */
    public function edit($id)
    {
        $manajer = Manajer::findOrFail($id);
        return view('manajer.edit', compact('manajer'));
    }

    /**
     * Update data manajer.
     */
    public function update(Request $request, $id)
    {
        $manajer = Manajer::findOrFail($id);

        $request->validate([
            'nik' => 'required|string|max:16|unique:manajers,nik,' . $manajer->managerId . ',managerId',
            'nama' => 'required|string|max:250',
            'noHp' => 'required|string|max:12',
            'alamat' => 'required|string',
            'pendidikanTerakhir' => 'nullable|string|max:50',
        ]);

        $manajer->update($request->all());

        return redirect()->route('manajer.index')->with('success', 'Data manajer berhasil diperbarui.');
    }

    /**
     * Hapus data manajer.
     */
    public function destroy($id)
    {
        $manajer = Manajer::findOrFail($id);
        $manajer->delete();

        return redirect()->route('manajer.index')->with('success', 'Data manajer berhasil dihapus.');
    }
}
