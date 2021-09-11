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

Route::get('/',[\App\Http\Controllers\DevconController::class,'index']);
Route::post('/post',[\App\Http\Controllers\DevconController::class,'post']);

Route::get('/view',[\App\Http\Controllers\DevconController::class,'view']);
