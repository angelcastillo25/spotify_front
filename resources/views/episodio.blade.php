<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Name</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/lists.css')}}">
    <link rel="stylesheet" href="{{asset('css/album.css')}}">
    <link rel="stylesheet" href="{{asset('css/options_menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/episodio.css')}}">
</head>
<body>
    <main>
        <div class="list_header">
            <img class="back_button" src="{{asset('img/backArrowMen.svg')}}" alt="boton atras" id="back_btn">
            <div class="cover_container">
                <img src="https://storage.cloud.google.com/spt-project-bucket/{{$episodio->portada}}" class="cover_img" alt="portada list" id="list_cover">
            </div>
            <div class="list_header_panel">
                <p id="list_name" class="list_name">{{$episodio->nombre}}</p>
                <div class="play_button"><img class="play_icon" src="{{asset('img/play.png')}}" alt="boton pausa"  id="play_btn" data-state="0"></div>
                <div class="creator_container">
                    <img src="https://storage.cloud.google.com/spt-project-bucket/{{$episodio->portada}}" alt="usuario" class="profile_image">
                    <p id="author_name">{{$episodio->nombrePodcast}}</p>
                </div>
                <div class="description_container">
                    <p>{{$episodio->fecha_publicacion}} • {{$episodio->duracion}}</p>
                </div>
                <div class="buttons_container">
                    <img class="list_button" src="{{asset('img/descargar.svg')}}" data-state="0" alt="" id="download_btn">
                    <img class="list_button" src="{{asset('img/agregar.svg')}}" data-state="0" alt="" id="add_btn">
                    <img class="list_button" src="{{asset('img/share.png')}}" data-state="0" alt="" id="add_btn">
                    <img class="options_icon" src="{{asset('img/option_points.svg')}}" data-state="0" alt="" id="options_btn">
                </div>
            </div>
        </div>
        <div class="list_container" data-type="album">
            <div class="description_container" style="color: #868383;">
                <p>
                    {{$episodio->descripcion}}
                </p>
            </div>
        </div>
        <div class=list_container>
        <p id="list_name" class="list_name">Preguntas y respuestas</p>
        <div class="target">
            <p>¿Que te parecio este episodio?</p>
            <input type="text" placeholder="Escriba una respuesta..." class="input">
        </div>
        </div>
    </main>
    <footer></footer>
    <script type="module" src="{{asset('js/album.js')}}"></script>
</body>
</html>
