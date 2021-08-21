


    <h1>{{$modo}} Pedidos</h1>
    
   

   
    
    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">

                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Cantidad</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($pedi->cantidad)?$pedi->cantidad:''}}" type="number" placeholder="Cantidad" name="cantidad" require /><br>
                   
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tipo</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($pedi->tipo)?$pedi->tipo:''}}" type="text" placeholder="Tipo" name="tipo" require /><br>
                   
                     </div>
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha</label>
                        <input  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" value="{{isset($pedi->fecha)?$pedi->fecha:''}}" type="date" placeholder="Fecha" name="fecha" require /><br>
                   
                     </div>
                     
                     <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Usuario</label>
                       <select name="user_id" id="" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                       <option value="">--Esoja el cliente--</option>
                       
                           @foreach( $usuarios as $usu)
                              <option value="{{$usu->id}}">{{$usu->name}}</option>
                           @endforeach
                        


                       </select>
                   
                     </div>
               

                  </div>
                  
                  
                
            </div>
            <input class="btn btn-primary" type="submit" value="{{$modo}} datos">
               
            
                     <a href="{{url('pedidos/')}}">Cancelar</a>
        </div>
     </div>
    