import { changeIcon } from "./functions.js";

const playBtn = document.getElementById("play_btn");
const saveBtn = document.getElementById("save_btn");

playBtn.addEventListener("click", changeIcon.bind(playBtn, {1:"playbtn.svg", 0:"pausebtn.svg"}));
saveBtn.addEventListener("click", changeIcon.bind(saveBtn, {1:"agregar.svg", 0:"agregado.svg"}));
