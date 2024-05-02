<!DOCTYPE html>
<html lang="en" data-idusuario={{$idUsuario}}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/searching.css')}}">
</head>
<body>
    <div class="search_header">
        <img src="{{asset('img/backArrowMenu.svg')}}" alt="" class="back_icon" id="back_btn" onclick="">
        <input type="text" placeholder="¿Que quieres escuchar?" class="search_input" id="search_input">
    </div>
    <main>
        <div class="search_result" id="search_result">
            <p class="recent_title" id="recent_title">Busquedas recientes</p>
            <div class="recent_list" id="result_list">
                <div class="recent_item">
                    <div class="item">
                        <img src="{{asset('img/badbunny.jpeg')}}" alt="" class="cover_img">
                        <div class="item_texts">
                            <p>Bad Bunny</p>
                            <p>Artista</p>
                        </div>
                    </div>
                    <img src="{{asset('img/delete.svg')}}" alt="" class="delete_icon">
                </div>
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
    <script type="module" src="{{asset('js/searching.js')}}"></script>
    <script src="{{ asset('js/reproducirCanciones.js') }}"></script>
    <script src="{{ asset('js/reproducer.js') }}"></script>
    <script src="{{asset('js/backButton.js')}}"></script>
</body>
</html>
