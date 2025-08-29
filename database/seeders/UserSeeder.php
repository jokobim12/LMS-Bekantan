<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Get roles
        $managerRole = Role::where('name', 'manager')->first();
        $pengajarRole = Role::where('name', 'pengajar')->first();
        $siswaRole = Role::where('name', 'siswa')->first();

        // Create Manager
        User::create([
            'name' => 'Admin Manager',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
            'role_id' => $managerRole->id,
            'email_verified_at' => now(),
        ]);

        // Create Pengajar
        User::create([
            'name' => 'Budi Pengajar',
            'email' => 'pengajar@example.com', 
            'password' => Hash::make('password'),
            'role_id' => $pengajarRole->id,
            'email_verified_at' => now(),
        ]);

        // Create Siswa
        User::create([
            'name' => 'Siti Siswa',
            'email' => 'siswa@example.com',
            'password' => Hash::make('password'), 
            'role_id' => $siswaRole->id,
            'email_verified_at' => now(),
        ]);
    }
}