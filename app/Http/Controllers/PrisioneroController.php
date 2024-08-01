<?php

namespace App\Http\Controllers;

use App\Models\Prisionero;
use Illuminate\Http\Request;

class PrisioneroController extends Controller
{
    public function index()
    {
        $prisioneros = Prisionero::all();
        return view('prisioneros.index', compact('prisioneros'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'fecha_nacimiento' => 'required',
            'fecha_ingreso' => 'required',
            'delito' => 'required',
            'celda' => 'required',
        ]);
        Prisionero::create($request->all());
        return redirect()->route('prisioneros.index');
    }

    public function show(Prisionero $prisionero)
    {
        return view('prisioneros.show', compact('prisionero'));
    }

    public function update(Request $request, Prisionero $prisionero)
    {
        $request->validate([
            'nombres' => 'required',
            'fecha_nacimiento' => 'required',
            'fecha_ingreso' => 'required',
            'delito' => 'required',
            'celda' => 'required',
        ]);
        $prisionero->update($request->all());
        return redirect()->route('prisioneros.show', compact('prisionero'));
    }
}
