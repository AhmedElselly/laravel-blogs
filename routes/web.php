<?php

// use App\Models\Post;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [UserController::class, 'loginPage']);
Route::get('/register', [UserController::class, 'registerPage']);

Route::post('/login/user', [UserController::class, 'login']);
Route::post('/register/user', [UserController::class, 'create']);
Route::post('/logout/user', [UserController::class, 'logout']);

Route::post('/create', [PostController::class, 'store']);

Route::get('/create/form', [PostController::class, 'form']);

Route::get('/', [PostController::class, 'index']);
