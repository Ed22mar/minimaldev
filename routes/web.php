<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
/**Rotas estaticas */
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/sobre', function(){
    return view('sobre');
})->name('sobre');
Route::get('/contato', function(){
    return view('contato');
})->name('contato');

/**Rotas nomeada de posts */
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
