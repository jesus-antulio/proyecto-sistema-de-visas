function mensajeWhastapp(){
    var mensaje = $('#mensajeWhatsapp').val();
    var mensajeProcesado = mensaje.replace(/ /g, "%20");
    var telefono = 524443510418;
    var url = "https://api.whatsapp.com/send?phone="+telefono+"&text="+mensajeProcesado;
    window.open(url, '_blank');
}
