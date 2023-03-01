<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
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

// * home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// * comics routes
// Route::resource('comics', ComicController::class);

// route for comics list
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// route for create new comic form
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// route for comic detail
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// route to store a new comic in db
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
