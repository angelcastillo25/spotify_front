<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/options_menu.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/historial.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Iniciar Sesion - Spotify</title>
</head>
<body>
    <main>
        <div class="historial_header">
            <h4>Escuchado recientemente</h4>
        </div>
        <img class="back_button" src="img/backArrowMen.svg" alt="boton atras" id="back_btn">

        <section>
            <div style="padding: 10px 20px;">
                <h1 class="tittle_day">Hoy</h1>
            </div>
            <div class="list_container">
                <div class="list_item">
                    <div style="display:flex;">
                        <img src="img/cardellino.jpeg" alt="" class="song_cover">
                        <div class="song_text_container" style="margin-left: 5px;">
                            <p class="song_title">Vegano</p>
                            <p class="song_artist">Cardellino</p>
                        </div>
                    </div>
                </div>
                <div class="list_item">
                    <div style="display:flex;">
                        <img src="img/clancy.jpg" alt="" class="song_cover">
                        <div class="song_text_container" style="margin-left: 5px;">
                            <p class="song_title">Next Semester</p>
                            <p class="song_artist">twenty one pilots</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-button">

              <p>Ver las 10 canciones reproducidas</p>

            </div>
        </section>
        <section>
            <div style="padding: 10px 20px;">
                <h1 class="tittle_day">Ayer</h1>
            </div>
            <div class="list_container">
                <div class="list_item">
                    <div style="display:flex;">
                        <img src="img/cardellino.jpeg" alt="" class="song_cover">
                        <div class="song_text_container" style="margin-left: 5px;">
                            <p class="song_title">Bambu</p>
                            <p class="song_artist">Cardellio</p>
                        </div>
                    </div>
                </div>
                <div class="list_item">
                    <div style="display:flex;">
                        <img src="img/badbunny.jpeg" alt="" class="song_cover">
                        <div class="song_text_container" style="margin-left: 5px;">
                            <p class="song_title">Yunigani</p>
                            <p class="song_artist">Bad bunny</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-button">

                <p>Ver las 10 canciones reproducidas</p>

            </div>
        </section>
        

        
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