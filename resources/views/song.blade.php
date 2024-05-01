<!DOCTYPE html>
<html lang="en" data-idusuario="{{$idUsuario}}" data-idcancion={{$idCancion}}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/song.css')}}">
    <link rel="stylesheet" href="{{asset('css/options_menu.css')}}">
    <title>Cancion</title>
</head>
<body style="background-image: linear-gradient(to top,rgba(18,18,18,1), {{$cancion->color}} 100%);">
    <header>
        <div class="song_header">
            <img src="{{asset('img/down.png')}}" alt="salir" id="back_btn" onclick="goBack()">
            <div class="song_from">
                <p>REPRODUCIENDO DESDE PLAYLIST</p>
                <p class="bold">Mix diario 4</p>
            </div>
            <img src="{{asset('img/option_points.svg')}}" alt="opciones" id="options_btn">
        </div>
    </header>
    <main>
        <img class="song_cover" src="https://storage.googleapis.com/spt-project-bucket/{{$cancion->portada}}" alt="cover" id="song_cover">
        <div class="song_info_container">
            <div class="song_info">
                <p class="song_title" id="song_title">{{$cancion->nombre}}</p>
                <p id="author_name">{{$cancion->artista->nombreArtista}}</p>
            </div>
            <img src="{{asset('img/agregar.svg')}}" alt="" id="save_btn" data-state="{{$cancion->seguido}}">
        </div>
        <div class="bar_container">
            <input type="range" min="0" max="{{$cancion->duracion}}" step="0.01" value="0" class="player_bar" id="player_bar">
            <div class="song_time">
                <p id="time_lapsed">0:00</p>
                <p id="time_left">{{substr($cancion->duracion,0,1)}}:{{substr($cancion->duracion,2)}}@if (substr($cancion->duracion,2)<10)0 @endif</p>
            </div>
        </div>
        <div class="player_menu">
            <img src="{{asset('img/shuffle.png')}}" alt="" class="player_icon">
            <img src="{{asset('img/previous.png')}}" alt="" class="player_icon">
            <img src="{{asset('img/playbtn.svg')}}" alt="" class="play_icon" id="play_btn" data-state="0">
            <img src="{{asset('img/next.png')}}" alt="" class="player_icon">
            <img src="{{asset('img/replay.png')}}" alt="" class="player_icon">
        </div>
        <div class="credits_container">
            <p class="credits_title">Créditos</p>
            <div class="credits_item">
                <p>{{$cancion->creditos->artista}}</p>
                <p class="credit_rol">Artista principal</p>
            </div>
            @foreach ($cancion->creditos->escritores as $escritor)
            <div class="credits_item">
                <p>{{$escritor}}</p>
                <p class="credit_rol">Compositor</p>
            </div>
            @endforeach
            @foreach ($cancion->creditos->productores as $productor)
            <div class="credits_item">
                <p>{{$productor}}</p>
                <p class="credit_rol">Productor</p>
            </div>
            @endforeach
        </div>
    </main>
    <!--MENU DE OPCIONES!-->
    <div class="superposition_background" id="superposition_background"></div>
    <div class="option_menu" id="option_menu">
        <div class="dragbar_container">
            <div></div>
        </div>
        <div style="display:flex;">
            <img src="{{asset('img/cover.jpg')}}" alt="" class="mini_cover" id="cover_mini">
            <div class="song_text_container">
                <p class="song_option_title" id="object_title">Playlist Name</p>
                <p class="song_option_artist" id="object_author">por Daniel Ochoa</p>
            </div>
        </div>
        <hr style="background-color: #424242;">
        <div class="option_item">
            <img class="option_icon" src="{{asset('img/agregar.svg')}}" alt="agregar">
            <p>Agregar a favoritos</p>
        </div>
        <div class="option_item">
            <img class="option_icon" src="{{asset('img/agregar.svg')}}" alt="agregar">
            <p>Agregar a favoritos</p>
        </div>
        <div class="option_item">
            <img class="option_icon" src="{{asset('img/agregar.svg')}}" alt="agregar">
            <p>Agregar a favoritos</p>
        </div>
        <div class="option_item">
            <img class="option_icon" src="{{asset('img/agregar.svg')}}" alt="agregar">
            <p>Agregar a favoritos</p>
        </div>
        <div class="option_item">
            <img class="option_icon" src="{{asset('img/agregar.svg')}}" alt="agregar">
            <p>Agregar a favoritos</p>
        </div>
    </div>
    <script type="module" src="{{asset('js/song.js')}}"></script>
    <script src="{{asset('js/backButton.js')}}"></script>
</body>
</html>
