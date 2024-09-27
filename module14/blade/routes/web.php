<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\siteController;

Route::get('/', [siteController::class, 'homePage']);
Route::get('/about', [siteController::class, 'aboutPage']);
Route::get('/contact', [siteController::class, 'contactPage']);
Route::get('/testimonial', [siteController::class, 'testimonialPage']);
