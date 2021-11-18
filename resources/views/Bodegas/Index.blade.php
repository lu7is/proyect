
@extends('Index')



    @section('Contenido')
    
    <h1>lista de bodegas registradas</h1>
    <div class="">
            <div class="">
                <div class="">
                <a href="{{url('bodegas/create')}}" class="btn btn-success">Registrar Nueva Bodega</a>
            <br><br>
            <table class="table">
                <thead class="table-dark">
                <tr  class="">
                    <th scope="" class="">Id</th>
                    <th scope="" class="">Estado</th>
                    <th scope="" class="">Num_remi</th>
                    <th scope="" class="">Tipo</th>
                    <th scope="" class="">Cantidad</th>
                    <th scope="" class="">Descripcion</th>
                    <th scope="" class="">Fecha_Ingreso</th>
                    <th scope="" class="">Fecha_Salida</th>
                    <th scope="" class="">Cliente</th>
                    <th scope="" class="">Acciones</th>
                </tr>
                </thead>
        <tbody>

            @foreach($bodegas as $bode) 
            <tr>
                <td>{{$bode->id}}</td>
                <td>{{$bode->estado}}</td>
                <td>{{$bode->num_remi}}</td>
                <td>{{$bode->tipo}}</td>
                <td>{{$bode->cantidad}}</td>
                <td>{{$bode->descripcion}}</td>
                <td>{{$bode->fecha_in}}</td>
                <td>{{$bode->fecha_out}}</td>
                <td>{{$bode->user_id}}</td>
                <td>
                
                <a href="{{url('/bodegas/'.$bode->id.'/edit')}}" class="btn btn-warning">
                    Editar
                </a>
                

                <form action="{{url('/bodegas/'.$bode->id)}}"method="post" class="d-inline">
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













