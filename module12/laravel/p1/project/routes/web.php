<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newController;

Route::get('/', function () {
    return view('welcome');
});
Route::match(['get', 'post'], '/optional/{id?}', [newController::class, 'optional']);
Route::get('/pages', [newController::class, 'page']);


