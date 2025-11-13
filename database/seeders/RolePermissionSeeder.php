<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        // Pastikan guard-nya 'web' (default untuk user biasa)
        $edit = Permission::findOrCreate('edit articles', 'web');
        $delete = Permission::findOrCreate('delete articles', 'web');

        // Buat role admin
        $role = Role::findOrCreate('admin', 'web');

        // Tambahkan permission ke role admin
        $role->givePermissionTo([$edit, $delete]);

        // Assign role ke user pertama
        $user = User::first();
        if ($user) {
            $user->assignRole('admin');
        }
    }
}
