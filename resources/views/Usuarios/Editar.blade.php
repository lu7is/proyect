
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{url('/usuarios/'.$usuarios->id)}}" method="post">
                @csrf
                {{method_field('PATCH')}}

                <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="cedula" value="cedula" />
                <x-jet-input id="cedula" class="block mt-1 w-full" type="number" name="cedula" value="{{isset($usuario->cedula)?$usu->cedula:''}}"  required />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="apellido" value="apellido" />
                <x-jet-input id="apellido" class="block mt-1 w-full" type="text" name="apellido"  required />
            </div>

            <div class="mt-4">
                <x-jet-label for="celular" value="celular" />
                <x-jet-input id="celular" class="block mt-1 w-full" type="number" name="celular"  required />
            </div>

            <div class="mt-4">
                <x-jet-label for="telefono" value="telefono" />
                <x-jet-input id="telefono" class="block mt-1 w-full" type="number" name="telefono"  required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full  " type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="direccion" value="direccion" />
                <x-jet-input id="direccion" class="block mt-1 w-full" type="text" name="direccion"  required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="rol" value="Rol" />
                <x-jet-input id="rol" class="block mt-1 w-full" type="text" name="rol"  required />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>

                <x-jet-button class="ml-4">
                <a href="{{url('usuarios/')}}">Cancelar</a>
                </x-jet-button>
                
            </div>
        </form>
            
                     
        </div>
     </div>
    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

