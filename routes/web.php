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
Route::get('/', 'PageController@mainfun')->name('mainpage');


//backend by poeei

Route::get('/', 'PageController@mainfun')->name('mainpage');


 	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');

	Route::resource('employees','EmployeeController');

	Route::resource('appointments','AppointmentController');
//backend

// Route::get('create', 'BackendController@createfun')->name('createpage');



Route::get('/', 'PageController@mainfun')->name('mainpage');





 // end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');
Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');



Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

Route::resource('appointments', 'AppointmentController');
Route::resource('customers', 'AppointmentController');

// Route::get('index', 'BackendController@indexfun')->name('indexpage');


Route::resource('categories','CategoryController');
Route::resource('employees','EmployeeController');
Route::resource('services','ServiceController');
Route::resource('customers','CustomerController');



