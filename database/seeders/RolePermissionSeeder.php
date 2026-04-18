<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner = Role::where('key', 'OWNER')->first();
        $admin = Role::where('key', 'ADMIN')->first();
        $staff = Role::where('key', 'STAFF')->first();
        $finance = Role::where('key', 'FINANCE')->first();

        $allPermissions = Permission::all();

        // OWNER = semua akses
        $owner->permissions()->sync($allPermissions->pluck('id'));

        // ADMIN = semua kecuali delete (optional)
        $admin->permissions()->sync(
            Permission::whereNot('key', 'like', '%.delete')->pluck('id')
        );

        // STAFF = operasional
        $staff->permissions()->sync(
            Permission::whereIn('group', [
                'products',
                'stocks',
                'sales_orders'
            ])->pluck('id')
        );

        // FINANCE = keuangan
        $finance->permissions()->sync(
            Permission::whereIn('group', [
                'purchase_orders',
                'sales_orders'
            ])->pluck('id')
        );
    }
}
