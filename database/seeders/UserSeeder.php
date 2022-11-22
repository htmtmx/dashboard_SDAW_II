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
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Erick Ocelotl',
            'email' => 'ocelotl@gmail.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Pineda Pacheco',
            'email' => 'cesar@gmail.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Blancas Martínez',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'García Martínez',
            'email' => 'paola@gmail.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Dala Torri',
            'email' => 'christopher@gmail.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'Sebastián Cruz',
            'email' => 'andrea@gmail.com',
            'password' => Hash::make('admin123'),
        ])->assignRole('Admin');


        User::factory(10)->create();
    }
}
