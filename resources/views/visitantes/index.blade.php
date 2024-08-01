@extends('layout')

@section('content')

<h4 class="fw-bold mb-0">Gestión</h4>
<div class="d-flex justify-content-between">
    <h1 class="fw-light">Visitantes</h1>
    <div class="align-content-center">
        <button type="button" class="btn btn-primary fw-semibold rounded-0 py-1 px-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="bi bi-plus-lg"></i>
            Nuevo
        </button>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('visitantes.store') }}" method="POST" class="modal-content rounded-0">
                    @csrf
                    <div class="modal-header px-4">
                        <h1 class="modal-title fs-4" id="staticBackdropLabel">Formulario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="cedula" id="cedula" class="form-control rounded-0 shadow-none mb-3" placeholder="Cedula" required>
                        <input type="text" name="nombres" class="form-control rounded-0 shadow-none mb-3" placeholder="Nombres" required>
                        <input type="text" name="parentesco" class="form-control rounded-0 shadow-none" placeholder="Parentesco" required>
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
<div class="row row-cols-4">
    @foreach ($visitantes as $visitante)
    <div class="col">
        <div class="btn btn-light border rounded-0 w-100 position-relative shadow-sm p-3">
            <h4 class="fw-bold text-start mb-1">{{ $visitante->nombres }}</h4>
            <h5 class="fw-normal text-start mb-2"><i class="bi bi-person-vcard"></i> {{ $visitante->cedula }}</h5>
            <div class="alert alert-secondary text-start rounded-0 py-2 px-3 mb-0">
                <b>Parentesco:</b> {{ $visitante->parentesco }}
            </div>
            <a href="{{ route('visitantes.show', $visitante) }}" class="stretched-link"></a>
        </div>
    </div>
    @endforeach
</div>

@endsection