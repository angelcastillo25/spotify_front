<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/song.css">
    <title>Cancion</title>
</head>
<body>
    <header>
        <div class="song_header">
            <img src="img/down.png" alt="salir">
            <div class="song_from">
                <p>REPRODUCIENDO DESDE PLAYLIST</p>
                <p class="bold">Mix diario 4</p>
            </div>
            <img src="img/option_points.svg" alt="opciones">
        </div>
    </header>
    <main>
        <img class="song_cover" src="img/cardellino.jpeg" alt="cover">
        <div class="song_info_container">
            <div class="song_info">
                <p class="song_title">BAMBU</p>
                <p>Cardellino</p>
            </div>
            <img src="img/agregar.svg" alt="" id="save_btn" data-state="0">
        </div>
        <div class="bar_container">
            <input type="range" min="0" max="10" step="0.1" value="0" class="player_bar" id="player_bar">
            <div class="song_time">
                <p>0:00</p>
                <p>2:55</p>
            </div>
        </div>
        <div class="player_menu">
            <img src="img/shuffle.png" alt="" class="player_icon">
            <img src="img/previous.png" alt="" class="player_icon">
            <img src="img/playbtn.svg" alt="" class="play_icon" id="play_btn" data-state="0">
            <img src="img/next.png" alt="" class="player_icon">
            <img src="img/replay.png" alt="" class="player_icon">
        </div>
    </main>
    <script type="module" src="js/song.js"></script>
</body>
</html>