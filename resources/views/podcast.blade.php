<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/podcast.css">
    <link rel="stylesheet" href="css/options_menu.css">
</head>
<body>
    <div class="principal_header">
    <img class="back_button" src="img/backArrowMen.svg" alt="boton atras" id="back_btn">
            <div class="podcast_header">
                <img src="img/quantumfm.jpeg" alt="cover de podcast" class="podcast_cover" id="podcast_cover">
                <div class="podcast_info">
                    <p class="podcast_title" id="podcast_title">Quantum FM</p>
                    <p class="podcast_author" id="podcast_author">Quantum Fracture</p>
                </div>
            </div>
            <div class="podcast_data">
                <p>★ 5.0(2k) • Historia • Entretenimiento • Ciencia</p>
            </div>
            <div class="podcast_buttons">
                <div class="follow_btn" id="follow_btn" data-state="0">Seguir</div>
                <img class="button_mini" src="img/notificationOff.png" alt="" id="notification_btn" data-state="0">
                <img class="options_icon" src="img/option_points.svg" alt="" id="options_btn">
            </div>
            <div class="podcast_sections">
                <div class="section_button" id="episodes_btn">
                    <p>Episodios</p>
                    <div class="green_line"></div>
                </div>
                <div class="section_button" id="about_btn">
                    <p>Acerca de</p>
                    <div class="green_line"></div>
                </div>
                <div class="section_button" id="similar_btn">
                    <p>Más contenido similar</p>
                    <div class="green_line"></div>
                </div>
            </div>
        </div>
    <main>
        <!-- Seccion de episodios !-->
        <div class="episode_list" id="episode_section">
            <div class="episode_item">
                <div class="title_container">
                    <img src="img/quantumfm.jpeg" alt="">
                    <p>Albert Einstein, su Historia y su Ciencia Desconocida #11</p>
                </div>
                <p class="podcast_description">Albert Einstein fue un físico alemán de origen judío, nacionalizado después suizo, austriaco y estadounidense. Se le considera el científico más importante, conocido y popular del siglo XX.​​</p>
                <p class="date_duration">9 nov 23 • 2h 13 min</p>
                <div class="podcast_buttons">
                    <img class="button_mini" src="img/descargar.svg" data-state="0" alt="">
                    <img class="add_btn button_mini" src="img/agregar.svg" data-state="0" alt="" >
                    <img class="options_icon" src="img/option_points.svg" alt="">
                </div>
                <div class="play_btn_container"><img src="img/play.png" alt="" data-state="0" class="play_btn"></div>
                <div class="separator"></div>
            </div>
            <div class="episode_item">
                <div class="title_container">
                    <img src="img/quantumfm.jpeg" alt="">
                    <p>Nicola Tesla y su vida, secretos y otros inventos importantes #10</p>
                </div>
                <p class="podcast_description">Albert Einstein fue un físico alemán de origen judío, nacionalizado después suizo, austriaco y estadounidense. Se le considera el científico más importante, conocido y popular del siglo XX.​​</p>
                <p class="date_duration">9 nov 23 • 2h 13 min</p>
                <div class="podcast_buttons">
                    <img class="button_mini" src="img/descargar.svg" data-state="0" alt="">
                    <img class="add_btn button_mini" src="img/agregar.svg" data-state="0" alt="">
                    <img class="options_icon" src="img/option_points.svg" alt="" >
                </div>
                <div class="play_btn_container"><img src="img/play.png" alt="" data-state="0" class="play_btn"></div>
                <div class="separator"></div>
            </div>
        </div>
        <!-- Seccion acerca de !-->
        <div class="about_container" id="about_section">
            <div class="about_btn_container">
                <div class="about_btn"><p>5.0&nbsp;★&nbsp;(2k)</p></div>
                <p class="separator_point">•</p>
                <div class="about_btn"><p>Historia</p></div>
                <div class="about_btn"><p>Entretenimiento</p></div>
                <div class="about_btn"><p>Ciencia</p></div>
            </div>
            <p class="about_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat enim laudantium consectetur omnis consequuntur non atque tempora nulla dolor possimus. Doloribus necessitatibus quos rem quae architecto dicta sunt deserunt? Suscipit.</p>
        </div>
        <!-- Seccion Mas contenido similar !-->
        <div class="similar_container" id="similar_section">
            <div class="similar_item">
                <img src="img/quantumfm.jpeg" alt="" class="similar_img">
                <div class="similar_text">
                    <p class="similar_gender">Ciencia • Politica • Educacion</p>
                    <p class="similar_text">Coffe Break: Senal y Ruido</p>
                    <p class="similar_description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti debitis in rem, ipsum, eaque fugit at vitae molestias quisquam a adipisci ea praesentium quis eos nulla minima.</p>
                </div>
            </div>
        </div>
        
        <!-- Menu de opciones !-->
        <div class="superposition_background" id="superposition_background"></div>

        <div class="option_menu" id="option_menu">
            <div class="dragbar_container">
                <div></div>
            </div>
            <div style="display:flex;align-items: center;">
                <img src="img/cover.jpg" alt="" class="option_cover" id="cover_mini">
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
    <script type="module" src="js/podcast.js"></script>
</body>
</html>