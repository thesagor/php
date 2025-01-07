<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Middleware\verMiddleware;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/check', [myController::class, 'check'])->middleware([verMiddleware::class]);

//add group middleware
/*Route::middleware(['info'])->group(function () {
    Route::get('/info', [myController::class, 'info']);
});*/



