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
        // Membuat role
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Membuat permission
        $permissions = ['create portofolio', 'update portofolio', 'delete portofolio', 'view portofolio'];
        foreach ($permissions as $perm) {
            Permission::create(['name' => $perm]);
        }

        // Memberikan permission ke role
        $adminRole->givePermissionTo($permissions);
        $userRole->givePermissionTo('view portofolio');

        // Membuat user
        $user = User::create([
            'name' => 'Munim',
            'email' => 'munimsudrajat22@gmail.com',
            'password' => bcrypt('munim123'),
        ]);

        // Memberikan role ke user
        $user->assignRole('admin');
    }
}
