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
=======
<<<<<<< HEAD
Route::get('/', 'PageController@mainfun')->name('mainpage');
=======
//backend by poeei

<<<<<<< HEAD
=======



>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
 	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6

Route::get('/', 'PageController@mainfun')->name('mainpage');

//backend by poeei

<<<<<<< HEAD
	Route::resource('employees','EmployeeController');

	Route::resource('customers','CustomerController');


Route::get('/', 'PageController@mainfun')->name('mainpage');


Route::get('show','ServiceController@showfun')->name('showpage');
=======
Route::get('/', 'PageController@mainfun')->name('mainpage');

<<<<<<< HEAD
=======

>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
<<<<<<< HEAD

Route::get('servicepage', 'PageController@servicefun')->name('servicepage');
=======
<<<<<<< HEAD

Route::get('contact', 'PageController@contactfun') ->name('contactpage');

=======
<<<<<<< HEAD
=======
Route::get('servicepage', 'PageController@servicefun')->name('servicepage');
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6

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

Route::get('about', 'PageController@aboutfun')->name('aboutpage');
=======

<<<<<<< HEAD


Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');

=======
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e

Route::get('about', 'PageController@aboutfun')->name('aboutpage');
Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');

<<<<<<< HEAD
=======
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114



>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

Route::get('skintherapy', 'PageController@skintherapyfun')->name('skintherapypage');

<<<<<<< HEAD
=======

<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
Route::get('face','PageController@facecarefun')->name('facecarepage');

Route::get('spa','PageController@spafun')->name('spapage');

Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');

<<<<<<< HEAD

//end frontend by poeei

=======
//end frontend by poeei

Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114

Route::get('skincaredetail/{id}', 'PageController@skincaredetailfun')->name('skincaredetail');


Route::get('nailcaredetail/{id}', 'PageController@nailcaredetailfun')->name('nailcaredetail');

<<<<<<< HEAD

=======
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
Route::get('footcaredetail/{id}', 'PageController@footcaredetailfun')->name('footcaredetail');

Route::get('facecaredetail/{id}', 'PageController@facecaredetailfun')->name('facecaredetail');

Route::get('skintherapydetail/{id}', 'PageController@skintherapydetailfun')->name('skintherapydetail');
<<<<<<< HEAD

=======
<<<<<<< HEAD



//end frontend by poeei
=======
<<<<<<< HEAD
=======
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');

//end frontend by poeei



Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');



//end frontend by poeei
Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

Route::resource('employees','EmployeeController');

Route::resource('services','ServiceController');

Route::resource('customers','CustomerController');

Route::resource('categories','CategoryController');

>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
Route::resource('appointments','AppointmentController');


<<<<<<< HEAD

=======
Route::resource('customers','CustomerController');
//end frontend by poeei

<<<<<<< HEAD
// Route::get('services','PageController@bodycarefun')->name('bodycarepage');
=======
Route::resource('services','ServiceController');
Route::get('services','PageController@bodycarefun')->name('bodycarepage');
Route::resource('services','ServiceController');
//role
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6

Route::middleware('role:Admin')->group(function(){

Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');
});


<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
 
=======
<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');
=======
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114

>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
//auth

Auth::routes();

<<<<<<< HEAD


=======
Route::get('/home', 'HomeController@index')->name('home');
 

<<<<<<< HEAD
=======

>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
