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

        return view('podcast', compact('podcast', 'idPodcast', 'idUsuario'));
    }

    public function getEpisode($idEpisodio)
    {
        $client = new Client();

        $response = $client->get('localhost:8080/episodio/buscar?id='.$idEpisodio);

        $episodio = json_decode($response->getBody());

        return view('episodio', compact('episodio'));
    }

    public function followPodcast($idUsuario, $idPodcast, $state){
        $client = new Client();
        $state = boolval($state);

        $action= 'follow';

        if ($state) {
            $action = 'unfollow';
        }

        $response = $client->post('localhost:8080/podcast/'.$action.'?idPodcast='.$idPodcast.'&idUsuario='.$idUsuario);

        return $success = $response->getBody();
    }
}
