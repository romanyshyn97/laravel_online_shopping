<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'products']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/logout',[UserController::class, "logout"]);
Route::get('/register-form', [UserController::class, 'showRegisterForm']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/men', [ProductController::class, 'getMenProducts']);
Route::get('/women', [ProductController::class, 'getWomenProducts']);
Route::get('/accessories', [ProductController::class, 'getAccessories']);
Route::get('/{product}', [ProductController::class, 'showSingleProduct']);
