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
//backend

// Route::get('create', 'BackendController@createfun')->name('createpage');


 Route::resource('categories','CategoryController');

Route::get('/', 'PageController@mainfun')->name('mainpage');

// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
Route::get('services', 'PageController@servicefun')->name('servicepage');

Route::get('about', 'PageController@aboutfun')->name('aboutpage');


// Route::get('index', 'BackendController@indexfun')->name('indexpage');





Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');
Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');
Route::get('face','PageController@facecarefun')->name('facecarepage');
Route::get('haircare','PageController@haircarefun')->name('haircarepage');
Route::get('nailcare','PageController@nailcarefun')->name('nailcarepage');
Route::get('footcare','PageController@footcarefun')->name('footcarepage');
Route::get('handcare','PageController@handcarefun')->name('handcarepage');
Route::get('skincare','PageController@skincarefun')->name('skincarepage');
Route::get('spa','PageController@spafun')->name('spapage');


Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

// Route::resource('appointments', 'AppointmentController');
// Route::resource('customers', 'AppointmentController');

// Route::get('index', 'BackendController@indexfun')->name('indexpage');


Route::resource('categories','CategoryController');
Route::resource('employees','EmployeeController');
Route::resource('services','ServiceController');

Route::resource('customers','CustomerController');
