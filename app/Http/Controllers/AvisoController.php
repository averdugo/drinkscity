<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\{Store, Aviso, Category, CategoryType, AvisoType};
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;

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
        $avisos = Aviso::all();

        return view('admin.avisos.avisoList',compact('avisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $stores = Store::lists('tienda_Nombre','id');
        $category = Category::lists('name','id');
        $type = AvisoType::lists('descripcion','id');
        return view('admin.avisos.standarCreate',compact(
                            'type',
                            'category',
                            'stores'
                ));
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

            return redirect('avisos');

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
