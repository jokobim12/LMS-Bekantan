<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'name' => 'manager',
                'display_name' => 'Manager',
                'description' => 'System administrator dengan akses penuh'
            ],
            [
                'name' => 'pengajar', 
                'display_name' => 'Pengajar',
                'description' => 'Guru/Dosen yang mengelola pembelajaran'
            ],
            [
                'name' => 'siswa',
                'display_name' => 'Siswa', 
                'description' => 'Peserta didik yang mengikuti pembelajaran'
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}