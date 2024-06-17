<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class BuscadorController extends Controller
{
    public function index()
    {
        return view('buscador.index');
    }

    public function buscar(Request $request)
    {
        $query = $request->input('query');
        $libros = Libro::where('titulo', 'like', "%$query%")
            ->orWhere('autor', 'like', "%$query%")
            ->orWhere('editorial', 'like', "%$query%")
            ->get();

        return view('buscador.resultados', compact('libros'));
    }
}
