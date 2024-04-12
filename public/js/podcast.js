import { changeIcon, showListOptions, hideOptionsMenu, slideOptionsMenu, endOptionsMenu} from "./functions.js";

const notificationBtn = document.getElementById("notification_btn");

notificationBtn.addEventListener('click', changeIcon.bind(notificationBtn,{1:"notificationOff.png", 0:"notificationOn.png"}))

//Se inicializan los elementos del menu desplazable

const episodesBtn = document.getElementById("episodes_btn");

episodesBtn.addEventListener('click',()=>changeSection(1));

const episodeSection = document.getElementById("episode_section");

const aboutBtn = document.getElementById("about_btn");

aboutBtn.addEventListener('click',()=>changeSection(2));

const aboutSection = document.getElementById("about_section");

const similarBtn = document.getElementById("similar_btn");
similarBtn.addEventListener('click',()=>changeSection(3));

const similarSection = document.getElementById("similar_section");

initItems();

function initItems(){
    episodesBtn.style.fontWeight = "500"
    episodesBtn.querySelector("div.green_line").style = "width:100%"
    aboutSection.style = "position:fixed; right:-390px; top:360px; opacity:0"
    similarSection.style = "position:fixed; right:-390px; top:360px; opacity:0"
}

function changeSection(elementIndex){

    let hiddenStyles = "position:fixed; right:-390px; top:360px; opacity:0";

    switch (elementIndex) {
        case 1:
            episodeSection.removeAttribute("style");
            aboutSection.style = hiddenStyles;
            similarSection.style = hiddenStyles;
            episodesBtn.querySelector("div.green_line").style = "width:100%"
            aboutBtn.querySelector("div.green_line").style = "margin-right:100%"
            similarBtn.querySelector("div.green_line").style = "margin-right:100%"
            episodesBtn.querySelector("p").style.fontWeight="500";
            aboutBtn.querySelector("p").style.fontWeight="400";
            similarBtn.querySelector("p").style.fontWeight="400";
        break;
        case 2:
            aboutSection.removeAttribute("style");
            episodeSection.style = hiddenStyles;
            similarSection.style = hiddenStyles;
            episodesBtn.querySelector("div.green_line").style = "margin-left:100%"
            aboutBtn.querySelector("div.green_line").style = "width:100%"
            similarBtn.querySelector("div.green_line").style = "margin-right:100%"
            episodesBtn.querySelector("p").style.fontWeight="400";
            aboutBtn.querySelector("p").style.fontWeight="500";
            similarBtn.querySelector("p").style.fontWeight="400";
        break;
        case 3:
            similarSection.removeAttribute("style");
            aboutSection.style = hiddenStyles;
            episodeSection.style = hiddenStyles;
            episodesBtn.querySelector("div.green_line").style = "margin-left:100%"
            aboutBtn.querySelector("div.green_line").style = "margin-left:100%"
            similarBtn.querySelector("div.green_line").style = "width:100%"
            episodesBtn.querySelector("p").style.fontWeight="400";
            aboutBtn.querySelector("p").style.fontWeight="400";
            similarBtn.querySelector("p").style.fontWeight="500";
        break;
        default:
            break;
    }
}