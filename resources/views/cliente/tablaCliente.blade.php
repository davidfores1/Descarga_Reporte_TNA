@extends('cliente.cliente')
@section('tablaCliente')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <table class="table" id="none">
                    <thead class="table-active">
                        <tr>
                            <th scope="col">COD INTERNO</th>
                            <th scope="col">DOCUMENTO</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pacientes as $paciente)

                        <tr>
                            <td>{{$paciente->cod_interno}}</td>
                            <td>{{$paciente->documento}}</td>
                            <td>{{$paciente->nombre}}</td>
                            <td style="padding: 5px 0px 0px 0px">
                                <a href="{{route('descargar',$paciente->id)}}" class="btn btn-success descargar">Descargar</a><br><br>
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