<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function loginIndex(){
        return view('login');
    }

    public function validate(Request $request){

        $client = new Client();

        $response = $client->get(
            "localhost:8080/usuario/validar?correo=".$request->input('email')."&contrasenia=".$request->input('password')
        );

        $data = json_decode($response->getBody());

        if ($data->success!=0) {
            return redirect()->route('home.obtener', ['idUser' => $data->success]);
        }

        return $data;
    }
}
