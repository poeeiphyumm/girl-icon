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


Route::get('/', 'PageController@mainfun')->name('mainpage');
//backend by poeei


// Route::get('servicepage', 'PageController@servicefun')->name('servicepage');
Route::get('servicepage', 'PageController@servicefun')->name('servicepage');

// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');


Route::get('bookbyservice/{id}', 'PageController@bookbyservice') ->name('bookbyservice');

Route::get('contact', 'PageController@contactfun') ->name('contactpage');


Route::get('about', 'PageController@aboutfun')->name('aboutpage');


//by poeei frontend

Route::get('haircare', 'PageController@haircarefun')->name('haircarepage');

Route::get('skincare', 'PageController@skincarefun')->name('skincarepage');

Route::get('nailcare', 'PageController@nailcarefun')->name('nailcarepage');

Route::get('facecare', 'PageController@facecarefun')->name('facecarepage');

Route::get('handcare', 'PageController@handcarefun')->name('handcarepage');

Route::get('footcare', 'PageController@footcarefun')->name('footcarepage');


Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');


Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

Route::get('skintherapy', 'PageController@skintherapyfun')->name('skintherapypage');

Route::get('face','PageController@facecarefun')->name('facecarepage');

Route::get('spa','PageController@spafun')->name('spapage');


Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');


Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');
//end frontend by poeei


Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');



Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');


//end frontend by poeei


Route::get('skincaredetail/{id}', 'PageController@skincaredetailfun')->name('skincaredetail');


Route::get('nailcaredetail/{id}', 'PageController@nailcaredetailfun')->name('nailcaredetail');


Route::get('footcaredetail/{id}', 'PageController@footcaredetailfun')->name('footcaredetail');

Route::get('facecaredetail/{id}', 'PageController@facecaredetailfun')->name('facecaredetail');

Route::get('skintherapydetail/{id}', 'PageController@skintherapydetailfun')->name('skintherapydetail');




Route::middleware('role:Admin')->group(function(){

	Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');

	Route::resource('employees','EmployeeController');


});
	Route::resource('customers','CustomerController');


 
//auth

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



