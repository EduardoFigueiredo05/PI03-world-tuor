<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacoteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pacotes')->insert([
            [
            'nome' => 'Trip Jalapão',
            'continente' => 'América do Sul',
            'pais' => 'Brasil',
            'descricao' => 'Aventura no deserto do Jalapão, com dunas e rios de água cristalina.',
            'preco'=> 25000.00,
            'data_inicio' => '2025-10-15',
            'data_fim' => '2025-10-20',
            'created_at' => now(),
            'updated_at' => now(),
        ],
            [
                'nome' => 'Marrocos Mágico',
                'continente' => 'África',
                'pais' => 'Marrocos',
                'descricao' => 'Explore as cidades imperiais de Marrocos, de Marrakech a Fez.',
                'preco' => 3800.00,
                'data_inicio' => '2025-11-05',
                'data_fim' => '2025-11-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Descobertas na Ásia',
                'continente' => 'Ásia',
                'pais' => 'Japão',
                'descricao' => 'Uma jornada pela história e cultura do Japão, visitando templos antigos e metrópoles futuristas.',
                'preco' => 6000.00,
                'data_inicio' => '2025-12-01',
                'data_fim' => '2025-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
            
    }
}
