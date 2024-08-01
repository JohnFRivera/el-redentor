<?php
$PAGE_NAME = "Guardia | ".$guardia->nombres
?>
@extends('layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <a href="{{ route('guardias.index') }}" class="btn btn-dark fw-semibold rounded-0 py-1 px-3 me-2">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div class="align-content-center">
        <button type="button" class="btn btn-primary fw-semibold rounded-0 py-1 px-4 me-2" data-bs-toggle="modal" data-bs-target="#modalEditar">
            <i class="bi bi-pencil-square"></i>
            Editar
        </button>
        <div class="modal fade" id="modalEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('guardias.update', $guardia) }}" method="POST" class="modal-content rounded-0">
                    @csrf
                    @method('PUT')
                    <div class="modal-header px-4">
                        <h1 class="modal-title fs-4" id="staticBackdropLabel">Formulario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="identificacion" id="identificacion" class="form-control rounded-0 shadow-none mb-3" placeholder="Identificación" value="{{ $guardia->identificacion }}" required>
                        <input type="text" name="nombres" class="form-control rounded-0 shadow-none mb-3" placeholder="Nombres" value="{{ $guardia->nombres }}" required>
                        <select name="estado" class="form-select rounded-0 shadow-none">
                            <option value="">Estado...</option>
                            @if ($guardia->estado == 1)
                            <option value="1" selected>Activo</option>
                            <option value="0">Inactivo</option>
                            @else
                            <option value="1">Activo</option>
                            <option value="0" selected>Inactivo</option>
                            @endif
                        </select>
                    </div>
                    <div class="modal-footer justify-content-between" required>
                        <button type="button" class="btn btn-secondary rounded-0 py-1 px-4" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary rounded-0 py-1 px-4">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<hr class="mt-2 mb-4">
<div class="row gap-2">
    <div class="col-2">
        <img src="{{ asset('user-tumbnail.jpg') }}" alt="" class="img-fluid rounded-circle shadow-sm">
    </div>
    <div class="col align-content-center">
        <div class="row flex-column">
            <div class="col mb-4">
                <h5 class="text-black-50 mb-0">Nombres</h5>
                <h1 class="fw-bold mb-1">{{ $guardia->nombres }}</h1>
            </div>
            <div class="col">
                <div class="row gap-5">
                    <div class="col-auto">
                        <h5 class="text-black-50 mb-0">Identificación</h5>
                        <h3 class="fw-normal mb-0">{{ $guardia->identificacion }}</h3>
                    </div>
                    <div class="col">
                        <h5 class="text-black-50 mb-1">Estado</h5>
                        @if ($guardia->estado == 1)
                        <span class="badge bg-success fs-6">Activo</span>
                        @else
                        <span class="badge bg-warning fs-6">Inactivo</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection