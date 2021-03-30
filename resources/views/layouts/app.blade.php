<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TNA</title>
    <link rel="icon" href="img/tittle.png">

    <!-- Menu CSS -->
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" defer>
    </link>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/contarDescarga.js') }}" defer></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        <!--                             
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else

                        <li>
                            <div class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Menu
                                </a>
                                <div class="dropdown-content">
                                    <a class="dropdown-item" href="{{url('home')}}">Pacientes</a>
                                    @if (auth()->user()->id_rol == 1 )
                                    <a class="dropdown-item" href="{{url('cargarPacientes')}}">Cargar pacientes</a>
                                    <a class="dropdown-item" href="{{url('usuario')}}">Usuarios</a>
                                    @endif
                                </div>
                            </div>


                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-content">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')

            <!-- Crear usuario -->
            @if(session('crearUsuario') == 'ok')

            <script>
            Swal.fire(
                'registrado!',
                'Usuario registrado.',
                'success'
            )
            </script>
            @endif

            <!-- editar usuario -->
            @if(session('editarUsuario') == 'ok')

            <script>
            Swal.fire(
                'Editado!',
                'Usuario editado.',
                'success'
            )
            </script>
            @endif

            <!-- Crear Persona -->
            @if(session('crearPaciente') == 'ok')

            <script>
            Swal.fire(
                'registrado!',
                'Paciente registrado.',
                'success'
            )
            </script>
            @endif

            <!-- Editar Persona -->

            @if(session('editarPaciente') == 'ok')

            <script>
            Swal.fire(
                'Editado!',
                'Paciente editado.',
                'success'
            )
            </script>
            @endif

            <!-- Cargar pacientes -->

            @if(session('cargarPacientes') == 'ok')

            <script>
            Swal.fire(
                'Cargados!',
                'Pacientes cargados.',
                'success'
            )
            </script>
            @endif
        </main>

    </div>

</body>

</html>