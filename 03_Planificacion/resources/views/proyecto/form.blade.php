
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $proyecto->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado') }}</label>
    <div>
        {{ Form::text('estado', $proyecto->estado, ['class' => 'form-control' .
        ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>estado</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fechaInicio') }}</label>
    <div>
        {{ Form::text('fechaInicio', $proyecto->fechaInicio, ['class' => 'form-control' .
        ($errors->has('fechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
        {!! $errors->first('fechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>fechaInicio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fechaFin') }}</label>
    <div>
        {{ Form::text('fechaFin', $proyecto->fechaFin, ['class' => 'form-control' .
        ($errors->has('fechaFin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
        {!! $errors->first('fechaFin', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>fechaFin</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('requisitosFuncionales') }}</label>
    <div>
        {{ Form::text('requisitosFuncionales', $proyecto->requisitosFuncionales, ['class' => 'form-control' .
        ($errors->has('requisitosFuncionales') ? ' is-invalid' : ''), 'placeholder' => 'Requisitosfuncionales']) }}
        {!! $errors->first('requisitosFuncionales', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>requisitosFuncionales</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('requisitosNoFuncionales') }}</label>
    <div>
        {{ Form::text('requisitosNoFuncionales', $proyecto->requisitosNoFuncionales, ['class' => 'form-control' .
        ($errors->has('requisitosNoFuncionales') ? ' is-invalid' : ''), 'placeholder' => 'Requisitosnofuncionales']) }}
        {!! $errors->first('requisitosNoFuncionales', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>requisitosNoFuncionales</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('avance') }}</label>
    <div>
        {{ Form::text('avance', $proyecto->avance, ['class' => 'form-control' .
        ($errors->has('avance') ? ' is-invalid' : ''), 'placeholder' => 'Avance']) }}
        {!! $errors->first('avance', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>avance</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cliente_id') }}</label>
    <div>
        {{ Form::text('cliente_id', $proyecto->cliente_id, ['class' => 'form-control' .
        ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
        {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>cliente_id</b> instruction.</small>
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
