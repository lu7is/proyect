@extends('Index')

@section('Contenido')

   
    
    <a href="{{url('inventarios/create')}}" class="btn btn-success">
    
            {{ __('Registrar Inventario') }}
   </a>
   <br><br>
    
            <div >
                <div >
            
            
            <table class="table">
                <thead class="table-dark">
                <tr  >
                   
                    <th scope="col" >Cantidad</th>
                    <th scope="col" >Tipo</th>
                    <th scope="col" >Estado</th>
                    <th scope="col" >Fecha</th>
                    <th scope="col" >Acciones</th>
                </tr>
                </thead>
        <tbody>

            @foreach($inventarios as $emplea) 
            <tr>
                
                <td>{{$emplea->cantidad}}</td>
                <td>{{$emplea->tipo}}</td>
                <td>{{$emplea->estado}}</td>
                <td>{{$emplea->fecha}}</td>
                <td>

                <a href="{{url('/inventarios/'.$emplea->id.'/edit')}}" class="btn btn-warning">
                
                     {{ __('Editar') }}
                 
                </a>


                <form action="{{url('/inventarios/'.$emplea->id)}}"method="post" class="d-inline">
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
  

@endsection













