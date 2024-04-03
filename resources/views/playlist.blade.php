<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Name</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/playlist.css">
</head>
<body>
    <main>
        <div class="list_header">
            <img class="back_button" src="img/backArrowMen.svg" alt="boton atras" id="back_btn">
            <div class="cover_container">
                <img src="img/cover.jpg" class="cover_img" alt="portada list" id="list_cover">
            </div>
            <p hidden id="list_name">Exitos Latinos</p>
            <div class="list_header_panel">
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
                    <img class="options_icon" src="img/option_points.svg" data-state="0" alt="" id="options_btn">
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
    <footer></footer>
    <script src="js/playlist.js"></script>
</body>
</html>