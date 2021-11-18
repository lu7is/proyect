
@extends('Index')

@section('Contenido')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Facturas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{url('/facturas/'.$facturas->id)}}" method="post">
                @csrf
                {{method_field('PATCH')}}

                <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">


                  
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Cantidad</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($facturas->cantidad)?$facturas->cantidad:''}}" type="number" placeholder="Cantidad"  name="cantidad" /><br>
                   
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Descripcion</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{ isset($facturas->descripcion)?$facturas->descripcion:'' }}" type="text" placeholder="Descripcion" name="descripcion" require/><br>
                   
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Precio_Unitario</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($facturas->precio_unitario)?$facturas->precio_unitario:''}}" type="number" placeholder="Precio_Unitario" name="precio_unitario" require/><br>
                   
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Total</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($facturas->total)?$facturas->total:''}}" type="number" placeholder="Total" name="total" require /><br>
                   
                     </div>
                     
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($facturas->fecha)?$facturas->fecha:''}}" type="date" placeholder="Fecha" name="fecha" require /><br>
                   
                     </div>

                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Usuario</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($facturas->user_id)?$facturas->user_id:''}}" type="text" placeholder="Fecha" name="fecha" require /><br>
                   
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
@endsection

