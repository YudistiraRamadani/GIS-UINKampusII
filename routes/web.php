<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/maps', function () {
//     return view('maps');
// });

use App\Http\Controllers\UserController;
use App\Models\Buildings; // Import model Buildings
use Illuminate\Support\Facades\Route;


// Route::get('/maps', function () {


//     // Kembalikan view index dengan data markers

// });

Route::get('/maps', [UserController::class, 'viewMarkers'])->name('user.markers');
Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/search', [UserController::class, 'search'])->name('user.search');
