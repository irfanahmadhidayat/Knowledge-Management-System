<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    private $permissions = [
        'dashboard' => [
            'view',
        ],

        'user' => [
            'view',
            'create',
            'update',
            'delete',
        ],

        'role' => [
            'view',
            'create',
            'update',
            'delete',
        ],

        'material' => [
            'view',
            'create',
            'update',
            'delete',
        ],

        'penugasan' => [
            'view',
            'create',
            'update',
            'delete',
        ],

        'hasilPenugasan' => [
            'view',
            'create',
            'update',
            'delete',
        ],

        'designMaterial' => [
            'view',
            'create',
            'update',
            'delete',
        ],

        'designPenugasan' => [
            'view',
            'create',
            'update',
            'delete',
        ],

        'rndMaterial' => [
            'view',
            'create',
            'update',
            'delete',
        ],

        'rndPenugasan' => [
            'view',
            'create',
            'update',
            'delete',
        ],
    ];
    public function run(): void
    {
        foreach ($this->permissions as $key => $value) {
            foreach ($value as $permission) {
                Permission::firstOrCreate([
                    'name' => $key . '-' . $permission,
                ]);
            }
        }

        Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ])->givePermissionTo(Permission::all());
    }
}
