<?php

namespace App\Http\Controllers;

use App\Models\Chollos;
use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CholloController extends Controller
{
    public function index()
    {
        $chollos = Chollos::with('categoria')->paginate(10); // Paginación de 10 chollos por página
        return view('principal', compact('chollos'));
    }

    public function create()
    {
        $categorias = Categorias::all();
        return view('chollos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'url' => 'required|url|max:255',
            'categoria_id' => 'required|exists:categorias,id',
            'puntuacion' => 'required|integer|min:0|max:5',
            'precio' => 'required|numeric|min:0',
            'precio_descuento' => 'required|numeric|min:0|lte:precio',
            'disponible' => 'required|boolean',
        ]);

        Chollos::create($request->all());

        return redirect()->route('home')->with('success', 'Chollo agregado');
    }

    public function edit(Chollos $chollo)
    {
        $categorias = Categorias::all();
        return view('chollos.edit', compact('chollo', 'categorias'));
    }

    public function update(Request $request, Chollos $chollo)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria_id' => 'required',
        ]);

        $chollo->update($request->all());

        return redirect()->route('home')->with('success', 'Chollo actualizado');
    }

    public function destroy(Chollos $chollo)
    {
        $chollo->delete();
        return redirect()->route('home')->with('success', 'Chollo eliminado');
    }

    public function show($id)
    {
        $chollo = Chollos::findOrFail($id);
        return view('mostrarChollo', compact('chollo'));
    }

    public function nuevos()
    {
        $nuevos = Chollos::with('categoria')->orderByDesc('id')->limit(3)->get(); // Últimos 3 chollos por ID
        return view('nuevos', compact('nuevos'));
    }

    public function destacados()
    {
        $destacados = Chollos::with('categoria')->orderByDesc('puntuacion')->limit(10)->get(); // Top 10 mejor puntuados
        return view('destacados', compact('destacados'));
    }
}
