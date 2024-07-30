@extends('layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <a href="{{ redirect('guardias.index') }}" class="btn btn-dark fw-semibold rounded-0 py-1 px-3 me-2">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div class="align-content-center">
        <button type="button" class="btn btn-primary fw-semibold rounded-0 py-1 px-4 me-2" data-bs-toggle="modal" data-bs-target="#modalEditar">
            <i class="bi bi-pencil-square"></i>
            Editar
        </button>
        <div class="modal fade" id="modalEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <button type="submit" class="btn btn-primary rounded-0 py-1 px-4">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
        <button type="button" class="btn btn-danger fw-semibold rounded-0 py-1 px-3" data-bs-toggle="modal" data-bs-target="#modalEliminar">
            <i class="bi bi-trash-fill"></i>
            Eliminar
        </button>
        <div class="modal fade" id="modalEliminar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="" class="modal-content rounded-0">
                    <div class="modal-header px-4">
                        <h1 class="modal-title text-danger fs-4" id="staticBackdropLabel">
                            <i class="bi bi-exclamation-circle-fill me-2"></i>
                            ¡Advertencia!
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="fw-normal mb-0">¿Seguro que deseas eliminar al prisionero <b>John Freddy Rivera</b>?</h5>
                    </div>
                    <div class="modal-footer justify-content-between" required>
                        <button type="button" class="btn btn-secondary rounded-0 py-1 px-4" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger rounded-0 py-1 px-4">Eliminar</button>
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
                <h1 class="fw-bold mb-1">John Freddy Rivera</h1>
            </div>
            <div class="col mb-4">
                <h5 class="text-black-50 mb-0">Fecha de Nacimiento</h5>
                <h3 class="fw-normal mb-0">21/12/2004</h3>
            </div>
            <div class="col">
                <div class="alert alert-secondary rounded-0 p-4 mb-3">
                    <h5 class="text-black-50 mb-2">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        Delito
                    </h5>
                    <h5 class="fw-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur illo minus maxime praesentium mollitia id quisquam dolor suscipit eveniet. Maiores, veniam unde? Impedit ea reprehenderit pariatur maiores corporis esse minima.</h5>
                </div>
                <div class="row gap-5 px-4">
                    <div class="col-auto">
                        <h6 class="text-black-50 mb-1">
                            <i class="bi bi-calendar-event-fill me-2"></i>
                            Fecha de Ingreso
                        </h6>
                        <h5 class="fw-normal">21/12/2015</h5>
                    </div>
                    <div class="col-auto">
                        <h6 class="text-black-50 mb-1">Celda</h6>
                        <div class="badge bg-success fs-6">
                            C41
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection