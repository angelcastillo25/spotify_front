 // Función para cambiar el color de fondo del botón seleccionado
 
 let btn_todas = document.querySelector('#btn_todas');
 btn_todas.classList.add('button_selected');

 function seleccionarButton(button) {

    document.querySelectorAll('.button_header').forEach(btn => {
        btn.classList.remove('button_selected');
    });
    
    button.classList.add('button_selected');

}