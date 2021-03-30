<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>{{ $modo }} Paciente</h3>
            </div>
            <div class="card-body">

            <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cod interno') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="documento" name="cod_interno"
                            value="{{isset($paciente->documento)?$paciente->cod_interno:''}}" placeholder="Cod interno">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>
                    <div class="col-md-6">
                        <input type="number" class="form-control" id="documento" name="documento"
                            value="{{isset($paciente->documento)?$paciente->documento:''}}" placeholder="Documento">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{isset($paciente->nombre)?$paciente->nombre:''}}" placeholder="Nombre">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nombre" name="edad"
                            value="{{isset($paciente->nombre)?$paciente->edad:''}}" placeholder="Edad">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fecha_recepcion" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de recepción') }}</label>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="nombre" name="fecha_recepcion"
                            value="{{isset($paciente->nombre)?$paciente->fecha_recepcion:''}}" placeholder="fecha_recepcion">
                    </div>
                </div>

                <div class="form-group row">
                            <label for="hospita" class="col-md-4 col-form-label text-md-right">{{ __('Hospital') }}</label>

                            <div class="col-md-6">
                
                                <select id="inputState" class="form-control" name="hospital" required>
                                    <option value="" selected>Select...</option>
                                    <option value="C">Cali</option>
                                    <option value="P">Palmira</option>
                                    <option value="B">Buenaventura</option>
                                    <option value="BU">Buga</option>
                                </select>
                            </div>
                        </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <input type="submit" class="btn btn-primary" value="{{ $modo }}" datos>
                        <a href="{{ url('paciente') }}" class="btn btn-warning">Regresa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>