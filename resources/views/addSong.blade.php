<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Song</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/list_song.css">
    <link rel="stylesheet" href="css/addsong.css">
</head>
<body>
    <header>
        <p class="header_title">Agregar a esta Playlist</p>
        <img class="backbtn" src="img/backArrowMenu.svg" alt="Add">
    </header>
    <main>
        <div class="suggested_container">
            <p class="title">Sugeridas</p>
            <p class="description">Recomendadas segun las canciones que agregaste.</p>

            <div class="list_item" data-idSong="">
                <div style="display:flex;">
                    <img src="img/badbunny.jpeg" alt="" class="song_cover">
                    <div class="song_text_container">
                        <p class="song_title">Yonaguni</p>
                        <p class="song_artist">Bad Bunny</p>
                    </div>
                </div>
                <img class="addbtn" src="img/agregar.svg" alt="Add">
            </div>

            <div class="list_item" data-idSong="">
                <div style="display:flex;">
                    <img src="img/badbunny.jpeg" alt="" class="song_cover">
                    <div class="song_text_container">
                        <p class="song_title">Yonaguni</p>
                        <p class="song_artist">Bad Bunny</p>
                    </div>
                </div>
                <img class="addbtn" src="img/agregar.svg" alt="Add">
            </div>
        </div>
    </main>
</body>
</html>