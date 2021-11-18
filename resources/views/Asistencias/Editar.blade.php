@extends('Index')

@section('Contenido')
    

    <div >
        <div >
            <div >
            <form action="{{url('/asistencias/'.$asistencia->id)}}" method="post">
                @csrf
                {{method_field('PATCH')}}

                <div >
            <div >
                <div >
                   
                  <div >


                  
                     <div >
                        <label >Inicio</label>
                        <input value="{{isset($asistencia->inicio)?$asistencia->inicio:''}}" type="text" placeholder="Inicio"  name="inicio" /><br>
                   
                     </div>
                     <div >
                        <label >Final</label>
                        <input value="{{ isset($asistencia->final)?$asistencia->final:'' }}" type="text" placeholder="Final" name="final" require/><br>
                   
                     </div>
                     <div >
                        <label >Total</label>
                        <input   value="{{isset($asistencia->total)?$asistencia->total:''}}" type="text" placeholder="Total" name="total" require/><br>
                   
                     </div>
                     <div >
                        <label >Fecha</label>
                        <input value="{{isset($asistencia->fecha)?$asistencia->fecha:''}}" type="date" placeholder="Fecha" name="fecha" require /><br>
                   
                     </div>
                     
                     <input  value="{{isset($asistencia->user_id)?$asistencia->user_id:''}}" type="text" placeholder="Fecha" name="fecha" require /><br>
               

                  </div>
                  
                  
                
            </div>
            <input  type="submit" value="datos">
               
            
                     <a href="{{url('asistencias/')}}" class="btn btn-warning">Cancelar</a>
        </div>
     </div>
    
                </form>
            </div>
        </div>
    </div>
@endsection

