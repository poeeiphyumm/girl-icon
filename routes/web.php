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

Route::get('/', function () {
    //return view('welcome');
    return 'Hello Laravel';
});


Route::get('/testing',function ($value=''){
	return 'This is a testing page';
});
Route::get('/', 'PageController@mainfun') ->name('mainpage');


Route::get('dashboard', 'backendController@dashboardfun') ->name('dashboardpage');

Route::resource('appointments', 'AppointmentController');

 Route::resource('categories','CategoriesController');




Route::resource('categories','CategoryController');
Route::resource('employies','EmployeeController');
Route::resource('services','ServiceController');


