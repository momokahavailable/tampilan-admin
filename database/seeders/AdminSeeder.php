<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'username' => 'admin',
            'name' => 'Administrator',
            'password' => Hash::make('password123'),
        ]);

        Admin::create([
            'username' => 'superadmin',
            'name' => 'Super Administrator',
            'password' => Hash::make('admin123'),
        ]);
    }
}