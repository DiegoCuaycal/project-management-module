
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $empleado->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">empleado <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('apellido') }}</label>
    <div>
        {{ Form::text('apellido', $empleado->apellido, ['class' => 'form-control' .
        ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
        {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">empleado <b>apellido</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono') }}</label>
    <div>
        {{ Form::text('telefono', $empleado->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">empleado <b>telefono</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $empleado->email, ['class' => 'form-control' .
        ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">empleado <b>email</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('usuario') }}</label>
    <div>
        {{ Form::text('usuario', $empleado->usuario, ['class' => 'form-control' .
        ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
        {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">empleado <b>usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('contraseña') }}</label>
    <div>
        {{ Form::text('contraseña', $empleado->contraseña, ['class' => 'form-control' .
        ($errors->has('contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
        {!! $errors->first('contraseña', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">empleado <b>contraseña</b> instruction.</small>
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
