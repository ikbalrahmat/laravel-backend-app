<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create([
            'name'=>'Ikbal Rahmat',
            'email'=>'ikbal@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'phone' => '08123456789',
            'bio' => 'Laravel Developer',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name'=>'Super Admin',
            'email'=>'superadmin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'phone' => '08123456788',
            'bio' => 'Flutter Developer',
            'password' => Hash::make('123456'),
        ]);
    }
}
