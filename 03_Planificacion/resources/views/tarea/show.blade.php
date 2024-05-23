@extends('tablar::page')

@section('title', 'View Tarea')

@section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Ver
                </div>
                <h2 class="page-title">
                    {{ __('Tarea ') }}
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('tareas.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Lista Tarea 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        @if(config('tablar', 'display_alert'))
            @include('tablar::common.alert')
        @endif
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detalles Tarea </h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" class="form-control" value="{{ $tarea->nombre }}"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="fechainicio">Fecha Inicio:</label>
                                <input type="text" id="fechainicio" class="form-control"
                                    value="{{ $tarea->fechainicio }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="fechafin">Fecha Fin:</label>
                                <input type="text" id="fechafin" class="form-control" value="{{ $tarea->fechafin }}"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="avance">Avance:</label>
                                <input type="text" id="avance" class="form-control" value="{{ $tarea->avance }}"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="proyecto_id">Proyecto ID:</label>
                                <input type="text" id="proyecto_id" class="form-control"
                                    value="{{ $tarea->proyecto_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('tareas.index') }}" class="btn btn-secondary">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection