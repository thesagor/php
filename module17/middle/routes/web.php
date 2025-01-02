<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Middleware\indoMiddleware;

Route::get('/', function () {
    return view('welcome');
});
Route::get('info', [myController::class, 'info'])->middleware([indoMiddleware::class]);
//Route::get('info2', [myController::class, 'info2']);
//Route::get('info3', [myController::class, 'info3']);
//Route::get('info4', [myController::class, 'info4']);

Route::middleware([indoMiddleware::class])->group(function () {
    Route::get('info2', [myController::class, 'info2']);
    Route::get('info3', [myController::class, 'info3']);
    Route::get('info4', [myController::class, 'info4']);
});
