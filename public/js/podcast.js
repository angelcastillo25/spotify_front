import { changeIcon, showListOptions, hideOptionsMenu, slideOptionsMenu, endOptionsMenu} from "./functions.js";

/**Comportamientos de botones del podcast */

const notificationBtn = document.getElementById("notification_btn");

notificationBtn.addEventListener('click', changeIcon.bind(notificationBtn,{1:"notificationOff.png", 0:"notificationOn.png"}))

const followBtn = document.getElementById("follow_btn");

followBtn.addEventListener('click', changeFollow.bind(followBtn))


/**Comportamientos de botones de los episodios */

const episodesAddBtn = document.getElementsByClassName("add_btn");

for (const addBtn of episodesAddBtn) {
    addBtn.addEventListener('click', changeIcon.bind(addBtn,{1:"agregar.svg", 0:"agregado.svg"}));
}

const episodesPlayBtn = document.getElementsByClassName("play_btn");

for (const playBtn of episodesPlayBtn) {
    playBtn.addEventListener('click', changeIcon.bind(playBtn,{1:"play.png", 0:"pausa.png"}));
}

/*Se inicializan los elementos del menu desplazable*/

//Episodios
const episodesBtn = document.getElementById("episodes_btn");
const episodeSection = document.getElementById("episode_section");
episodesBtn.addEventListener('click',()=>changeSection(1));

//Acerca de
const aboutBtn = document.getElementById("about_btn");
const aboutSection = document.getElementById("about_section");
aboutBtn.addEventListener('click',()=>changeSection(2));

//Contenido similar
const similarBtn = document.getElementById("similar_btn");
const similarSection = document.getElementById("similar_section");
similarBtn.addEventListener('click',()=>changeSection(3));


/*Se inicializan los elementos del menu desplegable*/

const optionsBtn = document.getElementById("options_btn"); //Boton de opciones del podcast

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

/*LISTENERS DE MENU DE OPCIONES*/

optionsBtn.addEventListener('click', ()=>{showListOptions( getPodcastInfo(), optionsMenu)});

optionMenu.addEventListener('touchmove', (e)=>{slideOptionsMenu(e,positionMenu,optionMenu)});

optionMenu.addEventListener('touchend', (e)=>{endOptionsMenu(positionMenu,optionsMenu)});

superBgrnd.addEventListener('click',()=>{hideOptionsMenu(optionsMenu)}) 

/* Agregamos evento a cada uno de los elementos */
const listOptionEpisodes = document.getElementsByClassName("options_icon")

for (const optionEpisode of listOptionEpisodes) {
    optionEpisode.addEventListener('click', ()=>{showListOptions(getEpisodeInfo(optionEpisode),optionsMenu)})
}

initItems(); //Se inicializan los elementos por defecto


/**
 * Obtiene los datos necesarios para mostrar en opciones de un podcast
 * @param {*} ids 
 * @returns 
 */
function getPodcastInfo(){
    let coverPath = document.getElementById("podcast_cover").src;
    let playlistName = document.getElementById("podcast_title").innerText;
    let authorName = document.getElementById("podcast_author").innerText;
    return {'cover': coverPath, 'name': playlistName, 'author':authorName}
}


/**
 * Obtiene los datos necesarios para mostrar en opciones de un episodio
 * @param {*} ids 
 * @returns 
 */
function getEpisodeInfo(episodeBtn){
    let optionSong = episodeBtn;
    
    let parent = optionSong.parentNode.parentNode;

    let titleContainer = parent.querySelector("div.title_container");
    
    let coverPath = titleContainer.querySelector("img").src;
    let episodeName = parent.querySelector("p").innerText;
    let authorName = document.getElementById("podcast_author").innerText;
    
    return {'cover': coverPath, 'name': episodeName, 'author':authorName}
}

/**
 * Funcion que cambia de seguir a seguido
 */
function changeFollow(){
    let btn = this;
    let state = parseInt(btn.dataset.state);
    if(state){
        btn.innerText = "Seguir"
        btn.removeAttribute("style");
    }else{
        btn.innerText = "Siguiendo"
        btn.style.borderColor= "#1ed760";
        btn.style.color= "#1ed760";
    }
    btn.dataset.state = state === 0 ? 1 : 0; //Si es cero se cambia a 1 sino a cero
}

/**
 * Funcion que inicializa los elementos al cargar la pagina
 */
function initItems(){
    episodesBtn.style.fontWeight = "500"
    episodesBtn.querySelector("p").style.color="white";
    episodesBtn.querySelector("div.green_line").style = "width:100%";

    aboutSection.style = "position:fixed; right:-390px; top:360px; opacity:0"
    similarSection.style = "position:fixed; right:-390px; top:360px; opacity:0"
}

function changeSection(currentElement){

    let hiddenStyles = "position:fixed; right:-390px; top:360px; opacity:0";

    let paragraphs = {
        episodeParagraph: episodesBtn.querySelector("p"),
        aboutParagraph: aboutBtn.querySelector("p"),
        similarParagraph: similarBtn.querySelector("p")
    }

    let greenLines = {
        episodegl: episodesBtn.querySelector("div.green_line"),
        aboutgl: aboutBtn.querySelector("div.green_line"),
        similargl: similarBtn.querySelector("div.green_line")
    }

    switch (currentElement) {
        case 1:
            //Se cambia la seccion
            episodeSection.removeAttribute("style");
            aboutSection.style = hiddenStyles;
            similarSection.style = hiddenStyles;
            
            //Se cambian los anchos de la barra verde
            greenLines.episodegl.style = "width:100%"
            greenLines.aboutgl.style = "margin-right:100%"
            greenLines.similargl.style = "margin-right:100%"

            //Se cambian los estilos de la letra
            paragraphs.episodeParagraph.style ="font-weight: 500; color: white;";
            paragraphs.aboutParagraph.removeAttribute("style");
            paragraphs.similarParagraph.removeAttribute("style");
        break;
        case 2:
            aboutSection.removeAttribute("style");
            episodeSection.style = hiddenStyles;
            similarSection.style = hiddenStyles;

            greenLines.episodegl.style = "margin-left:100%"
            greenLines.aboutgl.style = "width:100%"
            greenLines.similargl.style = "margin-right:100%"

            paragraphs.episodeParagraph.removeAttribute("style");
            paragraphs.aboutParagraph.style ="font-weight: 500; color: white;";
            paragraphs.similarParagraph.removeAttribute("style");
        break;
        case 3:
            similarSection.removeAttribute("style");
            aboutSection.style = hiddenStyles;
            episodeSection.style = hiddenStyles;

            greenLines.episodegl.style = "margin-left:100%"
            greenLines.aboutgl.style = "margin-left:100%"
            greenLines.similargl.style = "width:100%"

            episodesBtn.querySelector("p").style.fontWeight="400";
            aboutBtn.querySelector("p").style.fontWeight="400";
            similarBtn.querySelector("p").style.fontWeight="500";

            paragraphs.episodeParagraph.removeAttribute("style");
            paragraphs.aboutParagraph.removeAttribute("style");
            paragraphs.similarParagraph.style ="font-weight: 500; color: white;";
        break;
        default:
            break;
    }
}