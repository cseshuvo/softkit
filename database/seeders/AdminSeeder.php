<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{

    public function run(): void
    {
        $superAdmin = Role::firstOrCreate(['name' => 'Super Admin', 'guard_name' => 'admin']);
        $permissions = [
            'add admin',
            'manage admin',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm, 'guard_name' => 'admin']);
        }

        $superAdmin->syncPermissions(Permission::where('guard_name', 'admin')->get());
        $admin = Admin::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('12345678'),
            ]
        );
        $admin->assignRole($superAdmin);
    }
}
