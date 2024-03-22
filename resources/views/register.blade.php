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
            <!-- Paso 1 -->
            <div class="step" id="step1">
                <div class="form_section">
                        <label for="">Correo Electronico</label>
                        <input type="email" placeholder="Correo Electronico">
                </div>
                <button class="form_button">
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
                <div class="bars">
                    <div class="step_bar"></div>
                    <div class="step_bar_green"></div>
                </div>
                <div class="back_section">
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
                        <input type="password" placeholder="Contraseña">
                </div>
                <button class="form_button">
                    Siguiente
                </button>
            </div>
            <!-- Paso 3 -->
            <div class="step" id="step3">
                <div class="bars">
                    <div class="step_bar"></div>
                    <div class="step_bar_green"></div>
                </div>
                <div class="back_section">
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
                    <input type="password" placeholder="Contrasena">
                </div>
                <div class="form_section">
                    <label for="">
                        <p class="label_name">Fecha de nacimiento</p>
                        <p class="label_description">Cuentanos que día naciste</p>
                    </label>
                    <input type="date" class="date_input">
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
                        <select name="genero" id="genero_select">
                            <option value="H">Honduras</option>
                            <option value="V">Venezuela</option>
                            <option value="CR">Costa Rica</option>
                        </select>
                    </div>
                </div>
                <button class="form_button">
                    Siguiente
                </button>
            </div>
        </form>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>