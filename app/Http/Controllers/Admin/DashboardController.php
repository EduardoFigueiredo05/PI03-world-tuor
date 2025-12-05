<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pacote;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Busca dados reais para os Cards/Tabelas
        $totalPacotes = Pacote::count();
        $totalUsuarios = User::count();
        
        // Pega os 5 últimos pacotes cadastrados para a tabela
        $ultimosPacotes = Pacote::latest()->take(5)->get();
        
        // Pega os 5 últimos usuários cadastrados
        $ultimosUsuarios = User::latest()->take(5)->get();

        // 2. Retorna a view com esses dados
        return view('site.view_adm', compact(
            'totalPacotes', 
            'totalUsuarios', 
            'ultimosPacotes', 
            'ultimosUsuarios'
        ));
    }
}