<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Iniciar Sesion - Spotify</title>
</head>
<body>
    <header>
        <img src="img/logo_spotify.png" alt="logo principal" id="logo">
    </header>
    <main>
        <div class="login_container">
            <h2>Inicia sesión en Spotify</h2>
            <img src="img/login_listen.png" alt="escuchando musica" id="login_illustration">
            <hr>
            <form action={{route('login.validate')}} method="POST" class="form">
                @csrf
                @method('POST')
                <div class="form_section">
                        <label for="">Correo Electronico</label>
                        <input name="email" type="email" placeholder="Correo Electronico">
                </div>
                <div class="form_section">
                    <label for="">Contrasena</label>
                    <input name="password" type="password" placeholder="Ingrese su contrasena">
                </div>
                <button class="form_button">
                    Iniciar Sesion
                </button>
            </form>
            <div class="noaccount_question_container">
                <p>¿No tienes una cuenta?</p>
                <br>
                <a href={{route('register.index')}}>Registrate aqui</a>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>