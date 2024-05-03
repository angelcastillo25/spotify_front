const idUsuario = document.querySelector("html").dataset.idusuario;

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
    localStorage.setItem('colorCancion', colorSong);

    let songPlayName = document.querySelector('#songPlayName');
    let songPlayArtist = document.querySelector('#songPlayArtist');
    let songPlayCover = document.querySelector('#songPlayCover');
    let songReproducer = document.querySelector('#songReproducer');

    let artistPart = document.querySelector('.artistPart');

    artistPart.dataset.idmedia = songid;
    songPlayName.innerHTML = songName;
    songPlayArtist.innerHTML = artistName;
    songPlayCover.src = 'https://storage.googleapis.com/spt-project-bucket/' + coverSong;
    songReproducer.style.backgroundColor = colorSong;

    fetch(`/cancion/play/${idUsuario}/${songid}`)
    .then(data => console.log(data)) // Manejar la respuesta
    .catch(error => console.error('Error en la petición: ', error));

}

function changeEpisodeColor(element, songid, songName, artistName, coverSong, colorSong) {
    // Restablecer el color de todos los títulos de canciones
    var episodeTitle = document.querySelectorAll('.episode_title');
    
    episodeTitle.forEach(function(title) {
        title.style.color = ''; // Restablecer el color al estado original
    });

    // Obtener el título de la canción dentro del div clicado
    var episodeTitle = element.parentNode.parentNode.querySelector('.episode_title');
    
    episodeTitle.style.color = '#12f965';

    localStorage.setItem('idCancion', songid);
    localStorage.setItem('nombreCancion', songName);
    localStorage.setItem('nombreArtista', artistName);
    localStorage.setItem('portadaCancion', coverSong);
    localStorage.setItem('colorCancion', colorSong);

    let songPlayName = document.querySelector('#songPlayName');
    let songPlayArtist = document.querySelector('#songPlayArtist');
    let songPlayCover = document.querySelector('#songPlayCover');
    let songReproducer = document.querySelector('#songReproducer');

    songPlayName.innerHTML = songName;
    songPlayArtist.innerHTML = artistName;
    songPlayCover.src = 'https://storage.googleapis.com/spt-project-bucket/' + coverSong;
    songReproducer.style.backgroundColor = colorSong;

    fetch(`/cancion/play/${idUsuario}/${songid}`)
    .then(data => console.log(data)) // Manejar la respuesta
    .catch(error => console.error('Error en la petición: ', error));

}

function goToSong(idUsuario){
    let artistPart = document.querySelector('.artistPart');
    let idMedia = artistPart.dataset.idmedia;

    window.location.href= `/cancion/${idMedia}/${idUsuario}`;
}