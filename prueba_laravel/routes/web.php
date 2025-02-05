<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CholloController;

Route::resource('chollos', CholloController::class);
Route::get('/', [CholloController::class, 'index'])->name('home');
Route::get('/chollos/nuevos', [CholloController::class, 'index'])->name('chollos.nuevos');
Route::get('/chollos/destacados', [CholloController::class, 'index'])->name('chollos.destacados');
