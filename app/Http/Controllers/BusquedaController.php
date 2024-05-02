<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function buscandoView($idUsuario){
        return view('searching', compact('idUsuario'));
    }

    public function busquedaView($idUsuario){
        return view('search', compact('idUsuario'));
    }

    public function buscar($query){
        $client = new Client();

        $response = $client->get('localhost:8080/buscador/buscar?query='.$query);
        
        return $resultados = json_decode($response->getBody());
    }
}
