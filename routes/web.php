<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('update_profile', [App\Http\Controllers\HomeController::class, 'view_update_profile'])->name('view_update_profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//help page
Route::get('help', [App\Http\Controllers\PageController::class, 'help'])->name('help');

//under construction
Route::get('submit', [App\Http\Controllers\PageController::class, 'submit'])->name('submit');
Route::post('update-profile', [App\Http\Controllers\HomeController::class, 'update_profile'])->name('update_profile');