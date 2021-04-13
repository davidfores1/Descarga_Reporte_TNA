@extends('layouts.app')
@section('content')
<!-- form.blade.php -->
<div class="container">

<form method="post" action="{{url('/paciente')}}">
  @csrf

  @include('paciente.form',['modo'=>'Crear'])
</form>

</div>

@endsection