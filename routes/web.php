<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


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
