<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function index()
    {
        $visitantes = Visitante::all();
        return view('visitantes.index', compact('visitantes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cedula' => 'required',
            'nombres' => 'required',
            'parentesco' => 'required',
        ]);
        Visitante::created($request->all());
        return redirect()->route('visitantes.index');
    }

    public function show(Visitante $visitante)
    {
        return view('visitantes.show', compact('visitante'));
    }

    public function update(Request $request, Visitante $visitante)
    {
        $request->validate([
            'cedula' => 'required',
            'nombres' => 'required',
            'parentesco' => 'required',
        ]);
        $visitante->update($request->all());
        return redirect()->route('visitantes.show', compact('visitante'));
    }
}
