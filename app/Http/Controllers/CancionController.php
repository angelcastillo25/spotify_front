<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    public function getSong($idCancion,$idUsuario)
    {
        $client = new Client();

        $response = $client->get('localhost:8080/canciones/obtener?idCancion='.$idCancion.'&idUsuario='.$idUsuario);

        $cancion = json_decode($response->getBody());

        return view('song', compact('cancion'));
    }

    public function playSong($idUsuario, $idMedia){
        $client = new Client();
 
        $response = $client->post('localhost:8080/canciones/play?idMedia='.$idMedia.'&idUsuario='.$idUsuario);

        return $success = $response->getBody();
    }
 
    
}
