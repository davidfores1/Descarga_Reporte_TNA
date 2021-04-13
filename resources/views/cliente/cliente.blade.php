<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/tittle.png">

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" defer>
    <!-- <script src="js/bootstrap.min.js"></script> -->

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- javascript para realizar el contedo de descargas -->
    <script src="{{ asset('js/contarDescarga.js') }}" defer></script>

    <!-- Libreria de javascript (axios) para realizar peticiones  -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <title>Resultados TNA</title>
</head>

<body>

    <div class="container">

        <div class="col d-flex justify-content-center">
            <img src="{!! asset('img/asoclinic.png') !!}" style="padding:30px">
        </div>

        <div class="col d-flex justify-content-center">
            <h2>Descarga resultados TNA</h2>
        </div>

        <div class="col d-flex justify-content-center" style="padding-left: 60px;">
        <!-- Formulario-->
            <form method="get" action="{{url('/validar')}}">
                <div class="form-row align-items-center">
                   
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Identificación</label>
                        <input type="number" class="form-control mb-2" id="identificación" name="documento"
                            placeholder="Documento" required>
                    </div>
                    
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Contraseña</label>
                        <input type="text" class="form-control mb-2" id="contrase" name="contrasena"
                            placeholder="Contraseña">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                        <a href="{{ url('/cliente') }}" class="btn btn-danger mb-2" style="color:white"><i
                                class="fas fa-sign-out-alt"></i>Salir</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @yield('tablaCliente')

<!-- MENSAJES DE VALIDACION CON LA LIBRERIA alert sweetalert2 -->
    @if(session('validarPaciente') == 'ok')

    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Contraseña incorrecta!',
    })
    </script>
    @endif

    @if(session('noRegistroPaciente') == 'ok')



    <script>
    Swal.fire({
        icon: 'error',
        title: 'Lo siento',
        text: 'No hay registro del Paciente',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    })
    </script>
    @endif
</body>

</html>