import { changeIcon, showListOptions, hideOptionsMenu, slideOptionsMenu, endOptionsMenu} from "./functions.js";


const notificationBtn = document.getElementById("notification_btn");

notificationBtn.addEventListener('click', changeIcon.bind(notificationBtn,{1:"notificationOff.png", 0:"notificationOn.png"}))

