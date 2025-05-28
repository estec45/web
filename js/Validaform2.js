function valida_envia() {
  if (document.fvalida.nombre.value.trim() === "") {
    alert("TIENES QUE ESCRIBIR TU NOMBRE");
    document.fvalida.nombre.focus();
    return false;
  }

  if (document.fvalida.servicios.value === "Elegir") {
    alert("DEBES SELECCIONAR UN SERVICIO");
    document.fvalida.servicios.focus();
    return false;
  }

  if (document.fvalida.tipo.value === "Elegir") {
    alert("DEBES SELECCIONAR UN TIPO DE CLIENTE");
    document.fvalida.tipo.focus();
    return false;
  }

  if (document.fvalida.fecha.value.trim() === "") {
    alert("DEBES INGRESAR UNA FECHA PARA TU CITA");
    document.fvalida.fecha.focus();
    return false;
  }

  if (document.fvalida.horario.value.trim() === "") {
    alert("DEBES INGRESAR LA HORA DE TU CITA");
    document.fvalida.horario.focus();
    return false;
  }

  if (document.fvalida.telefono.value.trim() === "") {
    alert("DEBES INGRESAR TU TELÉFONO");
    document.fvalida.telefono.focus();
    return false;
  }

  return true; 
}