let playButton = document.querySelector('#buttonPlay');

document.addEventListener("DOMContentLoaded", function() {
    // Obtener la información del almacenamiento local
    let songName = localStorage.getItem('nombreCancion');
    let artistName = localStorage.getItem('nombreArtista');
    let coverSong = localStorage.getItem('portadaCancion');

    // Seleccionar los elementos del footer
    let songPlayName = document.querySelector('#songPlayName');
    let songPlayArtist = document.querySelector('#songPlayArtist');
    let songPlayCover = document.querySelector('#songPlayCover');

    // Asignar la información a los elementos del footer
    songPlayName.textContent = songName;
    songPlayArtist.textContent = artistName;
    songPlayCover.src = 'https://storage.googleapis.com/spt-project-bucket/' + coverSong;
});

function changeImage() {
    let image = document.getElementById('buttonImage');
    let currentSrc = image.src;

    let image1 = 'http://127.0.0.1:8000/img/playWhite.png';
    let image2 = 'http://127.0.0.1:8000/img/pause.png';
    
    if (currentSrc.endsWith(image1)) {
        image.src = image2;
    } else {
        image.src = image1;
    }
}


// Función para seleccionar un botón y cambiar sus estados
function selectButton(button) {
    // Deseleccionar todos los botones

    let button_home = document.querySelector('#home');
    let button_search = document.querySelector('#search');
    let button_library = document.querySelector('#library');

    button_home.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="40px" height="40px">
        <path d="M 23.951172 4 A 1.50015 1.50015 0 0 0 23.072266 4.3222656 L 8.859375 15.519531 
        C 7.0554772 16.941163 6 19.113506 6 21.410156 L 6 40.5 C 6 41.863594 7.1364058 43 8.5 
        43 L 18.5 43 C 19.863594 43 21 41.863594 21 40.5 L 21 30.5 C 21 30.204955 21.204955 30 
        21.5 30 L 26.5 30 C 26.795045 30 27 30.204955 27 30.5 L 27 40.5 C 27 41.863594 28.136406 
        43 29.5 43 L 39.5 43 C 40.863594 43 42 41.863594 42 40.5 L 42 21.410156 C 42 19.113506 
        40.944523 16.941163 39.140625 15.519531 L 24.927734 4.3222656 A 1.50015 1.50015 0 0 0 
        23.951172 4 z M 24 7.4101562 L 37.285156 17.876953 C 38.369258 18.731322 39 20.030807 
        39 21.410156 L 39 40 L 30 40 L 30 30.5 C 30 28.585045 28.414955 27 26.5 27 L 21.5 27 C 
        19.585045 27 18 28.585045 18 30.5 L 18 40 L 9 40 L 9 21.410156 C 9 20.030807 9.6307412 
        18.731322 10.714844 17.876953 L 24 7.4101562 z"/>
        </svg>
        <p>Inicio</p>
    `;
    button_search.innerHTML = `
        <img src="http://127.0.0.1:8000/img/search.png" alt="" class="img-bar">
        <p>Buscar</p>
    `;

    button_library.innerHTML = `
        <img src="http://127.0.0.1:8000/img/library.png" alt="" class="img-bar">
        <p>Bibloteca</p>
    `;

    // Seleccionar el botón actual
    button.classList.add('selected');

    // Cambiar el contenido del botón según su ID
    const buttonId = button.id;
    switch (buttonId) {
        case 'home':
            // Cambiar el SVG por otro SVG
            button.innerHTML = `
                <svg id="homeViewButton" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    viewBox="0,0,256,256" width="40px" height="40px">
                    <g fill="#ffffff" fill-rule="nonzero" 
                        stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" 
                        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" 
                        font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <g transform="scale(5.33333,5.33333)">
                            <path d="M39.5,43h-9c-1.381,0 -2.5,-1.119 -2.5,
                                -2.5v-9c0,-1.105 -0.895,-2 -2,-2h-4c-1.105,0 -2,0.895 -2,2v9c0,1.381 -1.119,2.5 -2.5,
                                2.5h-9c-1.381,0 -2.5,-1.119 -2.5,-2.5v-19.087c0,-2.299 1.054,-4.471 2.859,-5.893l14.212,
                                -11.199c0.545,-0.428 1.313,-0.428 1.857,0l14.214,11.199c1.805,1.422 2.858,3.593 2.858,
                                5.891v19.089c0,1.381 -1.119,2.5 -2.5,2.5z">
                            </path>
                        </g>
                    </g>
                </svg>
                <p>Inicio</p>
            `;
            break;
        case 'search':
            button.innerHTML = `
                <img src="http://127.0.0.1:8000/img/searchSelected.png" alt="" class="img-bar">
                <p>Buscar</p>
            `;
            break;
        case 'library':
            button.innerHTML = `
                <img src="http://127.0.0.1:8000/img/librarySelected.png" alt="" class="img-bar">
                <p>Bibloteca</p>
            `;
            break;
        default:
            break;
    }
}
