@extends('layouts.app')
@section('content')

<div class="container">
<form method="post" action="{{url('/persona/'.$persona->id)}}">

@csrf
{{method_field('PATCH')}}

@include('persona.form',['modo'=>'Editar'])
</form>

</div>

@endsection