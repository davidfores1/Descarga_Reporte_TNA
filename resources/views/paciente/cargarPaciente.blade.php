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
                        <a href="{{url('exportPacientes')}}">Descargar plantilla</a>
                    </div>

                    <div>
                        @if (auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)

                        <div style="width:450px">
                            <form action="{{route('importPacientes')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="file" class="form-control" name="file" required><br>
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

                                @if(session()->has('failures'))

                                <table class="table table-danger">
                                    <tr>
                                        <th>Fila</th>
                                        <th>Campo</th>
                                        <th>Error</th>
                                    </tr>
                                    @foreach(session()->get('failures') as $validar)
                                    <tr>
                                        <td>{{$validar->row()}}</td>
                                        <td>{{$validar->attribute()}}</td>
                                        <td>
                                            <ul>
                                                @foreach($validar->errors() as $e)
                                                <li>{{$e}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
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