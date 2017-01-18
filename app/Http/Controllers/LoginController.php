<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User,UserType};
use App\Http\Controllers\Controller;
use Auth;
use AdamWathan\EloquentOAuth\Facades\OAuth;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Session;

class LoginController extends Controller
{
	public function adminlogin(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            $user = Auth::user();
            switch ($user->type) {
                case 1:
                    return view('admin.home');
                    break;
                case 2:
                    return Redirect::to('clients/' . $user->id);
                    break;
            }
        }else{
            return redirect('login')->with('status', 'Perfil No Encontrado');
        }
    }
	public function adminlogout(Request $request)
	{
		Auth::logout();
	}
	public function logout(Request $request)
	{
		Auth::logout();
		return redirect('/');
	}
	public function facebook()
    {
        OAuth::login('facebook', function($user, $details) {

           $user->username = $details->full_name;
           $user->email = $details->email;
           $user->type = 3;
           $user->imagen= $details->avatar;
		   $user->created_at = Carbon::now();
           $user->save();
        });
		$user = Auth::user();
        return view('web.home',compact('user'));
    }
	public function loginN(Request $r)
	{
		$user = new User();
		$user->username = $r->username;
		$user->email = $r->email;
		$user->password = bcrypt($r->password);
		$user->type = 3;
		$user->created_at = Carbon::now();
		$user->save();

		Auth::login($user);
		return Redirect::back();

	}
}
