<h1>{{ $modo }} Persona</h1>
<div class="form-group">
    <label for="documento">Documento</label>
    <input type="number" class="form-control" id="documento" name="documento"
        value="{{isset($persona->documento)?$persona->documento:''}}" placeholder="Documento">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre"
        value="{{isset($persona->nombre)?$persona->nombre:''}}" placeholder="Nombre">
</div>
<input type="submit" value="{{ $modo }}" datos>
<a href="{{ url('persona') }}">Regresa</a>