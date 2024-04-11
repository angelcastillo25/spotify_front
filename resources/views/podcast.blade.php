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
    <header></header>
    <main>
        <div class="podcast_header">
            <img src="img/quantumfm.jpeg" alt="cover de podcast" class="podcast_cover">
            <div class="podcast_info">
                <p class="podcast_title">Quantum FM</p>
                <p class="podcast_author">Quantum Fracture</p>
            </div>
        </div>
        <div class="podcast_data">
            <p>★ 5.0(2k) • Historia • Entretenimiento • Ciencia</p>
        </div>
        <div class="podcast_buttons">
            <a class="follow_btn" href="#">Siguiendo</a>
            <img class="button_mini" src="img/notificationOff.png" alt="" id="notification_btn" data-state="0">
            <img class="options_icon" src="img/option_points.svg" alt="" id="options_btn">
        </div>
        <div class="podcast_sections">
            <div class="section_button">
                <p>Episodios</p>
                <div class="green_line" style="background-color: #1ed760;"></div>
            </div>
            <div class="section_button">
                <p>Acerca de</p>
                <div class="green_line"></div>
            </div>
            <div class="section_button">
                <p>Más contenido similar</p>
                <div class="green_line"></div>
            </div>
        </div>
        <!-- Seccion de episodios !-->
        <div class="episode_list">
            <div class="episode_item">
                <div class="title_container">
                    <img src="img/cardellino.jpeg" alt="">
                    <p>Albert Einstein, su Historia y su Ciencia Desconocida #11</p>
                </div>
                <p class="podcast_description">Albert Einstein fue un físico alemán de origen judío, nacionalizado después suizo, austriaco y estadounidense. Se le considera el científico más importante, conocido y popular del siglo XX.​​</p>
                <p class="date_duration">9 nov 23 • 2h 13 min</p>
                <div class="podcast_buttons">
                    <img class="button_mini" src="img/descargar.svg" data-state="0" alt="" id="download_btn">
                    <img class="button_mini" src="img/agregar.svg" data-state="0" alt="" id="add_btn">
                    <img class="options_icon" src="img/option_points.svg" alt="" id="options_btn">
                </div>
                <div class="separator"></div>
            </div>
        </div>
    </main>
    <footer></footer>
    <script type="module" src="js/podcast.js"></script>
</body>
</html>