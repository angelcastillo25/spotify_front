<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/podcast.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/options_menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/album_list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lists.css') }}">
    <link rel="stylesheet" href="{{ asset('css/biblioteca.css') }}">
    <link rel="stylesheet" href="{{ asset('css/artist.css') }}">
</head>
<body>
    <div class="container-artist">
        <img src="https://storage.googleapis.com/spt-project-bucket/{{$artist->foto}}" alt="cover de podcast" class="artist-cover" id="podcast_cover">
        <h1 class="artist-name">Twenty One Pilots</h1>
        <div class="overlay"></div>
    </div>

    <div class="principal_header">
    <img class="back_button" src="{{ asset('img/backArrowMen.svg') }}" alt="boton atras" id="back_btn">

            
            <div class="podcast_data">
                <p>{{$artist->oyentesMensuales}} oyentes mensuales</p>
            </div>
            <div class="podcast_buttons">
                <div class="follow_btn" id="follow_btn" data-state="0">Seguir</div>
                <img class="button_mini" src="{{asset('img/notificationOff.png')}}" alt="" id="notification_btn" data-state="0">
                <img class="options_icon" src="{{asset('img/option_points.svg')}}" alt="" id="options_btn">
            </div>
            <div class="podcast_sections">
                <div class="section_button" id="episodes_btn">
                    <p>Musica</p>
                    <div class="green_line"></div>
                </div>
                <div class="section_button" id="about_btn">
                    <p>Eventos</p>
                    <div class="green_line"></div>
                </div>
                <div class="section_button" id="similar_btn">
                    <p>Merch</p>
                    <div class="green_line"></div>
                </div>
            </div>
        </div>
    <main>
        <!-- Seccion de canciones populares !-->
        <div class="episode_list" id="episode_section">
            <div style="padding: 10px 20px; margin-bottom:20px">
                <h1 class="user-name" style="font-size: 20px;">Populares</h1>
            </div>
    
            <div class="list_container">
                @foreach ($artist->cancionesPopulares as $index => $cancion)
                    <div class="list_item">
                        <div class="number">
                            <p class="song-number">{{ $index + 1 }}</p>
                            <img src="https://storage.googleapis.com/spt-project-bucket/{{$cancion->portadaCancion}}" alt="" class="song_covers">
                            <div class="song_text_container">
                                <p class="song_title">{{$cancion->nombreCancion}}</p>
                                <p class="song_artist">{{$cancion->artistaCancion}}</p>
                            </div>
                        </div>
                        <img class="options_icon options_btn" src="{{ asset('img/option_points.svg') }}" alt="Opciones">
                    </div>
                @endforeach

            </div>
            
            <!-- Seccion de lanzamientos ultimo lanzamiento!-->
            <div style="padding: 10px 20px; margin-bottom:20px">
                <h1 class="user-name" style="font-size: 20px;">Lanzamientos populares</h1>
            </div>
            <div style="padding: 0 20px;">
                <div class="playList">
                    <img src="https://storage.googleapis.com/spt-project-bucket/{{$artist->ultimoLanzamiento->portadaPlaylist}}" alt="" class="song_cover">
                    <div class="song_text_container">
                        <p class="song_title">{{$artist->ultimoLanzamiento->nombrePlaylist}}</p>
                        <p class="song_artist">Ultimo lanzamiento • {{$artist->ultimoLanzamiento->descripcion}}</p>
                    </div>
                </div>                
                @foreach ($artist->lanzamientosPopulares as $playlist)
                <div class="playList">
                    <img src="https://storage.googleapis.com/spt-project-bucket/{{$playlist->portadaPlaylist}}" alt="" class="song_cover">
                    <div class="song_text_container">
                        <p class="song_title">{{$playlist->nombrePlaylist}}</p>
                        <p class="song_artist">{{$playlist->descripcion}}</p>
                    </div>
                </div>
                @endforeach
                <div class="bottom-button">

                    <button class="button_header" style="margin-right: 0;">Ver discografia</button>
    
                </div>

            </div>
            <!-- Seccion de playlist !-->
            <h1 class="tittle-list" style="margin-bottom: 25px;">Con Twenty one Pilots</h1>
            <div class="list-albums">
                @foreach ($artist->playlistArtista as $playlist)
                <div class="album">
                    <img src="https://storage.googleapis.com/spt-project-bucket/{{$playlist->portadaPlaylist}}" alt="" class="portada_album">
                    <p>{{$playlist->nombrePlaylist}}</p>
                </div>
                @endforeach
            </div>


        </div>
        



        <!-- Seccion acerca de !-->
        <div class="about_container" id="about_section">
            <div class="about_btn_container">
                <div class="about_btn"><p>5.0&nbsp;★&nbsp;(2k)</p></div>
                <p class="separator_point">•</p>
                <div class="about_btn"><p>Historia</p></div>
                <div class="about_btn"><p>Entretenimiento</p></div>
                <div class="about_btn"><p>Ciencia</p></div>
            </div>
            <p class="about_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat enim laudantium consectetur omnis consequuntur non atque tempora nulla dolor possimus. Doloribus necessitatibus quos rem quae architecto dicta sunt deserunt? Suscipit.</p>
        </div>
        <!-- Seccion de mersh !-->
        <div class="similar_container" id="similar_section">
            <h1 class="tittle-list" style="margin-bottom: 25px;">Con Twenty one Pilots</h1>
            <div class="list-albums">
                @foreach ($artist->merch as $merchArtist)
                <div class="album">
                    <img src="https://storage.googleapis.com/spt-project-bucket/{{$merchArtist->imagen}}" alt="" class="portada_album">
                    <p>{{$merchArtist->nombre}}</p>
                </div>
                @endforeach
            </div>
        </div>
        
        <!-- Menu de opciones !-->
        <div class="superposition_background" id="superposition_background"></div>

        <div class="option_menu" id="option_menu">
            <div class="dragbar_container">
                <div></div>
            </div>
            <div style="display:flex;align-items: center;">
                <img src="img/cover.jpg" alt="" class="option_cover" id="cover_mini">
                <div class="song_text_container">
                    <p class="song_title" id="object_title">Playlist Name</p>
                    <p class="song_artist" id="object_author">por Daniel Ochoa</p>
                </div>
            </div>
            <hr style="background-color: #424242;">
            <div class="option_item">
                <img class="list_button" src="img/agregar.svg" alt="agregar">
                <p>Agregar a favoritos</p>
            </div>
            <div class="option_item">
                <img class="list_button" src="img/agregar.svg" alt="agregar">
                <p>Agregar a favoritos</p>
            </div><div class="option_item">
                <img class="list_button" src="img/agregar.svg" alt="agregar">
                <p>Agregar a favoritos</p>
            </div><div class="option_item">
                <img class="list_button" src="img/agregar.svg" alt="agregar">
                <p>Agregar a favoritos</p>
            </div><div class="option_item">
                <img class="list_button" src="img/agregar.svg" alt="agregar">
                <p>Agregar a favoritos</p>
        </div>
    </main>
    <footer>
        <div class="footerMenu">
            <div class="songReproducer" id="songReproducer">
                <div class="artistPart">
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
    <script type="module" src="{{asset('js/podcast.js')}}"></script>
    <script src="{{ asset('js/reproducirCanciones.js') }}"></script>
    <script src="{{ asset('js/reproducer.js') }}"></script>
</body>
</html>