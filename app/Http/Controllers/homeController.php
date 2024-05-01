<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function getHome($idUser){
        $client = new Client();

        $response = $client->get('localhost:8080/home/inicio?id='.$idUser);

        $home = json_decode($response->getBody());

        return view('home', compact('home'));
    }
}
