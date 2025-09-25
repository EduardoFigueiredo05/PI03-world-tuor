<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacoteController;


Route::get('/pacotes', [PacoteController::class, 'index']);
