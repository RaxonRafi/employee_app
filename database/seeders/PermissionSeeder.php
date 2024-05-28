<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creating permissions
        Permission::create([
            'name'=> 'create_user',
        ]);
        Permission::create([
            'name'=> 'delete_user',
        ]);
        Permission::create([
            'name'=> 'edit_user',
        ]);
        Permission::create([
            'name'=> 'create_role',
        ]);
        Permission::create([
            'name'=> 'edit_role',
        ]);
        Permission::create([
            'name'=> 'delete_role',
        ]);
        //assiging permissions to roles
        $admin = Role::where('name','admin')->first();
        $admin->givePermissionTo([
            'create_user',
            'delete_user',
            'edit_user',
            'create_role',
            'edit_role',
            'delete_role',
        ]);

    }
}
