<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    private $permissions = [
        'dashboard' => ['view'],
        'user' => ['view', 'create', 'update', 'delete'],
        'role' => ['view', 'create', 'update', 'delete'],
        'material' => ['view', 'create', 'update', 'delete'],
        'penugasan' => ['view', 'create', 'update', 'delete'],
        'hasilPenugasan' => ['view', 'create', 'update', 'delete'],
        'designMaterial' => ['view', 'create', 'update', 'delete'],
        'designPenugasan' => ['view', 'create', 'update', 'delete'],
        'rndMaterial' => ['view', 'create', 'update', 'delete'],
        'rndPenugasan' => ['view', 'create', 'update', 'delete'],
    ];

    private $defaultRoles = [
        'admin',
        'karyawan'
    ];

    public function run(): void
    {
        // Membuat Permissions
        foreach ($this->permissions as $key => $value) {
            foreach ($value as $permission) {
                Permission::firstOrCreate([
                    'name' => $key . '-' . $permission,
                    'guard_name' => 'web'
                ]);
            }
        }

        foreach ($this->defaultRoles as $role) {
            Role::firstOrCreate([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }

        $adminRole = Role::where('name', 'admin')->first();
        if ($adminRole) {
            $adminRole->syncPermissions(Permission::all());
        }

        $karyawanRole = Role::where('name', 'karyawan')->first();
        if ($karyawanRole) {
            $dashboardPermission = Permission::where('name', 'dashboard-view')->first();
            if ($dashboardPermission) {
                $karyawanRole->syncPermissions([$dashboardPermission]);
            }
        }
    }
}
