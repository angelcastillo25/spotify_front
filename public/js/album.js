import { changeIcon, showListOptions, hideOptionsMenu, slideOptionsMenu, endOptionsMenu} from "./functions.js";

const backBtn = document.getElementById("back_btn");
//TODO: Hacer accion hacia atras

const downloadBtn = document.getElementById("download_btn");
const addBtn = document.getElementById("add_btn");

const playBtn = document.getElementById("play_btn");

const optionsBtn = document.getElementById("options_btn");

const superBgrnd = document.getElementById("superposition_background"); //Background cuando se desvanece el menu
const optionMenu = document.getElementById("option_menu"); // div de Menu de opciones

//Objeto que representa los elementos que componen el menu de opciones
const optionsMenu = {
    optionMenu,
    superBgrnd
}

//Parametros de posicion del menu de opciones
const positionMenu = { 
    'initial': 340,
    'current': 340,
    'final': 0
}

const listOptionSongs = document.getElementsByClassName("options_btn")

/**
 * LISTENERS
 */

downloadBtn.addEventListener('click', (e)=>{alert("Esta opción esta en desarrollo, pronto estará disponible")});

addBtn.addEventListener('click', changeIcon.bind(addBtn,{1:"agregar.svg", 0:"agregado.svg"}));

playBtn.addEventListener('click', changeIcon.bind(playBtn,{1:"play.png", 0:"pausa.png"}));

optionsBtn.addEventListener('click', ()=>{showListOptions( getAlbumInfo(), optionsMenu)});

optionMenu.addEventListener('touchmove', (e)=>{slideOptionsMenu(e,positionMenu,optionMenu)});

optionMenu.addEventListener('touchend', (e)=>{endOptionsMenu(positionMenu,optionsMenu)});

superBgrnd.addEventListener('click',()=>{hideOptionsMenu(optionsMenu)}) 

for (const optionSong of listOptionSongs) {
    optionSong.addEventListener('click', ()=>{showListOptions(getSongInfo(optionSong),optionsMenu)})}

/**
 * FUNCIONES
 */

/**
 * Obtiene los datos necesarios para mostrar en opciones de una playlist
 * @param {*} ids 
 * @returns 
 */
function getAlbumInfo(){
    let coverPath = document.getElementById("list_cover").src;
    let playlistName = document.getElementById("list_name").innerText;
    let authorName = document.getElementById("list_name").innerText;
    return {'cover': coverPath, 'name': playlistName, 'author':authorName}
}

/**
 * Obtiene los datos necesarios para mostrar en opciones de una cancion de playlist
 * @param {*} ids 
 * @returns 
 */
function getSongInfo(song){
    let optionSong = song;
    
    let parent = optionSong.parentNode;
    
    let coverPath = document.getElementById("list_cover").src;
    let SongName = parent.querySelector("p.song_title").innerText;
    let authorName = parent.querySelector("p.song_artist").innerText;
    
    return {'cover': coverPath, 'name': SongName, 'author':authorName}
}
