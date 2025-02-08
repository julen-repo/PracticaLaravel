<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CholloController;
use App\Http\Controllers\CategoriaController;

Route::resource('chollos', CholloController::class);
Route::get('/', [CholloController::class, 'index'])->name('home');
Route::get('/chollos/nuevos', [CholloController::class, 'index'])->name('chollos.nuevos');
Route::get('/chollos/destacados', [CholloController::class, 'index'])->name('chollos.destacados');
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/crear', [CholloController::class, 'create'])->name('chollos.crear');
Route::post('/regresar', function () {return redirect()->route('home');})->name('regresar');
Route::resource('categorias', CategoriaController::class);

