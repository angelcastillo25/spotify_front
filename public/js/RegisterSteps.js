const step1 = document.getElementById("step1");
const step2 = document.getElementById("step2");
const step3 = document.getElementById("step3");

const step1Btn = document.getElementById("step1_button");
const step2Btn = document.getElementById("step2_button");
const step3Btn = document.getElementById("step3_button");

const bars = document.getElementById("bars")
const greenBar = document.getElementById("step_bar_green");

const backSection2= document.getElementById("back_section2");
const backSection3= document.getElementById("back_section3");

//Ocultamos step 2 y step 3
step2.style.display = "none";
step3.style.display = "none";
bars.style.display = "none";

//Les agregamos la accion a los botones 1 y 2
step1Btn.addEventListener('click',()=> nextStep(step1,step2,2));
step2Btn.addEventListener('click',()=> nextStep(step2,step3,3));

//Les agregamos la accion a los botones back
backSection2.addEventListener('click',()=> nextStep(step2,step1,1));
backSection3.addEventListener('click',()=> nextStep(step3,step2,2));

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
        bars.style.display = "block";
        greenBar.style.width = "66.66%"
        break;
        default:
        break;
    }
}
