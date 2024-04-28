<?php

use App\Http\Controllers\AlbumesController;
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

Route::get('/album/{idUsuario}/{idAlbum}', [AlbumesController::class, 'getAlbum'])->name('album.obtener');

Route::get('/album/follow/{idUsuario}/{idAlbum}/{state}', [AlbumesController::class, 'followAlbum'])->name('album.follow');

Route::get('/song', function(){
    return view('song');
});

Route::get('/podcast', function(){
    return view('podcast');
});

Route::get('/profil', function(){
    return view('profil');
});

Route::get('/biblioteca', function(){
    return view('biblioteca');
});

Route::get('/historial', function(){
    return view('historial');
});

Route::get('/episodio', function(){
    return view('episodio');
});

Route::get('/searching', function(){
    return view('searching');
});

Route::get('/search', function(){
    return view('search');
});

Route::get('/artist', function(){
    return view('artist');
});

Route::get('/createPlaylist', function(){
    return view('createPlaylist');
});

Route::get('/addSong', function(){
    return view('addSong');
});