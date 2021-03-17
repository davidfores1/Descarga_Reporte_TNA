@extends('cliente.cliente')
@section('tablaCliente')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <table class="table" id="none">
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
                            <td>{{$persona->id}}</td>
                            <td>{{$persona->documento}}</td>
                            <td>{{$persona->nombre}}</td>
                            <td style="padding: 5px 0px 0px 0px">
                                <a href="{{route('descargar',$persona->id)}}" class="btn btn-success">Imprimir</a><br><br>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection