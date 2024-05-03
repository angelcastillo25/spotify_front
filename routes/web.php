<?php

use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\AlbumesController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\CancionController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UsuarioController::class, 'loginIndex'])->name('login.index');

Route::post('/login/validate', [UsuarioController::class, 'validate'])->name('login.validate');

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

Route::post('/register/create', [RegisterController::class, 'create'])->name('register.create');

Route::get('/landingPage', function(){
    return view('landingPage');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/playlist', function(){
    return view('playlist');
});

//Rutas de album

Route::get('/album/{idUsuario}/{idAlbum}', [AlbumesController::class, 'getAlbum'])->name('album.obtener');

Route::get('/album/follow/{idUsuario}/{idAlbum}/{state}', [AlbumesController::class, 'followAlbum'])->name('album.follow');

//Rutas de cancion

Route::get('/cancion/{idCancion}/{idUsuario}', [CancionController::class, 'getSong'])->name('cancion.obtener');

Route::get('/cancion/follow/{idUsuario}/{idCancion}/{state}', [CancionController::class, 'followCancion'])->name('cancion.follow');

//Rutas de podcasts y episodios

Route::get('/podcast/episodio/{idEpisodio}', [PodcastController::class, 'getEpisode'])->name('episodio.obtener');

Route::get('/podcast/{idPodcast}/{idUsuario}', [PodcastController::class, 'getPodcast'])->name('podcast.obtener');

Route::get('/podcast/follow/{idUsuario}/{idPodcast}/{state}', [PodcastController::class, 'followPodcast'])->name('podcast.follow');

//Rutas de perfil

Route::get('/perfil/{idUsuario}', [PerfilController::class, 'getProfile'])->name('perfil.obtener');

Route::get('/planes/{idUsuario}', [PagosController::class, 'getPlanes'])->name('planes.obtener');

Route::post('/pagos/pagar', [PagosController::class, 'pagar'])->name('pagos.pagar');

Route::get('/biblioteca', function(){
    return view('biblioteca');
});

Route::get('/historial', function(){
    return view('historial');
});

Route::get('/historial/{idUsuario}', [HistorialController::class, 'getHistory'])->name('historial.obtener');

Route::get('/buscando/{idUsuario}', [BusquedaController::class, 'buscandoView'])->name('busqueda.buscandovw');

Route::get('/busqueda/{idUsuario}', [BusquedaController::class, 'busquedaView'])->name('busqueda.buscarvw');

Route::get('/buscar/{query}', [BusquedaController::class, 'buscar'])->name('busqueda.buscar');


Route::get('/buscar', function(){
    return view('search');
});

Route::get('/artist', function(){
    return view('artist');
});

Route::get('/addSong', function(){
    return view('addSong');
});

Route::get('/playlist/addSongs/{idPlaylist}', [PlaylistController::class, 'addSongsView'])->name('playlist.addSongs');

Route::post('/playlist/add', [PlaylistController::class, 'createPlaylist'])->name('playlist.add');

Route::get('/playlist/create/{idUsuario}', [PlaylistController::class, 'createPlaylistView'])->name('playlist.create');

Route::get('/playlist/{idPlaylist}/{idUsuario}', [PlaylistController::class, 'getPlaylist'])->name('playlist.obtener');
 
Route::get('/biblioteca/{idUser}', [BibliotecaController::class, 'getLibrary'])->name('library.obtener');

Route::get('/home/{idUser}', [homeController::class, 'getHome'])->name('home.obtener');

Route::get('/cancion/play/{idUsuario}/{idMedia}', [CancionController::class, 'playSong'])->name('cancion.play');

Route::get('/artist/{idUsuario}/{idArtist}', [ArtistaController::class, 'getArtist'])->name('get.artist');