@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? "{{ __('Show') Libro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $libro->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Paginas:</strong>
                            {{ $libro->paginas }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pub:</strong>
                            {{ $libro->fecha_pub }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $libro->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Categoria:</strong>
                            {{ $libro->id_categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Id Autor:</strong>
                            {{ $libro->id_autor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
