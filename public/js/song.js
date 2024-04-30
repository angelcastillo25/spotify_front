import { changeIcon, showListOptions, hideOptionsMenu, slideOptionsMenu, endOptionsMenu } from "./functions.js";

const playBtn = document.getElementById("play_btn");
const saveBtn = document.getElementById("save_btn");
const playerBar = document.getElementById("player_bar");

var timeSong; //Tiempo de la cancion

//Eventos de los botones 

playBtn.addEventListener("click", ()=>{playSong()});
saveBtn.addEventListener("click", ()=>changeIcon(saveBtn, {1:"agregar.svg", 0:"agregado.svg"}));

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

function increaseTime(){
    let currentValue = parseFloat(playerBar.value);
    let songDuration = parseFloat(playerBar.max);
    let timelapsed = document.getElementById("time_lapsed");

    if (currentValue<songDuration) {
        playerBar.value = (currentValue + 0.01).toFixed(2);
        console.log(Math.floor(playerBar.value%60))
        let min = playerBar.value.substring(0,1);
        let sec = playerBar.value.substring(2);
        timelapsed.textContent = `${min}:${sec.length == 1 ? sec + "0" : sec}`;
    }else{
        clearInterval(timeSong);
        changeIcon(playBtn, {1:"playbtn.svg", 0:"pausebtn.svg"})
    }
    
}

function playSong(){
    let state = parseInt(playBtn.dataset.state);
    if(state){
        clearInterval(timeSong);
        changeIcon(playBtn, {1:"playbtn.svg", 0:"pausebtn.svg"})
    }else{
        timeSong = setInterval(increaseTime, 1000);
        console.log("llegado aqui")
        changeIcon(playBtn, {1:"playbtn.svg", 0:"pausebtn.svg"})
    }
}