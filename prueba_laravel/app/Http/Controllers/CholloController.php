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
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria_id' => 'required',
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
        $chollo= Chollos::findOrFail($id);
        return view('mostrarChollo', compact('chollo'));
    }
}
