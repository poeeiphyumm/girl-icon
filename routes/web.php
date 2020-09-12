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




<<<<<<< HEAD

=======
>>>>>>> 9b4f80806c8fe5c85b50ba3be7c9844036ee361e
//backend

// Route::get('create', 'BackendController@createfun')->name('createpage');

<<<<<<< HEAD
Route::get('/', 'PageController@mainfun')->name('mainpage');
=======
>>>>>>> 9b4f80806c8fe5c85b50ba3be7c9844036ee361e

 Route::resource('categories','CategoryController');

//Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
Route::get('services', 'PageController@servicefun')->name('servicepage');
Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');


// Route::get('index', 'BackendController@indexfun')->name('indexpage');



<<<<<<< HEAD


=======



Route::resource('categories','CategoryController');
Route::resource('employies','EmployeeController');
Route::resource('services','ServiceController');
<<<<<<< HEAD
=======

>>>>>>> 9b4f80806c8fe5c85b50ba3be7c9844036ee361e


>>>>>>> 600d273e4f72202c0b9911fe84e4537c1489b5e3
