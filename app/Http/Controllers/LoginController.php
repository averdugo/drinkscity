<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User,UserType};
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Redirect;

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
}
