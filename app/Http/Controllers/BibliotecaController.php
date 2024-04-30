<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function getPlaylist($idUser){
        $client = new Client();

        $response = $client->get('localhost:8080/biblioteca/libraryByUser?idUsuario='.$idUser);

        $library = json_decode($response->getBody());

        return view('playlist', compact('library'));
    }
}
