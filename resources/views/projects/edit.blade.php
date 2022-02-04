@extends('layouts.main', ['activePage' => 'projects', 'titlePage' => 'Editar proyecto'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('projects.update', $project->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Proyecto</h4>
                                <p class="card-category">Editar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="code" class="col-sm-2 col-form-label">Código del proyecto</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="code" value="{{ old('code', $project->code) }}" autofocus>
                                        @if ($errors->has('code'))
                                            <span class="error text-danger" for="input-code">{{ $errors->first('code') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre del proyecto</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" value="{{ old('name', $project->name) }}" autofocus>
                                        @if ($errors->has('name'))
                                            <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="start_date" class="col-sm-2 col-form-label">Fecha inicio del proyecto</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="start_date" class="form-control" name="start_date"
                                               placeholder="Seleccione la fecha de inicio del proyecto" value="{{ old('start_date', $project->start_date) }}">
                                        <script>
                                            $("#start_date").flatpickr();
                                        </script>
                                        @if ($errors->has('start_date'))
                                            <span class="error text-danger" for="input-start_date">{{ $errors->first('start_date') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="finish_date" class="col-sm-2 col-form-label">Fecha fin del proyecto</label>
                                    <div class="col-sm-7">
                                        <input type="text" id="finish_date" class="form-control" name="finish_date"
                                               placeholder="Seleccione la fecha de fin del proyecto" value="{{ old('finish_date', $project->finish_date) }}">
                                        <script>
                                            $("#finish_date").flatpickr();
                                        </script>
                                        @if ($errors->has('finish_date'))
                                            <span class="error text-danger" for="input-finish_date">{{ $errors->first('finish_date') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="condition" class="col-sm-2 col-form-label">Condición del proyecto</label>
                                    <div class="col-sm-7">
                                        <select name="condition" id="condition" class="form-control custom-select">
                                            <option value="EN PROCESO" @if($project->condition === 'EN PROCESO') selected @endif>EN PROCESO</option>
                                            <option value="FINALIZADO" @if($project->condition === 'FINALIZADO') selected @endif>FINALIZADO</option>
                                        </select>
                                        @if ($errors->has('condition'))
                                            <span class="error text-danger" for="input-condition">{{ $errors->first('condition') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
