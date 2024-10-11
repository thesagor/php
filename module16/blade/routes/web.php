<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siteController;
use App\Http\Middleware\testMiddleware;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test', [siteController::class, 'test'])->middleware(testMiddleware::class);

Route::middleware('throttle:2,1')->group(function () {
    Route::get('/', [siteController::class, 'index']);
});
