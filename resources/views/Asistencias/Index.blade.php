
@extends('Index')

@section('Contenido')
    <x-slot name="header">
        <h2 >
            {{ __('Asistencias') }}
        </h2>
    </x-slot>
    <a href="{{url('asistencias/create')}}" class="btn btn-success">Registrar Nueva Asistencia</a>
    <br><br>
    <div >
            <div >
                <div >
         
            <table class="table" >
                <thead class="table-dark" >
                <tr  >
                    
                    <th scope="col">Inicio</th>
                    <th scope="col">Final</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
        <tbody>

            @foreach($asistencias as $asis) 
            <tr>
                
                <td>{{$asis->inicio}}</td>
                <td>{{$asis->final}}</td>
                <td>{{$asis->total}}</td>
                <td>{{$asis->fecha}}</td>
                <td>{{$asis->user_id}}</td>
                <td>

                <a href="{{url('/asistencias/'.$asis->id.'/edit')}}" class="btn btn-warning">
                    Editar
                </a>


                <form action="{{url('/asistencias/'.$asis->id)}}"method="post" class="d-inline">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('Deseas Eliminar Este Registro?')" class="btn btn-danger" value="Eliminar">
            
            
            
                </form>

                


                </td>
               
            </tr>
            @endforeach
        </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection













