<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/options_menu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Iniciar Sesion - Spotify</title>
</head>
<body>
    <main>
        <div class="list_header">
            <img class="back_button" src="img/backArrowMen.svg" alt="boton atras" id="back_btn">
            <div class="cover_container">
                <img src="img/profil.jpg" class="cover_img" alt="portada list" id="list_cover">
            </div>
            
            <div class="list_header_panel">
            <p hidden id="list_name" class="list_name">Exitos Latinos</p>
                <div class="play_button"><img class="play_icon" src="img/play.png" alt="boton pausa"  id="play_btn" data-state="0"></div>
                <div class="description_container">
                    <p>Los exitos de *Artista*, en un solo lugar. Dale play ahora!</p>
                </div>
                <div class="creator_container">
                    <img src="img/profil.jpg" alt="usuario" class="profile_image">
                    <p id="author_name">Daniel Ochoa</p>
                </div>
                <div class="description_container">
                    <p>Se guardo 2,000 veces - 2h 34m</p>
                </div>
                <div class="buttons_container">
                    <img class="list_button" src="img/descargar.svg" data-state="0" alt="" id="download_btn">
                    <img class="list_button" src="img/agregar.svg" data-state="0" alt="" id="add_btn">
                    <img class="options_icon" src="img/option_points.svg" alt="" id="options_btn">
                </div>
            </div>
        </div>
        <div class="list_container">
        <div class="list_item">
                <div style="display:flex;">
                    <img src="img/cardellino.jpeg" alt="" class="song_cover">
                    <div class="song_text_container">
                        <p class="song_title">Bambu</p>
                        <p class="song_artist">Cardellino</p>
                    </div>
                </div>
                <img class="options_icon options_btn" src="img/option_points.svg" alt="Opciones">
            </div>
            <div class="list_item">
                <div style="display:flex;">
                    <img src="img/badbunny.jpeg" alt="" class="song_cover">
                    <div class="song_text_container">
                        <p class="song_title">Yonaguni</p>
                        <p class="song_artist">Bad Bunny</p>
                    </div>
                </div>
                <img class="options_icon options_btn" src="img/option_points.svg" alt="Opciones">
            </div>
        </div>
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
            <div class="songReproducer">
                <div class="artistPart">
                    <img src="img/cardellino.jpeg" alt="" class="imgArtistRpr">
                    <div class="titleSong">
                        <p class="songName">Bambu</p>
                        <p class="artistName">cardellino</p>
                    </div>
                </div>
                
                <div class="buttonsReproducer">
                    <img src="img/agregar.svg" alt="" class="imgReproductor">
                    <button class="buttons-bar" id="buttonPlay" onclick="changeImage()">
                        <img src="img/playWhite.png" alt="" class="imgReproductor" id="buttonImage">
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
                    <img src="img/search.png" alt="" class="img-bar">
                    <p>Buscar</p>
                </button>
                <button class="buttons-bar" onclick="selectButton(this)" id="library">
                    <img src="img/library.png" alt="" class="img-bar">
                    <p>Bibloteca</p>
                </button>
            </div>

        </div>
        

    </footer>
    <script src="js/reproducer.js"></script>
</body>


</html>