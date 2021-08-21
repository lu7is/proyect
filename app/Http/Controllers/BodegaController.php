<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['bodegas']=Bodega::paginate(5);
        return view('Bodegas.Index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        return view('Bodegas.Registrar',compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $datosBodega=request()->except('_token');
       Bodega::insert($datosBodega);
       return redirect('bodegas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function show(Bodega $bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bodegas=Bodega::findOrfail($id);
        return view('Bodegas.Editar',compact('bodegas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datosBodega=request()->except(['_token','_method']);
        Bodega::where('id','=',$id)->update($datosBodega);
        return redirect('bodegas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bodega::destroy($id);
        return redirect('bodegas');
    }
}
