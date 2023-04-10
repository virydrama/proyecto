<div class="box box-info padding-1">
    <div class="box-body">
                        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $autore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el nombre del autor']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de nacimiento') }}
            {{ Form::date('fecha_nac', $autore->fecha_nac, ['class' => 'form-control' . ($errors->has('fecha_nac') ? ' is-invalid' : ''), 'placeholder' => 'fecha de nacimiento']) }}
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nacionalidad') }}
            {{ Form::select('id_nacionalidad', $nacionalidades, $autore->id_nacionalidad, ['class' => 'form-control' . ($errors->has('id_nacionalidad') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción']) }}
            {!! $errors->first('id_nacionalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <br><button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>    