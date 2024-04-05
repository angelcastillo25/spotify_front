/**
 * En este archivo se encuentran las funciones generales de nuestro sistema, las cuales se utilizan en varias vistas
 * Authors: @dan8a112 
 */


function changeIcon(paths){
    let btn = this;
    let state = parseInt(btn.dataset.state);
    let source = `img/${paths[state]}`
    btn.src = source;
    btn.dataset.state = state === 0 ? 1 : 0; //Si es cero se cambia a 1 sino a cero
}


/**
 * Despliega el menu de opciones del elemento seleccionado
 */
function showListOptions(info,optionsMenu){

    let objectTitle = document.getElementById("object_title");
    let objectAuthor = document.getElementById("object_author");
    let coverMini = document.getElementById("cover_mini");

    objectTitle.innerText = info.name;
    objectAuthor.innerText = `por ${info.author}`;
    coverMini.src = info.cover;
    
    showOptionsMenu(optionsMenu);
}

/**
 * Muestra o oculta el menu de opciones
 */
function showOptionsMenu(optionsMenu){

    let {optionMenu,superBgrnd} = optionsMenu

    optionMenu.style.opacity = "100%";
    optionMenu.style.bottom = "79.08px";
    optionMenu.style.top = "340px";
    superBgrnd.style.opacity = "50%"; 
    superBgrnd.style.top = "0";
}

function hideOptionsMenu(optionsMenu){

    let {optionMenu,superBgrnd} = optionsMenu

    optionMenu.style.opacity = "0%";
    optionMenu.style.bottom = "0";
    optionMenu.style.top = "100%";
    superBgrnd.style.opacity = "0%"
    superBgrnd.style.top = "100%";
}


/**
 * Realiza la animacion de deslizar del menu de opciones
 * @param {} event 
 */
function slideOptionsMenu(event, positionMenu, optionMenu){

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
 * @param {} positionMenu objeto con las posiciones actuales del menu
 */
function endOptionsMenu(positionMenu, optionsMenu){

    let {optionMenu,superBgrnd} = optionsMenu

    let initial = positionMenu.initial;
    let current = positionMenu.current;
    let quarter = positionMenu.initial/2;

     //Se determina una posicion final dependiendo de la posicion actual del menu
    let finalPosition = 
        (current<initial+quarter && current>initial-quarter) ? initial:
        current<initial-quarter ? 0 : null;

    if (finalPosition!=null) {
        optionMenu.style.top = `${finalPosition}px`;
    }else{
        hideOptionsMenu(optionsMenu);
        positionMenu.current=340;
    }
}


export {changeIcon, showListOptions, hideOptionsMenu, slideOptionsMenu, endOptionsMenu}