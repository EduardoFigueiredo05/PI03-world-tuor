<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct()
    {
        // aplica middleware de autenticação + admin (ajuste os nomes conforme seu Kernel)
        $this->middleware(['auth', 'admin']); 
    }

    
    //isplay a listing of the users.
    
    public function index(Request $request)
    {
        // pesquisa simples por nome/email (opcional)
        $query = User::query();

        if ($q = $request->input('q')) {
            $query->where(function($w) use ($q) {
                $w->where('name', 'like', "%{$q}%")
                  ->orWhere('email', 'like', "%{$q}%");
            });
        }

        // paginação
        $users = $query->orderBy('id', 'desc')->paginate(15)->withQueryString();

        // retorna view admin.usuarios.index
        return view('admin.usuarios.index', compact('users', 'q'));
    }

    // outros métodos (show, edit, update, destroy) podem ser acrescentados depois
}
