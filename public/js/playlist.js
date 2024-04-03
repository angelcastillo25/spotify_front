const backBtn = document.getElementById("back_btn");
//TODO: Hacer accion hacia atras

/**
 * Cosas a corregir
 *  - Colocar fondo negro cuando sale el menu de opciones
 */

const downloadBtn = document.getElementById("download_btn");
const addBtn = document.getElementById("add_btn");
const optionsBtn = document.getElementById("options_btn");
const superBgrnd = document.getElementById("superposition_background");

const playBtn = document.getElementById("play_btn");

const optionMenu = document.getElementById("option_menu"); //Menu de opciones
const positionMenu = { //Parametros de posicion del menu de opciones
    'initial': 340,
    'current': 340,
    'final': 0
}

const listOptionSongs = document.getElementsByClassName("options_btn")
for (const optionSong of listOptionSongs) {
    optionSong.addEventListener('click', showListOptions.bind(optionSong,0))
}

/**
 * LISTENERS
 */

downloadBtn.addEventListener('click', (e)=>{alert("Esta opción esta en desarrollo, pronto estará disponible")});

addBtn.addEventListener('click', changeIcon.bind(addBtn,{1:"agregar.svg", 0:"agregado.svg"}));

playBtn.addEventListener('click', changeIcon.bind(playBtn,{1:"play.png", 0:"pausa.png"}));

optionsBtn.addEventListener('click', ()=>{showListOptions(1)});

optionMenu.addEventListener('touchmove', (e)=>{slideOptionsMenu(e)});
optionMenu.addEventListener('touchend', endOptionsMenu);

superBgrnd.addEventListener('click', showHideOptionsMenu) 

/**
 * FUNCIONES
 */


/**
 * Cambia el icono de los botones
 * @param {*} paths nombre de los archivos de imagen que se cambian 
 */
function changeIcon(paths){
    let btn = this;
    let state = parseInt(btn.dataset.state);
    let source = `img/${paths[state]}`
    btn.src = source;
    btn.dataset.state = state === 0 ? 1 : 0; //Si es cero se cambia a 1 sino a cero
}

/**
 * Despliega el menu de opciones de la list(album,playlist,artista)
 */
function showListOptions(isList){
    let objectName = "";
    let authorName = "";
    let coverPath = "";

    if(isList){ //Es una List(playlist,album ...)?
        coverPath = document.getElementById("list_cover").src;
        objectName = document.getElementById("list_name").innerText;
        authorName = document.getElementById("author_name").innerText;
    }else{
        let optionSong = this;
        let parent = optionSong.parentNode;

        objectName = parent.querySelector("p.song_title").innerText;
        authorName = parent.querySelector("p.song_artist").innerText;
        coverPath = parent.querySelector("img").src;
    }

    let objectTitle = document.getElementById("object_title");
    let objectAuthor = document.getElementById("object_author");
    let coverMini = document.getElementById("cover_mini");

    objectTitle.innerText = objectName;
    objectAuthor.innerText = `por ${authorName}`;
    coverMini.src = coverPath;
    showHideOptionsMenu();
}

/**
 * Muestra o oculta el menu de opciones
 */
function showHideOptionsMenu(){
    let state = parseInt(optionsBtn.dataset.state);

    if(state){
        optionMenu.style.opacity = "0%";
        optionMenu.style.bottom = "0";
        optionMenu.style.top = "534px";
        superBgrnd.style.opacity = "0%"
        superBgrnd.style.top = "100%"; 
        optionsBtn.dataset.state = 0;
    }else{
        optionMenu.style.opacity = "100%";
        optionMenu.style.bottom = "79.08px";
        optionMenu.style.top = "340px";
        superBgrnd.style.opacity = "50%"; 
        superBgrnd.style.top = "0";
        optionsBtn.dataset.state = 1;
    }
}

/**
 * Realiza la animacion de deslizar del menu de opciones
 * @param {} event 
 */
function slideOptionsMenu(event){
    let position = event.changedTouches[0]; //Acceso a la posicion del evento

    positionMenu.current = position.clientY; //Se obtiene coordenada Y y se asigna como posicion actual del menu

    let distance = positionMenu.initial-positionMenu.current; //Se obtiene distancia recorrida

    let nextPosition = positionMenu.initial-distance;

    if(nextPosition>=0){ //No debe sobrepasar de 0 en y o sea el limite superior
            optionMenu.style.top = `${nextPosition}px`;
    }
}

/**
 * determina la posicion del menu de opciones dependiendo la posicion actual
 * @param {} event 
 */
function endOptionsMenu(){

    let initial = positionMenu.initial;
    let current = positionMenu.current;
    let quarter = positionMenu.initial/2;

    let finalPosition = 
        (current<initial+quarter && current>initial-quarter) ? initial:
        current<initial-quarter ? 0 : null;

    if (finalPosition!=null) {
        optionMenu.style.top = `${finalPosition}px`;
    }else{
        showHideOptionsMenu();
        positionMenu.current=340;
    }
}
