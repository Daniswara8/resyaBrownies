<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'admin',
            'role' => 'admin',
            'no_telepon' => '085640673917',
            'email' => 'adminBrownies@gmail.com',
            'password' => Hash::make('admin123'),
            'alamat' => 'jalan banyumanik',
        ]);
    }
}
