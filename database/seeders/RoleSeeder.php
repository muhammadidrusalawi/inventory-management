<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'key' => 'OWNER',
            'label' => 'Owner',
            'description' => 'Pemilik Toko',
        ]);

        Role::create([
            'key' => 'ADMIN',
            'label' => 'Admin',
            'description' => 'Admin Toko',
        ]);

        Role::create([
            'key' => 'STAFF',
            'label' => 'Staff',
            'description' => 'Staff Penjualan/Operasional',
        ]);

        Role::create([
            'key' => 'FINANCE',
            'label' => 'Finance',
            'description' => 'Pengelola Keuangan',
        ]);
    }
}
