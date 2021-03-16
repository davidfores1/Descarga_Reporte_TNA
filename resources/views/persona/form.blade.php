<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>{{ $modo }} Persona</h3>
            </div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="documento" name="documento"
                            value="{{isset($persona->documento)?$persona->documento:''}}" placeholder="Documento">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{isset($persona->nombre)?$persona->nombre:''}}" placeholder="Nombre">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <input type="submit" class="btn btn-primary" value="{{ $modo }}" datos>
                        <a href="{{ url('persona') }}" class="btn btn-warning">Regresa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>