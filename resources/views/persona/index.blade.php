@extends('layouts.app')
@section('content')

<div class="container">

<a href="{{url('persona/create')}}">Nuevo</a>

<table class="table">
  <thead class="thead-dark">
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

      <a href="{{url('/persona/'.$persona->id.'/edit')}}">Editar</a> 
      
      <form action="{{ url('/persona/'. $persona->id)}}" method="post">
      @csrf
      {{ method_field('DELETE') }}
      <input type="submit" onclick="return confirm('Quieres Borrar')" value="Borrar">
      </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection