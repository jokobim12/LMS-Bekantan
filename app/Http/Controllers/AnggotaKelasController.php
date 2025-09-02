<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKelas;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;

class AnggotaKelasController extends Controller
{
    // Tampilkan daftar (table)
    public function index()
    {
        $anggota = AnggotaKelas::with(['user','kelas'])->latest()->paginate(10);
        return view('anggota_kelas.index', compact('anggota'));
    }

    // Form create
    public function create()
    {
        $users = User::select('id','name')->orderBy('name')->get();
        $kelas = Kelas::select('kelasId','nama')->orderBy('nama')->get();
        return view('anggota_kelas.create', compact('users','kelas'));
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'anggotaKelasId' => 'required|string|max:12|unique:anggota_kelas,anggotaKelasId', // pastikan nama tabel benar
            'id'             => 'required|exists:users,id',
            'kelasId'        => 'nullable|exists:kelas,kelasId',
        ]);

        AnggotaKelas::create($request->only(['anggotaKelasId','id','kelasId']));

        return redirect()
            ->route('anggota-kelas.index')
            ->with('success', 'Anggota kelas berhasil ditambahkan.');
    }

    // Detail
    public function show($id)
    {
        $anggota = AnggotaKelas::with(['user','kelas'])->findOrFail($id);
        return view('anggota_kelas.show', compact('anggota'));
    }

    // Form edit
    public function edit($id)
    {
        $anggota = AnggotaKelas::findOrFail($id);
        $users = User::select('id','name')->orderBy('name')->get();
        $kelas = Kelas::select('kelasId','nama')->orderBy('nama')->get();
        return view('anggota_kelas.edit', compact('anggota','users','kelas'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $anggota = AnggotaKelas::findOrFail($id);

        $request->validate([
            // unique diabaikan untuk record saat ini
            'anggotaKelasId' => 'required|string|max:12|unique:anggota_kelas,anggotaKelasId,'.$anggota->id,
            'id'      => 'nullable|exists:users,id',
            'kelasId' => 'nullable|exists:kelas,kelasId',
        ]);

        $anggota->update($request->only(['anggotaKelasId','id','kelasId']));

        return redirect()
            ->route('anggota-kelas.index')
            ->with('success', 'Anggota kelas berhasil diperbarui.');
    }

    // Hapus
    public function destroy($id)
    {
        $anggota = AnggotaKelas::findOrFail($id);
        $anggota->delete();

        return redirect()
            ->route('anggota-kelas.index')
            ->with('success', 'Anggota kelas berhasil dihapus.');
    }
}
