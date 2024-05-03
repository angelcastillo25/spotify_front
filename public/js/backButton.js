const backBtn = document.getElementById("back_btn")

backBtn.addEventListener('click',goBack)


function goBack(){
    window.history.back();
    location.reload();
}