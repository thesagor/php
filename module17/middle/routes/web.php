<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Middleware\indoMiddleware;

Route::get('/', function () {
    return view('welcome');
});
Route::get('info', [myController::class, 'info'])->middleware([indoMiddleware::class]);
