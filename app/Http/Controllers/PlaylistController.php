<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{

    public function getPlaylist($idPlaylist, $idUsuario){
        $client = new Client();

        $response = $client->get('localhost:8080/listas/playlistsByid?id='.$idPlaylist.'&idUsuario='.$idUsuario);

        $playlist = json_decode($response->getBody());

        return view('playlist', compact('playlist', 'idPlaylist', 'idUsuario'));
    }

    public function createPlaylistView($idUsuario){
        return view('createPlaylist', compact('idUsuario'));
    }
    
    public function createPlaylist(Request $request){
        $client = new Client();

        $response = $client->post('localhost:8080/usuarioEstandar/crearLista?nombre='
        .$request->input('nombre').'&portada=Playlist/playlistdefault.jpeg&idUsuario='
        .$request->input('usuario').'&idTipoLista=4&descripcion=');

        $idPlaylist = json_decode($response->getBody());

        if ($idPlaylist != 0) {
            return redirect()->route('playlist.obtener', ['idPlaylist' => $idPlaylist]);
        }
        return "Ocurrio un error, vuelva atras e intentelo de nuevo";
    }

    public function addSongsView($idPlaylist){
        $client = new Client();

        $response = $client->get('localhost:8080/listas/getSongsAddToPlaylist?idPlaylist='.$idPlaylist);

        $canciones = json_decode($response->getBody());

        return view('addSong', compact('canciones'));
    }
    
}
