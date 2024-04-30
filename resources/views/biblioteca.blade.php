<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/biblioteca.css') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Iniciar Sesion - Spotify</title>
</head>
<body>
    <header>
            <div class="profilHeader">

                <div class="TitleHeader">
                    <div class="img_container">
                        <img src="https://storage.googleapis.com/spt-project-bucket/{{ $library->fotoUsuario }}" alt="foto de perfil" id="profil">
                    </div>
                    <h1>Tu Biblioteca</h1>
                </div>
                <div class="thingsHeader">
                    <div class="img_container">
                        <img src="{{ asset('img/plus.png') }}" alt="foto de perfil" id="profil">
                    </div>
                </div>
                
            </div>
        <div class="menuButtons">
            <button onclick="seleccionarButton(this)" class="button_header" id="btn_todas">Playlist</button>
            <button onclick="seleccionarButton(this)" class="button_header" id="btn_musica">Podcasts</button>
            <button onclick="seleccionarButton(this)" class="button_header" id="btn_podcasts">Albumes</button>
            <button onclick="seleccionarButton(this)" class="button_header" id="btn_podcasts">Artistas</button>
            <button onclick="seleccionarButton(this)" class="button_header" id="btn_podcasts">Descargados</button>



        </div>
        
        
    </header>
    <main>
           
        @foreach ($library->playlists as $playlist)
        <a href="{{ route('playlist.obtener', ['idPlaylist' => $playlist->id_Playlist]) }}" class="playList">
                <img src="https://storage.googleapis.com/spt-project-bucket/{{ $playlist->portadaPlaylist }}" alt="" class="song_cover">
                <div class="song_text_container">
                    <p class="song_title">{{$playlist->nombrePlaylist}}</p>
                    <p class="song_artist">{{$playlist->cantidadCanciones}} canciones</p>
                </div>
        </a>
        @endforeach
        @foreach ($library->podcasts as $podcast)
        <div class="playList">
            
            <img src="https://storage.googleapis.com/spt-project-bucket/{{ $podcast->portadaPlaylist }}" alt="" class="song_cover">
            <div class="song_text_container">
                <p class="song_title">{{$podcast->nombrePlaylist}}</p>
                <p class="song_artist">Podcast • {{$podcast->descripcion}}</p>
            </div>
            
        </div>
        @endforeach
        
    </main>
    <footer>
        
        <div class="footerMenu">
            <div class="songReproducer">
                <div class="artistPart">
                    <img src="{{ asset('img/cardellino.jpeg') }}" alt="" class="imgArtistRpr">
                    <div class="titleSong">
                        <p class="songName">Bambu</p>
                        <p class="artistName">cardellino</p>
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
                    <img src="{{ asset('img/search.png') }}" alt="" class="img-bar">
                    <p>Buscar</p>
                </button>
                <button class="buttons-bar" onclick="selectButton(this)" id="library">
                    <img src="{{ asset('img/library.png') }}" alt="" class="img-bar">
                    <p>Bibloteca</p>
                </button>
            </div>

        </div>
        

    </footer>
    <script src="{{ asset('js/biblioteca.js') }}"></script>
    <script src="{{ asset('js/reproducer.js') }}"></script>
    <script src="{{ asset('js/reproducirCanciones.js') }}"></script>
    
</body>

</html>
