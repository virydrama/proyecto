<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/biblioteca', [BibliotecaController::class, 'index'])
    ->name('biblioteca.index');*/

Route::resource('biblioteca', LibroController::class);

Route::resource('categorias', \App\Http\Controllers\CategoriaController::class);

Route::resource('nacionalidades', \App\Http\Controllers\NacionalidadeController::class);

Route::resource('autores', \App\Http\Controllers\AutoreController::class);

Route::resource('libros', \App\Http\Controllers\LibroController::class);


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
