<?php

use App\Country;
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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::resource('/user', 'UserController');

Route::get('/admin', 'AdminController@index');

Route::get('/register/verify/{token}', 'Auth\RegisterController@verify'); 

Route::resource('/accommodation', 'AccommodationController');

Route::post('/county', 'AjaxController@county');
Route::post('/city', 'AjaxController@city');
