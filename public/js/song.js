import { changeIcon, showListOptions, hideOptionsMenu, slideOptionsMenu, endOptionsMenu } from "./functions.js";

const playBtn = document.getElementById("play_btn");
const saveBtn = document.getElementById("save_btn");

playBtn.addEventListener("click", changeIcon.bind(playBtn, {1:"playbtn.svg", 0:"pausebtn.svg"}));
saveBtn.addEventListener("click", changeIcon.bind(saveBtn, {1:"agregar.svg", 0:"agregado.svg"}));

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

optionsBtn.addEventListener('click', ()=>{showListOptions( getSongInfo(), optionsMenu)});

optionMenu.addEventListener('touchmove', (e)=>{slideOptionsMenu(e,positionMenu,optionMenu)});

optionMenu.addEventListener('touchend', ()=>{endOptionsMenu(positionMenu,optionsMenu)});

superBgrnd.addEventListener('click',()=>{hideOptionsMenu(optionsMenu)}) 

function getSongInfo(){

    let coverPath = document.getElementById("song_cover").src;
    let SongName = document.getElementById("song_title").innerText;
    let authorName = document.getElementById("author_name").innerText;

    return {'cover': coverPath, 'name': SongName, 'author':authorName}
}