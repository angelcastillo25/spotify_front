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

        return view('song', compact('cancion','idCancion','idUsuario'));
    }

    public function followCancion($idUsuario, $idCancion ,$state){
        $client = new Client();
        $state = boolval($state);

        $action= 'follow';

        if ($state) {
            $action = 'unfollow';
        }

        $response = $client->post('localhost:8080/canciones/'.$action.'?idCancion='.$idCancion.'&idUsuario='.$idUsuario);

        return $success = $response->getBody();
    }

    public function playSong($idUsuario, $idMedia){
        $client = new Client();
 
        $response = $client->post('localhost:8080/canciones/play?idUsuario='.$idUsuario.'&idMedia='.$idMedia);

        return $success = $response->getBody();
    }
 
    
}
