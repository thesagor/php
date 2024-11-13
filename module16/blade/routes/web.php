<?php

use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siteController;
use App\Http\Middleware\testMiddleware;


Route::get('/', function () {
    return view('index');
});
Route::post('/', [sessionController::class, 'formvalidate']);

Route::get('flash', [sessionController::class, 'setflash']);
Route::view('gotflash', 'session');
