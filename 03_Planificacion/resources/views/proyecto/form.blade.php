<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('nombre', 'Nombre del Proyecto') }}</label>
    <div>
        {{ Form::text('nombre', $proyecto->nombre, [
            'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''),
            'placeholder' => 'Nombre del Proyecto',
        ]) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('estado') }}</label>
    <div>
        {{ Form::text('estado', $proyecto->estado, [
            'class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''),
            'placeholder' => 'Estado',
        ]) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>estado</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('fechaInicio') }}</label>
    <div>
        {{ Form::date('fechaInicio', $proyecto->fechaInicio, [
            'class' => 'form-control' . ($errors->has('fechaInicio') ? ' is-invalid' : ''),
            'placeholder' => 'Fechainicio',
        ]) }}
        {!! $errors->first('fechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>fechaInicio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('fechaFin') }}</label>
    <div>
        {{ Form::date('fechaFin', $proyecto->fechaFin, [
            'class' => 'form-control' . ($errors->has('fechaFin') ? ' is-invalid' : ''),
            'placeholder' => 'Fechafin',
        ]) }}
        {!! $errors->first('fechaFin', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>fechaFin</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('requisitosFuncionales') }}</label>
    <div>
        {{ Form::textarea('requisitosFuncionales', $proyecto->requisitosFuncionales, [
            'class' => 'form-control' . ($errors->has('requisitosFuncionales') ? ' is-invalid' : ''),
            'placeholder' => 'Requisitosfuncionales',
            'rows' => 5,
        ]) }}
        {!! $errors->first('requisitosFuncionales', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>requisitosFuncionales</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('requisitosNoFuncionales') }}</label>
    <div>
        {{ Form::textarea('requisitosNoFuncionales', $proyecto->requisitosNoFuncionales, [
            'class' => 'form-control' . ($errors->has('requisitosNoFuncionales') ? ' is-invalid' : ''),
            'placeholder' => 'Requisitosnofuncionales',
            'rows' => 5,
        ]) }}
        {!! $errors->first('requisitosNoFuncionales', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>requisitosNoFuncionales</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('avance') }}</label>
    <div>
        {{ Form::text('avance', $proyecto->avance, [
            'class' => 'form-control' . ($errors->has('avance') ? ' is-invalid' : ''),
            'placeholder' => 'Avance',
        ]) }}
        {!! $errors->first('avance', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>avance</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('cliente_id', 'Cliente') }}</label>
    <div>
        {{ Form::select(
            'cliente_id',
            ['' => 'Seleccione un cliente'] + $clientes->pluck('nombre', 'id')->toArray(),
            old('cliente_id', $proyecto->cliente_id),
            [
                'class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''),
            ],
        ) }}
        {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Seleccione un cliente para este proyecto.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('proyectos.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
