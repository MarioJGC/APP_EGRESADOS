<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{



    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Jefe Proceso']);
        Permission::create(['name' => 'admin.home'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'actas'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'cronogramas/egresados'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'egresados'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'empresas'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'evaluaciones/egresados'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'evaluaciones/trabajos'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'formatos/evaluaciones'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'juntas/directivas'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'planes/trabajos'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'requisitos/egresados'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'reuniones'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'tipos/cargo'])->syncRoles([$role1,$role2]);

    }
}
