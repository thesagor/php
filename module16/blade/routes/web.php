<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siteController;
use App\Http\Middleware\testMiddleware;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test', [siteController::class, 'test'])->middleware(testMiddleware::class);

/*// Group routes and apply middleware
Route::middleware([testMiddleware::class])->group(function () {
    Route::get('/test', [siteController::class, 'test']);
    Route::get('/test1', [siteController::class, 'test1']);
    Route::get('/test2', [siteController::class, 'test2']);
});*/

Route::get('/test3', [siteController::class, 'test3']);
Route::get('/test', [siteController::class, 'test']);
Route::get('/test1', [siteController::class, 'test1']);
Route::get('/test2', [siteController::class, 'test2']);
