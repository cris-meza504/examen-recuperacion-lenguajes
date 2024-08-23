<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function crearProducto(){
        return view('crearProducto');
    }

    public function obtenerProductos(){
        $productos = Producto::all();
        return view('mostrarProductos',compact('productos'));
    }

    public function guardarProducto(Request $request){
        //crear un obejeto de tipo Producto
        $nuevoProducto = new Producto();
        //setear valores 
        $nuevoProducto->descripcion = $request->descripcion;
        $nuevoProducto->stock = $request->stock;
        $nuevoProducto->precio = $request->precio;
        if ($request->pagasIsv == 1) {
            $nuevoProducto->pagasIsv = true;
        }else{
            $nuevoProducto->pagasIsv = false;
        }
        $nuevoProducto->save();

        return redirect(route('obtener.producto'));
    }
}
