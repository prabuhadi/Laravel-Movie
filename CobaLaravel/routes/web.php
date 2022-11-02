<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
