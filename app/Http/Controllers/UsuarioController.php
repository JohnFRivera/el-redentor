<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
    {
        $request->validate([
            'identificacion' => 'required',
            'contraseña' => 'required',
        ]);
        Usuario::created($request->all());
    }
}
