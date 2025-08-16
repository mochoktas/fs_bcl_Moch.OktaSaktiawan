<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\TestController;
Route::get('/', [TestController::class, 'index'])->name('home');
Route::get('/5', [TestController::class, 'index_no_5'])->name('5');
Route::post('/5/store', [TestController::class, 'store_no_5'])->name('5.store');
