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

Route::get('/', 'PageController@mainfun')->name('mainpage');
<<<<<<< HEAD
=======
//backend by poeei

Route::resource('services','ServiceController');
>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c

//backend by poeei


Route::get('show','ServiceController@showfun')->name('showpage');
<<<<<<< HEAD

Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');

Route::get('servicepage', 'PageController@servicefun')->name('servicepage');

Route::get('contact', 'PageController@contactfun') ->name('contactpage');
=======


// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
Route::get('servicepage', 'PageController@servicefun')->name('servicepage');


>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c

//by poeei frontend

Route::get('haircare', 'PageController@haircarefun')->name('haircarepage');

Route::get('skincare', 'PageController@skincarefun')->name('skincarepage');

Route::get('nailcare', 'PageController@nailcarefun')->name('nailcarepage');

Route::get('facecare', 'PageController@facecarefun')->name('facecarepage');

Route::get('handcare', 'PageController@handcarefun')->name('handcarepage');

Route::get('footcare', 'PageController@footcarefun')->name('footcarepage');
<<<<<<< HEAD

Route::get('about', 'PageController@aboutfun')->name('aboutpage');
=======
>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c

Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');
<<<<<<< HEAD


Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

Route::get('skintherapy', 'PageController@skintherapyfun')->name('skintherapypage');

=======
Route::get('skintherapy', 'PageController@skintherapyfun')->name('skintherapypage');


>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c
Route::get('face','PageController@facecarefun')->name('facecarepage');

Route::get('spa','PageController@spafun')->name('spapage');

Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');

<<<<<<< HEAD
=======
Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c
Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');

<<<<<<< HEAD
//end frontend by poeei
Route::resource('customers','CustomerController');
=======

//end frontend by poeei

//end frontend by poeei
>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c

Route::get('skincaredetail/{id}', 'PageController@skincaredetailfun')->name('skincaredetail');


Route::get('nailcaredetail/{id}', 'PageController@nailcaredetailfun')->name('nailcaredetail');

<<<<<<< HEAD
=======

>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c
Route::get('footcaredetail/{id}', 'PageController@footcaredetailfun')->name('footcaredetail');

Route::get('facecaredetail/{id}', 'PageController@facecaredetailfun')->name('facecaredetail');

Route::get('skintherapydetail/{id}', 'PageController@skintherapydetailfun')->name('skintherapydetail');
<<<<<<< HEAD

=======
>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c

Route::get('contact', 'PageController@contactfun')->name('contactpage');




//end frontend by poeei
Route::resource('employees','EmployeeController');

Route::resource('services','ServiceController');

Route::resource('customers','CustomerController');

Route::resource('categories','CategoryController');

Route::resource('appointments','AppointmentController');

<<<<<<< HEAD
//end frontend by poeei

// Route::get('services','PageController@bodycarefun')->name('bodycarepage');
// Route::get('services','PageController@bodycarefun')->name('bodycarepage');
//role
=======


//end frontend by poeei
Route::get('services','PageController@bodycarefun')->name('bodycarepage');
//role

>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c

Route::middleware('role:Admin')->group(function(){

Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');
});

<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
 
//auth

Auth::routes();
=======
//auth

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
 

>>>>>>> db3e7b8476ef096fd01afdfc4050d6b5adfc720c

