@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Consultas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-consulta')
                        <a class="btn btn-warning" href="{{ route('consultas.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead >                                     
                                    <th style="display: none;">ID</th>
                                    <th>Titulo</th>
                                    <th>Consulta</th>                                    
                                    <th>Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($consultas as $consulta)
                            <tr>
                                <td style="display: none;">{{ $consulta->id }}</td>                                
                                <td>{{ $consulta->titulo }}</td>
                                <td>{{ $consulta->consulta }}</td>
                                <td>
                                    <form action="{{ route('consultas.destroy',$consulta->id) }}" method="POST">                                        
                                        @can('editar-consulta')
                                        <a class="btn btn-info" href="{{ route('consultas.edit',$consulta->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-consulta')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $consultas->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection