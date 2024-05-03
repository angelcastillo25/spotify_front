<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/biblioteca.css')}}">
    <link rel="stylesheet" href="{{asset('css/search.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Buscar - Spotify</title>
</head>
<body>
    <header>
            <div class="profilHeader">

                <div class="TitleHeader">
                    <div class="img_container">
                        <img src="{{asset('img/profil.jpg')}}" alt="foto de perfil" id="profil">
                    </div>
                    <h1>Buscar</h1>
                </div>
                <div class="thingsHeader">
                    <div class="img_container">
                        <img src="{{asset('img/search.png')}}" alt="foto de perfil" id="profil">
                    </div>
                </div>
                
            </div>
            <a class="search-button" href={{ route('busqueda.buscandovw', ['idUsuario'=>$idUsuario]) }} style="color: #212121;">
            <img src="{{asset('img/searchblack.png')}}" alt="Buscar">
            ¿Que quieres escuchar?
            </a>
        
    </header>
    <main>
           
        <div class="categories-container">
            <div class="category">
                <img src="{{asset('img/musica.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/podcasts.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/eventos.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/parati.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/merch.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/nuevos.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/latina.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/mexicana.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/pop.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/hiphop.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/rankinpodcast.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/educacion.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/documentales.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/comedia.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/rankings.jpeg')}}" class="img-category">
            </div>
            <div class="category">
                <img src="{{asset('img/salsa.jpeg')}}" class="img-category">
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
    <script src="{{asset('js/search.js')}}"></script>
    <script src="{{asset('js/reproducer.js')}}"></script>
</body>

</html>
