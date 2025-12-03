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
| ROTAS PRINCIPAIS DO PROJETO (DIDÁTICAS)
|--------------------------------------------------------------------------
| Aqui ficam as rotas principais do sistema Laravel.
| Inclui:
| - Página inicial
| - Autenticação
| - Rotas protegidas por login
| - Área administrativa real (Controllers)
| - Rotas adicionais do template HTML (views estáticas)
*/

/*
|--------------------------------------------------------------------------
| Página Inicial (Home)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Registro (Página customizada)
|--------------------------------------------------------------------------
*/
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
// Route::post('/register', [AuthController::class, 'register'])->name('register'); // opcional

/*
|--------------------------------------------------------------------------
| Área Protegida (Usuário precisa estar logado)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Dashboard do usuário autenticado
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rotas de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Área Administrativa (Controllers de verdade)
| - CRUD Pacotes
| - CRUD Usuários
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        // CRUD de pacotes (real, usando Controller)
        Route::resource('pacotes', PacoteController::class);

        // CRUD de usuários (real, usando Controller)
        Route::resource('usuarios', UsuarioController::class);
    });

/*
|--------------------------------------------------------------------------
| Rotas de Autenticação do Laravel Breeze
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';


/*
|--------------------------------------------------------------------------
| ROTAS DO TEMPLATE FRONT-END (HTML → BLADE)
|--------------------------------------------------------------------------
| Essas rotas apenas carregam páginas estáticas (layout Blade)
| NÃO são controllers reais ainda.
| São usadas para navegação das telas feitas no template do projeto.
*/

/* -----------------------
|  Telas de Continentes
------------------------*/
Route::prefix('continente')->group(function () {

    // Ajuste: 'site.continente.asia' significa pasta site > pasta continente > arquivo asia
    Route::view('/asia', 'site.continente.asia')->name('continente.asia');
    Route::view('/africa', 'site.continente.africa')->name('continente.africa');
    Route::view('/europa', 'site.continente.europa')->name('continente.europa');
    Route::view('/america-sul', 'site.continente.america-sul')->name('continente.america-sul');
    Route::view('/america-norte', 'site.continente.america-norte')->name('continente.america-norte');
    Route::view('/oceania', 'site.continente.oceania')->name('continente.oceania');
});

/* -----------------------
|  Telas de Pacotes (Front)
------------------------*/
Route::view('/pacotes', 'site.pacotes')->name('site.pacotes');
Route::view('/pacote/{id}', 'site.pacote-click')->name('site.pacote.show');

/* -----------------------
|  Telas do Usuário (Front)
------------------------*/
Route::view('/meus-pacotes', 'site.meus-pacotes')->name('site.user.packages');
Route::view('/perfil-popup', 'site.perfil-popup')->name('site.user.perfil');

/* -----------------------
|  Telas ADM do Template (não é a área admin real)
------------------------*/
Route::prefix('/template-admin')->group(function () {
    Route::view('/dashboard', 'site.view_adm')->name('template.admin.dashboard');
    Route::view('/add-pacote', 'site.adicionar_pacote')->name('template.admin.pacotes.create');
    Route::view('/add-adm', 'site.adicionar_adm')->name('template.admin.usuarios.create');
    Route::view('/add-categoria', 'site.adicionar_categoria')->name('template.admin.categorias.create');
    Route::view('/editar-pacote', 'site.Editar_pacote')->name('template.admin.pacotes.edit');
});
Route::get('/teste', function () {
    return view('site.teste');
});
Route::get('/', function () {
    return view('site.home');
})->name('home');
Route::get('/meus-pacotes', function () {
    return view('site.meus-pacotes'); // Ajuste o nome da view correta!
})->name('meus-pacotes');