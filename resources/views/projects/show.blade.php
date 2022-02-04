@extends('layouts.main', ['activePage' => 'projects', 'titlePage' => 'Detalles del proyecto'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Proyectos</div>
                            <p class="card-category">Vista detallada del proyecto: {{ $project->name }}</p>
                        </div>
                        <!--body-->
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <div class="author">
                                                <p class="description">
                                                    Código: {{ $project->code }} <br>
                                                    Nombre: {{ $project->name }} <br>
                                                    Fecha inicio: {{ $project->start_date }} <br>
                                                    Fecha fin: {{ $project->finish_date }} <br>
                                                    Condición: {{ $project->condition }}
                                                </p>
                                            </div>
                                        </div>
                                            <div class="card">
                                            <img src="https://www.urbanova.bo/wp-content/uploads/2020/01/Piazza2.jpg" alt="">
                                            </div>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <div class="button-container">
                                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
