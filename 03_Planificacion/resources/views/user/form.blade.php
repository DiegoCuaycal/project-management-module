<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $user->name, [
            'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
            'placeholder' => 'Name',
        ]) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">user <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $user->email, [
            'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
            'placeholder' => 'Email',
        ]) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">user <b>email</b> instruction.</small>
    </div>
</div>

<!-- Nueva sección para la contraseña -->
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('password', 'Nueva Contraseña') }}</label>
    <div>
        {{ Form::password('password', [
            'class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''),
            'placeholder' => 'Nueva Contraseña',
        ]) }}
        {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese una nueva contraseña (opcional).</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('password_confirmation', 'Confirmar Nueva Contraseña') }}</label>
    <div>
        {{ Form::password('password_confirmation', [
            'class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''),
            'placeholder' => 'Confirmar Nueva Contraseña',
        ]) }}
        {!! $errors->first('password_confirmation', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<!-- Fin de la nueva sección para la contraseña -->

<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('roles', 'Roles') }}</label>
    <div>
        @foreach ($roles as $role)
            <div class="form-check">
                {{ Form::checkbox('roles[]', $role->id, $user->roles->contains($role->id), ['class' => 'form-check-input' . ($errors->has('roles') ? ' is-invalid' : '')]) }}
                {{ Form::label('roles[]', $role->nombre, ['class' => 'form-check-label']) }}
            </div>
        @endforeach
        {!! $errors->first('roles', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Seleccione uno o más roles.</small>
    </div>
</div>
<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>

