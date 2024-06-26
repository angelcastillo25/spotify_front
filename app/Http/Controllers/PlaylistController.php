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
        .$request->input('nombre').'&portada=Playlists/playlistdefault.jpg&idUsuario='
        .$request->input('usuario').'&idTipoLista=4&descripcion=');

        $idPlaylist = json_decode($response->getBody());

        if ($idPlaylist != 0) {
            return redirect()->route('playlist.obtener', ['idPlaylist' => $idPlaylist, 'idUsuario' => $request->input('usuario')]);
        }
        return "Ocurrio un error, vuelva atras e intentelo de nuevo";
    }

    public function addSongsView($idPlaylist, $idUsuario){
        $client = new Client();

        $response = $client->get('localhost:8080/listas/getSongsAddToPlaylist?idPlaylist='.$idPlaylist);

        $canciones = json_decode($response->getBody());

        return view('addSong', compact('canciones', 'idPlaylist', 'idUsuario'));
    }

    public function addSong($idPlaylist, $idCancion, $idUsuario){
        $client = new Client();

        $response = $client->post('localhost:8080/listas/addSongToPlaylist?idCancion='.$idCancion.'&idPlaylist='.$idPlaylist);

        $success = json_decode($response->getBody());
        if ($success) {
            return redirect()->route('playlist.obtener', ['idPlaylist' => $idPlaylist, 'idUsuario' => $idUsuario]);
        }
        return "Ocurrio un error, vuelva atras e intentelo de nuevo";
    }
    
}
