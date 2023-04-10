<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Título') }}
            {{ Form::text('titulo', $libro->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'ingresar título']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Páginas') }}
            {{ Form::number('paginas', $libro->paginas, ['class' => 'form-control' . ($errors->has('paginas') ? ' is-invalid' : ''), 'placeholder' => 'número de páginas']) }}
            {!! $errors->first('paginas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de publicación') }}
            {{ Form::date('fecha_pub', $libro->fecha_pub, ['class' => 'form-control' . ($errors->has('fecha_pub') ? ' is-invalid' : ''), 'placeholder' => 'fecha de publicación']) }}
            {!! $errors->first('fecha_pub', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::number('precio', $libro->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::select('id_categoria', $categorias, $libro->id_categoria, ['class' => 'form-control' . ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'seleccione la categoria']) }}
            {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Autor') }}
            {{ Form::select('id_autor', $autores, $libro->id_autor, ['class' => 'form-control' . ($errors->has('id_autor') ? ' is-invalid' : ''), 'placeholder' => 'seleccione el autor']) }}
            {!! $errors->first('id_autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br><button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>