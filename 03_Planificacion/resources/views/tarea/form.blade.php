
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $tarea->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tarea <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fechainicio') }}</label>
    <div>
        {{ Form::text('fechainicio', $tarea->fechainicio, ['class' => 'form-control' .
        ($errors->has('fechainicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
        {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tarea <b>fechainicio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fechafin') }}</label>
    <div>
        {{ Form::text('fechafin', $tarea->fechafin, ['class' => 'form-control' .
        ($errors->has('fechafin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
        {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tarea <b>fechafin</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('avance') }}</label>
    <div>
        {{ Form::text('avance', $tarea->avance, ['class' => 'form-control' .
        ($errors->has('avance') ? ' is-invalid' : ''), 'placeholder' => 'Avance']) }}
        {!! $errors->first('avance', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tarea <b>avance</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('proyecto_id') }}</label>
    <div>
        {{ Form::text('proyecto_id', $tarea->proyecto_id, ['class' => 'form-control' .
        ($errors->has('proyecto_id') ? ' is-invalid' : ''), 'placeholder' => 'Proyecto Id']) }}
        {!! $errors->first('proyecto_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tarea <b>proyecto_id</b> instruction.</small>
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
