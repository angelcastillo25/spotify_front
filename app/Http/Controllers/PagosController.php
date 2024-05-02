<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function getPlanes($idUsuario){
        $client = new Client();

        $response = $client->get("localhost:8080/planes/obtener");

        $planes = json_decode($response->getBody());

        return view('planes', compact('idUsuario', 'planes'));
    }

    public function pagar(Request $request){
        try {
            $client = new Client();
    
            $headers = [
                'Content-Type' => 'application/json'
            ];
    
            $body = '{
                "idUsuario": '.$request->input('idUsuario').',
                "idPlan": '.$request->input('idPlan').',
                "titular": "'.$request->input('titular').'",
                "tarjeta": "'.$request->input('tarjeta').'",
                "cvv": '.$request->input('cvv').',
                "fechaExpiracion": "'.$request->input('fechaexp').'"
            }';
    
            $response = $client->post('localhost:8080/usuarioEstandar/cambiarPlan', [
                'headers'=> $headers,
                'body' => $body
            ]);
    
            $success = json_decode($response->getBody());

            if($success){
                return redirect(route('perfil.obtener',["idUsuario"=>$request->input('idUsuario')])); //Redireccionar a login
            }

            return "No se pudo realizar la peticion intentelo de nuevo";
            } catch (RequestException $e) {
                return 'Error al realizar la solicitud'.$e->getMessage();
        }
            
    }
}
