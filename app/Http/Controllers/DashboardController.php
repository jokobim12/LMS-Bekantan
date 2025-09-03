<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        // Pastikan user aktif
        if (!$user->is_active) {
            auth()->logout();
            return redirect('/login')->withErrors(['account' => 'Akun Anda tidak aktif.']);
        }
        
        // Redirect berdasarkan role
        switch ($user->role) {
            case 'mahasiswa':
                return redirect()->route('mahasiswa.dashboard');
            case 'pengajar':
                return redirect()->route('pengajar.dashboard');
            case 'manager':
                return redirect('/admin');
            default:
                abort(403, 'Role tidak dikenali');
        }
    }

    public function mahasiswa()
    {
        return view('dashboard.mahasiswa');
    }

    public function pengajar()
    {
        return view('dashboard.pengajar');
    }
}