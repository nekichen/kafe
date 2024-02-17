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

// Route::get('user', [App\Http\Controllers\UserController::class, 'index']);
Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('categories', \App\Http\Controllers\JenisController::class);
Route::resource('menus', \App\Http\Controllers\MenuController::class);
Route::resource('distributors', \App\Http\Controllers\DistributorController::class);
Route::resource('customers', \App\Http\Controllers\PelangganController::class);
Route::resource('buying', \App\Http\Controllers\BeliController::class);
