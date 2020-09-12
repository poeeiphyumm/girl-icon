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

//backend

// Route::get('create', 'BackendController@createfun')->name('createpage');

<<<<<<< HEAD
=======
Route::get('/', 'PageController@mainfun')->name('mainpage');


 // end backend

>>>>>>> 8c2fb1f8bd2854a469663b0d51fcc3827a39c48e

Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');




// Route::get('index', 'BackendController@indexfun')->name('indexpage');


Route::resource('categories','CategoryController');
Route::resource('employees','EmployeeController');
Route::resource('services','ServiceController');
Route::resource('customers','CustomerController');


