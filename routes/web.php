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

Route::get('registerform', 'PageController@registerfun') ->name('registerpage');
Route::get('loginform', 'PageController@loginfun')->name('loginpage');




//backend

// Route::get('create', 'BackendController@createfun')->name('createpage');


 Route::resource('categories','CategoryController');

//Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
Route::get('services', 'PageController@servicefun')->name('servicepage');

Route::get('about', 'PageController@aboutfun')->name('aboutpage');


// Route::get('index', 'BackendController@indexfun')->name('indexpage');







Route::resource('categories','CategoryController');
Route::resource('employies','EmployeeController');
Route::resource('services','ServiceController');
