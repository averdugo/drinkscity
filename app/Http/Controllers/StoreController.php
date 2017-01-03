<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\{Store, Comuna, Region, Provincia, StoreType};
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();

        return view('admin.storeList',compact('stores'));
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

        return view('admin.storeCreate',compact('users', 'regiones', 'tipoTienda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        try {
            $store = new Store(Request::all());
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
        return view('admin.storeList',compact('stores'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('admin.storeEdit',compact('store','users', 'regiones', 'tipoTienda'));
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
