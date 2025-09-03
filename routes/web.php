<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/About', function () {
    $funfact = [
        ["name" => "Funfact 1", "fact" => "I love to play basketball", "id" => 1],
        ["name" => "Funfact 2", "fact" => "I can play the guitar", "id" => 2],
        ["name" => "Funfact 3", "fact" => "I like the color blue", "id" => 3],
    ];
    return view('components.about', ["funfact" => $funfact]);
});

Route::get('/About/{id}', function ($id) {
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