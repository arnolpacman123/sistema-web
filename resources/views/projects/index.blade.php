@extends('layouts.main', ['activePage' => 'projects', 'titlePage' => 'Proyectos'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Proyectos</h4>
                                    <p class="card-category">Proyectos registrados</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success" role="success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            @can('project_create')
                                                <a href="{{ route('projects.create') }}"
                                                   class="btn btn-sm btn-facebook">Crear proyecto</a>
                                            @endcan
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Código</th>
                                                <th>Nombre</th>
                                                <th>Fecha Inicio</th>
                                                <th>Fecha Fin</th>
                                                <th>Condición</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($projects as $project)
                                                    <tr>
                                                        <td>{{ $project->id }}</td>
                                                        <td>{{ $project->code }}</td>
                                                        <td>{{ $project->name }}</td>
                                                        <td>{{ $project->start_date }}</td>
                                                        <td>{{ $project->finish_date }}</td>
                                                        <td>{{ $project->condition }}</td>
                                                        <td class="td-actions text-right">
                                                            @can('project_show')
                                                                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                            @endcan
                                                            @can('project_edit')
                                                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            @endcan
                                                            @can('project_destroy')
                                                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Seguro?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                        <i class="material-icons">close</i>
                                                                    </button>
                                                                </form>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $projects->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
