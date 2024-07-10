<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('usuario.index', compact('users'));
    }

    public function create()
    {
        return view('usuario.create');
    }

    // app/Http/Controllers/UserController.php

    public function store(Request $request)
    {
        $request->validate
        ([
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'cedula' => 'required|unique:users|max:50',
        ]);

        $user = new User();
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->cedula = $request->cedula;
        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario ingresado correctamente');
    }

}
