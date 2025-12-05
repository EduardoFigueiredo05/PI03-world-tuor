<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Cria o Mestre (Admin)
        User::create([
            'name' => 'Admin Master',
            'email' => 'admin@worldtour.com',
            'password' => Hash::make('password'), // Senha padrão
            'is_admin' => true, // <--- O SUPER PODER
        ]);

        // Cria um Cliente Comum (para teste)
        User::create([
            'name' => 'Cliente Teste',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
    }
}