<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Middleware\verMiddleware;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/check', [myController::class, 'check'])->middleware([verMiddleware::class]);

Route::get('/info', [MyController::class, 'info'])->middleware('throttle:5,1');

//add group middleware
/*Route::middleware(['info'])->group(function () {
    Route::get('/info', [myController::class, 'info']);
});*/



