
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('registroDatos') }}</label>
    <div>
        {{ Form::text('registroDatos', $entrevista->registroDatos, ['class' => 'form-control' .
        ($errors->has('registroDatos') ? ' is-invalid' : ''), 'placeholder' => 'Registrodatos']) }}
        {!! $errors->first('registroDatos', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">entrevista <b>registroDatos</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha') }}</label>
    <div>
        {{ Form::text('fecha', $entrevista->fecha, ['class' => 'form-control' .
        ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
        {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">entrevista <b>fecha</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cliente_id') }}</label>
    <div>
        {{ Form::text('cliente_id', $entrevista->cliente_id, ['class' => 'form-control' .
        ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
        {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">entrevista <b>cliente_id</b> instruction.</small>
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
