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
Route::get('/About/funfact{id}', function ($id) {
    $funfact = [
        ["name" => "Funfact 1", "fact" => "I love to play basketball", "id" => 1],
        ["name" => "Funfact 2", "fact" => "I can play the guitar", "id" => 2],
        ["name" => "Funfact 3", "fact" => "I like the color blue", "id" => 3],
    ];
    
    $selectedFact = collect($funfact)->firstWhere('id', $id);
    
    if (!$selectedFact) {
        abort(404);
    }
    
    return view('components.details', ["funfact" => $selectedFact]);
});



