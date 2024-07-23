<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'identificacion' => 'required',
            'contraseña' => 'required',
        ]);
        $usuarios = Usuario::all()->find('identificacion', $request->all('identificacion'));
    }

    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'identificacion' => 'required',
            'contraseña' => 'required',
        ]);
        Usuario::created($request->all());
        return redirect()->route('usuarios.index');
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'identificacion' => 'required',
            'contraseña' => 'required',
        ]);
        $usuario->update($request->all());
        return redirect()->route('usuarios.show', compact('usuario'));
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
