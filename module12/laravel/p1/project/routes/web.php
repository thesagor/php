<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::GET("/gre", [\App\Http\Controllers\helloController::class, 'sayhi']);
