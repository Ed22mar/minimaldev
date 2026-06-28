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

/*Route::get('/user' , function (){
    return view('user');
});*/

/**Rotas nomeada de contato */
Route::get('/contato', [ContatoController::class,'index'])->name('contato.index');

/**Rotas nomeada de posts */
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
