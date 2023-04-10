<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <!--{{ Form::label('Descripción') }}-->
            {{ Form::text('descripcion', $nacionalidade->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'nacionalidad']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br><button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>