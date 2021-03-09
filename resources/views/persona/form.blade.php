<div class="card bg-light mb-3" style="max-width: 50rem;">
    <div class="card-header"> <h3>{{ $modo }} Persona</h3></div>
    <div class="card-body">

       
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
        <input type="submit" class="btn btn-primary" value="{{ $modo }}" datos>
        <a href="{{ url('persona') }}" class="btn btn-warning">Regresa</a>
    </div>
</div>