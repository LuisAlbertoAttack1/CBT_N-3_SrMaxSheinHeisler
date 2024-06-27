let altura= $('#navbar').offset().top;

$(window).on('scroll',function(){
    if ($(window).scrollTop() > altura) {
        $('#navbar').addClass('menu-fixed');
    }else{
        $('#navbar').removeClass('menu-fixed');
    }
});

/* $(document).ready(() => {
    $('#frm_agregar_usuario').on('submit', (e) => {
        e.preventDefault();
    });
}); */