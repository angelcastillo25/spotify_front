<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/podcast.css')}}">
    <link rel="stylesheet" href="{{asset('css/options_menu.css')}}">
</head>
<body>
    <div class="principal_header" style="background-image: linear-gradient(to top, rgba(18, 18, 18, 1), {{$podcast->color}} 100%);">
        <img class="back_button" src="{{asset('img/backArrowMen.svg')}}" alt="boton atras" id="back_btn">
        <div class="podcast_header">
            <img src="https://storage.googleapis.com/spt-project-bucket/{{$podcast->portada}}" alt="cover de podcast" class="podcast_cover" id="podcast_cover">
            <div class="podcast_info">
                <p class="podcast_title" id="podcast_title">{{$podcast->nombrePodcast}}</p>
                <p class="podcast_author" id="podcast_author">{{$podcast->autor}}</p>
            </div>
        </div>
        <div class="podcast_data">
            <span>★ 5.0(2k) •</span>
            @foreach ($podcast->generos as $genero)
            <span>{{$genero->nombreGenero}} •</span>
            @endforeach
        </div>
        <div class="podcast_buttons">
            <div class="follow_btn" id="follow_btn" data-state="{{$podcast->seguido}}">Seguir</div>
            <img class="button_mini" src="{{asset('img/notificationOff.png')}}" alt="" id="notification_btn" data-state="0">
            <img class="options_icon" src="{{asset('img/option_points.svg')}}" alt="" id="options_btn">
        </div>
        <div class="podcast_sections">
            <div class="section_button" id="episodes_btn">
                <p>Episodios</p>
                <div class="green_line"></div>
            </div>
            <div class="section_button" id="about_btn">
                <p>Acerca de</p>
                <div class="green_line"></div>
            </div>
            <div class="section_button" id="similar_btn">
                <p>Más contenido similar</p>
                <div class="green_line"></div>
            </div>
        </div>
    </div>
    <main>
        <!-- Seccion de episodios !-->
        <div class="episode_list" id="episode_section">
            @foreach($podcast->episodios as $episodio)
            <a class="episode_item" href={{ route('episodio.obtener', ['idEpisodio'=>$episodio->id]) }}>
                <div class="title_container">
                    <img src="https://storage.googleapis.com/spt-project-bucket/{{$podcast->portada}}" alt="">
                    <p>{{$episodio->nombre}}</p>
                </div>
                <p class="podcast_description">{{$episodio->descripcion}}</p>
                <p class="date_duration">{{$episodio->fecha_publicacion}} • {{$episodio->duracion}}</p>
                <div class="podcast_buttons">
                    <img class="button_mini" src="{{asset('img/descargar.svg')}}" data-state="0" alt="">
                    <img class="add_btn button_mini" src="{{asset('img/agregar.svg')}}" data-state="0" alt="" >
                    <img class="options_icon" src="{{asset('img/option_points.svg')}}" alt="">
                </div>
                <div class="play_btn_container"><img src="{{asset('img/play.png')}}" alt="" data-state="0" class="play_btn"></div>
                <div class="separator"></div>
            </a>
            @endforeach
        </div>
        <!-- Seccion acerca de !-->
        <div class="about_container" id="about_section">
            <div class="about_btn_container">
                <div class="about_btn"><p>5.0&nbsp;★&nbsp;(2k)</p></div>
                <p class="separator_point">•</p>
                @foreach ($podcast->generos as $genero)
                <div class="about_btn"><p>{{$genero->nombreGenero}}</p></div>
                @endforeach
            </div>
            <p class="about_text">{{$podcast->descripcion}}</p>
        </div>
        <!-- Seccion Mas contenido similar !-->
        <div class="similar_container" id="similar_section">
            @foreach ($podcast->sugerenciasPodcasts as $sugerencia)
                <div class="similar_item">
                    <img src="https://storage.googleapis.com/spt-project-bucket/{{$sugerencia->portada}}" alt="" class="similar_img">
                    <div class="similar_text">
                        <p class="similar_gender">Ciencia • Politica • Educacion</p>
                        <p class="similar_text">{{$sugerencia->nombrePodcast}}</p>
                        <p class="similar_description">{{$sugerencia->descripcion}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Menu de opciones !-->
        <div class="superposition_background" id="superposition_background"></div>

        <div class="option_menu" id="option_menu">
            <div class="dragbar_container">
                <div></div>
            </div>
            <div style="display:flex;align-items: center;">
                <img src="{{asset('img/cover.jpg')}}" alt="" class="option_cover" id="cover_mini">
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
                    <img src="http://127.0.0.1:8000/img/cardellino.jpeg" alt="" class="imgArtistRpr">
                    <div class="titleSong">
                        <p class="songName">Bambu</p>
                        <p class="artistName">cardellino</p>
                    </div>
                </div>
                
                <div class="buttonsReproducer">
                    <img src="http://127.0.0.1:8000/img/agregar.svg" alt="" class="imgReproductor">
                    <button class="buttons-bar" id="buttonPlay" onclick="changeImage()">
                        <img src="http://127.0.0.1:8000/img/playWhite.png" alt="" class="imgReproductor" id="buttonImage">
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
                    <img src="http://127.0.0.1:8000/img/search.png" alt="" class="img-bar">
                    <p>Buscar</p>
                </button>
                <button class="buttons-bar" onclick="selectButton(this)" id="library">
                    <img src="http://127.0.0.1:8000/img/library.png" alt="" class="img-bar">
                    <p>Bibloteca</p>
                </button>
            </div>
        </div>
    </footer>
    <script type="module" src="{{asset('js/podcast.js')}}"></script>
    <script src="{{asset('js/backButton.js')}}"></script>
</body>
</html>
