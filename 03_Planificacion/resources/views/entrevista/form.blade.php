<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('registroDatos') }}</label>
    <div>
        {{ Form::textarea('registroDatos', $entrevista->registroDatos, [
            'class' => 'form-control' . ($errors->has('registroDatos') ? ' is-invalid' : ''),
            'placeholder' => 'Registrodatos',
            'rows' => 4,
        ]) }}
        {!! $errors->first('registroDatos', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">entrevista <b>registroDatos</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('fecha') }}</label>
    <div>
        {{ Form::date('fecha', $entrevista->fecha, [
            'class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''),
            'placeholder' => 'Fecha',
        ]) }}
        {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">entrevista <b>fecha</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('cliente_id', 'Cliente') }}</label>
    <div>
        {{ Form::select('cliente_id', ['' => 'Seleccione un cliente'] + $clientes->pluck('nombre', 'id')->toArray(), old('cliente_id', $entrevista->cliente_id), [
            'class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : '')
        ]) }}
        {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="#" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
