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
                    <div>
                   <a href="">Descargar plantilla</a>
                    </div>

                    <div>
                        @if (auth()->user()->id_rol == 1 || auth()->user()->id_rol == 2)

                        <div style="width:450px">
                            <form action="{{route('importPacientes')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="file" class="form-control" name="file" required><br>
                                <button class="btn btn-success">Cargar</button>

                            </form>
                        </div>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div>

        @endsection