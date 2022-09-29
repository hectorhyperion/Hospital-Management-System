<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Http\Controllers\UserController;


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

Route::get('/', [Index::class, 'index'])->middleware('auth');
//show register view
Route::get('register', [UserController::class , 'register']);
//create New User
Route::post('/users',[UserController::class, 'store']);
//show login view
Route::get('/login', [UserController::class , 'login'])->name('login');

//logout
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');
//login function
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
