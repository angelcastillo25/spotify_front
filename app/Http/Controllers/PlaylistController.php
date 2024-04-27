<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{

    public function getPlaylist($idPlaylist){
        $client = new Client();

        $response = $client->get('localhost:8080/listas/playlistsByid?id='.$idPlaylist);

        $playlist = json_decode($response->getBody());

        return view('playlist', compact('playlist'));
    }
}
