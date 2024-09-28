<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;

Route::get('/profile/{id}', [ProfileController::class, 'index']);
