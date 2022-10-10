<?php

use App\Http\Controllers\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\VerificationController;


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
//show all doctors form databse
Route::get('/allDoctors', [AdminController::class, 'allDoctors'])->middleware('auth');

//show create speciality view
Route::get('/speciality', [PagesController::class, 'speciality'])->middleware('auth');
//store speciality 
Route::Post('/storespeciality', [AdminController::class, 'storespeciality'])->middleware('auth');
//editing doctor data
Route::get('/editDoctor/{id}',[PagesController::class, 'editDoctor'])->middleware('auth');
//updating docotor's data
Route::post('updateDoctors/{id}',[AdminController::class,'updateDoctors'])->middleware('auth');
//deleting doctor data
Route::delete('/deleteDoctor/{id}',[AdminController::class,'deleteDoctor'])->middleware('auth');
//view appointment
Route::get('/viewAppointment',[HomeController::class, 'viewAppointment'])->middleware('auth');
//cancel appointments
Route::get('/cancelAppointment/{id}',[HomeController::class, 'cancelAppointment'])->middleware('auth');
//admin view appointments
Route::get('/adminAppointmentView',[AdminController::class, 'adminAppointmentView'])->middleware('auth');
//approve appointments
Route::get('/approved/{id}',[AdminController::class, 'approved'])->middleware('auth');
//cancle appointments
Route::get('/cancelled/{id}',[AdminController::class, 'cancelled'])->middleware('auth');
//send mail for appointments
Route::get('/mailView/{id}',[AdminController::class, 'mailView'])->middleware('auth');
//send email
Route::post('/sendmail/{id}',[AdminController::class, 'sendmail'])->middleware('auth');

//verfication
Route::group(['middleware'=>['auth']],function(){
/**
 * verfication Routes
 */
Route::get('/email/verify',[VerificationController::class,'show'])->name('verification.notice');
Route::get('/emai/verify/{id}/{hash}', [VerificationController::class,'verify'])->name('verification.verify')->middleware(['signed']);
Route::post('/email/resend',[VerificationController::class, 'resend'])->name('verification.resend');
});
//only authenticated can access this group
Route::group(['middleware' => ['auth']], function() {
    //only verified account can access with this group
    Route::group(['middleware' => ['verified']], function() {
            /**
             * Dashboard Routes
             */
            Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('users.dashboard');
    });
});