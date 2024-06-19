<?php

use App\Http\Controllers\NoticiasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
//welcome
Route::get('/',[NoticiasController::class,'welcome'])->name('noticias');


// noticias
Route::get('/novedades',[NoticiasController::class,'index'])->name('noticias');
Route::post('/novedades/add_noticia',[NoticiasController::class,'addNoticia'])->name('noticias');

Route::get('/novedades/editar_noticia/{idNoticia}',[NoticiasController::class,'editarNoticia'])->name('noticias');
Route::post('/novedades/add_edit_noticia',[NoticiasController::class,'guardarEditarNoticia'])->name('noticias');

Route::delete('/novedades/eliminar/{idNoticia}',[NoticiasController::class,'eliminarNoticia'])->name('noticias');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
