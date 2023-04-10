@extends('layouts.app')

@section('template_title')
    Autore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Autores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('autores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Fecha de Nacimiento</th>
										<th>Nacionalidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autores as $autore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $autore->nombre }}</td>
											<td>{{ $autore->fecha_nac }}</td>
											<td>{{ $autore->nacionalidade->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('autores.destroy',$autore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('autores.show',$autore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('autores.edit',$autore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $autores->links() !!}
            </div>
        </div>
    </div>
@endsection
