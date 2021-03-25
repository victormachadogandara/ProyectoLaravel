<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    public function index() {
        $productos = Productos::all();
        return view('index', ['productos' => $productos]);
    }

    function agregar() {
        return view('crear');
    }

    function crear(Request $request) {
        Productos::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio')
        ]);
    
        return redirect('/notas');
    }

    function editar($id) {
        $producto = Productos::find($id);
        return view('editar', ['producto' => $producto]);
    }

    function update(Productos $productos, Request $request) {
        $productos->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio')
        ]);

        return redirect('/notas');
    }

    function destroy($id) {
        $producto = Productos::find($id);
        $producto->delete();
        return redirect('/notas');
    }
}
