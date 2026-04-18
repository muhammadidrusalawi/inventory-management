<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhammad Idrus',
            'email' => 'm.idrus@inventorize.com',
            'role_id' => 1,
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Admin Toko',
            'email' => 'admin@inventorize.com',
            'role_id' => 2,
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Staff Toko',
            'email' => 'staff@inventorize.com',
            'role_id' => 3,
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Finance Toko',
            'email' => 'finance@inventorize.com',
            'role_id' => 4,
            'password' => Hash::make('12345678'),
        ]);
    }
}
