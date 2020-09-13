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

//backend by poeei




 	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');

	Route::resource('employees','EmployeeController');

	Route::resource('appointments','AppointmentController');

	Route::resource('employees','EmployeeController');

	Route::resource('customers','CustomerController');
//backend

<<<<<<< HEAD
=======
// Route::get('create', 'BackendController@createfun')->name('createpage');


 Route::resource('categories','CategoryController');
>>>>>>> 0a0420093c6558844862c8bd631e8fa40aa9bfcc

Route::get('/', 'PageController@mainfun')->name('mainpage');

// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
Route::get('services', 'PageController@servicefun')->name('servicepage');

Route::get('about', 'PageController@aboutfun')->name('aboutpage');


// Route::get('index', 'BackendController@indexfun')->name('indexpage');





Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');
<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');
Route::get('bodycare', 'PageController@bodycarefun')->name('bodycarepage');
=======
Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');
>>>>>>> 8ccc60cea1da0c66ca4721ad2c5720cffe431549
>>>>>>> 0a0420093c6558844862c8bd631e8fa40aa9bfcc



Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

<<<<<<< HEAD
Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');

Route::get('services','PageController@bodycarefun')->name('bodycarepage');




=======
// Route::resource('appointments', 'AppointmentController');
// Route::resource('customers', 'AppointmentController');

// Route::get('index', 'BackendController@indexfun')->name('indexpage');


<<<<<<< HEAD

=======
Route::resource('employees','EmployeeController');
Route::resource('services','ServiceController');
Route::resource('customers','CustomerController');

Route::resource('customers','CustomerController');
>>>>>>> 8ccc60cea1da0c66ca4721ad2c5720cffe431549
>>>>>>> 0a0420093c6558844862c8bd631e8fa40aa9bfcc
