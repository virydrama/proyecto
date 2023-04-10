@extends('layouts.app')

@section('template_title')
    Nacionalidade
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Catálogo de Nacionalidades') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('nacionalidades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Descripción</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nacionalidades as $nacionalidade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $nacionalidade->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('nacionalidades.destroy',$nacionalidade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('nacionalidades.show',$nacionalidade->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('nacionalidades.edit',$nacionalidade->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $nacionalidades->links() !!}
            </div>
        </div>
    </div>
@endsection
