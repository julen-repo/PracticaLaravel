<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Muestra el listado de categorías.
     */
    public function index()
    {
        $categorias = Categorias::withCount('chollos')->get(); // Carga la relación con el conteo de chollos
        return view('listarCategorias', compact('categorias'));
    }

    /**
     * Muestra el formulario para crear una nueva categoría.
     */
    public function create()
    {
        return view('crearCategoria');
    }

    /**
     * Guarda una nueva categoría en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Categorias::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoría creada exitosamente.');
    }

    /**
     * Muestra el formulario para editar una categoría existente.
     */
    public function edit($id)
    {
        $categoria = Categorias::findOrFail($id);
        return view('editarCategoria', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categoria = Categorias::findOrFail($id);
        $categoria->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada exitosamente.');
    }


    /**
     * Elimina una categoría de la base de datos.
     */
    public function destroy($id)
    {
        $categoria = Categorias::findOrFail($id);

        // Puedes agregar una validación para asegurarte de que no tenga chollos asociados antes de eliminar.
        if ($categoria->chollos()->count() > 0) {
            return redirect()->route('categorias.index')->with('error', 'No se puede eliminar la categoría porque tiene chollos asociados.');
        }

        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada exitosamente.');
    }
}
