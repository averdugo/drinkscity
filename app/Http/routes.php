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
Route::resource('product', 'ProductController');
Route::resource('user', 'UserController');
Route::resource('stores', 'StoreController');

Route::post('/login', function (Request $req) {

    $user = User::where('username', $req->username)->first();
    if ($user && Hash::check($req->password, $user->password )) {

        switch ($user->type) {
            case 1:
                return view('admin.home');
                break;
            case 2:
                return view('clients.home');
                break;
        }

    }else{
        return redirect('login')->with('status', 'Perfil No Encontrado');
    }


});
