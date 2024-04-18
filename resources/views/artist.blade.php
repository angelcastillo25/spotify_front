<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/podcast.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/options_menu.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/album_list.css">
    <link rel="stylesheet" href="css/lists.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    <link rel="stylesheet" href="css/artist.css">
</head>
<body>
    <div class="container-artist">
        <img src="img/twentyonepilots.jpg" alt="cover de podcast" class="artist-cover" id="podcast_cover">
        <h1 class="artist-name">Twenty One Pilots</h1>
        <div class="overlay"></div>
    </div>

    <div class="principal_header">
    <img class="back_button" src="img/backArrowMen.svg" alt="boton atras" id="back_btn">

            
            <div class="podcast_data">
                <p>27 M oyentes mensuales</p>
            </div>
            <div class="podcast_buttons">
                <div class="follow_btn" id="follow_btn" data-state="0">Seguir</div>
                <img class="button_mini" src="img/notificationOff.png" alt="" id="notification_btn" data-state="0">
                <img class="options_icon" src="img/option_points.svg" alt="" id="options_btn">
            </div>
            <div class="podcast_sections">
                <div class="section_button" id="episodes_btn">
                    <p>Musica</p>
                    <div class="green_line"></div>
                </div>
                <div class="section_button" id="about_btn">
                    <p>Eventos</p>
                    <div class="green_line"></div>
                </div>
                <div class="section_button" id="similar_btn">
                    <p>Merch</p>
                    <div class="green_line"></div>
                </div>
            </div>
        </div>
    <main>
        <!-- Seccion de canciones populares !-->
        <div class="episode_list" id="episode_section">
            <div style="padding: 10px 20px; margin-bottom:20px">
                <h1 class="user-name" style="font-size: 20px;">Populares</h1>
            </div>
    
            <div class="list_container">
                <div class="list_item">
                    <div class="number">
                        <p class="song-number">1</p>
                        <img src="img/blurryface.jpg" alt="" class="song_covers">
                        <div class="song_text_container">
                            <p class="song_title">Stressed Out</p>
                            <p class="song_artist">2,258,460,363</p>
                        </div>
                    </div>
                    <img class="options_icon options_btn" src="img/option_points.svg" alt="Opciones">
                </div>
                <div class="list_item">
                    <div class="number">
                        <p class="song-number">2</p>
                        <img src="img/blurryface.jpg" alt="" class="song_covers">
                        <div class="song_text_container">
                            <p class="song_title">Ride</p>
                            <p class="song_artist">1,674,414,885</p>
                        </div>
                    </div>
                    <img class="options_icon options_btn" src="img/option_points.svg" alt="Opciones">
                </div>
                <div class="list_item">
                    <div class="number">
                        <p class="song-number">3</p>
                        <img src="img/trench.jpg" alt="" class="song_covers">
                        <div class="song_text_container">
                            <p class="song_title">Chlorine</p>
                            <p class="song_artist">1,727,529,578</p>
                        </div>
                    </div>
                    <div>
                        <img class="list_button" src="img/agregado.svg">
                        <img class="options_icon options_btn" src="img/option_points.svg" alt="Opciones">
                    </div>
                </div>
                <div class="list_item">
                    <div class="number">
                        <p class="song-number">4</p>
                        <img src="img/clancy.jpg" alt="" class="song_covers">
                        <div class="song_text_container">
                            <p class="song_title">Overcompensate</p>
                            <p class="song_artist">25,041,767</p>
                        </div>
                    </div>
                    <img class="options_icon options_btn" src="img/option_points.svg" alt="Opciones">
                </div>
                <div class="list_item">
                    <div class="number">
                        <p class="song-number">5</p>
                        <img src="img/clancy.jpg" alt="" class="song_covers">
                        <div class="song_text_container">
                            <p class="song_title">Next Semester</p>
                            <p class="song_artist">11,555,404</p>
                        </div>
                    </div>
                    <img class="options_icon options_btn" src="img/option_points.svg" alt="Opciones">
                </div>
            </div>
            <div class="bottom-button">

                <button class="button_header" style="margin-right: 0;">Ver discografia</button>

            </div>
            <!-- Seccion de lanzamientos !-->
            <div style="padding: 10px 20px; margin-bottom:20px">
                <h1 class="user-name" style="font-size: 20px;">Lanzamientos populares</h1>
            </div>
            <div style="padding: 0 20px;">
                <div class="playList">
                    <img src="img/clancy.jpg" alt="" class="song_cover">
                    <div class="song_text_container">
                        <p class="song_title">Next Semester</p>
                        <p class="song_artist">Ultimo lanzamiento • Sencillo</p>
                    </div>
                </div>
                <div class="playList">
                    <img src="img/blurryface.jpg" alt="" class="song_cover">
                    <div class="song_text_container">
                        <p class="song_title">blurryface</p>
                        <p class="song_artist">2015 • Album</p>
                    </div>
                </div>
                <div class="playList">
                    <img src="img/trench.jpg" alt="" class="song_cover">
                    <div class="song_text_container">
                        <p class="song_title">Trench</p>
                        <p class="song_artist">Trench • Album</p>
                    </div>
                </div>

            </div>
            <!-- Seccion de playlist !-->
            <h1 class="tittle-list" style="margin-bottom: 25px;">Con Twenty one Pilots</h1>
            <div class="list-albums">
                <div class="album">
                    <img src="img/thisistop.jpeg" alt="" class="portada_album">
                    <p>This Is Twenty One Pilots</p>
                </div>
                <div class="album">
                    <img src="img/radiotop.jpeg" alt="" class="portada_album">
                    <p>Radio de Twenty One Pilots</p>
                </div>
                <div class="album">
                    <img src="img/album.jpg" alt="" class="portada_album">
                    <p>This Is Twenty One Pilots</p>
                </div>
                <div class="album">
                    <img src="img/album.jpg" alt="" class="portada_album">
                    <p>This Is Twenty One Pilots</p>
                </div>
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