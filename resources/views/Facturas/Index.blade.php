@extends('Index')

@section('Contenido')

    
    <a href="{{url('facturas/create')}}" class="btn btn-success">Registrar Nueva Factura</a>
    <br><br>
    <div >
            <div >
                <div >
            
            
            <table class="table">
                <thead class="table-dark">
                <tr  >
                    <th scope="col" >Id</th>
                    <th scope="col" >Cantidad</th>
                    <th scope="col" >Descripcion</th>
                    <th scope="col" >Precio_Unitario</th>
                    <th scope="col" >Total</th>
                    <th scope="col" >Fecha</th>
                    <th scope="col" >Cliente</th>
                    <th scope="col" >Acciones</th>
                </tr>
                </thead>
        <tbody>

            @foreach($facturas as $fact) 
            <tr>
                <td>{{$fact->id}}</td>
                <td>{{$fact->cantidad}}</td>
                <td>{{$fact->descripcion}}</td>
                <td>{{$fact->precio_unitario}}</td>
                <td>{{$fact->total}}</td>
                <td>{{$fact->fecha}}</td>
                <td>{{$fact->user_id}}</td>
                <td>

                <a href="{{url('/facturas/'.$fact->id.'/edit')}}" class="btn btn-warning">
                    Editar
                </a>


                <form action="{{url('/facturas/'.$fact->id)}}"method="post" class="d-inline">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('Deseas Eliminar Este Registro?')" value="Eliminar" class="btn btn-danger">
            
            
            
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














