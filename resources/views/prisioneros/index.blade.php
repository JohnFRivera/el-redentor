@extends('layout')

@section('content')

<h4 class="fw-bold mb-0">Gestión</h4>
<div class="d-flex justify-content-between">
    <h1 class="fw-light">Guardias</h1>
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
                        <input type="text" name="" id="" class="form-control rounded-0 shadow-none mb-1" placeholder="Nombres" required>
                        <label for="" class="fw-bold text-black-50 ms-1">Fecha de Nacimiento</label>
                        <input type="date" name="" id="" class="form-control rounded-0 shadow-none mb-3">
                        <textarea name="" id="" class="form-control rounded-0 shadow-none mb-2" placeholder="Delito"></textarea>
                        <div class="row">
                            <div class="col">
                                <label for="" class="fw-bold text-black-50 ms-1">Fecha de Ingreso</label>
                                <input type="date" name="" id="" class="form-control rounded-0 shadow-none">
                            </div>
                            <div class="col align-content-end">
                                <input type="text" name="" id="" class="form-control rounded-0 shadow-none" placeholder="Celda" required>
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
<div class="row row-cols-5">
    <div class="col">
        <div class="card position-relative">
            <img src="{{ asset('prisioner-tumbnail.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title fw-bold mb-3">John Freddy Rivera</h4>
                <hr class="mb-2">
                <h6 class="fw-bold mb-1">Delito</h6>
                <h6 class="fw-normal small mb-2">Lorem ipsum dolor sit amet and make up the bulk of the card's content.</h6>
                <div class="d-flex justify-content-end">
                    <div class="badge bg-success">C41</div>
                </div>
            </div>
            <a href="#sdad" class="stretched-link"></a>
        </div>
    </div>
</div>

@endsection