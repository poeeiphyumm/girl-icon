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

Route::get('registerform', 'PageController@registerfun') ->name('registerpage');
Route::get('loginform', 'PageController@loginfun')->name('loginpage');

//backend by poeei

<<<<<<< HEAD



 	Route::resource('categories','CategoryController');

  	Route::resource('services','ServiceController');

	Route::resource('employees','EmployeeController');

	Route::resource('appointments','AppointmentController');

	Route::resource('employees','EmployeeController');

	Route::resource('customers','CustomerController');

=======
Route::get('/', 'PageController@mainfun')->name('mainpage');


>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
// end backend


Route::get('booking', 'PageController@bookingfun') ->name('bookingpage');
// Route::get('servicepage', 'PageController@servicefun')->name('servicepage');

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

>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb

Route::get('about', 'PageController@aboutfun')->name('aboutpage');

Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');

<<<<<<< HEAD


Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');


Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

Route::get('skintherapy', 'PageController@skintherapyfun')->name('skintherapypage');


=======
Route::get('face','PageController@facecarefun')->name('facecarepage');

Route::get('spa','PageController@spafun')->name('spapage');

Route::get('bodycare','PageController@bodycarefun')->name('bodycarepage');

Route::get('sparest', 'PageController@sparestfun')->name('sparestpage');

>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
Route::get('bodycaredetail/{id}', 'PageController@bodycaredetailfun')->name('bodycaredetail');

Route::get('haircaredetail/{id}', 'PageController@haircaredetailfun')->name('haircaredetail');

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb

>>>>>>> 145807f5feac1a66dc1eae8a8bc512ebfed15550
//end frontend by poeei

<<<<<<< HEAD
=======
Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb

Route::get('skincaredetail/{id}', 'PageController@skincaredetailfun')->name('skincaredetail');


Route::get('nailcaredetail/{id}', 'PageController@nailcaredetailfun')->name('nailcaredetail');

<<<<<<< HEAD

=======
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
Route::get('footcaredetail/{id}', 'PageController@footcaredetailfun')->name('footcaredetail');

Route::get('facecaredetail/{id}', 'PageController@facecaredetailfun')->name('facecaredetail');

<<<<<<< HEAD
Route::get('skintherapydetail/{id}', 'PageController@skintherapydetailfun')->name('skintherapydetail');
=======
Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');

//end frontend by poeei
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb

<<<<<<< HEAD
Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');
=======
Route::get('contact', 'PageController@contactfun')->name('contactpage');
Route::get('about', 'PageController@aboutfun')->name('aboutpage');

<<<<<<< HEAD
Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage');


//end frontend by poeei
=======


<<<<<<< HEAD


Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

=======

Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');
>>>>>>> 145807f5feac1a66dc1eae8a8bc512ebfed15550
Route::resource('employees','EmployeeController');
Route::resource('customers','CustomerController');



>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb

Route::resource('customers','CustomerController');

<<<<<<< HEAD
Route::resource('services','ServiceController');

Route::resource('customers','CustomerController');
=======
Route::get('ourservice', 'PageController@ourservicefun')->name('ourservicepage'); 
Route::get('services','PageController@bodycarefun')->name('bodycarepage');
Route::resource('services','ServiceController');

Route::resource('categories','CategoryController');

<<<<<<< HEAD
Route::resource('appointments','AppointmentController');
=======
<<<<<<< HEAD
 
=======
>>>>>>> 145807f5feac1a66dc1eae8a8bc512ebfed15550
>>>>>>> c370591f260ffafd17d5466cec5e4d0d2d0ca533
>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb

Route::resource('employees','EmployeeController');

Route::resource('customers','CustomerController');

Route::middleware('role:Admin')->group(function(){

Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 
<<<<<<< HEAD



=======
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

>>>>>>> 54b5126ee6bd48455d97390fb11888da844304eb
