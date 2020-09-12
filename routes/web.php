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

 // end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');




