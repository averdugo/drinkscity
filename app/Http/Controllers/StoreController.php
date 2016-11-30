<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\{Store, User};
use Carbon\Carbon;

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
        /*foreach ($users as $u) {
            $name = UserType::findOrFail($u->type);
            $u->type = $name->name;
        }*/
        return view('admin.storeList',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $store = new Store();
            $store->user_id = $r->user_id;
            $store->r_name = $r->r_name;
            $store->r_phone = $r->r_phone;
            $store->name = $r->name;
            $store->email = $r->email;
            $store->place = $r->place;
            $store->commune_id = $r->commune_id;
            $store->commune_id = $r->commune_id;
            $store->c_phone = $r->c_phone;
            $store->store_type = $r->store_type;
            $store->schedules = $r->schedules;
            $store->photo = "";
            $store->status = $r->status;
            $store->created_at = Carbon::now();
            $store->save();
            return 'ok';

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
