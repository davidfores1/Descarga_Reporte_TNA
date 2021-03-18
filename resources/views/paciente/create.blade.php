@extends('layouts.app')
@section('content')

<div class="container">

<form method="post" action="{{url('/paciente')}}">
  @csrf

  @include('paciente.form',['modo'=>'Crear'])
</form>

</div>

@endsection