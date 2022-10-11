<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use App\Models\Stock;
use App\Models\StockItem;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => '*'
        ]);
        Permission::create([
            'name' => 'create'
        ]);
        Permission::create([
            'name' => 'update'
        ]);
        Permission::create([
            'name' => 'read'
        ]);
        Permission::create([
            'name' => 'delete'
        ]);
        Permission::create([
            'name' => 'report'
        ]);

        Role::create([
            'name' => 'super-admin'
        ]);

        $superAdmin = Role::whereName('super-admin')->first();
        PermissionRole::create([
            'role_id' => $superAdmin->id,
            'permission_id' => Permission::where('name', '*')->value('id'),
            'model' => Department::class
        ]);
        PermissionRole::create([
            'role_id' => $superAdmin->id,
            'permission_id' => Permission::where('name', '*')->value('id'),
            'model' => Stock::class
        ]);
        PermissionRole::create([
            'role_id' => $superAdmin->id,
            'permission_id' => Permission::where('name', '*')->value('id'),
            'model' => StockItem::class
        ]);
        PermissionRole::create([
            'role_id' => $superAdmin->id,
            'permission_id' => Permission::where('name', '*')->value('id'),
            'model' => PermissionRole::class
        ]);
        PermissionRole::create([
            'role_id' => $superAdmin->id,
            'permission_id' => Permission::where('name', '*')->value('id'),
            'model' => User::class
        ]);
    }
}
