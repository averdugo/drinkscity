<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\{Store, Comuna, Region, Provincia, StoreType};

class DrinkscityHelperController extends Controller
{
    public function getProvincias($id)
	{
		return Provincia::where('region_id',$id)->get();
	}

	public function getComunas($id)
	{
		return Comuna::where('provincia_id',$id)->get();
	}
}
