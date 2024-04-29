<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function getPodcast($idPodcast,$idUsuario)
    {
        $client = new Client();

        $response = $client->get('localhost:8080/podcast/buscar?idPodcast='.$idPodcast.'&idUsuario='.$idUsuario);

        $podcast = json_decode($response->getBody());

        return view('podcast', compact('podcast'));
    }

    public function getEpisode($idEpisodio)
    {
        $client = new Client();

        $response = $client->get('localhost:8080/episodio/buscar?id='.$idEpisodio);

        $episodio = json_decode($response->getBody());

        return view('episodio', compact('episodio'));
    }
}
