<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Name</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/album.css">
    <link rel="stylesheet" href="css/options_menu.css">
    <link rel="stylesheet" href="css/episodio.css">
</head>
<body>
    <main>
        <div class="list_header">
            <img class="back_button" src="img/backArrowMen.svg" alt="boton atras" id="back_btn">
            <div class="cover_container">
                <img src="img/albert.jpg" class="cover_img" alt="portada list" id="list_cover">
            </div>
            <div class="list_header_panel">
                <p id="list_name" class="list_name">Albert Einstein, su historia y su ciencia desconocida | Quantum FM #11 Con Luis Navarro Veguillas</p>
                <div class="play_button"><img class="play_icon" src="img/play.png" alt="boton pausa"  id="play_btn" data-state="0"></div>
                <div class="creator_container">
                    <img src="img/quantumfm.jpeg" alt="usuario" class="profile_image">
                    <p id="author_name">Quantum FM</p>
                </div>
                <div class="description_container">
                    <p>9 nov 23 • 2 h 13 min</p>
                </div>
                <div class="buttons_container">
                    <img class="list_button" src="img/descargar.svg" data-state="0" alt="" id="download_btn">
                    <img class="list_button" src="img/agregar.svg" data-state="0" alt="" id="add_btn">
                    <img class="list_button" src="img/share.png" data-state="0" alt="" id="add_btn">
                    <img class="options_icon" src="img/option_points.svg" data-state="0" alt="" id="options_btn">
                </div>
            </div>
        </div>
        <div class="list_container" data-type="album">
            <div class="description_container" style="color: #868383;">
                <p>El físico teórico alemán Albert Einstein (1879-1955), el científico por excelencia 
                    de todos los tiempos, desarrolló teorías elementales (la relatividad especial y la 
                    general) que transformaron los puntos de vista sobre la naturaleza del espacio-tiempo. 
                    Más de 100 años después, las ondas gravitacionales causadas por la colisión de dos estrellas 
                    de neutrones llegaron a la Tierra y confirmaron sus predicciones.
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
    <script type="module" src="js/album.js"></script>
</body>
</html>