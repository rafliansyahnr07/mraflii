<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('image-store', [App\Http\Controllers\ImageController::class, 'storeImage'])->name('image-store')->middleware('auth');
Route::delete('image-delete/{id}', [App\Http\Controllers\ImageController::class, 'deleteImage'])->name('image-delete')->middleware('auth');
