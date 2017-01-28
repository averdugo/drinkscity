<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\{Store, Comuna, Region, Provincia, StoreType, CategoryType};
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class WebController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('web.home',compact('user'));
    }
    public function stores()
	{
		$stores = Store::all();
		return view('web.stores',compact('stores'));
	}
    public function shoppingCar()
	{
		$stores = Store::all();
		return view('web.shopping_car',compact('stores'));
	}
    public function events()
	{
		$stores = Store::all();
		return view('web.events',compact('stores'));
	}
    public function promos()
	{
		$stores = Store::all();
		return view('web.promos',compact('stores'));
	}
    public function storeCreate()
    {
        $users = User::lists('username','id');
        $tipoTienda = StoreType::lists('Descripcion','id_tipo_tienda');
        $regiones = Region::lists('region_nombre','region_id');
        return view('web.storeCreate',compact('users', 'regiones', 'tipoTienda'));
    }
    public function storess(Request $request)
    {
        $store = new Store(Request::all());
        if ($image = Input::file('image')) {
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('img/stores/' . $filename);
            Image::make($image->getRealPath())->save($path);
            $store->imagen = $filename;
        }
        
        if ($store->save()) {
            return 1;
        }else{
            return 2;
        }
        

    }

    public function map()
    {
        $stores = Store::where('status',1)->where('latitude','!=',null)->get();
        $data = []
        foreach ($stores as $v) {
            $data .=[
                $v->tienda_Nombre,
                $v->latitude,
                $v->longitude
            ];
        }

         return view('web.map',compact('stores'));
    }


}
