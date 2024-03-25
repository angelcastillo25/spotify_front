<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Registrate en Spotify</title>
</head>
<body>
    <header>
    <img src="img/logo_spotify.png" alt="logo principal" id="logo">
    </header>
    <main>
        <div id="register_container">
            <h1 class="title">Registrate para empezar a escuchar musica gratis</h1>
        <form action="POST" class="form" id="register_form">
            <div id="bars">
                <div class="step_bar"></div>
                <div id="step_bar_green"></div>
            </div>
            <!-- Paso 1 -->
            <div class="step" id="step1">
                <div class="form_section">
                        <label for="">Correo Electronico</label>
                        <input name="email" type="email" placeholder="Correo Electronico">
                </div>
                <button type="button" class="form_button" id="step1_button">
                    Siguiente
                </button>
                <div class="noaccount_question_container">
                    <p>¿Ya tienes una cuenta?</p>
                    <br>
                    <a href="">Inicia sesion aqui</a>
                </div>
            </div>
            <!-- Paso 2 -->
            <div class="step" id="step2">
                <div class="back_section" id="back_section2">
                    <div class="back_container">
                        <img src="img/backarrow.png" alt="icono de flecha atras" class="icon">
                        <div class="back_container_text">
                            <p>Paso 1 de 3</p>
                            <p class="bold">Crea una contraseña</p>
                        </div>
                    </div>
                </div>
                <div class="form_section">
                        <label for="">Contraseña</label>
                        <input name="password" type="password" placeholder="Contraseña">
                </div>
                <button type="button" class="form_button" id="step2_button">
                    Siguiente
                </button>
            </div>
            <!-- Paso 3 -->
            <div class="step" id="step3">
                <div class="back_section" id="back_section3">
                    <div class="back_container">
                        <img src="img/backarrow.png" alt="icono de flecha atras" class="icon">
                        <div class="back_container_text">
                            <p>Paso 2 de 3</p>
                            <p class="bold">Hablanos de ti</p>
                        </div>
                    </div>
                </div>
                <div class="form_section">
                    <label for="">
                        <p class="label_name">Nombre</p>
                        <p class="label_description">Este nombre aparecerá en tu perfil</p>
                    </label>
                    <input name="username" type="password" placeholder="Nombre de usuario">
                </div>
                <div class="form_section">
                    <label for="">
                        <p class="label_name">Fecha de nacimiento</p>
                        <p class="label_description">Cuentanos que día naciste</p>
                    </label>
                    <input name="date" type="date" class="date_input">
                </div>
                <div class="row_form_section">
                    <div class="form_section">
                        <label for="">
                            <p class="label_name">Genero</p>
                            <p class="label_description">Nada mas por chismear</p>
                        </label>
                        <select name="genero" id="genero_select">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                            <option value="O">Otro</option>
                        </select>
                    </div>
                    <div class="form_section">
                        <label for="">
                            <p class="label_name">Pais</p>
                            <p class="label_description">¿De donde eres?</p>
                        </label>
                        <select name="pais" id="pais_select">
                            <option value="H">Honduras</option>
                            <option value="V">Venezuela</option>
                            <option value="CR">Costa Rica</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="form_button" id="step3_button">
                    Siguiente
                </button>
            </div>
            <!-- Paso 4 -->
            <div class="step" id="step4">
                 <div class="back_section" id="back_section4">
                    <div class="back_container">
                        <img src="img/backarrow.png" alt="icono de flecha atras" class="icon">
                        <div class="back_container_text">
                            <p>Paso 3 de 3</p>
                            <p class="bold">Elige tus artistas favoritos</p>
                        </div>
                    </div>
                </div>
                 <select name="artists" id="artist_select"  hidden multiple>
                    <option value="BadBunny">Bad Bunny</option>
                    <option value="Cardellino">Cardellino</option>
                 </select>
                 <div id="artist_container">
                    <div class="artist_item" data-artist="BadBunny">
                        <img class="artist_img" src="img/cardellino.jpeg" alt="Bad Bunny">
                        <p class="artist_name">Bad Bunny</p>
                        <div class="artist_checked" hidden><img class="check_icon" src="img/check.png" alt=""></div>
                    </div>
                    <div class="artist_item" data-artist="Cardellino">
                        <img class="artist_img" src="img/cardellino.jpeg" alt="Bad Bunny">
                        <p class="artist_name">Cardellino</p>
                        <div class="artist_checked" src="img/check.png" class="check_icon" hidden><img class="check_icon" src="img/check.png" alt=""></div>
                    </div>
                    <button class="form_button" id="step4_button">
                    Registrarse
                    </button>
                 </div>
            </div>
        </form>
        </div>
    </main>
    <footer>
    </footer>
    <script src="js/RegisterSteps.js"></script>
</body>
</html>