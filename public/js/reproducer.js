let playButton = document.querySelector('#buttonPlay');

function changeImage() {
    let image = document.getElementById('buttonImage');
    let currentSrc = image.src;

    let image1 = 'img/playWhite.png';
    let image2 = 'img/pause.png';
    
    if (currentSrc.endsWith(image1)) {
        image.src = image2;
    } else {
        image.src = image1;
    }
}