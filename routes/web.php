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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [App\Http\Controllers\PageController::class, 'front_page'])->name('index');

Auth::routes();

Route::get('update_profile', [App\Http\Controllers\HomeController::class, 'view_update_profile'])->name('view_update_profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//help page
Route::get('help', [App\Http\Controllers\PageController::class, 'help'])->name('help');

//under construction
Route::get('submit', [App\Http\Controllers\PageController::class, 'submit'])->name('submit');

//batchprofile
Route::get('batch-profile', [App\Http\Controllers\PageController::class, 'batch_profile'])->name('batch_profile');
//slidepage
Route::get('slide-page', [App\Http\Controllers\PageController::class, 'slide_page'])->name('slide_page');

//notepage
Route::get('notes-page', [App\Http\Controllers\PageController::class, 'notes_page'])->name('notes_page');

//crdrives
Route::get('recent-drive', [App\Http\Controllers\PageController::class, 'recent_drives_page'])->name('recent_drives_page');

//under-construction
Route::get('under-construction', [App\Http\Controllers\PageController::class, 'under_construction'])->name('under_construction');



Route::post('update-profile', [App\Http\Controllers\HomeController::class, 'update_profile'])->name('update_profile');
