<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

       
       
       @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif
            <center>
                <h1>Meraki Brand</h1>
            </center>
        <form method="POST" action="{{ route('login') }}" class="login">
            @csrf
                
            <div class="form-group">
                <label for="">Correo Electronico</label>
                <input id="email"  type="email" name="email" class="form-control" placeholder="Correo" :value="old('email')" required autofocus />
            </div>
            

            <div class="form-group">
                <label for="">Contraseña</label>
                <input id="password"  type="password" name="password" class="form-control" placeholder="Contraseña" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a><br><br>
                @endif

                
            </div>

            <input type="submit" value="Acceder" class="btn btn-primary d-inline"> 
            <a href="{{ url('principal') }}" class="btn btn-success"> 
                Cancelar

            </a>
            
        </form>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script>


    
</body>
</html>

