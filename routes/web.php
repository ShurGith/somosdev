<?php

use App\Http\Controllers\ComunidadController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function(){

    $post = Post::find(1);
    return $post->categories;
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
