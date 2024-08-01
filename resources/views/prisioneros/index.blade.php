<?php
$PAGE_NAME = "El Redentor | Prisioneros"
?>
@extends('layout')

@section('content')

<h4 class="fw-bold mb-0">Gestión</h4>
<div class="d-flex justify-content-between">
    <h1 class="fw-light">Prisioneros</h1>
    <div class="align-content-center">
        <button type="button" class="btn btn-primary fw-semibold rounded-0 py-1 px-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="bi bi-plus-lg"></i>
            Nuevo
        </button>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('prisioneros.store') }}" method="POST" class="modal-content rounded-0">
                    @csrf
                    <div class="modal-header px-4">
                        <h1 class="modal-title fs-4" id="staticBackdropLabel">Formulario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="nombres" class="form-control rounded-0 shadow-none mb-1" placeholder="Nombres" required>
                        <label for="fecha_nacimiento" class="fw-bold text-black-50 ms-1">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control rounded-0 shadow-none mb-3" required>
                        <textarea name="delito" class="form-control rounded-0 shadow-none mb-2" placeholder="Delito" required></textarea>
                        <div class="row">
                            <div class="col">
                                <label for="" class="fw-bold text-black-50 ms-1">Fecha de Ingreso</label>
                                <input type="date" name="fecha_ingreso" id="" class="form-control rounded-0 shadow-none" required>
                            </div>
                            <div class="col align-content-end">
                                <input type="text" name="celda" class="form-control rounded-0 shadow-none" placeholder="Celda" required>
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
@if (count($prisioneros) > 0)
    <div class="row row-cols-5">
        @foreach ($prisioneros as $prisionero)
        <div class="col">
            <div class="card btn btn-light position-relative p-0">
                <img src="{{ asset('prisioner-tumbnail.png') }}" class="card-img-top" alt="...">
                <div class="card-body p-2">
                    <h4 class="card-title fw-bold text-start mb-2">{{ $prisionero->nombres }}</h4>
                    <hr class="mb-2">
                    <h6 class="fw-bold text-start mb-1">Delito</h6>
                    <h6 class="fw-normal text-start small mb-1">{{ $prisionero->delito }}</h6>
                    <div class="d-flex justify-content-end">
                        <div class="badge bg-success">{{ $prisionero->celda }}</div>
                    </div>
                </div>
                <a href="{{ route('prisioneros.show', $prisionero) }}" class="stretched-link"></a>
            </div>
        </div>
        @endforeach
    </div>
@else
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <i class="bi bi-info-circle-fill me-2"></i> No hay ningún prisionero aún.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@endsection