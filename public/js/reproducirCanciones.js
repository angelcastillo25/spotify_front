function changeColor(container, songName, artistName, coverSong) {
    // Restablecer el color de todos los títulos de canciones
    var songTitles = document.querySelectorAll('.song_title');
    songTitles.forEach(function(title) {
        title.style.color = ''; // Restablecer el color al estado original
    });

    // Obtener el título de la canción dentro del div clicado
    var songTitle = container.querySelector('.song_title');
    
    // Cambiar el color solo del título de la canción dentro del div clicado
    songTitle.style.color = '#12f965'; // Cambia 'red' al color que desees

    localStorage.setItem('nombreCancion', songName);
    localStorage.setItem('nombreArtista', artistName);
    localStorage.setItem('portadaCancion', coverSong);

    let songPlayName = document.querySelector('#songPlayName');
    let songPlayArtist = document.querySelector('#songPlayArtist');
    let songPlayCover = document.querySelector('#songPlayCover');

    songPlayName.innerHTML = songName;
    songPlayArtist.innerHTML = artistName;
    songPlayCover.src = 'https://storage.googleapis.com/spt-project-bucket/' + coverSong;
}