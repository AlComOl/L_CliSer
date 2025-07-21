<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteController extends Controller
{
    public function create(){
       return view('clientes.create');
    }

    public function crud(){
        return view('clientes.crud');
    }

     public function store(Request $request){
        // 1. Validar los datos:
        //    Laravel comprueba que los datos recibidos son válidos (ej. 'nombre' es requerido, 'email' es email y único)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'email' => 'required|email|unique:clientes,email',

        ]);

        // 2. Guardar los datos en la base de datos:
        //    'Cliente::create()' crea un nuevo registro en tu tabla 'clientes'
        //    con los datos validados del formulario.
        Cliente::create([
            'nombre' => $request->nombre,
            'edad' => $request->edad,
            'email' => $request->email,

        ]);

        // 3. Redirigir al usuario:
        //    Una vez guardado, redirige al usuario a otra página (ej. el dashboard)
        //    y le puedes enviar un mensaje de éxito.
        return redirect()->route('dashboard')->with('success', '¡Cliente registrado con éxito!');
    }

    public function index(){
        // $clientes = Cliente::all();
           $clientes = Cliente::latest()->paginate(3);
        return view('clientes.crud', ['clientes' => $clientes]);
    }

    public function borrar($id){
        $dato = Cliente::findOrFail($id);
        $dato->delete();
        return redirect()->route('clientes.crud');
    }

}

