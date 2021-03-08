@extends('layouts.app')
@section('content')

<div class="container">

<form method="post" action="{{url('/persona')}}">
  @csrf

  @include('persona.form',['modo'=>'Crear'])
</form>

</div>

@endsection