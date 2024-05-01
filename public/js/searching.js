const searchInput = document.getElementById("search_input");
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
                <div class="recent_item">
                    <div class="item">
                        <img src="https://storage.googleapis.com/spt-project-bucket/${element.portada}" alt="" class="cover_img">
                        <div class="item_texts">
                            <p>${element.nombre}</p>
                            <p>Álbum • ${element.artistaCancion}</p>
                        </div>
                    </div>
                </div>
                `
                break;
            case 2:
                resultList.innerHTML = `
                <div class="recent_item">
                    <div class="item">
                        <img src="https://storage.googleapis.com/spt-project-bucket/${element.portada}" alt="" class="cover_img">
                        <div class="item_texts">
                            <p>${element.nombre}</p>
                            <p>Canción • ${element.artistaCancion}</p>
                        </div>
                    </div>
                </div>
                `
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