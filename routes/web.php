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



//backend

// Route::get('create', 'BackendController@createfun')->name('createpage');

// Route::get('index', 'BackendController@indexfun')->name('indexpage');



Route::resource('categories','CategoryController');
