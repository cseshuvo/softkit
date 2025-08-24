<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'Admin Management' => [
                'add admin',
                'manage admin',
                'edit admin',
                'delete admin',
            ],
            'Setting' => [
                'general setting',
                'email setting',
                'maintenance mode',
                'custom css',
            ],

        ];

        foreach ($permissions as $group => $perms) {
            foreach ($perms as $perm) {
                $permission = Permission::firstOrCreate(
                    [
                        'name' => $perm,
                        'guard_name' => 'admin',
                    ],
                    [
                        'group_name' => $group,
                    ]
                );

                if ($permission->group_name !== $group) {
                    $permission->group_name = $group;
                    $permission->save();
                }
            }
        }
    }
}
