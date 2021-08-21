
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventarios') }}
        </h2>
    </x-slot>
    
    <a href="{{url('inventarios/create')}}" class="btn btn-success">
    <x-jet-button class="ml-2 " >
            {{ __('Registrar Inventario') }}
    </x-jet-button>
    </a>
    
    <div class="py-22">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
            <br><br>
            <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-white-1000 text-gray-100">
                <thead class="thead-inverse">
                <tr  class="text-left border-b border-gray-300">
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Id</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Cantidad</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Tipo</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Estado</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Fecha</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Acciones</th>
                </tr>
                </thead>
        <tbody>

            @foreach($inventarios as $emplea) 
            <tr>
                <td>{{$emplea->id}}</td>
                <td>{{$emplea->cantidad}}</td>
                <td>{{$emplea->tipo}}</td>
                <td>{{$emplea->estado}}</td>
                <td>{{$emplea->fecha}}</td>
                <td>

                <a href="{{url('/inventarios/'.$emplea->id.'/edit')}}">
                <x-jet-button class="ml-2 " >
                     {{ __('Editar') }}
                 </x-jet-button>
                </a>


                <form action="{{url('/inventarios/'.$emplea->id)}}"method="post" class="d-inline">
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














