function agregarCancion(followBtn,idPlaylist, idCancion, idUsuario){

    fetch(`/playlist/addSong/${idPlaylist}/${idCancion}/${idUsuario}`)
    .then(response=>{
        if (response.ok) {
            changeIcon(followBtn,{1:"agregar.svg", 0:"agregado.svg"});
        }else{
            console.log(response)
        }
    })
    .catch(error=>{console.error('Error en la peticion: ',error)});
}

function changeIcon(element,paths){
    let btn = element;
    let state = parseInt(btn.dataset.state);
    let source = `http://127.0.0.1:8000/img/${paths[state]}`
    btn.src = source;
    btn.dataset.state = state === 0 ? 1 : 0; //Si es cero se cambia a 1 sino a cero
}