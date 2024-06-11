<?php

use App\Http\Controllers\NoticiasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// noticias
Route::get('/novedades',[NoticiasController::class,'index'])->name('noticias');
Route::post('/novedades/add_noticia',[NoticiasController::class,'addNoticia'])->name('noticias');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
