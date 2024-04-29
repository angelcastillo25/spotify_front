<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Name</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lists.css') }}">
    <link rel="stylesheet" href="{{ asset('css/options_menu.css') }}">
</head>
<body>
    <main>
        <div class="list_header">
            <img class="back_button" src="{{asset('img/backArrowMen.svg')}}" alt="boton atras" id="back_btn">
            <div class="cover_container">
                <img src="{{asset('img/cover.jpg')}}" class="cover_img" alt="portada list" id="list_cover">
            </div>
            
            <div class="list_header_panel">
            <p hidden id="list_name" class="list_name">{{$playlist->nombrePlaylist}}}}</p>
                <div class="play_button"><img class="play_icon" src="{{asset('img/play.png')}}" alt="boton pausa"  id="play_btn" data-state="0"></div>
                <div class="description_container">
                    <p>{{$playlist->descripcion}}</p>
                </div>
                <div class="creator_container">
                    <img src="{{asset('img/profil.jpg')}}" alt="usuario" class="profile_image">
                    <p id="author_name">{{$playlist->nombreUsuario}}</p>
                </div>
                <div class="description_container">
                    <p>Se guardo {{$playlist->guardados}} veces - 2h 34m</p>
                </div>
                <div class="buttons_container">
                    <img class="list_button" src="{{asset('img/descargar.svg')}}" data-state="0" alt="" id="download_btn">
                    <img class="list_button" src="{{asset('img/agregar.svg')}}" data-state="0" alt="" id="add_btn">
                    <img class="options_icon" src="{{asset('img/option_points.svg')}}" alt="" id="options_btn">
                </div>
            </div>
        </div>
        <div class="list_container">
            <div class="list_item">
                <div style="display:flex;">
                    <img src="https://storage.cloud.google.com/spt-project-bucket/{{$playlist->portadaPlaylist}}" alt="" class="song_cover">
                    <div class="song_text_container">
                        <p class="song_title">Yonaguni</p>
                        <p class="song_artist">Bad Bunny</p>
                    </div>
                </div>
                <img class="options_icon options_btn" src="{{asset('img/option_points.svg')}}" alt="Opciones">
            </div>
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
    <footer></footer>
    <script type="module" src="js/playlist.js"></script>
</body>
</html>
