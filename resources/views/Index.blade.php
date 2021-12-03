<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <h4 class="text-light">Meraki_Brand</h4>
            </div>
            
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                    
                            
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>
                        <form method="POST" action="{{ route('logout') }}">
                                @csrf
                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="{{ route('logout') }}"onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="fas fa-sign-out-alt m-1"></i>Cerrar Sesion
                            </a>
                            <a class="dropdown-item menuperfil cerrar" href="{{ route('profile.show') }}"><i class="fas fa-android m-1"></i>Ver Perfil
                            </a>
                           
                        </div>
                        </form>
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
           
    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="{{ route('Ind') }}"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="{{ route('usuarios.index') }}"><i class="fas fa-address-card"></i><span>Usuarios</span></a>
                    <a href="{{ route('bodegas.index') }}"><i class="fas fa-archive"></i><span>Bodegas</span></a>
                    <a href="{{ route('inventarios.index') }}"><i class="fas fa-chart-bar"></i><span>Inventarios</span></a>
                    <a href="{{ route('pedidos.index') }}"><i class="fas fa-calendar"></i><span>Pedidos</span></a>
                    <a href="{{ route('facturas.index') }}"><i class="fas fa-calculator"></i><span>Facturas</span></a>
                    <a href="{{ route('asistencias.index') }}"><i class="fas fa-child"></i><span>Asistencias</span></a>
                    <a href="{{ route('roles.index') }}"><i class="fas fa-child"></i><span>Roles</span></a>
                </nav>
            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-6">
                       
                    </div>
                
                </div>
                @yield('Contenido')
            </main>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script>
</body>

</html>



