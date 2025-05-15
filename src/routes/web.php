<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/register', [ContactController::class, 'register']);
Route::post('/register', [LoginController::class, 'register']);
Route::get('/login', [ContactController::class, 'login']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::post('/admin', [ContactController::class, 'admin']);