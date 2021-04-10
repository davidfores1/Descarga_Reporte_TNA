@extends('layouts.app')
@section('content')

<div class="row justify-content-center">

        <div class="col-sm-5">
            <div class="card">
                <div class="card-body">

                    <div>
                        <h3 class="card-title" style="float:left">Cargar pacientes</h3>
                    </div>
                    <br>
                    <hr>

                    @if(isset($numRows))

                    <script>
                        swal.fire({
                                title: "Cargados!",
                                text: '¡Se importaron ' + {{$numRows}} +' registros!',
                                type: "success",
                                confirmButtonText: "OK"
                            }).then(okay => {
                                if (okay) {
                                window.location.href = "cargarPacientes";
                                }
                            });
         
                    </script>


                    @endif
                    <div>
                        <a href="{{url('exportPacientes')}}" ><i class="fas fa-file-export" style="width:20x"></i>Descargar plantilla</a>
                    </div>
<br>
                    <div>
                        @if (auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)

                        <div style="width:450px">
                            <form action="{{route('importPacientes')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="file" class="form-control" name="file" required><br>

                                <strong><p>Por favor Cargar el archivo en formato de excel ejemplo.csv</p></strong>
                                
                                <button class="btn btn-success">Cargar</button>

                            </form>

                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-info">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

        @endsection