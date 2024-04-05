<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/landingPage', function(){
    return view('landingPage');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/playlist', function(){
    return view('playlist');
});

Route::get('/album', function(){
    return view('album');
});

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