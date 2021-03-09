@extends('layouts.app')
@section('content')

<div class="container">

    <div class="card bg-light mb-3">
        <div class="card-header">Persona</div>

        <div class="card-body">
            <a href="{{url('persona/create')}}" class="btn btn-success">Nuevo</a><br><br>

            <table class="table">
                <thead class="table-active">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">DOCUMENTO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personas as $persona)
                    <tr>
                        <th>{{$persona->id}}</th>
                        <td>{{$persona->documento}}</td>
                        <td>{{$persona->nombre}}</td>
                        <td>

                            <a href="{{url('/persona/'.$persona->id.'/edit')}}" class="btn btn-info">Editar</a>

                            <form action="{{ url('/persona/'. $persona->id)}}" method="post" class="d-inline">
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
            {!! $personas->links() !!}
        </div>
    </div>



</div>

@endsection