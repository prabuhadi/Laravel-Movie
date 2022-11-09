<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;

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
// Coba laravel
Route::get('/',[HomeController::class, 'home']);
Route::get('/home',[HomeController::class, 'home']);
Route::get('/regist', [AuthController::class, 'regist']);
Route::post('/welcome', [AuthController::class, 'welcome']);

// Membuat template dengan laravel
Route::get('/table', function()
{
    return view('page.table');
});
Route::get('/data-table', function()
{
    return view('page.data-table');
});

// Membuat CRUD

//Create Data
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']);


//Read Data
Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/{id}', [CastController::class, 'show']);

//Update Data
Route::get('/cast/{id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{id}', [CastController::class, 'update']);

//Delete Data
Route::delete('/cast/{id}', [CastController::class, 'destroy']);

//For Genre
Route::get('/genre/create', [GenreController::class, 'create']);
Route::post('/genre', [GenreController::class, 'store']);
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
Route::put('/genre/{id}', [GenreController::class, 'update']);
Route::delete('/genre/{id}', [GenreController::class, 'destroy']);

// CRUD Film 
Route::resource('film', FilmController::class);

// Auth dan Middleware 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
