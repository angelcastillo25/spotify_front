const searchInput = document.getElementById("search_input");
const idUsuario = document.querySelector("html").dataset.idusuario;
let timeoutId;

searchInput.addEventListener('input', searchDelay);

function searchDelay(){
    clearTimeout(timeoutId);

    timeoutId = setTimeout(search,1000);
}

function search(){
    let query = searchInput.value;

    fetch(`/buscar/${query}`)
    .then(response=>response.json())
    .then(data=>{addElements(data)});
}

function addElements(elements){
    let recentTitle = document.getElementById("recent_title");
    let resultList = document.getElementById("result_list");

    recentTitle.innerText = "Resultado de busqueda"
    resultList.innerHTML = "";

    elements.forEach(element=>{
        switch (element.tipoObjeto) {
            case 1:
                resultList.innerHTML = `
                <a class="recent_item" href="/album/${idUsuario}/${element.id}">
                    <div class="item">
                        <img src="https://storage.googleapis.com/spt-project-bucket/${element.portada}" alt="" class="cover_img">
                        <div class="item_texts">
                            <p>${element.nombre}</p>
                            <p>Álbum • ${element.artistaCancion}</p>
                        </div>
                    </div>
                </a>
                `
                break;
            case 2:
                resultList.innerHTML = `
                <div class="recent_item" onclick="changeColor(this, '${element.id}', '${element.nombre}', '${element.artistaCancion}', '${element.portada}', '#617d92')">
                    <div class="item">
                        <img src="https://storage.googleapis.com/spt-project-bucket/${element.portada}" alt="" class="cover_img">
                        <div class="item_texts">
                            <p class="song_title">${element.nombre}</p>
                            <p>Canción • ${element.artistaCancion}</p>
                        </div>
                    </div>
                </div>
                `
                let recentItem = document.getElementById(`item${element.id}`)
                break;
            case 3:
                resultList.innerHTML = `
                <div class="recent_item">
                    <div class="item">
                        <img src="https://storage.googleapis.com/spt-project-bucket/${element.portada}" alt="" class="cover_img rounded_img">
                        <div class="item_texts">
                            <p>${element.nombre}</p>
                            <p>Artista</p>
                        </div>
                    </div>
                </div>
                `
                break;
            default:
                break;
        }
    });
}