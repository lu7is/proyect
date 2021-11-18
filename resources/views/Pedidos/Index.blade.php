@extends('Index')

@section('Contenido')
   
    <a href="{{url('pedidos/create')}}" class="btn btn-success">Registrar Nuevo Pedido</a>
    <br><br>
    <div class="py-22">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
            
            <table class="table">
                <thead class="table-dark">
                <tr >
                    
                    <th scope="col" >Cantidad</th>
                    <th scope="col" >Tipo</th>
                    <th scope="col" >Fecha</th>
                    <th scope="col" >Cliente</th>
                    <th scope="col" >Acciones</th>
                </tr>
                </thead>
        <tbody>

            @foreach($pedidos as $pedi) 
            <tr>
               
                <td>{{$pedi->cantidad}}</td>
                <td>{{$pedi->tipo}}</td>
                <td>{{$pedi->fecha}}</td>
                <td>{{$pedi->user_id}}</td>
                <td>

                <a href="{{url('/pedidos/'.$pedi->id.'/edit')}}" class="btn btn-warning">
                    Editar
                </a>


                <form action="{{url('/pedidos/'.$pedi->id)}}"method="post" class="d-inline">
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














