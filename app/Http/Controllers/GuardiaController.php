<?php

namespace App\Http\Controllers;

use App\Models\Guardia;
use Illuminate\Http\Request;

class GuardiaController extends Controller
{
    public function index()
    {
        $guardias = Guardia::all();
        return view('guardias.index', compact('guardias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'identificacion' => 'required',
            'nombres' => 'required',
            'estado' => 'required',
        ]);
        Guardia::create($request->all());
        return redirect()->route('guardias.index');
    }

    public function show(Guardia $guardia)
    {
        return view('guardias.show', compact('guardia'));
    }

    public function update(Request $request, Guardia $guardia)
    {
        $request->validate([
            'identificacion' => 'required',
            'nombres' => 'required',
            'estado' => 'required',
        ]);
        $guardia->update($request->all());
        return redirect()->route('guardias.show', compact('guardia'));
    }
}
