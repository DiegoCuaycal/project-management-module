<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $tarea->nombre, [
            'class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''),
            'placeholder' => 'Nombre',
        ]) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tarea <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('fechainicio') }}</label>
    <div>
        {{ Form::date('fechainicio', $tarea->fechainicio, [
            'class' => 'form-control' . ($errors->has('fechainicio') ? ' is-invalid' : ''),
            'placeholder' => 'Fechainicio',
        ]) }}
        {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tarea <b>fechainicio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('fechafin') }}</label>
    <div>
        {{ Form::date('fechafin', $tarea->fechafin, [
            'class' => 'form-control' . ($errors->has('fechafin') ? ' is-invalid' : ''),
            'placeholder' => 'Fechafin',
        ]) }}
        {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tarea <b>fechafin</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('avance') }}</label>
    <div>
        {{ Form::text('avance', $tarea->avance, [
            'class' => 'form-control' . ($errors->has('avance') ? ' is-invalid' : ''),
            'placeholder' => 'Avance',
        ]) }}
        {!! $errors->first('avance', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tarea <b>avance</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('proyecto_id', 'Proyecto') }}</label>
    <div>
        {{ Form::select(
            'proyecto_id',
            ['' => 'Seleccione un proyecto'] + $proyectos->pluck('nombre', 'id')->toArray(),
            old('proyecto_id', $tarea->proyecto_id),
            [
                'class' => 'form-control' . ($errors->has('proyecto_id') ? ' is-invalid' : ''),
            ],
        ) }}
        {!! $errors->first('proyecto_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tarea <b>proyecto_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('users', 'Usuarios') }}</label>
    <div>
        @foreach ($users as $user)
            <div class="form-check">
                {{ Form::checkbox('users[]', $user->id, isset($tarea) && $tarea->users && $tarea->users->contains($user->id), ['class' => 'form-check-input' . ($errors->has('users') ? ' is-invalid' : '')]) }}
                {{ Form::label('users[]', $user->name, ['class' => 'form-check-label']) }}
            </div>
        @endforeach
        {!! $errors->first('users', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Seleccione uno o más usuarios.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('tareas.index') }}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
        </div>
    </div>
</div>
