<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/searching.css">
</head>
<body>
    <div class="search_header">
        <img src="img/backArrowMenu.svg" alt="" class="back_icon">
        <input type="text" placeholder="¿Que quieres escuchar?" class="search_input" id="search_input">
    </div>
    <main>
        <div class="search_result">
            <p class="recent_title">Busquedas recientes</p>
            <div class="recent_list">
                <div class="recent_item">
                    <div class="item">
                        <img src="img/badbunny.jpeg" alt="" class="cover_img">
                        <div class="item_texts">
                            <p>Bad Bunny</p>
                            <p>Artista</p>
                        </div>
                    </div>
                    <img src="img/delete.svg" alt="" class="delete_icon">
                </div>
            </div>
        </div>
    </main>
    <script src="js/searching.js"></script>
</body>
</html>