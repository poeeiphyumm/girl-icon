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


Route::get('registerform', 'PageController@registerfun') ->name('registerpage');
Route::get('loginform', 'PageController@loginfun')->name('loginpage');

<<<<<<< HEAD
Route::get('/', 'PageController@mainfun')->name('mainpage');
=======
//backend by poeei




 	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');


	Route::resource('appointments','AppointmentController');

Route::get('/', 'PageController@mainfun')->name('mainpage');


>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
<<<<<<< HEAD
=======
Route::get('servicepage', 'PageController@servicefun')->name('servicepage');
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e

Route::get('about', 'PageController@aboutfun')->name('aboutpage');

//by poeei frontend

Route::get('haircare', 'PageController@haircarefun')->name('haircarepage');

Route::get('bodycare', 'PageController@bodycarefun')->name('bodycarepage');

Route::get('skincare', 'PageController@skincarefun')->name('skincarepage');

Route::get('nailcare', 'PageController@nailcarefun')->name('nailcarepage');

Route::get('facecare', 'PageController@facecarefun')->name('facecarepage');

Route::get('handcare', 'PageController@handcarefun')->name('handcarepage');

Route::get('footcare', 'PageController@footcarefun')->name('footcarepage');
<<<<<<< HEAD
=======

>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e

Route::get('about', 'PageController@aboutfun')->name('aboutpage');
Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');

<<<<<<< HEAD
=======


Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');

>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

Route::get('skintherapy', 'PageController@skintherapyfun')->name('skintherapypage');


<<<<<<< HEAD
=======
Route::get('face','PageController@facecarefun')->name('facecarepage');

Route::get('spa','PageController@spafun')->name('spapage');

>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');

//end frontend by poeei

<<<<<<< HEAD
=======

>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');

Route::get('skincaredetail/{id}', 'PageController@skincaredetailfun')->name('skincaredetail');


Route::get('nailcaredetail/{id}', 'PageController@nailcaredetailfun')->name('nailcaredetail');

Route::get('footcaredetail/{id}', 'PageController@footcaredetailfun')->name('footcaredetail');

Route::get('facecaredetail/{id}', 'PageController@facecaredetailfun')->name('facecaredetail');

Route::get('skintherapydetail/{id}', 'PageController@skintherapydetailfun')->name('skintherapydetail');
<<<<<<< HEAD
=======
Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e

//end frontend by poeei



Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');

<<<<<<< HEAD



//end frontend by poeei
Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

Route::resource('employees','EmployeeController');

Route::resource('services','ServiceController');

Route::resource('customers','CustomerController');

// Route::get('services','PageController@bodycarefun')->name('bodycarepage');

Route::resource('categories','CategoryController');

Route::resource('appointments','AppointmentController');

Route::resource('employees','EmployeeController');

Route::resource('customers','CustomerController');
=======
//end frontend by poeei

Route::resource('services','ServiceController');
Route::get('services','PageController@bodycarefun')->name('bodycarepage');
Route::resource('services','ServiceController');
//role
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e

Route::middleware('role:Admin')->group(function(){

Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');
});


<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
=======

//auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 


>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
