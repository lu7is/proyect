
@extends('Index')

@section('Contenido')
    
<h3 class="text-center">Usuarios Registrados</h3>
    <a href="{{url('usuarios/create')}}" class="btn btn-success">Registrar Nuevo Usuario</a>
    <br><br>
    
    <div >
            <div>
                <div >
            
           
            <table class="table ">
                <thead class="table-dark " >
                <tr  >
                   
                    <th scope="col" >Cedula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
        <tbody>

            @foreach($usuarios as $usu) 
            <tr>
                
                <td>{{$usu->cedula}}</td>
                <td>{{$usu->name}}</td>
                <td>{{$usu->apellido}}</td>
                <td>{{$usu->celular}}</td>
                <td>{{$usu->telefono}}</td>
                <td>{{$usu->email}}</td>
                <td>{{$usu->direccion}}</td>
               
                <td>
                    @if(!empty($usu->getRoleNames()))
                         @foreach($usu->getRoleNames() as $rolName)
                            {{$rolName}}
                         @endforeach

                    @endif
                </td>
                <td>

                <a href="{{url('/usuarios/'.$usu->id.'/edit')}}" class="btn btn-warning">
                    Editar
                </a>


                <form action="{{url('/usuarios/'.$usu->id)}}"method="post" class="d-inline">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('Deseas Eliminar Este Registro?')" class="btn btn-danger"value="Eliminar">
        
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
