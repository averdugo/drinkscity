<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\{Store, Comuna, Region, Provincia, StoreType,CategoryType};

class WebController extends Controller
{
    public function stores()
	{
		$stores = Store::all();
		return view('web.stores',compact('stores'));
	}
}
