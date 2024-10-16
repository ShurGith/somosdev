<?php

use App\Http\Controllers\ComunidadController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/comunidad', [ComunidadController::class,'index'])->name('comunidad.index');
Route::get('/home', [ComunidadController::class,'home'])->name('pagina.home');
Route::get('/team', [ComunidadController::class,'team'])->name('pagina.team');
Route::get('/categs', [ComunidadController::class,'categs'])->name('pagina.categs');
Route::get('/category/{id}', [ComunidadController::class,'category_simple'])->name('pagina.category');
Route::get('/aboutus', [ComunidadController::class,'aboutus'])->name('pagina.aboutus');
Route::get('/show/{post}', [ComunidadController::class,'show'])->name('pagina.show');
//Route::get('/show/{post}',[ComunidadController::class, 'show'])->name('pagina.show');
Route::get('/', [ComunidadController::class,'home'])->name('pagina.home');

Route::get('/prueba', function(){
    $post = Post::find(1);
    return $post->categories;
});

Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () {

     //   Route::get('/index', [ComunidadController::class,'index'])->name('comunidad.index');
        //Route::get('/show/{post}',[ComunidadController::class, 'show'])->name('comunidad.show');
        Route::get('/create',[ComunidadController::class, 'create'])->name('post.create');
        Route::post('/store', [ComunidadController::class, 'store'])->name('comunidad.store');
        Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
});
