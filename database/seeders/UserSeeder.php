<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('make:filament-user superadmin superadmin@admin.com password');
//        $user = User::create([
//            'name' => 'superadmin',
//            'email' => 'superadmin@arz.com',
//            'password' => 'password'
//        ]);

//        Role::create(['name' => 'super-admin']);
//        $user->assignRole('super-admin');
    }
}
