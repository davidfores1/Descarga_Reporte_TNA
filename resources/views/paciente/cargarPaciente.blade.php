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
                        <h3 class="card-title" style="float:left">Cargar pacientes</h3>
                    </div>
                    <br>
                    <hr>

                    @if(isset($numRows))
                    <div class="alert alert-info">
                        Se importaron {{$numRows}} registros.
                    </div>
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
                                        <th>Valor Error</th>
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
                                        <td>
                                            {{$validar->values()[$validar->attribute()]}}
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