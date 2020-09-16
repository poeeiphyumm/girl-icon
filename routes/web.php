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




 	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');

	Route::resource('employees','EmployeeController');

	//Route::resource('appointments/{id}','AppointmentController');
	Route::resource('appointments','AppointmentController');
	Route::resource('employees','EmployeeController');

	Route::resource('customers','CustomerController');

Route::get('/', 'PageController@mainfun')->name('mainpage');
//backend by poeei


<<<<<<< HEAD
=======


 	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');


	Route::resource('appointments','AppointmentController');

	Route::resource('employees','EmployeeController');

	Route::resource('customers','CustomerController');
<<<<<<< HEAD


=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601

Route::resource('services','ServiceController');

//backend by poeei


Route::get('show','ServiceController@showfun')->name('showpage');
<<<<<<< HEAD

Route::get('/', 'PageController@mainfun')->name('mainpage');

=======
Route::get('/', 'PageController@mainfun')->name('mainpage');
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601

>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
Route::get('servicepage', 'PageController@servicefun')->name('servicepage');

// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');

=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601

Route::get('contact', 'PageController@contactfun') ->name('contactpage');


Route::get('about', 'PageController@aboutfun')->name('aboutpage');


//by poeei frontend

Route::get('haircare', 'PageController@haircarefun')->name('haircarepage');

Route::get('skincare', 'PageController@skincarefun')->name('skincarepage');

Route::get('nailcare', 'PageController@nailcarefun')->name('nailcarepage');

Route::get('facecare', 'PageController@facecarefun')->name('facecarepage');

Route::get('handcare', 'PageController@handcarefun')->name('handcarepage');

Route::get('footcare', 'PageController@footcarefun')->name('footcarepage');


=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601

Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');


<<<<<<< HEAD
=======
<<<<<<< HEAD

Route::get('about', 'PageController@aboutfun')->name('aboutpage');

Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');

=======
Route::get('about', 'PageController@aboutfun')->name('aboutpage');

Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

Route::get('skintherapy', 'PageController@skintherapyfun')->name('skintherapypage');


<<<<<<< HEAD
=======
=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
Route::get('face','PageController@facecarefun')->name('facecarepage');

Route::get('spa','PageController@spafun')->name('spapage');

Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');

<<<<<<< HEAD
Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');


Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');
//end frontend by poeei
=======
<<<<<<< HEAD

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');


=======
Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');

<<<<<<< HEAD

//end frontend by poeei
Route::resource('customers','CustomerController');


//end frontend by poeei

//end frontend by poeei

=======
//end frontend by poeei
Route::resource('customers','CustomerController');

//end frontend by poeei

//end frontend by poeei
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0

Route::get('skincaredetail/{id}', 'PageController@skincaredetailfun')->name('skincaredetail');


Route::get('nailcaredetail/{id}', 'PageController@nailcaredetailfun')->name('nailcaredetail');

<<<<<<< HEAD

=======

<<<<<<< HEAD

=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
Route::get('footcaredetail/{id}', 'PageController@footcaredetailfun')->name('footcaredetail');

Route::get('facecaredetail/{id}', 'PageController@facecaredetailfun')->name('facecaredetail');

Route::get('skintherapydetail/{id}', 'PageController@skintherapydetailfun')->name('skintherapydetail');

<<<<<<< HEAD

=======
<<<<<<< HEAD


Route::get('contact', 'PageController@contactfun')->name('contactpage');

Route::get('about', 'PageController@aboutfun')->name('aboutpage');





Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');


Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

//end frontend by poeei

Route::resource('employees','EmployeeController');

=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
//end frontend by poeei


<<<<<<< HEAD
//role
=======
<<<<<<< HEAD

// Route::get('services','PageController@bodycarefun')->name('bodycarepage');
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0

Route::middleware('role:Admin')->group(function(){

<<<<<<< HEAD
	Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

 	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');

	Route::resource('appointments','AppointmentController');

	Route::resource('employees','EmployeeController');

	Route::resource('customers','CustomerController');

=======
// Route::get('servicespage','PageController@bodycarefun')->name('bodycarepage');

Route::get('contact', 'PageController@contactfun')->name('contactpage');
//end frontend by poeei
Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');


Route::resource('categories','CategoryController');
=======

Route::get('contact', 'PageController@contactfun')->name('contactpage');
//end frontend by poeei
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601



//end frontend by poeei
// Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');
<<<<<<< HEAD

=======
>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
//role
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0


<<<<<<< HEAD
});
=======
Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');

Route::resource('categories','CategoryController');

Route::resource('appointments','AppointmentController');
});
<<<<<<< HEAD

>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
 
//auth

Auth::routes();

<<<<<<< HEAD

Route::get('/home', 'HomeController@index')->name('home');


=======


//auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


=======

Auth::routes();

//auth

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

>>>>>>> fd7a46f9de57e72dd6f4641ff58d977103baf601
>>>>>>> 3e9317c6eb576e2e45b2d8fec2091fbe123b92e0
