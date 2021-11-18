



    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            


                <form action="{{url('/usuarios')}}" method="post">
                @csrf

                @include('Usuarios.Form',['modo'=>'Registrar']);
   
                </form>
            </div>
        </div>
    </div>
