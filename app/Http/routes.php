<?php

use Illuminate\Http\Request;
use App\User;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('web.home');
});

Route::get('/login', function () {

    return view('login');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




Route::resource('admins', 'AdminController');
Route::resource('avisos', 'AvisoController');
Route::resource('product', 'ProductController');
Route::resource('user', 'UserController');
Route::resource('stores', 'StoreController');
Route::resource('notification', 'NotificationController');

Route::get('clients/{id}', 'AdminController@clients');
Route::get('getUsers', 'UserController@getUsers');
Route::get('getStores', 'StoreController@getStores');
Route::get('getStoresById/{id}', 'StoreController@getStoresById');
Route::get('getProvincias/{id}', 'DrinkscityHelperController@getProvincias');
Route::get('getComunas/{id}', 'DrinkscityHelperController@getComunas');
Route::get('getCategoryType/{id}', 'DrinkscityHelperController@getCategoryType');


Route::post('/adminlogin', 'LoginController@adminlogin');
Route::get('/adminlogout', 'LoginController@adminlogout');
