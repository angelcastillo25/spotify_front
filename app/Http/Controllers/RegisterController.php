<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){

        $client = new Client();

        //Se obtienen los generos
        $response = $client->get('localhost:8080/genero/obtener');
        $generos = json_decode($response->getBody());

        //Se obtienen los paises
        $response = $client->get('localhost:8080/paises/obtener');
        $paises = json_decode($response->getBody());

        //Se obtienen los artistas
        $response = $client->get('localhost:8080/artistas/toregister');
        $artistas = json_decode($response->getBody());

        return view('register', compact('generos','paises','artistas'));
    }

    public function create(Request $request){

        try {
        $client = new Client();

        $headers = [
            'Content-Type' => 'application/json'
        ];

        $idArtistaSeguidos = implode(',', $request->input('artists'));

        $body = '{
            "correo": "'.$request->input('email').'",
            "contrasenia": "'.$request->input('password').'",
            "nombre": "'.$request->input('username').'",
            "fecha_nacimiento": "'.$request->input('date').'",
            "idGenero": "'.$request->input('genero').'",
            "idPais": "'.$request->input('pais').'",
            "idArtistaSeguidos": ['.$idArtistaSeguidos.'],
            "idPlan": "4",
            "tarjeta": null,
            "foto": "usuarioperfil1.jpeg"
        }';

        $response = $client->post('localhost:8080/usuarioEstandar/crear', [
            'headers'=> $headers,
            'body' => $body
        ]);

        $success = json_decode($response->getBody());

        return redirect(route('login.index')); //Redireccionar a login

        } catch (RequestException $e) {
            return 'Error al realizar la solicitud'.$e->getMessage();
        }
        
    }
}
