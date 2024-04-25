<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AlbumesController extends Controller
{

    public function getAlbum($idUsuario, $idAlbum){
        $client = new Client();

        $response = $client->get('localhost:8080/albumes/obtenerInfoAlbum?idAlbum='.$idAlbum.'&idUsuario='.$idUsuario);

        $album = json_decode($response->getBody());

        return view('album', compact('album'));
    }


}
