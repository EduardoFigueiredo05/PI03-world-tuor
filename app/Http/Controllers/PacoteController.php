<?php

namespace App\Http\Controllers;
use App\Models\Pacote;
use Illuminate\Http\Request;

class PacoteController extends Controller
{
    public function index(){
        //Pega todos os pacotes do banco de dados
        $pacotes = Pacote::all();

        //Retorna a view 'pacotes.pacote' e passa a variável $pacotes para ela

        return view('pacotes.pacote', compact ('pacotes'));

    }
}
