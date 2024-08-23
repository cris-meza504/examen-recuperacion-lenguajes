<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function obtenerProveedores(){
        $proveedores = Proveedor::all();
        return view('mostrarProveedores', compact('proveedores'));
    }

    public function crearProveedor(){
        return view('crearProveedor');
    }

    public function guardarProveedor(Request $request){
        //crear un obejeto de tipo Producto
        $nuevoProveedor = new Proveedor();
        //setear valores 
        $nuevoProveedor->nombre = $request->nombre;
        $nuevoProveedor->fechaRegistro = $request->fechaRegistro;
        $nuevoProveedor->telefono = $request->telefono;
        $nuevoProveedor->correo = $request->correo;
        $nuevoProveedor->save();

        return redirect(route('obtener.Proveedores'));

   }
}
