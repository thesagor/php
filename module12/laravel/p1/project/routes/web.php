<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\helloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/image', [helloController::class, 'myimage']);
Route::get('/array/{name}/{nick}/{age}', [helloController::class, 'arrayWork']);
Route::post('/json', [helloController::class, 'jbody']);
