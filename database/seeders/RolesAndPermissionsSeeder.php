<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[
            \Spatie\Permission\PermissionRegistrar::class
        ]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'login admin']);
        Permission::create(['name' => 'login instructor']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('login admin');
        $role->givePermissionTo('login instructor');

        // this can be done as separate statements
        $role = Role::create(['name' => 'instructor']);
        $role->givePermissionTo('login instructor');
    }
}
