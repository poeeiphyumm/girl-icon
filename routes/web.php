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
//backend by poeei




 	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');


	Route::resource('appointments','AppointmentController');

	Route::resource('employees','EmployeeController');

	Route::resource('customers','CustomerController');
=======
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1

Route::resource('services','ServiceController');

//backend by poeei


Route::get('show','ServiceController@showfun')->name('showpage');
<<<<<<< HEAD
Route::get('/', 'PageController@mainfun')->name('mainpage');
=======
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1

Route::get('servicepage', 'PageController@servicefun')->name('servicepage');

// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
<<<<<<< HEAD

Route::get('contact', 'PageController@contactfun') ->name('contactpage');

Route::get('servicepage', 'PageController@servicefun')->name('servicepage');


Route::get('about', 'PageController@aboutfun')->name('aboutpage');

=======
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
//by poeei frontend

Route::get('haircare', 'PageController@haircarefun')->name('haircarepage');

Route::get('skincare', 'PageController@skincarefun')->name('skincarepage');

Route::get('nailcare', 'PageController@nailcarefun')->name('nailcarepage');

Route::get('facecare', 'PageController@facecarefun')->name('facecarepage');

Route::get('handcare', 'PageController@handcarefun')->name('handcarepage');

Route::get('footcare', 'PageController@footcarefun')->name('footcarepage');

<<<<<<< HEAD


Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');


=======
Route::get('about', 'PageController@aboutfun')->name('aboutpage');

Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

Route::get('skintherapy', 'PageController@skintherapyfun')->name('skintherapypage');

<<<<<<< HEAD


=======
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
Route::get('face','PageController@facecarefun')->name('facecarepage');

Route::get('spa','PageController@spafun')->name('spapage');

Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');

<<<<<<< HEAD
Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

=======
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');

<<<<<<< HEAD

=======
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
//end frontend by poeei
Route::resource('customers','CustomerController');

<<<<<<< HEAD
=======
//end frontend by poeei

//end frontend by poeei
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1

Route::get('skincaredetail/{id}', 'PageController@skincaredetailfun')->name('skincaredetail');


Route::get('nailcaredetail/{id}', 'PageController@nailcaredetailfun')->name('nailcaredetail');

<<<<<<< HEAD

=======
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
Route::get('footcaredetail/{id}', 'PageController@footcaredetailfun')->name('footcaredetail');

Route::get('facecaredetail/{id}', 'PageController@facecaredetailfun')->name('facecaredetail');

Route::get('skintherapydetail/{id}', 'PageController@skintherapydetailfun')->name('skintherapydetail');


<<<<<<< HEAD
//end frontend by poeei
Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');


// Route::get('services','PageController@bodycarefun')->name('bodycarepage');


// Route::get('servicespage','PageController@bodycarefun')->name('bodycarepage');
=======
Route::get('contact', 'PageController@contactfun')->name('contactpage');
//end frontend by poeei
Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');

Route::resource('categories','CategoryController');

Route::resource('appointments','AppointmentController');

//end frontend by poeei
// Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
//role

Route::middleware('role:Admin')->group(function(){

Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');
});
<<<<<<< HEAD
 
//auth

Auth::routes();

=======

//auth

Auth::routes();
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD

=======
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
