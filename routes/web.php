<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacoteController;
use App\Http\Controllers\Admin\AdminPacoteController;
use App\Http\Controllers\Admin\UsuarioController;

// --- HOME ---
Route::get('/', [HomeController::class, 'index'])->name('home');

// --- PACOTES (PÚBLICO) ---
Route::view('/pacotes', 'site.pacotes')->name('site.pacotes');
Route::get('/pacote/{id}', [PacoteController::class, 'show'])->name('site.pacote.show');

// --- CONTINENTES ---
Route::prefix('continente')->name('site.continente.')->group(function () {
    Route::view('/asia', 'site.continente.asia')->name('asia');
    Route::view('/africa', 'site.continente.africa')->name('africa');
    Route::view('/europa', 'site.continente.europa')->name('europa');
    Route::view('/america-sul', 'site.continente.america-sul')->name('america-sul');
    Route::view('/america-norte', 'site.continente.america-norte')->name('america-norte');
    Route::view('/oceania', 'site.continente.oceania')->name('oceania');
});

// --- CLIENTE LOGADO ---
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/meus-pacotes', function () { return view('site.meus-pacotes'); })->name('site.user.packages');
    
    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- ADMIN ---
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('pacotes', AdminPacoteController::class);
    Route::resource('usuarios', UsuarioController::class);
});

// --- AUTH (Breeze) ---
require __DIR__.'/auth.php';