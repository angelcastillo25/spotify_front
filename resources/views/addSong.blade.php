<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Song</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/list_song.css')}}">
    <link rel="stylesheet" href="{{asset('css/addsong.css')}}">
</head>
<body>
    <header>
        <p class="header_title">Agregar a esta Playlist</p>
        <img class="backbtn" src="{{asset('img/backArrowMenu.svg')}}" alt="Add" id="back_btn">
    </header>
    <main>
        <div class="suggested_container">
            <p class="title">Sugeridas</p>
            <p class="description">Recomendadas según las canciones que agregaste.</p>
            <div class="song_list">
                @foreach ($canciones as $cancion)
                <div class="list_item" data-idSong="">
                    <div style="display:flex;">
                        <img src="https://storage.googleapis.com/spt-project-bucket/{{$cancion->portada}}" alt="" class="song_cover">
                        <div class="song_text_container">
                            <p class="song_title">{{$cancion->nombreCancion}}</p>
                            <p class="song_artist">{{$cancion->artistaCancion}}</p>
                        </div>
                    </div>
                    <img class="addbtn" src="{{asset('img/agregar.svg')}}" alt="Add">
                </div>
            @endforeach
            </div>
        </div>
    </main>
    <script src="{{asset('js/backButton.js')}}"></script>
</body>
</html>
