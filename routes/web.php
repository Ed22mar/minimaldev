<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;



/**
 * rotas user
 */

Route::middleware('guest')->group(function(){
    // simples exibição de formulário de login
    Route::get('/login', function(){
        return view('auth.login');
    })->name('login');

    // handler básico para submissão de login (implemente conforme necessário)
    Route::post('/login', function(){
        return redirect()->route('home');
    });

    //Router::get('/register',[AuthController::class, 'showRegister'])->name('register');
    //Router::post('/register',[AuthController::class, 'register']);
});
/**Rotas estaticas */
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/sobre', function(){
    return view('sobre');
})->name('sobre');

Route::get('/user', function (){
    return view('user');
})->name('user');

/**Rotas nomeada de contato */
Route::get('/contato', [ContatoController::class,'index'])->name('contato.index');
/**Rotas nomeada de posts */
route::get('/posts/manage', [PostController::class, 'manage'])->name('posts.manage');

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');

Route::post('/posts',[PostController::class,'store'])->name('posts.store');

Route::get('/posts/{post}',[PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');
Route::delete('/post/{post}',[PostController::class,'destroy'])->name('posts.destroy');
