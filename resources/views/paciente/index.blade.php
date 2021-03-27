@extends('layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <h6 class="dropdown-header">Menu</h6>
                <a class="dropdown-item" href="{{url('home')}}">Pacientes</a>
                @if (auth()->user()->id_rol == 1 )
                <a class="dropdown-item" href="{{url('cargarPacientes')}}">Cargar pacientes</a>
                <a class="dropdown-item" href="{{url('usuario')}}">Usuarios</a>
                @endif
            </div>
        </div>

        <div class="col-sm-9">
            <div class="card">
                <div class="card-body">

                    <div>
                        <h3 class="card-title" style="float:left">Pacientes</h3>
                        @if (auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)
                        <h6 class="text-success" style="float:right; margin: 5px 10px 15px 10px;"><a
                                class="text-success" href="{{url('home')}}">Descargas: </a> <span id="num"></span></h6>
                        @endif
                    </div>
                    <br>
                    <hr>
                    <div>
                        @if (auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)
                        <a href="{{url('paciente/create')}}" class="btn btn-success" style="float:left">Nuevo</a>

                        @endif
                        <!-- FORMULARIO -->
                        <form method="get" action="{{url('home')}}" class="form-inline" style="float:right">

                            <div class="form-group mx-sm-3">
                                <input type="number" class="form-control" name="documento" placeholder="Documento">
                            </div>
                            <div class="form-group mx-sm-3">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                            </div>
                            <button type="submit" class="btn btn-primary">Buscar</button>
                            <a href="{{url('paciente')}}" class="btn btn-success"
                                style="float:left">Restablecer</a><br><br>
                        </form> <br><br><br>

                    </div>
                    <!-- TABLA -->
                    <table class="table">
                        <thead class="table-active">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">DOCUMENTO</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">FECHA DE REGISTRO</th>
                                <th scope="col">FECHA EDITADA</th>
                                <th scope="col">OPCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pacientes as $paciente)
                            <tr>
                                <th>{{$paciente->id}}</th>
                                <td>{{$paciente->documento}}</td>
                                <td>{{$paciente->nombre}}</td>
                                <td>{{$paciente->created_at}}</td>
                                <td>{{$paciente->updated_at}}</td>
                                <td style="padding: 5px 0px 0px 0px">

                                    @if (auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)

                                    <a href="{{url('/paciente/'.$paciente->id.'/edit')}}"
                                        class="btn btn-info">Editar</a>

                                    <form action="{{ url('/paciente/'. $paciente->id)}}" method="post" class="d-inline">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" onclick="return confirm('Quieres Borrar')" value="Borrar"
                                            class="btn btn-danger">
                                    </form>
                                    @endif
                                    <a href="{{route('descargar',$paciente->id)}}"
                                        class="btn btn-success descargar">Descargar</a>

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