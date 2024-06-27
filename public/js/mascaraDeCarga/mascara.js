$(document).ready(function() {
    mascaraObloqueo();
});

function mascaraObloqueo() {
    $.blockUI({
        //AQUI SOLO CAMBIA LA IMG Y COLOCA EL ORDEN DE TUS CARPETAS PARA QUE FUNCIONE BIEN
        //Nota: Si Tienes Tu Carpeta De Img En Una Carpeta Public Puede Causar Fallas De Que No Agarre La Img Solo Saca La Carpeta Img De La Carpeta Publica Y Listo
        message: ' <img src="../../../img/logocbt3.webp" class="img-fluid" width="300" height="300">',
        css: {
            border: 'none',
            // padding: '15px', 
            backgroundColor: 'rgba(138,221,45,0)',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            // opacity: .5, 
            color: '#FFFFFF '
        }
    });

    setTimeout($.unblockUI, 1000);
    
}
