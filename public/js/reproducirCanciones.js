function changeColor(container, songid, songName, artistName, coverSong, colorSong) {
    // Restablecer el color de todos los títulos de canciones
    var songTitles = document.querySelectorAll('.song_title');
    songTitles.forEach(function(title) {
        title.style.color = ''; // Restablecer el color al estado original
    });

    // Obtener el título de la canción dentro del div clicado
    var songTitle = container.querySelector('.song_title');
    
    
    songTitle.style.color = '#12f965';

    localStorage.setItem('idCancion', songid);
    localStorage.setItem('nombreCancion', songName);
    localStorage.setItem('nombreArtista', artistName);
    localStorage.setItem('portadaCancion', coverSong);
    localStorage.setItem('colorCancion', coverSong);

    let songPlayName = document.querySelector('#songPlayName');
    let songPlayArtist = document.querySelector('#songPlayArtist');
    let songPlayCover = document.querySelector('#songPlayCover');
    let songReproducer = document.querySelector('#songReproducer');

    songPlayName.innerHTML = songName;
    songPlayArtist.innerHTML = artistName;
    songPlayCover.src = 'https://storage.googleapis.com/spt-project-bucket/' + coverSong;
    songReproducer.style.backgroundColor = colorSong;
}