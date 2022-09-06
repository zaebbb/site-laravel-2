<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Route::get('/', 'MainController@home');

// Route::get('/', 'MainController@about');

Route::get('/', [MainController::class, 'home']);


Route::get('/about', [MainController::class, 'about']);

Route::get('/review', [MainController::class, 'review'])->name('review');

Route::get('/news', [MainController::class, 'news']);

Route::post('/review/check', [MainController::class, 'review_check']);

// Route::get('/about/{id}/{name}', function ($id, $name) {
//     return 'ID: ' . $id . " name: " . $name;
// });
