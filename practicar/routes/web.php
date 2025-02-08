<?php

use App\Http\Controllers\CochesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CochesController::class, "listarCoches"]);
