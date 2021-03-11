@extends('layouts.app')
@section('content')

<div class="container">

    <div class="card w-78">
        <div class="card-body">
            <div>
                <a href="{{url('persona/create')}}" class="btn btn-success" style="float:left">Nuevo</a><br><br>

                <!-- FORMULARIO -->
                <form method="get" action="{{url('home')}}" class="form-inline" style="float:right">

                    <div class="form-group mx-sm-3">
                        <input type="number" class="form-control" name="documento" placeholder="Documento">
                    </div>
                    <div class="form-group mx-sm-3">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                    <a href="{{url('persona')}}" class="btn btn-success" style="float:left">Restablecer</a><br><br>
                </form> <br><br>

            </div>
                <!-- TABLA -->
            <table class="table">
                <thead class="table-active">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">DOCUMENTO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                    <tr>
                        <th>{{$persona->id}}</th>
                        <td>{{$persona->documento}}</td>
                        <td>{{$persona->nombre}}</td>
                        <td>{{$persona->created_at}}</td>
                        <td>

                            <a href="{{url('/persona/'.$persona->id.'/edit')}}" class="btn btn-info">Editar</a>

                            <form action="{{ url('/persona/'. $persona->id)}}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('Quieres Borrar')" value="Borrar"
                                    class="btn btn-danger">
                            </form>

                            <a href="{{route('descargar',$persona->id)}}" class="btn btn-success">Imprimir</a><br><br>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- PAGINACION -->
            {!! $personas->links() !!}

        </div>

    </div>

</div>
</div>
<div>

@endsection