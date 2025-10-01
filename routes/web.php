<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunfactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About', [FunfactController::class, 'index']) ->name('funfact.index');
Route::get('/About/create', [FunfactController::class, 'create']) ->name('funfact.create');
Route::post('/About/store', [FunfactController::class, 'store'])->name('funfact.store');
Route::get('/About/{funfact}', [FunfactController::class, 'show'])->name('funfact.show');



