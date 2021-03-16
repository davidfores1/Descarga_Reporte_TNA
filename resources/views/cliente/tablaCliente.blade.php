@extends('cliente.cliente')
@section('tablaCliente')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

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
                            <td>
                                <a href="" class="btn btn-success">Imprimir</a><br><br>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection