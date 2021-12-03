<?php

namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $datos['usuarios']=User::paginate(5);
        return view('Usuarios.Index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios= Role::pluck('name','name')->all();
        return view('Usuarios.Form',compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'cedula'=>'required|cedula|unique:users,cedula',
            'name'=>'required',
            'apellido'=>'required',
            'celular'=>'required',
            'telefono'=>'required',
            'email'=>'required',
            'direccion'=>'required',
            'password'=>'required',
            'Rol'=>'required'
        ]);

        $datosUsuario=$request->all()->except('_token');
        $datosUsuario["password"]=Hash::make($datosUsuario["password"]);

        $user=User::create($datosUsuario);
        $user->assignRole($request->datosUsuario('roles'));
        return redirect()->route('usuarios.index');
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
        $usuarios=User::find($id);
        $rol = Role::pluck('name','name')->all();
        $usuRol = $usuarios->rol->pluck('name','name')->all();

        return view('Usuarios.Editar',compact('usuarios','rol','usuRol'));
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
        $this->validate($request,[
            'cedula'=>'required|cedula|unique:users,cedula',
            'name'=>'required',
            'apellido'=>'required',
            'celular'=>'required',
            'telefono'=>'required',
            'email'=>'required'.$id,
            'direccion'=>'required',
            'password',
            'Rol'=>'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input, array('password'));
        }
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        
        $user->assignRole($request->input('roles'));
        return redirect()->route('usuarios.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return rediect()->route('usuarios.index');
    }
}
