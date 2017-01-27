<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\{Store, Comuna, Region, Provincia, StoreType};
use App\User;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
class StoreController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        $title = "Lista de Tiendas";
        if ($user->type == 1) {
            $stores = Store::where('status',1)->get();
            return view('admin.store.storeList',compact('stores','title'));
        }else{
            $stores = Store::where('user_id', $user->id)->get();
            return view('clients.store.list',compact('stores','title'));
        }
    }
    public function storePend()
    {
        $title = "Lista de Tiendas Pendientes";
        $stores = Store::where('status',1345)->get();
        return view('admin.store.storeList',compact('stores','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::lists('username','id');
        $tipoTienda = StoreType::lists('Descripcion','id_tipo_tienda');
        $regiones = Region::lists('region_nombre','region_id');
        $user = Auth::user();
        if ($user->type == 1) {
            return view('admin.store.storeCreate',compact('users', 'regiones', 'tipoTienda'));
        }else{
            return view('clients.store.create',compact('users', 'regiones', 'tipoTienda','user'));
        }

    }

    public function statusStore($id)
    {
        $store = Store::findOrFail($id);
        $store->status = 1;
        $store->save();
        return $store->id;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {

            $store = new Store(Request::all());
            if ($image = Input::file('image')) {
                $filename  = time() . '.' . $image->getClientOriginalExtension();
                $path = public_path('img/stores/' . $filename);
                Image::make($image->getRealPath())->save($path);
                $store->imagen = $filename;
            }


            $store->save();

            return redirect('stores');

        } catch (\PDOException $e) {

            return $e->getMessage();
        }
    }

    public function getStores(){
        $store = Store::all();
        $data = "<option value=''>Seleccione Tienda</option>";
        foreach ($store as $s) {
            $data .= sprintf(
                '<option value="%s">%s</option>', $s->id,$s->name
            );
        }

        return $data;
    }

    public function getStoresById($user_id){
        $stores = Store::where('user_id', $user_id)->get();
        return view('clients.store.list',compact('stores'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::findOrFail($id);
        $tipo_tienda = StoreType::where('id_tipo_tienda',$store->id_tipo_tienda)->first();
        $store->id_tipo_tienda = $tipo_tienda->Descripcion;
        if ($store->comuna_id) {
            $comuna = Comuna::where('comuna_id',$store->comuna_id)->first();
            $store->comuna_id = $comuna->comuna_nombre;
        }
        if ($store->region_id) {
            $region = Region::where('region_id',$store->region_id)->first();
            $store->region_id = $region->region_nombre;
        }

        $store->status = ($store->status == 1)?"Activo":"Pendiente";
        $user = Auth::user();
        if ($user->type == 1) {
            return view('admin.store.view',compact('store'));
        }else{
            return view('clients.store.view',compact('store'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::lists('username','id');
        $tipoTienda = StoreType::lists('Descripcion','id_tipo_tienda');
        $regiones = Region::lists('region_nombre','region_id');
        $store = Store::findOrFail($id);
        $user = Auth::user();
        if ($user->type == 1) {
            return view('admin.store.storeEdit',compact('store','users', 'regiones', 'tipoTienda'));
        }else{
            return view('clients.store.edit',compact('store','users', 'regiones', 'tipoTienda'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $store = Store::findOrFail($id);
        $store->fill(Request::all());
        if (Input::file('image')) {

            $image=Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('img/stores/' . $filename);
            Image::make($image->getRealPath())->save($path);
            $store->imagen = $filename;
        }
        $store->save();


        return redirect('stores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::findOrFail($id);

        if($store->delete()){
            return 'ok';
        }else{
            return 'no';
        };
    }
}
