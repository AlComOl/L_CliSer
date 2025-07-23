<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;


class ServicioController extends Controller
{
    public function showServicios(){
        // $servicios = Servicio::latest()->paginate(3);
        $servicios= Servicio::all();
        //  dd($servicios); // ¡Añade esta línea!
         return view('clientes.servicio', ['servicios' => $servicios]);
    }

   public function mostrarClientes(Request $request){
     $id = $request->get('servicio_id'); // ✅ ahora sí tienes el id que viene del input hidden

        $servicio = Servicio::findOrFail($id);
        $clientes = $servicio->clientes;
        return view('clientes.clientes', ['clientes' => $clientes]);


   }

   public function ShowForm(){
     return view('clientes.createServicio');
   }

 public function store(Request $request)
{
    // Validar datos recibidos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string|max:255',
        'codigo' => 'required|string|max:50',
    ]);

    // Guardar en la base de datos en el orden nombre, descripción, código
    Servicio::create([
        'nombre' => $request->input('nombre'),
        'descripcion' => $request->input('descripcion'),
        'codigo' => $request->input('codigo'),
    ]);

    // Redirigir con mensaje de éxito
    return redirect()->route('servicios.create')->with('success', 'Servicio creado correctamente');
}

}
