<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\{Store, Comuna, Region, Provincia, StoreType,CategoryType};

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

    public function getCategoryType($id)
    {
        $types = CategoryType::where('category_id',$id)->get();
        $data = "";
        foreach ($types as $t) {

            $data .= sprintf('<option value="%s">%s</option>', $t->id,$t->description);
        }
        return $data;
    }
}
