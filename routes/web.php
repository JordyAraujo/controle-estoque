<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaisController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/materiais', [MateriaisController::class, 'index']);
Route::get('/materiais/criar', [MateriaisController::class, 'create']);