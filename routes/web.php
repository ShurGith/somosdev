<?php

use App\Http\Controllers\ComunidadController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ComunidadController::class,'index'])->name('comunidad.index');

Route::get('/prueba', function(){

    $post = Post::find(1);
    return $post->categories;
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

Route::get('/index', [ComunidadController::class,'index'])->name('comunidad.index');
Route::get('/show/{post}',[ComunidadController::class, 'show'])->name('comunidad.show');
Route::get('/create',[ComunidadController::class, 'create'])->name('comunidad.create');
Route::post('/store', [ComunidadController::class, 'store'])->name('comunidad.store');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
