<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PacoteController;
use App\Http\Controllers\Admin\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Comentários em Português (didáticos):
| - Aqui definimos as rotas acessíveis via navegador (HTTP).
| - Rotas de autenticação extras ficam em routes/auth.php (padrão Laravel).
*/

// Rota da página inicial (home pública)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Tela de registro customizada (se usada)
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
// Exemplo de rota de post de registro (ajuste se já existir em auth.php)
// Route::post('/register', [AuthController::class, 'register'])->name('register');

// Grupo de rotas que exigem usuário autenticado
Route::middleware(['auth'])->group(function () {

    // Dashboard principal
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rotas de perfil (exemplo: ver/editar perfil do usuário)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rotas da área administrativa (apenas usuários admin)
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        // CRUD de pacotes
        Route::resource('pacotes', PacoteController::class);

        // CRUD de usuários (ajuste os métodos permitidos conforme seu controller)
        Route::resource('usuarios', UsuarioController::class);
    });

// Rotas de autenticação padrão geradas pelo Breeze / Laravel (login, logout, etc)
require __DIR__ . '/auth.php';
