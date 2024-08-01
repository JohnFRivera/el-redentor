<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use App\Models\Prisionero;
use App\Models\Visitante;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    public function index()
    {
        $visitas = Visita::with(['prisioneros','visitantes','guardias'])->get();
        $prisioneros = Prisionero::all(['id', 'nombres']);
        $visitantes = Visitante::all(['id', 'nombres']);
        return view('visitas.index', compact('visitas', 'prisioneros', 'visitantes'));
    }
}
