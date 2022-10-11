<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Artisan::call('make:filament-user superadmin superadmin@admin.com password');
        $user = User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@arz.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role_id' => Role::whereName('super-admin')->value('id')
        ]);
    }
}
