<!DOCTYPE html>
<html lang="en" data-idusuario="{{$idUsuario}}" data-idalbum={{$idAlbum}}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Name</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/lists.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/album.css')}}">
    <link rel="stylesheet" href="{{asset('css/options_menu.css')}}">
</head>
<body>
    <main>
        <div class="list_header" style="background-image: linear-gradient(to top, rgba(18, 18, 18, 1), {{$album->color}} 100%);">
            <img class="back_button" src="{{ asset('img/backArrowMen.svg') }}" alt="boton atras" id="back_btn">
            <div class="cover_container">
                <img src="https://storage.googleapis.com/spt-project-bucket/{{$album->portadaAlbum}}" class="cover_img" alt="portada list" id="list_cover">
            </div>
            <div class="list_header_panel">
                <p id="list_name" class="list_name">{{$album->nombreAlbum}}</p>
                <div class="play_button"><img class="play_icon" src="{{asset('img/play.png')}}" alt="boton pausa"  id="play_btn" data-state="0"></div>
                <a class="creator_container" href={{route('get.artist',['idUsuario'=>$idUsuario,'idArtist'=>$album->idArtista])}}>
                    <img src="https://storage.googleapis.com/spt-project-bucket/{{$album->fotoArtista}}" alt="usuario" class="profile_image">
                    <p id="author_name">{{$album->nombreArtista}}</p>
                </a>
                <div class="description_container">
                    <p>{{$album->tipoLanzamiento." • ".substr($album->fechaLanzamiento,-4)}}</p>
                </div>
                <div class="buttons_container">
                    <img class="list_button" src="{{asset('img/descargar.svg')}}" data-state="0" alt="" id="download_btn">
                    <img class="list_button" src="{{asset('img/agregar.svg')}}" data-state="{{$album->follow}}" alt="" id="add_btn">
                    <img class="options_icon" src="{{asset('img/option_points.svg')}}" data-state="0" alt="" id="options_btn">
                </div>
            </div>
        </div>
        <div class="list_container" data-type="album">
            @foreach ($album->canciones as $cancion)
            <div class="list_item" onclick="changeColor(this, '{{$cancion->id}}', '{{$cancion->nombre}}', '{{$album->nombreArtista}}', '{{$album->portadaAlbum}}', '{{$album->color}}')">
                <div style="display:flex;">
                    <div class="song_text_container">
                        <p class="song_title">{{$cancion->nombre}}</p>
                        <p class="song_artist">{{$album->nombreArtista}}</p>
                    </div>
                </div>
                <img class="options_icon options_btn" src="{{asset('img/option_points.svg')}}" alt="Opciones">
            </div>
            @endforeach
        </div>
        <div class="info_album">
            <p>{{$album->fechaLanzamiento}}</p>
            <p>{{$album->cantidadCanciones." canciones • 23 min 41s"}}</p>
        </div>

        <div class="artist_seal" href={{route('get.artist',['idUsuario'=>$idUsuario,'idArtist'=>$album->idArtista])}}>
            <img src="https://storage.googleapis.com/spt-project-bucket/{{$album->fotoArtista}}" alt="portada list">
            <p>{{$album->nombreArtista}}</p>
        </div>
        
        <!-- Menu de opciones !-->
        <div class="superposition_background" id="superposition_background"></div>

        <div class="option_menu" id="option_menu">
            <div class="dragbar_container">
                <div></div>
            </div>
            <div style="display:flex;">
                <img src="img/cover.jpg" alt="" class="song_cover" id="cover_mini">
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
    <script type="module" src="{{asset('js/album.js')}}"></script>
    <script src="{{ asset('js/reproducirCanciones.js') }}"></script>
    <script src="{{asset('js/reproducer.js')}}"></script>
    <script src="{{asset('js/backButton.js')}}"></script>
</body>
</html>
