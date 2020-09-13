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

// Route::get('create', 'BackendController@createfun')->name('createpage');

<<<<<<< HEAD
=======

 Route::resource('categories','CategoryController');

>>>>>>> aea75e1bfcf7d807b73aef5326ec19c706c69c9a
Route::get('/', 'PageController@mainfun')->name('mainpage');

// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
Route::get('services', 'PageController@servicefun')->name('servicepage');

Route::get('about', 'PageController@aboutfun')->name('aboutpage');

//by poeei frontend

Route::get('haircare', 'PageController@haircarefun')->name('haircarepage');

Route::get('bodycare', 'PageController@bodycarefun')->name('bodycarepage');

Route::get('skincare', 'PageController@skincarefun')->name('skincarepage');

Route::get('nailcare', 'PageController@nailcarefun')->name('nailcarepage');


<<<<<<< HEAD

=======
Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');
<<<<<<< HEAD
Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');
Route::get('face','PageController@facecarefun')->name('facecarepage');
Route::get('haircare','PageController@haircarefun')->name('haircarepage');
Route::get('nailcare','PageController@nailcarefun')->name('nailcarepage');
Route::get('footcare','PageController@footcarefun')->name('footcarepage');
Route::get('handcare','PageController@handcarefun')->name('handcarepage');
Route::get('skincare','PageController@skincarefun')->name('skincarepage');
Route::get('spa','PageController@spafun')->name('spapage');
=======

Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');
Route::get('bodycare', 'PageController@bodycarefun')->name('bodycarepage');
Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');
>>>>>>> d056c456610e9c9c51a748b7a0444981262a4ded
>>>>>>> aea75e1bfcf7d807b73aef5326ec19c706c69c9a



<<<<<<< HEAD
//end frontend by poeei
// Route::get('index', 'BackendController@indexfun')->name('indexpage');
=======

Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');
>>>>>>> aea75e1bfcf7d807b73aef5326ec19c706c69c9a





<<<<<<< HEAD
Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');
Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');
=======

// Route::resource('appointments', 'AppointmentController');
// Route::resource('customers', 'AppointmentController');
>>>>>>> aea75e1bfcf7d807b73aef5326ec19c706c69c9a



<<<<<<< HEAD
Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');
=======
>>>>>>> aea75e1bfcf7d807b73aef5326ec19c706c69c9a

Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');

<<<<<<< HEAD
Route::get('services','PageController@bodycarefun')->name('bodycarepage');
Route::resource('services','ServiceController');

=======
Route::resource('customers','CustomerController');
 


Route::middleware('role:Admin')->group(function(){
Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 
>>>>>>> aea75e1bfcf7d807b73aef5326ec19c706c69c9a
