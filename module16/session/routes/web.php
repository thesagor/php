<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sessionController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('setsession', [sessionController::class, 'setsession']);
Route::get('getsession', [sessionController::class, 'getsession']);
Route::get('update', [sessionController::class, 'updateSession']);
Route::get('delete', [sessionController::class, 'deleteSession']);

Route::get('dekho', [sessionController::class, 'dekha']);
