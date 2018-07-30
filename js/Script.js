/*
 Project: HistoriaDominicana
 File: Script
 Created by Hamil on May 5, 2018 - 10:13:27 AM.
 */


$(document).ready(function(){
    console.log("El documento 'Script' de Historia Dominicana está listo.");

    $('[data-toggle="tooltip"]').tooltip();

    var controller = new ScrollMagic.Controller(); //Controlador de Scroll Magic

    $('div.magic').each(function(){
        var scene = new ScrollMagic.Scene({ //Haciendo la escena
            triggerElement: this,
            triggerHook: 0
        }).setVelocity($(this).closest('article'),{opacity: 0}, {duration: 400})//Libreria de animación
        .addTo(controller);//Agregando la escena al controlador
    });
    
    $(document).on('click','ul li a', function(){
        $('ul.menu li').removeClass("active");
        $(this).parent().addClass("active");
    });

    $(document).on('click','div#mostrarNav',function(){
        $('nav#menu').toggleClass('mostrar');
        $(this).toggleClass('cerrar');
    });

    $(document).on('click','button#agregarArticulo',function(){
        $.post('controladores/mainController.php',{metodo: "iniciarSesion"} , function(data){
            $('div#modalLog').html(data);
        });
    });
});
