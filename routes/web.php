<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/sobre', function(){
    return view('sobre');
})->name('sobre');

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
