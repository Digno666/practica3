<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContadorDeVistas;
use Carbon\Carbon;


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContadorDeVistas;
use Carbon\Carbon;

class ContadorDeVistasController extends Controller
{
    // Función para registrar la visita y mostrar el formulario correspondiente
    public function registrarVista(Request $request, $formulario)
    {
        $url = $request->url();
        $fechaHora = Carbon::now();

        // Verificar si ya existe un registro para la URL
        $contador = ContadorDeVistas::where('url', $url)->first();

        if ($contador) {
            // Si existe, actualizar el contador
            $contador->increment('visitas');
        } else {
            // Si no existe, crear un nuevo registro con 1 visita
            ContadorDeVistas::create([
                'url' => $url,
                'fyh_creacion' => $fechaHora,
                'visitas' => 1,
            ]);
        }

        // Obtener el número de visitas
        $vistas = ContadorDeVistas::where('url', $url)->first()->visitas;

        return view($formulario, ['vistas' => $vistas]);
    }
}
