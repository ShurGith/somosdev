<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunidadController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [ComunidadController::class,'index'])->name('comunidad.index');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
