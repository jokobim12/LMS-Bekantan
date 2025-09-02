<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Daftar mahasiswa (table + pagination)
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['user','programStudi'])
            ->latest()->paginate(10);

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    // Form create
    public function create()
    {
        $users = User::select('id','name')->orderBy('name')->get();
        $prodi = ProgramStudi::select('prodiId','nama')->orderBy('nama')->get();

        return view('mahasiswa.create', compact('users','prodi'));
    }

    // Simpan data baru
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

        Mahasiswa::create($request->only([
            'mhsId','nim','namaLengkap','noHp','alamat','jenisKelamin',
            'tanggalLahir','tempatLahir','angkatan','id','prodiId'
        ]));

        return redirect()->route('mahasiswa.index')
            ->with('success','Mahasiswa berhasil ditambahkan.');
    }

    // Detail
    public function show($id)
    {
        $mhs = Mahasiswa::with(['user','programStudi'])->findOrFail($id);
        return view('mahasiswa.show', ['mhs' => $mhs]);
    }

    // Form edit
    public function edit($id)
    {
        $mhs   = Mahasiswa::findOrFail($id);
        $users = User::select('id','name')->orderBy('name')->get();
        $prodi = ProgramStudi::select('prodiId','nama')->orderBy('nama')->get();

        return view('mahasiswa.edit', compact('mhs','users','prodi'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::findOrFail($id);

        $request->validate([
            // mhsId tidak diubah → tidak perlu unique lagi; kalau mau boleh tambahkan rule ignore:
            // 'mhsId' => 'required|string|max:12|unique:mahasiswa,mhsId,'.$mhs->id,
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

        $mhs->update($request->only([
            'nim','namaLengkap','noHp','alamat','jenisKelamin',
            'tanggalLahir','tempatLahir','angkatan','id','prodiId'
        ]));

        return redirect()->route('mahasiswa.index')
            ->with('success','Mahasiswa berhasil diperbarui.');
    }

    // Hapus
    public function destroy($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success','Mahasiswa berhasil dihapus.');
    }
}
