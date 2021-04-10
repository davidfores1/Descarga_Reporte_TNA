@extends('layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">

        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <div>
                        <h3 class="card-title" style="float:left">Resultados pacientes</h3>
                        @if (auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)
                        <h6 class="text-success" style="float:right; margin: 5px 10px 15px 10px;"><a
                                class="text-success" href="{{url('home')}}">Descargas: </a> <span id="num"></span></h6>
                        @endif
                    </div>
                    <br>
                    <hr>
                    <div>
                        @if (auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)
                        <a href="{{url('paciente/create')}}" class="btn btn-success" style="float:left">Nuevo registro</a>

                        @endif
                        <!-- FORMULARIO -->
                        <form method="get" action="{{url('home')}}" class="form-inline" style="float:right">

                            <div class="form-group mx-sm-2">
                                <input type="text" class="form-control" name="cod_interno" placeholder="Cod Interno">
                            </div>

                            <div class="form-group mx-sm-2">
                                <input type="number" class="form-control" name="documento" placeholder="Documento">
                            </div>
                            <div class="form-group mx-sm-2">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                            </div>
                            <button type="submit" class="btn btn-primary">Buscar</button>
                            <a href="{{url('paciente')}}" class="btn btn-success"
                                style="float:left">Restablecer</a><br><br>
                        </form> <br><br><br>

                    </div>
                    <!-- TABLA -->
                    <table class="table table-hover">
                        <thead class="table-active">
                            <tr>
                                <th scope="col">Cod Interno</th>
                                <th scope="col">Documento</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Fecha de Recepción</th>
                                <th scope="col">Fecha de Registro</th>
                                <th scope="col">Hospital</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pacientes as $paciente)
                            <tr>
                                <th>{{$paciente->cod_interno}}</th>
                                <td>{{$paciente->documento}}</td>
                                <td>{{$paciente->nombre}}</td>
                                <td>{{$paciente->edad}}</td>
                                <td>{{$paciente->fecha_recepcion}}</td>
                                <td>{{$paciente->created_at}}</td>
                                <td>{{$paciente->hospital}}</td>
                                <td>{{$paciente->usuario_sistema}}</td>
                                <td style="padding: 5px 0px 0px 0px">

                                    @if (auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)

                                    <a href="{{url('/paciente/'.$paciente->id.'/edit')}}"
                                        class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>

                                    <form action="{{ url('/paciente/'. $paciente->id)}}" method="post" class="d-inline">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" onclick="return confirm('Quieres Borrar')" value="Borrar"
                                            class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
                                    </form>
                                    @endif
                                    <a href="{{route('descargar',$paciente->id)}}"
                                        class="btn btn-success descargar"><i class="fas fa-file-download"></i></a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- PAGINACION -->
                    {!! $pacientes->links() !!}
                </div>
            </div>
        </div>
    </div>

    <div>

        @endsection