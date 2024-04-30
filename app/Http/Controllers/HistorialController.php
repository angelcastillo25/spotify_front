<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function getHistory($idUsuario){

        $client = new Client();

        $response = $client->get("localhost:8080/historialCanciones/buscar?idUsuario=".$idUsuario);

        $historial = json_decode($response->getBody());

        return view('historial', compact('historial'));
    }
}
