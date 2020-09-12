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


<<<<<<< HEAD

=======
 	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');

	Route::resource('employees','EmployeeController');

	Route::resource('appointments','AppointmentController');
>>>>>>> 754a2997ec6786fc53d5111bad88909e0e710e06
//backend

// Route::get('create', 'BackendController@createfun')->name('createpage');

<<<<<<< HEAD

 Route::resource('categories','CategoryController');
=======
Route::get('/', 'PageController@mainfun')->name('mainpage');
>>>>>>> 754a2997ec6786fc53d5111bad88909e0e710e06

// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
<<<<<<< HEAD
Route::get('services', 'PageController@servicefun')->name('servicepage');

Route::get('about', 'PageController@aboutfun')->name('aboutpage');


// Route::get('index', 'BackendController@indexfun')->name('indexpage');




=======
Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');



Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

// Route::resource('appointments', 'AppointmentController');
// Route::resource('customers', 'AppointmentController');
>>>>>>> 754a2997ec6786fc53d5111bad88909e0e710e06

// Route::get('index', 'BackendController@indexfun')->name('indexpage');


Route::resource('categories','CategoryController');
Route::resource('employees','EmployeeController');
Route::resource('services','ServiceController');
<<<<<<< HEAD
=======
Route::resource('customers','CustomerController');



>>>>>>> 754a2997ec6786fc53d5111bad88909e0e710e06
