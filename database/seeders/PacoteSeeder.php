<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PacoteSeeder extends Seeder
{
    public function run(): void
    {
        // ==========================================
        // PACOTE 1: Maravilhas de Noronha
        // ==========================================

        // 1. Cria o Grupo de Imagens (A "Pasta")
        $grupoId1 = DB::table('image_packages')->insertGetId([
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Insere as fotos dentro desse grupo
        DB::table('images')->insert([
            [
                'image_package_id' => $grupoId1,
                'file_path' => 'https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?auto=format&fit=crop&w=1470',
                'title' => 'Vista Aérea de Noronha',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_package_id' => $grupoId1,
                'file_path' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1470',
                'title' => 'Praia do Sancho',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_package_id' => $grupoId1,
                'file_path' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=1470',
                'title' => 'Mergulho',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // 3. Cria o Pacote ligando ao Grupo de Imagens
        DB::table('pacotes')->insert([
            'nome' => 'Maravilhas de Noronha',
            'continente' => 'América do Sul',
            'pais' => 'Brasil',
            'descricao' => 'Desfrute das praias mais bonitas do mundo em Fernando de Noronha. Um roteiro exclusivo com mergulho, trilhas e gastronomia local.',
            'preco' => 4500.00,
            'data_inicio' => Carbon::now()->addDays(30),
            'data_fim' => Carbon::now()->addDays(37),
            'image_package_id' => $grupoId1, // <--- O VÍNCULO IMPORTANTE
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ==========================================
        // PACOTE 2: Eurotrip Clássica
        // ==========================================
        
        $grupoId2 = DB::table('image_packages')->insertGetId([
            'created_at' => now(), 'updated_at' => now()
        ]);

        DB::table('images')->insert([
            [
                'image_package_id' => $grupoId2,
                'file_path' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=1473',
                'title' => 'Torre Eiffel',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'image_package_id' => $grupoId2,
                'file_path' => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1470',
                'title' => 'Londres',
                'created_at' => now(), 'updated_at' => now(),
            ]
        ]);

        DB::table('pacotes')->insert([
            'nome' => 'Eurotrip Clássica',
            'continente' => 'Europa',
            'pais' => 'França',
            'descricao' => 'Paris, Londres e Roma em uma única viagem inesquecível. Conheça a história do velho continente.',
            'preco' => 12000.00,
            'data_inicio' => Carbon::now()->addDays(60),
            'data_fim' => Carbon::now()->addDays(75),
            'image_package_id' => $grupoId2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
