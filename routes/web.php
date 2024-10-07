<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//3.2.1 feladat - Egy változó értékének átadása
$username = 'Ricsi';
Route::get('/egyvaltozo', function () {
    $username = 'Ricsi';
    return view('egyvaltozo', [
        'name' => $username
    ]);
});