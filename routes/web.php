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


//backend by poeei

<<<<<<< HEAD

Route::get('/', 'PageController@mainfun')->name('mainpage');
//backend by poeei

=======
Route::get('/', 'PageController@mainfun')->name('mainpage');
//backend by poeei

Route::resource('services','ServiceController');

//backend by poeei

>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b

Route::get('show','ServiceController@showfun')->name('showpage');

Route::get('/', 'PageController@mainfun')->name('mainpage');

<<<<<<< HEAD
Route::get('/', 'PageController@mainfun')->name('mainpage');

// Route::get('servicepage', 'PageController@servicefun')->name('servicepage');
=======
Route::get('servicepage', 'PageController@servicefun')->name('servicepage');
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b

// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');

<<<<<<< HEAD

=======
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b

Route::get('contact', 'PageController@contactfun') ->name('contactpage');


Route::get('about', 'PageController@aboutfun')->name('aboutpage');


//by poeei frontend

Route::get('haircare', 'PageController@haircarefun')->name('haircarepage');

Route::get('skincare', 'PageController@skincarefun')->name('skincarepage');

Route::get('nailcare', 'PageController@nailcarefun')->name('nailcarepage');

Route::get('facecare', 'PageController@facecarefun')->name('facecarepage');

Route::get('handcare', 'PageController@handcarefun')->name('handcarepage');

Route::get('footcare', 'PageController@footcarefun')->name('footcarepage');


<<<<<<< HEAD
=======
Route::get('about', 'PageController@aboutfun')->name('aboutpage');

>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');


Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

Route::get('skintherapy', 'PageController@skintherapyfun')->name('skintherapypage');

<<<<<<< HEAD
Route::get('face','PageController@facecarefun')->name('facecarepage');

Route::get('spa','PageController@spafun')->name('spapage');
=======
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b

Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');


Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');
//end frontend by poeei
<<<<<<< HEAD


Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');


Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');


//end frontend by poeei

=======

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');
//end frontend by poeei
Route::resource('customers','CustomerController');
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b

Route::get('skincaredetail/{id}', 'PageController@skincaredetailfun')->name('skincaredetail');


Route::get('nailcaredetail/{id}', 'PageController@nailcaredetailfun')->name('nailcaredetail');

<<<<<<< HEAD

=======
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
Route::get('footcaredetail/{id}', 'PageController@footcaredetailfun')->name('footcaredetail');

Route::get('facecaredetail/{id}', 'PageController@facecaredetailfun')->name('facecaredetail');

Route::get('skintherapydetail/{id}', 'PageController@skintherapydetailfun')->name('skintherapydetail');

<<<<<<< HEAD

//end frontend by poeei


Route::middleware('role:Admin')->group(function(){

	Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');

	Route::resource('employees','EmployeeController');

	Route::resource('appointments','AppointmentController');
	
	Route::resource('customers','CustomerController');


});
=======

Route::get('contact', 'PageController@contactfun')->name('contactpage');

Route::get('about', 'PageController@aboutfun')->name('aboutpage');

Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

//end frontend by poeei
Route::middleware('role:Admin')->group(function(){

Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

 Route::resource('services','ServiceController');

Route::resource('employees','EmployeeController');

Route::resource('customers','CustomerController');
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b


<<<<<<< HEAD

=======
Route::resource('appointments','AppointmentController');
});
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
 
//auth

Auth::routes();
<<<<<<< HEAD


Route::get('/home', 'HomeController@index')->name('home');




=======
Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 3414074898110b2dd544f6b07db8ccef7da54f9b
