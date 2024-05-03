<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function getArtist($idUser, $idArtist){
        $client = new Client();

        $response = $client->get('localhost:8080/artistas/get?idUsuario='.$idUser.'&idArtist='.$idArtist);

        $artist = json_decode($response->getBody());

        return view('artist', compact('idUser', 'artist'));
    }
}
