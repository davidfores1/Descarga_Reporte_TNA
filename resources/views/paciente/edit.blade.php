@extends('layouts.app')
@section('content')

<div class="container">
<form method="post" action="{{url('/paciente/'.$paciente->id)}}">

@csrf
{{method_field('PATCH')}}

@include('paciente.form',['modo'=>'Editar'])
</form>

</div>

@endsection