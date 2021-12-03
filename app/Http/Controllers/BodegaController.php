<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    function __construct(){
        $this-middleware('permission:ver-bodega | crear-bodega | editar-bodega | borrar-bodega',['only'=>['index']]);
        $this-middleware('permission:crear-bodega',['only'=>['create','store']]);
        $this-middleware('permission:editar-bodega',['only'=>['edit','update']]);
        $this-middleware('permission:borrar-bodega',['only'=>['destroy']]);
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $datos['bodegas']=Bodega::paginate(5);
        //return view('Bodegas.Index',$datos);

        $bodega = Bodega::paginate(5);
        return view('Bodegas.Index', compact('bodega'));
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
      // $datosBodega=request()->except('_token');

      // Bodega::insert($datosBodega);

       //return redirect('bodegas');
       request()->validate([
        'estado'=>'required',
        'num_remi'=>'required',
        'tipo'=>'required',
        'cantidad'=>'required',
        'descripcion'=>'required',
        'fecha_in'=>'required',
        'fecha_out'=>'required'
       ]);
       Bodega::create($request->all());
            return redirect()->route('bodegas.index');

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
    public function edit(Bodegas $bodegas)
    {
       // $bodegas=Bodega::findOrfail($id);
        return view('Bodegas.Editar',compact('bodegas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodegas $bodegas)
    {
        request()->validate([
            'estado'=>'required',
            'num_remi'=>'required',
            'tipo'=>'required',
            'cantidad'=>'required',
            'descripcion'=>'required',
            'fecha_in'=>'required',
            'fecha_out'=>'required'
           ]);

       // $datosBodega=request()->except(['_token','_method']);
       // Bodega::where('id','=',$id)->update($datosBodega);
           $bodega->update($request->all());
        return redirect('bodegas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodegas $bodegas)
    {
       // Bodega::destroy($id);
      // return redirect('bodegas');

      $bodega->delete();
      return redirect()->route('bodegas.index');
    }
}
