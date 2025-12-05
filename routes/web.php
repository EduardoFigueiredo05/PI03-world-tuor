<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacoteController; // Controller Público
use App\Http\Controllers\Admin\AdminPacoteController; // Controller Admin
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| ROTAS PÚBLICAS (Visitantes)
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Vitrine de Pacotes (Lista de Continentes)
Route::view('/pacotes', 'site.pacotes')->name('site.pacotes');

// Detalhes do Pacote (Dinâmico)
Route::get('/pacote/{id}', [PacoteController::class, 'show'])->name('site.pacote.show');

// Carrinho / Meus Pacotes (CORREÇÃO DO ERRO DO HEADER AQUI)
Route::view('/meus-pacotes', 'site.meus-pacotes')->name('site.user.packages');

// Continentes
Route::prefix('continente')->name('site.continente.')->group(function () {
    Route::view('/asia', 'site.continente.asia')->name('asia');
    Route::view('/africa', 'site.continente.africa')->name('africa');
    Route::view('/europa', 'site.continente.europa')->name('europa');
    Route::view('/america-sul', 'site.continente.america-sul')->name('america-sul');
    Route::view('/america-norte', 'site.continente.america-norte')->name('america-norte');
    Route::view('/oceania', 'site.continente.oceania')->name('oceania');
});

/*
|--------------------------------------------------------------------------
| ÁREA LOGADA (Cliente)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ÁREA ADMINISTRATIVA (Admin)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin']) // Proteção
    ->group(function () {
        
        // Dashboard Admin (Onde paramos!)
        // Aponta para a view que vamos trabalhar: 'admin.dashboard' ou 'site.view_adm'
        Route::get('/dashboard', function() {
            return view('site.view_adm'); 
        })->name('dashboard');

        // CRUDs
        Route::resource('pacotes', AdminPacoteController::class);
        Route::resource('usuarios', UsuarioController::class);
    });

require __DIR__.'/auth.php';