<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\{Store, Aviso, Category, CategoryType, AvisoType};
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;

class AvisoController extends Controller
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


        if ($user->type == 1) {
            $avisos = Aviso::all();
            return view('admin.avisos.list',compact('avisos'));
        }else{
            $store = Store::where('user_id',$user->id)->first();
            $avisos = Aviso::where('store_id',$store->id)->get();
            return view('clients.avisos.list',compact('avisos'));
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if ($user->type == 1) {
            $stores = Store::lists('tienda_Nombre','id');
            $category = Category::lists('name','id');
            $type = AvisoType::lists('descripcion','id');
            return view('admin.avisos.create',compact('type', 'category', 'stores'));
        }else{
            $stores = Store::where('user_id',$user->id)->lists('tienda_Nombre','id');
            $category = Category::lists('name','id');
            $type = AvisoType::lists('descripcion','id');
            return view('clients.avisos.create',compact('type', 'category', 'stores' ));
        }


    }

    public function showT($type)
    {
        $avisos = Aviso::where('id_tipo_aviso',$type)->get();
        return view('admin.avisos.avisoList',compact('avisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $aviso = new Aviso(Request::all());
            $image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('img/avisos/' . $filename);
            Image::make($image->getRealPath())->save($path);
            $aviso->imagen = $filename;
            $aviso->save();

            $user = Auth::user();
            if ($user->type == 1) {
                return redirect('avisos');
            }else{
                $avisos = Aviso::where('store_id',$aviso->store_id)->get();
                return view('admin.avisos.list',compact('avisos'));
            }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $aviso = Aviso::findOrFail($id);

        $category = Category::lists('name','id');
        $type = AvisoType::lists('descripcion','id');
        if ($user->type == 1) {
            $stores = Store::lists('tienda_Nombre','id');
            return view('admin.avisos.edit',compact('aviso','stores', 'category','type','stores'));
        }else{
            $stores = Store::where('user_id',$user->id)->lists('tienda_Nombre','id');
            return view('clients.avisos.edit',compact('aviso','stores', 'category','type','stores'));
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
        $aviso = Aviso::findOrFail($id);
        $aviso->fill(Request::all());
        if (Input::file('image')) {
            $image=Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('img/avisos/' . $filename);
            Image::make($image->getRealPath())->save($path);
            $aviso->imagen = $filename;
        }
        $aviso->save();

        return redirect('avisos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Aviso::findOrFail($id);
        $store->delete();

    }
}
