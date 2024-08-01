<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.2/b-3.1.0/b-colvis-3.1.0/b-html5-3.1.0/b-print-3.1.0/datatables.min.css" rel="stylesheet">
    <title>Gestiones</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row bg-dark py-2 px-3">
            <div class="col">
                <h1 class="text-light">El Redentor</h1>
            </div>
            <div class="col-auto align-content-center">
                <a href="" class="btn btn-danger fw-semibold rounded-0 py-1 px-4">Cerrar sesión</a>
            </div>
        </div>
        <div class="row bg-dark-subtle">
            <nav class="col">
                <ul class="nav nav-underline justify-content-center fw-semibold fs-5 gap-5">
                    <li class="nav-item"><a href="{{ route('guardias.index') }}" class="nav-link link-dark link-opacity-75 link-opacity-100-hover">
                            <i class="bi bi-shield-shaded"></i>
                            Guardias
                        </a></li>
                    <li class="nav-item"><a href="{{ route('visitantes.index') }}" class="nav-link link-dark link-opacity-75 link-opacity-100-hover">
                            <i class="bi bi-person-fill"></i>
                            Visitantes
                        </a></li>
                    <li class="nav-item"><a href="{{ route('prisioneros.index') }}" class="nav-link link-dark link-opacity-75 link-opacity-100-hover">
                            <i class="bi bi-person-square"></i>
                            Prisioneros
                        </a></li>
                    <li class="nav-item"><a href="" class="nav-link link-dark link-opacity-75 link-opacity-100-hover">
                            <i class="bi bi-people-fill"></i>
                            Control de Visitas
                        </a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container-sm">
        <div class="row py-3">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>