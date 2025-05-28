document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("fvalida").addEventListener('submit', valida_envia);
});

function valida_envia(evento){
    evento.preventDefault();
    var nombre = document.getElementById('nombre').value;
    if(nombre.length == 0) {
        alert('No has escrito nada en el nombre');
        return;
    }
    var apellido = document.getElementById('apellido').value;
    if(apellido.length == 0){
        alert('No has escrito nada en el apellido');
        return;
    }
}