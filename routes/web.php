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

//3.2.2 feladat - Tömb adatok átküldése és kiíratása
Route::get('/tombatadas', function () {
    $tasks = [
    'elem 1',
    'elem 2',
    'elem 3'
    ];
    return view('tomb', [
        'feladatok' => $tasks
    ]);
});