
    
       

       

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="cedula" value="cedula" />
                <x-jet-input id="cedula" class="block mt-1 w-full" type="number" name="cedula"  required />
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
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
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
                <x-jet-label for="rol" value="rol" />
                <x-jet-input id="rol" class="block mt-1 w-full" type="text" name="rol"  required />
            </div>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
           
        </form>
    

