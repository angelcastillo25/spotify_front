<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/lists.css')}}">
    <link rel="stylesheet" href="{{asset('css/options_menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/profil.css')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Iniciar Sesion - Spotify</title>
</head>
<body>
    <main>
        <div class="list_header">
            <img class="back_button" src="{{asset('img/backArrowMen.svg')}}" alt="boton atras" id="back_btn">
            <div class="cover_container">
                <div class="cover-params">
                    <img src="https://storage.googleapis.com/spt-project-bucket/{{$perfil->url_foto_perfil}}" class="cover_img" alt="portada list" id="list_cover">
                    <div class="song_text_container">
                        <p class="user-name">{{$perfil->nombre}}</p>
                        <p class="song_artist">{{$perfil->cantidadSeguidores}} seguidores • {{$perfil->cantidadSeguidos}} siguiendo</p>
                    </div>
                </div>
            </div>

            <div class="options-menu">
                <button class="button_header">Editar</button>
                <img class="options_icon options_btn" src="{{asset('img/option_points.svg')}}" alt="Opciones">
            </div>
            
            <div style="padding: 10px 20px;">
                <h1 class="user-name" style="font-size: 20px;">Playlists</h1>
            </div>

            <div class="list_container">
                @foreach ($perfil->playlistCreadas as $playlist)
                <div class="list_item">
                    <div style="display:flex;">
                        <img src="https://storage.googleapis.com/spt-project-bucket/{{$playlist->portadaLista}}" alt="" class="song_cover">
                        <div class="song_text_container" style="margin-left: 5px;">
                            <p class="song_title">{{$playlist->nombreLista}}</p>
                            <p class="song_artist">Se guardo 0 veces</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="bottom-button">
                <button class="button_header" style="margin-right: 0;">Ver todas las playlist</button>
            </div>

        <div class="superposition_background" id="superposition_background"></div>
            <div class="option_menu" id="option_menu">
                <div class="dragbar_container"></div>
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
                </div>
                <div class="option_item">
                    <img class="list_button" src="{{asset('img/agregar.svg')}}" alt="agregar">
                    <p>Agregar a favoritos</p>
                </div>
                <div class="option_item">
                    <img class="list_button" src="{{asset('img/agregar.svg')}}" alt="agregar">
                    <p>Agregar a favoritos</p>
                </div>
                <div class="option_item">
                    <img class="list_button" src="{{asset('img/agregar.svg')}}" alt="agregar">
                    <p>Agregar a favoritos</p>
                </div>
            </div>
    </main>
    <footer>
        <div class="footerMenu">
            <div class="songReproducer">
                <div class="artistPart">
                    <img src="{{asset('img/cardellino.jpeg')}}" alt="" class="imgArtistRpr">
                    <div class="titleSong">
                        <p class="songName">Bambu</p>
                        <p class="artistName">cardellino</p>
                    </div>
                </div>
                
                <div class="buttonsReproducer">
                    <img src="{{asset('img/agregar.svg')}}" alt="" class="imgReproductor">
                    <button class="buttons-bar" id="buttonPlay" onclick="changeImage()">
                        <img src="{{asset('img/playWhite.png')}}" alt="" class="imgReproductor" id="buttonImage">
                    </button>
                </div>
                
            </div>
            <div id="bottom-bar">
                <button class="buttons-bar" onclick="selectButton(this)" id="home">
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
                </button>
                <button class="buttons-bar" onclick="selectButton(this)" id="search">
                    <img src="{{asset('img/search.png')}}" alt="" class="img-bar">
                    <p>Buscar</p>
                </button>
                <button class="buttons-bar" onclick="selectButton(this)" id="library">
                    <img src="{{asset('img/library.png')}}" alt="" class="img-bar">
                    <p>Bibloteca</p>
                </button>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/reproducer.js')}}"></script>
    <script src="{{asset('js/backButton.js')}}"></script>
</body>
</html>
