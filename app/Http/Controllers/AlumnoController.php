<?php

// app/Http/Controllers/AlumnoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function ingreso()
    {
        return view('ingreso');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'nota1' => 'required|numeric|min:0|max:20',
            'nota2' => 'required|numeric|min:0|max:20',
        ]);

        Alumno::create($request->all());

        return redirect()->route('listado');
    }

    public function listado()
    {
        $alumnos = Alumno::all();
        return view('listado', compact('alumnos'));
    }
}
