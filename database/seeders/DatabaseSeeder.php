<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cek apakah user manager sudah ada
        $adminExists = User::where('email', 'bekantan@gmail.com')->exists();
        
        if (!$adminExists) {
            try {
                User::create([
                    'name' => 'Manager',
                    'email' => 'bekantan@gmail.com',
                    'password' => Hash::make('admin123'), 
                    'role' => 'manager',
                    'is_active' => true,
                    'email_verified_at' => now(),
                ]);
                
                $this->command->info('Manager user created successfully!');
            } catch (\Exception $e) {
                $this->command->error('Error creating manager user: ' . $e->getMessage());
                
                // Alternatif pakai DB::insert kalau User::create error
                DB::table('users')->insert([
                    'name' => 'Manager',
                    'email' => 'bekantan@gmail.com',
                    'password' => Hash::make('admin123'), 
                    'role' => 'manager',
                    'is_active' => 1,
                    'email_verified_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                
                $this->command->info('Manager user created via DB insert!');
            }
        } else {
            $this->command->info('Manager user already exists.');
        }
    }
}