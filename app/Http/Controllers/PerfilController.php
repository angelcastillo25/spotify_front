<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function getProfile($idUsuario){

        $client = new Client();

        $response = $client->get("localhost:8080/usuario/perfil?id=".$idUsuario);

        $perfil = json_decode($response->getBody());

        return view('profile', compact('perfil'));
    }
}
