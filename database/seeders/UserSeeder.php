<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();

        User::create([
            'name'     => 'Administrador',
            'email'    => 'admin@productosapp.com',
            'password' => Hash::make('admin123'),
            'rol'      => 'admin',
        ]);

        User::create([
            'name'     => 'Usuario Demo',
            'email'    => 'demo@productosapp.com',
            'password' => Hash::make('demo123'),
            'rol'      => 'user',
        ]);

        $this->command->info('✔ Usuarios creados');
    }
}