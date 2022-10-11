<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\PermissionRole;
use App\Models\Stock;
use App\Models\StockItem;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        PermissionRole::create([
            'role_id' => Role::where('name', 'super-admin')->value('id'),
            'permission_id' => Permission::where('name', '*')->value('id'),
            'model' => Department::class
        ]);
        PermissionRole::create([
            'role_id' => Role::where('name', 'super-admin')->value('id'),
            'permission_id' => Permission::where('name', '*')->value('id'),
            'model' => Stock::class
        ]);
        PermissionRole::create([
            'role_id' => Role::where('name', 'super-admin')->value('id'),
            'permission_id' => Permission::where('name', '*')->value('id'),
            'model' => StockItem::class
        ]);
        PermissionRole::create([
            'role_id' => Role::where('name', 'super-admin')->value('id'),
            'permission_id' => Permission::where('name', '*')->value('id'),
            'model' => PermissionRole::class
        ]);
        PermissionRole::create([
            'role_id' => Role::where('name', 'super-admin')->value('id'),
            'permission_id' => Permission::where('name', '*')->value('id'),
            'model' => User::class
        ]);
    }
}
