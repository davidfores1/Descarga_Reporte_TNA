@if (auth()->user()->id_rol == 1 )

@extends('layouts.app')
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <h6 class="dropdown-header">Menu</h6>
                <a class="dropdown-item" href="{{url('home')}}">Pacientes</a>
                <a class="dropdown-item" href="{{url('cargarPacientes')}}">Cargar pacientes</a>
                <a class="dropdown-item" href="{{url('usuario')}}">Usuarios</a>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="card">
                <div class="card-body">

                    <h3 class="card-title">Usuarios</h3>
                    <hr>
                    <div>
                        <a href="{{route('registro')}}" class="btn btn-success" style="float:left">Nuevo</a>

                        <!-- FORMULARIO -->
                        <form method="get" action="{{url('usuario')}}" class="form-inline" style="float:right">

                            <div class="form-group mx-sm-3">
                                <input type="text" class="form-control" name="name" placeholder="Nombre">
                            </div>
                            <div class="form-group mx-sm-3">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-primary">Buscar</button>
                            <a href="{{url('usuario')}}" class="btn btn-success"
                                style="float:left">Restablecer</a><br><br>
                        </form> <br><br><br>

                    </div>
                    <!-- TABLA -->
                    <table class="table">
                        <thead class="table-active">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">USUARIO</th>
                                <th scope="col">ROL</th>
                                <th scope="col">FECHA DE REGISTRO</th>
                                <th colspan="3">OPCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <th>{{$usuario->id}}</th>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->id_rol}}</td>
                                <td>{{$usuario->created_at}}</td>
                                <td style="padding: 5px 0px 0px 0px">

                                    <a href="{{url('/usuario/' . $usuario->id . '/edit')}}" class="btn btn-info">Editar</a>

                                    <form action="{{url('/usuario/' . $usuario->id)}}" method="post" class="d-inline">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" onclick="return confirm('Quieres Borrar')" value="Borrar"
                                            class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- PAGINACION -->
                    {!! $usuarios->links() !!}
                </div>
            </div>
        </div>
    </div>

    <div>

@endsection

@else

<div style="text-align:center; padding: 40px">
<h1>Error 404</h1>
</div>

@endif