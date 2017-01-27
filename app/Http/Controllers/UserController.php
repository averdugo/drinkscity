<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User,UserType};
use App\models\{Store};
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Auth;

class UserController extends Controller
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
        $users = User::all();
        foreach ($users as $u) {
            $name = UserType::findOrFail($u->type);
            $u->type = $name->name;
        }
        return view('admin.userList',compact('users'));
    }

    public function getUsers(){
        $users = User::all();
        $data = "<option value=''>Seleccione Usuario</option>";
        foreach ($users as $u) {
            $data .= sprintf(
                '<option value="%s">%s</option>', $u->id,$u->username
            );
        }

        return $data;
    }

    public function userFromStore(Request $r)
    {
        $user = new User();
        $user->username = $r->username;
        $user->email = $r->email;
        $user->password = bcrypt($r->password);
        $user->type = $r->type;
        $user->created_at = Carbon::now();
        $user->save();

        $store = Store::findOrFail($r->store_id);
        $store->user_id = $user->id;
        return $user;
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
            $user = new User();
            $user->username = $r->username;
            $user->email = $r->email;
            $user->password = bcrypt($r->password);
            $user->type = $r->type;
            $user->created_at = Carbon::now();
            $user->save();
            return $user;

        } catch (\PDOException $e) {

            return $e->getMessage();
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
        $user = User::findOrFail($id);
        return $user;
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
        $user = User::findOrFail($id);
        if($user->delete()){
            return 'ok';
        }else{
            return 'no';
        };

    }
}
