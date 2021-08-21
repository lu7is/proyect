
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asistencias') }}
        </h2>
    </x-slot>
    <a href="{{url('asistencias/create')}}" class="btn btn-success">Registrar Nueva Asistencia</a>
    
    <div class="py-22">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
            <br><br>
            <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-white-1000 text-gray-100">
                <thead class="thead-inverse">
                <tr  class="text-left border-b border-gray-300">
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Id</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Inicio</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Final</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Total</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Fecha</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Usuario</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Acciones</th>
                </tr>
                </thead>
        <tbody>

            @foreach($asistencias as $asis) 
            <tr>
                <td>{{$asis->id}}</td>
                <td>{{$asis->inicio}}</td>
                <td>{{$asis->final}}</td>
                <td>{{$asis->total}}</td>
                <td>{{$asis->fecha}}</td>
                <td>{{$asis->user_id}}</td>
                <td>

                <a href="{{url('/asistencias/'.$asis->id.'/edit')}}">
                    Editar
                </a>


                <form action="{{url('/asistencias/'.$asis->id)}}"method="post" class="d-inline">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('Deseas Eliminar Este Registro?')" value="Eliminar">
            
            
            
                </form>

                


                </td>
               
            </tr>
            @endforeach
        </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>














