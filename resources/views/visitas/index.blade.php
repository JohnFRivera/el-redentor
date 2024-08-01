<?php
$PAGE_NAME = "El Redentor | Control de Visitas"
?>
@extends('layout')

@section('content')

<h4 class="fw-bold mb-0">Gestión</h4>
<div class="d-flex justify-content-between">
    <h1 class="fw-light">Visitas</h1>
    <div class="align-content-center">
        <button type="button" class="btn btn-primary fw-semibold rounded-0 py-1 px-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="bi bi-plus-lg"></i>
            Nuevo
        </button>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="" class="modal-content rounded-0">
                    <div class="modal-header px-4">
                        <h1 class="modal-title fs-4" id="staticBackdropLabel">Formulario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- SELECTS -->
                        <div class="hstack gap-3 mb-2">
                            <select name="id_prisionero" class="form-select rounded-0 shadow-none" required>
                                <option value="">Prisionero...</option>
                                @foreach ($prisioneros as $prisionero)
                                <option value="{{ $prisionero->id }}">{{ $prisionero->nombres }}</option>
                                @endforeach
                            </select>
                            <select name="id_visitante" class="form-select rounded-0 shadow-none" required>
                                <option value="">Visitante...</option>
                                @foreach ($visitantes as $visitante)
                                <option value="{{ $visitante->id }}">{{ $visitante->nombres }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- FECHA -->
                        <label for="fecha" class="fw-bold text-black-50 ms-1">Fecha de Visita</label>
                        <input type="date" name="fecha" id="fecha" class="form-control rounded-0 shadow-none mb-2" required>
                        <!-- HORAS -->
                        <div class="row g-3">
                            <div class="col">
                                <label for="hora_inicio" class="fw-bold text-black-50 ms-1">Hora de Inicio</label>
                                <input type="time" name="hora_inicio" id="hora_inicio" class="form-control rounded-0 shadow-none" required>
                            </div>
                            <div class="col align-content-end">
                                <label for="hora_fin" class="fw-bold text-black-50 ms-1">Hora de Fin</label>
                                <input type="time" name="hora_fin" id="hora_fin" class="form-control rounded-0 shadow-none" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between" required>
                        <button type="button" class="btn btn-secondary rounded-0 py-1 px-4" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary rounded-0 py-1 px-4">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<hr class="mt-2 mb-4">
<div class="row">
    <div class="col">
        <div class="table-responsibe">
            <table id="myTable" class="table table-hover">
                <thead>
                    <tr>
                        <th>Prisionero</th>
                        <th>Visitante</th>
                        <th>Guardia</th>
                        <th>Fecha</th>
                        <th>Hora de Inicio</th>
                        <th>Hora de Fin</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visitas as $visita)
                    <tr>
                        <td>{{ $visita->prisioneros->nombres }}</td>
                        <td>{{ $visita->visitantes->nombres }}</td>
                        <td>{{ $visita->guardias->nombres }}</td>
                        <td>{{ $visita->fecha }}</td>
                        <td>{{ $visita->hora_inicio }}</td>
                        <td>{{ $visita->hora_fin }}</td>
                        <td>
                            @if ($visita->estado == 1)
                            <div class="badge bg-success">
                                Aceptado
                            </div>
                            @else
                            <div class="badge bg-warning">
                                Denegado
                            </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.2/b-3.1.0/b-colvis-3.1.0/b-html5-3.1.0/b-print-3.1.0/datatables.min.js"></script>
<script src="{{ asset('js/visitas.js') }}"></script>

@endsection