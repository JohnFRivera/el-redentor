@extends('layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <a href="{{ route('prisioneros.index') }}" class="btn btn-dark fw-semibold rounded-0 py-1 px-3 me-2">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div class="align-content-center">
        <button type="button" class="btn btn-primary fw-semibold rounded-0 py-1 px-4 me-2" data-bs-toggle="modal" data-bs-target="#modalEditar">
            <i class="bi bi-pencil-square"></i>
            Editar
        </button>
        <div class="modal fade" id="modalEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('prisioneros.update', $prisionero) }}" class="modal-content rounded-0">
                    @csrf
                    @method('PUT')
                    <div class="modal-header px-4">
                        <h1 class="modal-title fs-4" id="staticBackdropLabel">Formulario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="nombres" class="form-control rounded-0 shadow-none mb-1" placeholder="Nombres" value="{{ $prisionero->nombres }}" required>
                        <label for="fecha_nacimiento" class="fw-bold text-black-50 ms-1">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control rounded-0 shadow-none mb-3" value="{{ $prisionero->fecha_nacimiento }}">
                        <textarea name="delito" class="form-control rounded-0 shadow-none mb-2" placeholder="Delito">{{ $prisionero->delito }}</textarea>
                        <div class="row">
                            <div class="col">
                                <label for="fehca_ingreso" class="fw-bold text-black-50 ms-1">Fecha de Ingreso</label>
                                <input type="date" name="fehca_ingreso" id="fehca_ingreso" class="form-control rounded-0 shadow-none" value="{{ $prisionero->fecha_ingreso }}">
                            </div>
                            <div class="col align-content-end">
                                <input type="text" name="celda" class="form-control rounded-0 shadow-none" placeholder="Celda" value="{{ $prisionero->celda }}" required>
                            </div>
                        </div>
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
        <img src="{{ asset('prisioner-tumbnail.png') }}" alt="" class="img-fluid rounded-circle shadow-sm">
    </div>
    <div class="col align-content-center">
        <div class="row flex-column">
            <div class="col mb-2">
                <h5 class="text-black-50 mb-0">Nombres</h5>
                <h1 class="fw-bold mb-1">{{ $prisionero->nombres }}</h1>
            </div>
            <div class="col mb-4">
                <h5 class="text-black-50 mb-0">Fecha de Nacimiento</h5>
                <h3 class="fw-normal mb-0">{{ $prisionero->fecha_nacimiento }}</h3>
            </div>
            <div class="col">
                <div class="alert alert-secondary rounded-0 p-4 mb-3">
                    <h5 class="text-black-50 mb-2">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        Delito
                    </h5>
                    <h5 class="fw-normal">{{ $prisionero->delito }}</h5>
                </div>
                <div class="row gap-5 px-4">
                    <div class="col-auto">
                        <h6 class="text-black-50 mb-1">
                            <i class="bi bi-calendar-event-fill me-2"></i>
                            Fecha de Ingreso
                        </h6>
                        <h5 class="fw-normal">{{ $prisionero->fecha_ingreso }}</h5>
                    </div>
                    <div class="col-auto">
                        <h6 class="text-black-50 mb-1">Celda</h6>
                        <div class="badge bg-success fs-6">
                            {{ $prisionero->celda }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection