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

   
}
