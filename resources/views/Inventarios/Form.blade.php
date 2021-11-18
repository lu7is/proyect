

      <center>
      <h1>{{$modo}} Inventario</h1>
      </center>
                
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Cantidad</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($inventario->cantidad)?$inventario->cantidad:''}}" type="number" placeholder="Cantidad" name="cantidad" require /><br>
                        @error('cantidad')
                         <small>*{{$message}}</small>
                       @enderror
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tipo</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{ isset($inventario->tipo)?$inventario->tipo:'' }}" type="text" placeholder="Tipo" name="tipo" require/><br>
                        @error('tipo')
                         <small>*{{$message}}</small>
                       @enderror
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Estado</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($inventario->estado)?$inventario->estado:''}}" type="text" placeholder="Estado" name="estado" require/><br>
                        @error('estado')
                         <small>*{{$message}}</small>
                       @enderror
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($inventario->fecha)?$inventario->fecha:''}}" type="date" placeholder="Fecha" name="fecha" require /><br>
                        @error('fecha')
                         <small>*{{$message}}</small>
                       @enderror
                     </div>
            <input class="btn btn-success" type="submit" value="Registrar"/>
                     
                     <a href="{{url('inventarios/')}}" class="btn btn-warning">Cancelar</a>
       
     