@extends('Index')

@section('Contenido')
<div class="" >
               
               <div >
                   
                  <div >


                  
                     <div >
                        <label  class="form-group col" >Estado</label>
                        <input class="form-control row-g-3"  value="{{isset($bode->estado)?$bode->estado:''}}" type="text" placeholder="Estado"  name="estado" /><br>                   
                     </div>
                     <div >
                        <label class="form-group col" >Num_Remi</label>
                        <input class="form-control row-g-3"   value="{{ isset($bode->num_remi)?$bode->num_remi:'' }}" type="number" placeholder="Num_Remi" name="num_remi" require/><br>
                   
                     </div>
                     <div >
                        <label >Tipo</label>
                        <input  value="{{isset($bode->tipo)?$bode->tipo:''}}" type="text" placeholder="Tipo" name="tipo" require/><br>
                   
                     </div>
                     <div >
                        <label >Cantidad</label>
                        <input value="{{isset($bode->cantidad)?$bode->cantidad:''}}" type="number" placeholder="Cantidad" name="cantidad" require /><br>
                   
                     </div>
                     <div >
                        <label >Descripcion</label>
                        <input   value="{{isset($bode->descripcion)?$bode->descripcion:''}}" type="text" placeholder="Descripcion" name="descripcion" require /><br>
                   
                     </div>
                     <div >
                        <label >Fecha_Ingreso</label>
                        <input   value="{{isset($bode->fecha_in)?$bode->fecha_in:''}}" type="date" placeholder="Fecha_Ingreso" name="fecha_in" require /><br>
                   
                     </div>
                     <div>
                        <label >Fecha_Salida</label>
                        <input  value="{{isset($bode->fecha_out)?$bode->fecha_out:''}}" type="date" placeholder="Fecha_Salida" name="fecha_out" require /><br>
                   
                     </div>
                     <div >
                        <label >Usuario</label>
                       <select name="user_id" id="" >
                       <option value="">--Esoja el cliente--</option>
                       
                           @foreach( $usuarios as $usu)
                              <option value="{{$usu->id}}">{{$usu->name}}</option>
                           @endforeach
                        


                       </select>
                   
                     </div>
               

                  </div>
                  
                  
                
            </div>
            <input class="btn btn-primary" type="submit" value="{{$modo}} datos">
               
            
                     <a href="{{url('bodegas/')}}" class="btn btn-warning">Cancelar</a>
        </div>

@endsection