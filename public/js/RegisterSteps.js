//Divs de pasos(steps)
const step1 = document.getElementById("step1");
const step2 = document.getElementById("step2");
const step3 = document.getElementById("step3");
const step4 = document.getElementById("step4");

//Botones siguiente
const step1Btn = document.getElementById("step1_button");
const step2Btn = document.getElementById("step2_button");
const step3Btn = document.getElementById("step3_button");

//Barras
const bars = document.getElementById("bars")
const greenBar = document.getElementById("step_bar_green");

//Botones back
const backSection2= document.getElementById("back_section2");
const backSection3= document.getElementById("back_section3");
const backSection4= document.getElementById("back_section4");

//Artistas
const artists = document.getElementsByClassName("artist_item");
const artistSelect = document.getElementById("artist_select");

//Ocultamos step 2 y step 3
//step1.style.display = "none";
step2.style.display = "none";
step3.style.display = "none";
step4.style.display = "none";
bars.style.display = "none";

//Les agregamos la accion a los botones 1 y 2
step1Btn.addEventListener('click',()=> nextStep(step1,step2,2));
step2Btn.addEventListener('click',()=> nextStep(step2,step3,3));
step3Btn.addEventListener('click',()=> nextStep(step3,step4,4));

//Les agregamos la accion a los botones back
backSection2.addEventListener('click',()=> nextStep(step2,step1,1));
backSection3.addEventListener('click',()=> nextStep(step3,step2,2));
backSection4.addEventListener('click',()=> nextStep(step4,step3,3));

//Les agregamos la accion a los artistas

for (const artist of artists) {
    artist.addEventListener('click',(e, artist)=>{ selectArtist(e,artist)
        })
}

//================ FUNCIONES ===================

/*
* Oculta el step actual y muestra el siguiente paso, o en caso del boton back muestra el anterior
*/
function nextStep(currentStep, nextStep, destinationStep){
    currentStep.style.display = "none";
    nextStep.style.display = "flex";
    switch (destinationStep) {
        case 1:
        bars.style.display = "none";
        greenBar.style.width = "0%"
        break;
        case 2:
        bars.style.display = "block";
        greenBar.style.width = "33.33%"
        break;
        case 3:
        greenBar.style.width = "66.66%"
        break;
        case 4:
        greenBar.style.width = "100%"
        break;
        default:
        break;
    }
}

/*
* Selecciona el artista y lo asocia al select
*/
function selectArtist(event, artist){
    let target = event.target;

    if (target !== artist) { //Si hace click sobre la imagen o el parrafo siempre selecciona el padre
        target = target.parentNode;
    }

    let image = target.querySelector('img'); //Seleccionamos la imagen
    let check = target.querySelector('div.artist_checked'); //Seleccionamos el checked

    let artistValue = target.dataset.artist; //Seleccionamos artista
    selectedOption = artistSelect.querySelector(`option[value="${artistValue}"]`); //Seleccionamos la opcion a marcar

    if(check.hidden){
        image.style.width = "95px"
        check.style.display = "flex";
        selectedOption.selected = true;
        check.hidden = false;
    }else{
        image.style.width = "100px"
        check.style.display = "none";
        check.hidden = true;
        selectedOption.selected = false;
    }
    
}