<!DOCTYPE html>
<html lang="en" data-idusuario="{{$idUsuario}}" data-idplaylist={{$idPlaylist}}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Name</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lists.css') }}">
    <link rel="stylesheet" href="{{ asset('css/options_menu.css') }}">
</head>
<body>
    <main>
        <div class="list_header">
            <img class="back_button" src="{{asset('img/backArrowMen.svg')}}" alt="boton atras" id="back_btn">
            <div class="cover_container">
                <img src="https://storage.googleapis.com/spt-project-bucket/{{$playlist->portadaPlaylist}}" class="cover_img" alt="portada list" id="list_cover">
            </div>
            
            <div class="list_header_panel">
            <p hidden id="list_name" class="list_name">{{$playlist->nombrePlaylist}}}}</p>
                <div class="play_button"><img class="play_icon" src="{{asset('img/play.png')}}" alt="boton pausa"  id="play_btn" data-state="0"></div>
                <div class="description_container">
                    <p>{{$playlist->descripcion}}</p>
                </div>
                <div class="creator_container">
                    <img src="https://storage.googleapis.com/spt-project-bucket/{{$playlist->fotoUsuario}}" alt="usuario" class="profile_image">
                    <p id="author_name">{{$playlist->nombreUsuario}}</p>
                </div>
                <div class="description_container">
                    <p>Se guardo {{$playlist->guardados}} veces - 2h 34m</p>
                </div>
                <div class="buttons_container">
                    <img class="list_button" src="{{asset('img/descargar.svg')}}" data-state="0" alt="" id="download_btn">
                    <img class="list_button" src="{{asset('img/agregar.svg')}}" data-state="0" alt="" id="add_btn">
                    <a href={{route('playlist.addSongs', ['idPlaylist'=>$idPlaylist,'idUsuario'=>$idUsuario])}}><img class="list_button" src="{{asset('img/agregarPlaylist.png')}}" alt=""></a>
                    <img class="options_icon" src="{{asset('img/option_points.svg')}}" alt="" id="options_btn">
                </div>
            </div>
        </div>
        <div class="songsContainer" style="margin-bottom: 200px;">
            @foreach ($playlist->canciones as $cancion)
            <div class="list_container" onclick="changeColor(this, '{{$cancion->id_cancion}}', '{{$cancion->nombreCancion}}', '{{$cancion->artistaCancion}}', '{{$cancion->portadaCancion}}', '{{$cancion->color}}')">
                <div class="list_item">
                    <div style="display:flex;">
                        <img src="https://storage.googleapis.com/spt-project-bucket/{{$cancion->portadaCancion}}" alt="" class="song_cover">
                        <div class="song_text_container">
                            <p class="song_title" id="song_title_{{$loop->index}}" >{{$cancion->nombreCancion}}</p>
                            <p class="song_artist">{{$cancion->artistaCancion}}</p>
                        </div>
                    </div>
                    <img class="options_icon options_btn" src="{{asset('img/option_points.svg')}}" alt="Opciones">
                </div>
            </div>
            @endforeach
        </div>

        <div class="superposition_background" id="superposition_background"></div>
        <div class="option_menu" id="option_menu">
            <div class="dragbar_container">
                <div></div>
            </div>
            <div style="display:flex;">
                <img src="{{asset('img/cover.jpg')}}" alt="" class="song_cover" id="cover_mini">
                <div class="song_text_container">
                    <p class="song_title" id="object_title">Playlist Name</p>
                    <p class="song_artist" id="object_author">por Daniel Ochoa</p>
                </div>
            </div>
            <hr style="background-color: #424242;">
            <div class="option_item">
                <img class="list_button" src="{{asset('img/agregar.svg')}}" alt="agregar">
                <p>Agregar a favoritos</p>
            </div>
            <div class="option_item">
                <img class="list_button" src="{{asset('img/agregar.svg')}}" alt="agregar">
                <p>Agregar a favoritos</p>
            </div><div class="option_item">
                <img class="list_button" src="{{asset('img/agregar.svg')}}" alt="agregar">
                <p>Agregar a favoritos</p>
            </div><div class="option_item">
                <img class="list_button" src="{{asset('img/agregar.svg')}}" alt="agregar">
                <p>Agregar a favoritos</p>
            </div><div class="option_item">
                <img class="list_button" src="{{asset('img/agregar.svg')}}" alt="agregar">
                <p>Agregar a favoritos</p>
        </div>
    </main>
    <footer>
        <div class="footerMenu">
            <div class="songReproducer" id="songReproducer">
                <div class="artistPart" data-idmedia="" onclick="goToSong('{{$idUsuario}}')">
                    <img id="songPlayCover" src="" alt="" class="imgArtistRpr">
                    <div class="titleSong">
                        <p class="songName" id="songPlayName"></p>
                        <p class="artistName" id="songPlayArtist"></p>
                    </div>
                </div>
                
                <div class="buttonsReproducer">
                    <img src="{{ asset('img/agregar.svg') }}" alt="" class="imgReproductor">
                    <button class="buttons-bar" id="buttonPlay" onclick="changeImage()">
                        <img src="{{ asset('img/playWhite.png') }}" alt="" class="imgReproductor" id="buttonImage">
                    </button>
                </div>
                
            </div>
            <div id="bottom-bar">
                <a class="buttons-bar" onclick="selectButton(this)" id="home" href={{route('home.obtener', ['idUser'=>$idUsuario])}}>
                    <svg id="homeViewButton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        viewBox="0,0,256,256" width="40px" height="40px">
                        <g fill="#ffffff" fill-rule="nonzero" 
                            stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" 
                            stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" 
                            font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <g transform="scale(5.33333,5.33333)">
                                <path d="M39.5,43h-9c-1.381,0 -2.5,-1.119 -2.5,
                                    -2.5v-9c0,-1.105 -0.895,-2 -2,-2h-4c-1.105,0 -2,0.895 -2,2v9c0,1.381 -1.119,2.5 -2.5,
                                    2.5h-9c-1.381,0 -2.5,-1.119 -2.5,-2.5v-19.087c0,-2.299 1.054,-4.471 2.859,-5.893l14.212,
                                    -11.199c0.545,-0.428 1.313,-0.428 1.857,0l14.214,11.199c1.805,1.422 2.858,3.593 2.858,
                                    5.891v19.089c0,1.381 -1.119,2.5 -2.5,2.5z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <p>Inicio</p>
                </a>
                <a class="buttons-bar" onclick="selectButton(this)" id="search" href={{route('busqueda.buscarvw', ['idUsuario'=>$idUsuario])}}>
                    <img src="{{ asset('img/search.png') }}" alt="" class="img-bar">
                    <p>Buscar</p>
                </a>
                <a class="buttons-bar" onclick="selectButton(this)" id="library" href={{route('library.obtener', ['idUser'=>$idUsuario])}}>
                    <img src="{{ asset('img/library.png') }}" alt="" class="img-bar">
                    <p>Bibloteca</p>
                </a>
            </div>
        </div>
    </footer>
    <script type="module" src="{{ asset('js/playlist.js') }}"></script>
    <script src="{{ asset('js/reproducirCanciones.js') }}"></script>
    <script src="{{ asset('js/reproducer.js') }}"></script>
    <script src="{{asset('js/backButton.js')}}"></script>
</body>
</html>
