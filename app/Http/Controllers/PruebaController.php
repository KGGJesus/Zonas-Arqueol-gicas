<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function Zonas(){
        $rutaJson = public_path('../zonas.json'); // Reemplaza 'ruta/al/json.json' con la ubicación real de tu archivo JSON.

        // Verificar si el archivo existe
        if (file_exists($rutaJson)) {
            // Leer el contenido del archivo JSON
            $json = file_get_contents($rutaJson);

            // Decodificar el JSON
            $datosJson = json_decode($json);

            // Puedes pasar los datos a una vista
            return view('json', ['datosJson' => $datosJson]);
        } else {
            // Manejo de error si el archivo no existe
            return 'El archivo JSON no se encuentra disponible.';
        }
    }
}
