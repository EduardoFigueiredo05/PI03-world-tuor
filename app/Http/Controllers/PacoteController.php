<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacote;

class PacoteController extends Controller
{
    // Método para a página de detalhes (que recebe o ID)
    public function show($id)
    {
        // Busca o pacote no banco junto com as imagens (se tiver)
        // Se não achar, dá erro 404 automaticamente
        $pacote = Pacote::with('imagePackage.images')->findOrFail($id);

        // Envia a variável $pacote para a view
        return view('site.pacote-click', compact('pacote'));
    }
}