function valida_envia() {
    if (document.fvalida.nombre.value.length === 0) {
        alert("TIENES QUE ESCRIBIR TU NOMBRE");
        document.fvalida.nombre.focus();
        return 0; 
    }

    function validarEntero(edad) {
        //intento convertor a un entero
        //si era un entero no le afecta, si no lo era lo intenta convertir
        edad = parseInt(edad);
        //compruevo si es un valor numerico
        if (isNaN(edad)) {
            //entonces (no es numero) devuelvo el valor cadena vacia
            return "";
        } else {
            //En caso contrario(si era un numero) devuelvo el valor 

            return edad;
        }
    }

    edad = document.fvalida.edad.value;
    edad = validarEntero(edad);
    document.fvalida.edad.value = edad;

    if (edad == "") {
        alert("TIENES QUE INTRODUCIR UN NUMERO ENTERO EN LA EDAD.");
        document.fvalida.edad.focus();
        return 0;  
    } else {
        if (edad < 18) {
            alert("DEBE SER MAYOR DE 18 AÑOS");
            document.fvalida.edad.focus();
            return 0;  
        }
    }

    if (document.fvalida.interes.selectedIndex === 0) {
        alert("DEBE SELECCIONAR UN INTERES DEL CONTACTO");
        document.fvalida.interes.focus();
        return 0;  
    }

    alert("MUCHAS GRACIAS POR ENVIAR EL FORMULARIO");
    document.fvalida.submit();
}