<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('make:filament-user', [
            'Name' => 'superadmin',
            'Email address' => 'superadmin@admin.com',
            'Password' => 'password'
        ]);
//        $user = User::create([
//            'name' => 'superadmin',
//            'email' => 'superadmin@arz.com',
//            'password' => 'password'
//        ]);
    }
}
