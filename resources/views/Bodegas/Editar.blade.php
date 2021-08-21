
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Datos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{url('/bodegas/'.$bodegas->id)}}" method="post">
                @csrf
                {{method_field('PATCH')}}

                <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">


                  
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Estado</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($bodegas->estado)?$bodegas->estado:''}}" type="text" placeholder="Estado"  name="estado" /><br>
                   
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Num_Remi</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{ isset($bodegas->num_remi)?$bodegas->num_remi:'' }}" type="number" placeholder="Num_Remi" name="num_remi" require/><br>
                   
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tipo</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($bodegas->tipo)?$bodegas->tipo:''}}" type="text" placeholder="Tipo" name="tipo" require/><br>
                   
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Cantidad</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($bodegas->cantidad)?$bodegas->cantidad:''}}" type="number" placeholder="Cantidad" name="cantidad" require /><br>
                   
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Descripcion</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($bodegas->descripcion)?$bodegas->descripcion:''}}" type="text" placeholder="Descripcion" name="descripcion" require /><br>
                   
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha_Ingreso</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($bodegas->fecha_in)?$bodegas->fecha_in:''}}" type="date" placeholder="Fecha_Ingreso" name="fecha_in" require /><br>
             
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha_Salida</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($bodegas->fecha_out)?$bodegas->fecha_out:''}}" type="date" placeholder="Fecha_Salida" name="fecha_out" require /><br>
                   
                     </div>
                    
               

                  </div>
                  
                  
                
            </div>
            <input class="btn btn-primary" type="submit" value="Editar datos">
               
            
                     <a href="{{url('bodegas/')}}">Cancelar</a>
        </div>
     </div>
    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

