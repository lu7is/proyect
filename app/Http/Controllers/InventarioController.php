<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['inventarios']=Inventario::paginate(5);
      return view('Inventarios.Index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Inventarios.Registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'cantidad'=>'required|min:1|max:5',
            'tipo'=>'required|max:5',
            'estado'=>'required|min:1|max:5',
            'fecha'=>'required|min:1|max:5'
        ]);
        $datosInventario=request()->except('_token');
        Inventario::insert($datosInventario);
        return redirect('inventarios');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario=Inventario::findOrfail($id);
        return view('Inventarios.Editar',compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datosInventario=request()->except(['_token','_method']);
        Inventario::where('id','=',$id)->update($datosInventario);
        return redirect('inventarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Inventario::destroy($id);
        return redirect('inventarios');
    }
}
