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

// frontend
Route::get('/', [App\Http\Controllers\HomeController::class, 'Homeidx']);
Route::get('/trang-chu', [App\Http\Controllers\HomeController::class, 'Homeidx']);

//backend
Route::get('/login', [App\Http\Controllers\AdminController::class, 'Adminidx']);
// Route::post('/login', [App\Http\Controllers\AdminController::class, 'Adminidx']);
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'show_Dashboard']);
Route::post('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'dashboard']);
Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);