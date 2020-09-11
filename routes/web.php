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

Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');



<<<<<<< HEAD
//backend

// Route::get('create', 'BackendController@createfun')->name('createpage');
=======
Route::get('/', 'PageController@mainfun')->name('mainpage');

Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');



Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

Route::resource('appointments', 'AppointmentController');

 Route::resource('categories','CategoriesController');
>>>>>>> adf2a71138a74024fcf35e9da2e3a218032d5c39

// Route::get('index', 'BackendController@indexfun')->name('indexpage');

<<<<<<< HEAD
=======


Route::resource('categories','CategoryController');
Route::resource('employies','EmployeeController');
Route::resource('services','ServiceController');
>>>>>>> adf2a71138a74024fcf35e9da2e3a218032d5c39


Route::resource('categories','CategoryController');
