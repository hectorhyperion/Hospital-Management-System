<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;


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

Route::get('/', [Index::class, 'index']);
//client view
Route::get('/Dashboard', [PagesController::class, 'Dashboard'])->middleware('auth');
//admin view 
Route::get('/admin/index', [PagesController::class , 'adminIndex'])->middleware('auth');
//show register view
Route::get('register', [PagesController::class , 'register'])->middleware('guest');
//create New User
Route::post('/users',[UserController::class, 'store']);
//show login view
Route::get('/login', [PagesController::class , 'login'])->name('login')->middleware('guest');
//book and appointment
Route::post('/appointment',[HomeController::class,'appointment']);
//logout
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth')->name('logout');
//login function
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
//show add doctors pages
Route::get('/admin/addDoctor', [PagesController::class , 'addDoctor'])->middleware('auth');
//add Doctors
Route::post('/addDoctor',[ AdminController::class , 'store'])->middleware('auth');
//view appointment
Route::get('/viewAppointment',[HomeController::class, 'viewAppointment'])->middleware('auth');
//cancel appointments
Route::get('/cancelAppointment/{id}',[HomeController::class, 'cancelAppointment'])->middleware('auth');
//admin view appointments
Route::get('/adminAppointmentView',[AdminController::class, 'adminAppointmentView']);
//approve appointments
Route::get('/approved/{id}',[AdminController::class, 'approved']);
//cancle appointments
Route::get('/cancelled/{id}',[AdminController::class, 'cancelled']);