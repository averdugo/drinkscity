<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\{Store, Comuna, Region, Provincia, StoreType, CategoryType,Aviso,AvisoType};
use Auth;
use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class WebController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $slides = Aviso::where('id_tipo_aviso',6)->get();
        $destacados = Aviso::where('id_tipo_aviso',5)->get();
        foreach ($destacados as $d) {
            $store = Store::where('id',$d->store_id);
            $d->store_id = $store->tienda_Nombre;
        }
        $promociones = Aviso::where('id_tipo_aviso',3)->get();
        foreach ($promociones as $p) {
            $store = Store::where('id',$p->store_id);
            $p->store_id = $store->tienda_Nombre;
        }
        $avisos = Aviso::where('id_tipo_aviso',1)->get();
        foreach ($avisos as $a) {
            $store = Store::where('id',$a->store_id);
            $a->store_id = $store->tienda_Nombre;
        }
        
       

        return view('web.home',compact('user','slides','destacados','promociones','avisos'));
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
            $data= "Se ah Creado una nueva Tienda que espera tu aprobacion ".$store->tienda_Nombre .'\n revisalo en https://drinkscity.cl/storePend';
            Mail::raw( $data, function ($message) {
                $message->from('admin@drinkscity', 'Drinkscity');

                $message->to('matias.vasquez.05@gmail.com');
            });
            return 1;
        }else{
            return 2;
        }


    }
    public function store($id)
    {
        $store = Store::findOrFail($id);
        
        return view('web.store',compact('avisos', 'store'));
    }

    public function getDataStore($id)
    {
        $store = Store::findOrFail($id);
        $tipo_tienda = StoreType::where('id_tipo_tienda',$store->id_tipo_tienda)->first();
        $store->id_tipo_tienda = $tipo_tienda->Descripcion;
      

        $html = "";

        
        $html = sprintf('<div class="media" style="height: 170px;margin-top:30px">
                    <div class="media-left">
                        <a href="#" style="position:relative">
                            <img class="" src="/img/stores/%s" alt="..." style="    width: 200px;">
                            <img class="claStores" src="/img/calificacion.png" alt="" />
                        </a>
                    </div>
                    <div class="media-body text-left" style="position:relative;    padding-top: 2px;">
                        <h4 class="media-heading KR" style="text-transform:uppercase">%s</h4>
                        <h5 class="media-heading KL">%s</h5>
                        <p class="KL">Horario : <small>%s / %s</small></p>
                        <p class="KL">%s</small></p>
                    </div>
                </div>'


            ,$store->imagen, $store->tienda_Nombre, $store->id_tipo_tienda, $store->desde, $store->hasta, $store->tienda_fono );
        

        return $html;
    }

    public function getStoresforMap()
    {
        $stores = Store::where('status',1)->where('latitude','!=','')->get();
        $data = [];
        foreach ($stores as $v) {
            $temp=[];
            $temp =[
                $v->tienda_Nombre,
                $v->latitude,
                $v->longitude,
                $v->id
            ];
            array_push($data,$temp);
        }
        $data = json_encode($data,JSON_NUMERIC_CHECK);
        return $data;
    }

    public function map()
    {
        return view('web.map');
    }


}
