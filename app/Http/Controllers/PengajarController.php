<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\User;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    /**
     * Tampilkan daftar pengajar
     */
    public function index()
    {
        $pengajar = Pengajar::with('user')->get();
        return view('pengajar.index', compact('pengajar'));
    }

    /**
     * Form tambah pengajar
     */
    public function create()
    {
        $users = User::all();
        return view('pengajar.create', compact('users'));
    }

    /**
     * Simpan pengajar baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'pengajarId' => 'required|string|max:12|unique:pengajar,pengajarId',
            'nip' => 'required|string|max:16|unique:pengajar,nip',
            'nama' => 'required|string|max:250',
            'noHp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'pendidikanTerakhir' => 'nullable|string|max:50',
            'bidangIlmu' => 'required|string|max:50',
            'user_id' => 'required|exists:users,id',
        ]);

        Pengajar::create($request->all());

        return redirect()->route('pengajar.index')->with('success', 'Data pengajar berhasil ditambahkan');
    }

    /**
     * Tampilkan detail pengajar
     */
    public function show(Pengajar $pengajar)
    {
        return view('pengajar.show', compact('pengajar'));
    }

    /**
     * Form edit pengajar
     */
    public function edit(Pengajar $pengajar)
    {
        $users = User::all();
        return view('pengajar.edit', compact('pengajar', 'users'));
    }

    /**
     * Update pengajar
     */
    public function update(Request $request, Pengajar $pengajar)
    {
        $request->validate([
            'nip' => 'required|string|max:16|unique:pengajar,nip,' . $pengajar->pengajarId . ',pengajarId',
            'nama' => 'required|string|max:250',
            'noHp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'pendidikanTerakhir' => 'nullable|string|max:50',
            'bidangIlmu' => 'required|string|max:50',
            'user_id' => 'required|exists:users,id',
        ]);

        $pengajar->update($request->all());

        return redirect()->route('pengajar.index')->with('success', 'Data pengajar berhasil diperbarui');
    }

    /**
     * Hapus pengajar
     */
    public function destroy(Pengajar $pengajar)
    {
        $pengajar->delete();
        return redirect()->route('pengajar.index')->with('success', 'Data pengajar berhasil dihapus');
    }
}
