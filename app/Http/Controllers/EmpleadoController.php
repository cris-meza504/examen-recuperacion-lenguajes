<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function obtenerEmpleados(){
        $empleados = Empleado::all();
        return view('mostrarEmpleados', compact('empleados'));
    }

    public function crearEmpleado(){
        return view('crearEmpleado');
    }

    public function guardarEmpleado(Request $request){
         //crear un obejeto de tipo Producto
         $nuevoempleado = new Empleado();
         //setear valores 
         $nuevoempleado->nombre = $request->nombre;
         $nuevoempleado->apellido = $request->apellido;
         $nuevoempleado->fechaIngreso = $request->fechaIngreso;
         $nuevoempleado->salario = $request->salario;
         $nuevoempleado->save();
 
         return redirect(route('obtener.empleados'));

    }
}
